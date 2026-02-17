<?php

namespace SturentsLib\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use JsonMapper;
use JsonMapper_Exception;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use SturentsLib\Api\Models\SwaggerModel;
use SturentsLib\Api\Requests\SwaggerClient;
use SturentsLib\Api\Requests\SwaggerRequest;

abstract class SturentsClient implements SwaggerClient {
	public const VERSION = 3.0;

	private const EX_CODE_RESPONSE = 11;
	public const URI_BASE = 'https://sturents.com';

	/**
	 * @var string - for some clients this arrives as an int
	 */
	private string $landlord_id;
	/**
	 * @var ?JsonMapper
	 */
	private $mapper;
	/**
	 * @var GuzzleException
	 */
	private $debug_request_exception;
	private ?ClientInterface $client = null;

	private bool $debug = false;

	public function __construct(string $landlord_id){
		$this->landlord_id = $landlord_id;
	}

	public function messageFromRequest(SwaggerRequest $swagger):RequestInterface{
		return new Request($swagger->getMethod(), $swagger->getUri(), [], $swagger->getBody());
	}

	public function getClient(): ClientInterface{
		if (is_null($this->client)){
			$this->client = new Client([
				'base_uri' => self::URI_BASE,
			]);
		}

		return $this->client;
	}

	public function setClient(ClientInterface $client): self{
		$this->client = $client;

		return $this;
	}

	/**
	 * @template T of SwaggerModel
	 *
	 * @param array<array-key, class-string<T>|null> $response_models
	 * @return T|list<T>
	 * @throws SturentsException
	 */
	public function make(SwaggerRequest $swagger, array $response_models){
		$request = $this->messageFromRequest($swagger);

		try {
			$query = [
				'landlord' => $this->landlord_id,
				'version' => self::VERSION,
			];
			$query = array_merge($query, $this->authQuery($request), $swagger->getQuery());
			$uri = $request->getUri()->withQuery(http_build_query($query));
			$client = $this->getClient();

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

			if (is_array($response_model)) {
				foreach($response_model as $response_model_item) {
					$response_model_item->asError();
				}
			} else {
				$response_model->asError();
			}

			return $response_model;
		}
		catch (GuzzleException $e) {
			$this->debug_request_exception = $e;
			throw new SturentsException("The StuRents API could not be reached. The connection reported: {$e->getMessage()}", self::EX_CODE_RESPONSE);
		}

		return $this->handleResponse($response, $response_models);
	}

	abstract protected function authQuery(RequestInterface $request): array;

	/**
	 * @template T1 of SwaggerModel
	 *
	 * @param array<array-key, class-string<T1>|null> $response_models
	 * @return T1|list<T1>
	 * @throws SturentsException
	 */
	protected function handleResponse(ResponseInterface $response, array $response_models){
		$json = (string)$response->getBody();

		$status = (string)$response->getStatusCode();
		$response_class = $response_models[$status] ?? null;
		if (is_null($response_class)){
			$response_class = $response_models['default'] ?? null;
		}

		if (empty($json)){
			if (!empty($response_class)) {
				return new $response_class();
			}
			/** @var T1 $empty_model */
			$empty_model = new SwaggerModel();
			return $empty_model;
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

			// Decoding from json as an object will mean that this will be a list if not array as above
			// array_map preserves keys but psalm implies it is array so the array_values will show a list
			$list = array_map(function ($item) use ($response_class){
				return $this->map($item, $response_class);
			}, $data);

			return array_values($list);
		}
		catch (JsonMapper_Exception $e) {
			throw new SturentsException('There was an error converting the returned JSON into the correct object format.');
		}
	}

	/**
	 * @template T of SwaggerModel
	 * @param $data
	 * @param class-string<T> $response_class
	 * @return T
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

	public function useDebug(): self{
		$this->debug = true;

		return $this;
	}

	public function getDebugRequestException(): GuzzleException{
		return $this->debug_request_exception;
	}
}
