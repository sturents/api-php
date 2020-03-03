<?php

namespace SturentsLib\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use JsonMapper;
use JsonMapper_Exception;
use Psr\Http\Message\ResponseInterface;
use SturentsLib\Api\Models\SwaggerModel;
use SturentsLib\Api\Requests\SwaggerClient;
use SturentsLib\Api\Requests\SwaggerRequest;

abstract class SturentsClient implements SwaggerClient {
	public const VERSION = 2.0;

	private const EX_CODE_RESPONSE = 11;
	public const URI_BASE = 'https://sturents.com';

	/**
	 * @var string - for some clients this arrives as an int
	 */
	private $landlord_id;
	/**
	 * @var JsonMapper
	 */
	private $mapper;
	/**
	 * @var GuzzleException
	 */
	private $debug_request_exception;
	/**
	 * @var ClientInterface
	 */
	private $client;

	/**
	 * @var bool
	 */
	private $debug = false;

	public function __construct(string $landlord_id){
		$this->landlord_id = $landlord_id;
	}

	/**
	 * @return ClientInterface
	 */
	public function getClient(): ClientInterface{
		if (is_null($this->client)){
			$this->client = new Client([
				'base_uri' => self::URI_BASE,
			]);
		}

		return $this->client;
	}

	/**
	 * @param ClientInterface $client
	 * @return $this
	 */
	public function setClient(ClientInterface $client): self{
		$this->client = $client;

		return $this;
	}

	/**
	 * @param SwaggerRequest $request
	 * @param string[] $response_models
	 * @return SwaggerModel|Models\SwaggerModel[]
	 * @throws SturentsException
	 */
	public function make(SwaggerRequest $request, array $response_models){
		try {
			$query = [
				'landlord' => $this->landlord_id,
				'version' => self::VERSION,
			];
			$query = array_merge($query, $this->authQuery($request), $request->getQuery());
			$uri = $request->getUri()->withQuery(http_build_query($query));
			$client = $this->getClient();

			$host = $uri->getHost();
			if (empty($host)){
				$uri = $uri->withHost($client->getConfig()['base_uri']);
			}

			$request = $request->withUri($uri);
			$this->debug("Requesting URL $uri");

			$response = $client->send($request);
		}
		catch (ClientException $e) {
			$this->debug_request_exception = $e;
			if (!$e->hasResponse()){
				throw new SturentsException("The StuRents API could not be reached. The client reported: {$e->getMessage()}", self::EX_CODE_RESPONSE);
			}

			$response = $e->getResponse();
			$response_model = $this->handleResponse($response, $response_models);

			$response_model->asError();

			return $response_model;
		}
		catch (GuzzleException $e) {
			$this->debug_request_exception = $e;
			throw new SturentsException("The StuRents API could not be reached. The connection reported: {$e->getMessage()}", self::EX_CODE_RESPONSE);
		}

		return $this->handleResponse($response, $response_models);
	}

	/**
	 * @param SwaggerRequest $request
	 * @return array
	 */
	abstract protected function authQuery(SwaggerRequest $request): array;

	/**
	 * @param ResponseInterface $response
	 * @param array $response_models
	 * @return SwaggerModel|Models\SwaggerModel[]
	 * @throws SturentsException
	 */
	protected function handleResponse(ResponseInterface $response, array $response_models){

		$json = (string)$response->getBody();

		$status = (string)$response->getStatusCode();
		$response_class = $response_models[$status];
		if (is_null($response_class)){
			$response_class = $response_models['default'];
		}

		if (empty($json) && empty($response_class)){
			return new SwaggerModel();
		}

		if (empty($response_class)){
			throw new SturentsException("The response type received ($status) did not have a handler.");
		}

		$data = json_decode($json, false);
		if (!$data){
			$this->debug($json);
			throw new SturentsException('The returned JSON data could not be processed with error: '.json_last_error_msg());
		}

		try {
			if (!is_array($data)){
				return $this->map($data, $response_class);
			}

			$list = [];
			foreach ($data as $key => $item){
				$list[$key] = $this->map($item, $response_class);
			}

			return $list;
		}
		catch (JsonMapper_Exception $e) {
			throw new SturentsException('There was an error converting the returned JSON into the correct object format.');
		}
	}

	/**
	 * @param $data
	 * @param string $response_class
	 * @return SwaggerModel
	 * @throws JsonMapper_Exception
	 */
	private function map($data, string $response_class): SwaggerModel{
		if (empty($response_class)){
			return $data;
		}

		$mapper = $this->getJsonMapper();
		$model = new $response_class;

		return $mapper->map($data, $model);
	}

	/**
	 * @return JsonMapper
	 */
	private function getJsonMapper(): JsonMapper{
		if (is_null($this->mapper)){
			$this->mapper = new JsonMapper();
			$this->mapper->bStrictObjectTypeChecking = true;
		}

		return $this->mapper;
	}

	private function debug(string $message): void{
		if (!$this->debug){
			return;
		}

		echo $message;
	}

	/**
	 * @return self
	 */
	public function useDebug(): self{
		$this->debug = true;

		return $this;
	}

	/**
	 * @return GuzzleException
	 */
	public function getDebugRequestException(): GuzzleException{
		return $this->debug_request_exception;
	}
}
