<?php
namespace SturentsLib\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use JsonMapper;
use SturentsLib\Api\Models\SwaggerModel;
use SturentsLib\Api\Requests\SwaggerRequest;

abstract class SturentsClient {
	const VERSION = 2.0;

	const EX_CODE_NO_RESPONSE = 10;
	const EX_CODE_RESPONSE = 11;
	const EX_CODE_BODY = 12;

	private $landlord_id;
	/**
	 * @var JsonMapper
	 */
	private $mapper;
	/**
	 * @var GuzzleException
	 */
	private $debug_request_exception;

	public function __construct($landlord_id){
		$this->landlord_id = $landlord_id;
	}

	/**
	 * @param SwaggerRequest $request
	 * @return SwaggerModel|SwaggerModel[]
	 * @throws SturentsException
	 */
	public function send(SwaggerRequest $request){
		try {
			$query = [
				'landlord' => $this->landlord_id,
				'version' => self::VERSION,
			];
			$query = array_merge($query, $this->authQuery($request));
			$uri = $request->getUri()->withQuery(http_build_query($query));
			$request = $request->withUri($uri);

			$client = new Client();
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

		return $this->handleResponse($response, $request);
	}

	/**
	 * @param SwaggerRequest $request
	 * @return array
	 */
	abstract protected function authQuery(SwaggerRequest $request);

	/**
	 * @param Response $response
	 * @param SwaggerRequest $request
	 * @return SwaggerModel|Models\SwaggerModel[]
	 * @throws SturentsException
	 * @throws \JsonMapper_Exception
	 */
	protected function handleResponse(Response $response, SwaggerRequest $request){
		$json = (string)$response->getBody();

		$data = json_decode($json);

		if (!$data){
			throw new SturentsException("The returned JSON data could not be processed with error: ".json_last_error_msg());
		}

		$class_name = $request->getResponseClass();
		try {
			if (!is_array($data)){
				return $this->map($data, $class_name);
			}

			$list = [];
			foreach ($data as $key => $item){
				$list[$key] = $this->map($item, $class_name);
			}

			return $list;
		}
		catch (\JsonMapper_Exception $e) {
			throw new SturentsException("There was an error converting the returned JSON into the correct object format.");
		}
	}

	/**
	 * @param $data
	 * @param $class_name
	 * @return SwaggerModel
	 * @throws \JsonMapper_Exception
	 */
	private function map($data, $class_name){
		$mapper = $this->getJsonMapper();
		$class = new $class_name();

		return $mapper->map($data, $class);
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
