<?php
namespace SturentsLib\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use JsonMapper;
use Psr\Http\Message\ResponseInterface;
use SturentsLib\Api\Models\SwaggerModel;
use SturentsLib\Api\Requests\SwaggerClient;
use SturentsLib\Api\Requests\SwaggerRequest;

abstract class SturentsClient implements SwaggerClient {
	const VERSION = 2.0;

	const EX_CODE_NO_RESPONSE = 10;
	const EX_CODE_RESPONSE = 11;
	const EX_CODE_BODY = 12;
	const URI_BASE = 'https://sturents.com';

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

	public function __construct($landlord_id){
		$this->landlord_id = $landlord_id;
	}

	/**
	 * @return ClientInterface
	 */
	public function getClient(){
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
	public function setClient(ClientInterface $client){
		$this->client = $client;

		return $this;
	}

	/**
	 * @param SwaggerRequest $request
	 * @param SwaggerModel $response_model
	 * @return SwaggerModel|SwaggerModel[]
	 * @throws SturentsException
	 */
	public function send(SwaggerRequest $request, SwaggerModel $response_model){
		try {
			$query = [
				'landlord' => $this->landlord_id,
				'version' => self::VERSION,
			];
			$query = array_merge($query, $this->authQuery($request));
			$uri = $request->getUri()->withQuery(http_build_query($query));
			$client = $this->getClient();

			$host = $uri->getHost();
			if (empty($host)){
				$uri = $uri->withHost($client->getConfig()['base_uri']);
			}

			$request = $request->withUri($uri);

			$response = $client->send($request);
		}
		catch (ClientException $e) {
			$this->debug_request_exception = $e;
			$output = null;
			if ($e->hasResponse()){
				$output = (string)$e->getResponse()->getBody();
				$output = json_decode($output, true);
			}

			if ($output){
				$msg = is_array($output['error']) ? reset($output['error']) : $output['error'];

				throw new SturentsException($msg);
			}

			throw new SturentsException("The StuRents API could not be reached. The client reported: {$e->getMessage()}", self::EX_CODE_RESPONSE);
		}
		catch (GuzzleException $e) {
			$this->debug_request_exception = $e;
			throw new SturentsException("The StuRents API could not be reached. The connection reported: {$e->getMessage()}", self::EX_CODE_RESPONSE);
		}

		return $this->handleResponse($response, $response_model);
	}

	/**
	 * @param SwaggerRequest $request
	 * @return array
	 */
	abstract protected function authQuery(SwaggerRequest $request);

	/**
	 * @param ResponseInterface $response
	 * @param SwaggerModel $response_model
	 * @return SwaggerModel|Models\SwaggerModel[]
	 * @throws SturentsException
	 */
	protected function handleResponse(ResponseInterface $response, SwaggerModel $response_model){
		$json = (string)$response->getBody();

		$data = json_decode($json);

		if (!$data){
			throw new SturentsException("The returned JSON data could not be processed with error: ".json_last_error_msg());
		}

		try {
			if (!is_array($data)){
				return $this->map($data, $response_model);
			}

			$list = [];
			foreach ($data as $key => $item){
				$list[$key] = $this->map($item, $response_model);
			}

			return $list;
		}
		catch (\JsonMapper_Exception $e) {
			throw new SturentsException("There was an error converting the returned JSON into the correct object format.");
		}
	}

	/**
	 * @param $data
	 * @param SwaggerModel $response_model
	 * @return SwaggerModel
	 * @throws \JsonMapper_Exception
	 */
	private function map($data, SwaggerModel $response_model){
		$mapper = $this->getJsonMapper();
		$model = clone $response_model;

		return $mapper->map($data, $model);
	}

	/**
	 * @return JsonMapper
	 */
	private function getJsonMapper(){
		if (is_null($this->mapper)){
			$this->mapper = new JsonMapper();
			$this->mapper->bStrictObjectTypeChecking = true;
		}

		return $this->mapper;
	}
}
