<?php

namespace SturentsLib\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use JsonMapper;
use JsonMapper_Exception;
use SturentsLib\Api\Models\Property;
use SturentsLib\Api\Models\PropertyOutbound;

class FetchFromSturents {

	const EX_CODE_NO_DATA = 10;
	const EX_CODE_JSON = 12;
	const EX_CODE_RESPONSE = 11;
	const EX_CODE_NOT_FOUND = 13;

	/**
	 * Debug vars public for analysis by those integrating the API
	 *
	 * @var GuzzleException
	 */
	public $debug_request_exception;
	/**
	 * @var string
	 */
	public $debug_response_string;
	/**
	 * @var array
	 */
	public $debug_json_errors = [];

	private $landlord_id;
	private $public_key;
	private $uri_base;

	/**
	 * FetchHouses constructor.
	 * @param int $landlord_id
	 * @param string $public_key
	 */
	public function __construct($landlord_id, $public_key){
		$this->landlord_id = $landlord_id;
		$this->public_key = $public_key;

		$this->uri_base = Fixtures::URI;
	}

	/**
	 * @return Property[]
	 * @throws SturentsException
	 */
	public function fetchProperties(){
		$data = $this->makeRequest();

		$property_objects = $data->branches[0]->properties;

		$mapper = $this->getJsonMapper();

		$properties = [];
		foreach ($property_objects as $property_obj){
			try {
				$properties[] = $mapper->map($property_obj, new PropertyOutbound());
			}
			catch (JsonMapper_Exception $e){
				$this->debug_json_errors[] = $e->getMessage();
				continue;
			}
		}

		return $properties;
	}

	/**
	 * @param int $sturents_id
	 *
	 * @return Property
	 * @throws SturentsException
	 */
	public function fetchProperty($sturents_id){
		$data = $this->makeRequest($sturents_id);
		$property_obj = $data->branches[0]->properties[0];

		$mapper = $this->getJsonMapper();

		try {
			$property = $mapper->map($property_obj, new PropertyOutbound());
		}
		catch (JsonMapper_Exception $e){
			throw new SturentsException("Unfortunately something has gone wrong processing data from the API website using our library. Please report this problem to us. The following message may be useful: {$e->getMessage()}");
		}

		return $property;
	}

	/**
	 * @param int $house_id
	 *
	 * @return \stdClass
	 * @throws SturentsException
	 */
	private function makeRequest($house_id = null){
		try {
			$client = new Client();
			$url =  $this->uri_base.Fixtures::PATH_HOUSES.($house_id ? '/'.$house_id : '');
			$response = $client->request(Fixtures::METHOD_GET, $url, [
				'query' => [
					'landlord' => $this->landlord_id,
					'public' => $this->public_key,
					'version' => Fixtures::VERSION,
				],
			]);

			$json = (string) $response->getBody();
		}
		catch (ClientException $e) {
			$this->debug_request_exception = $e;

			$this->exceptionHasResponse($e);
			
			throw new SturentsException('The StuRents API could not be reached.', self::EX_CODE_RESPONSE);
		}
		catch (GuzzleException $e) {
			$this->debug_request_exception = $e;
			throw new SturentsException('The StuRents API could not be reached.', self::EX_CODE_RESPONSE);
		}

		$data = $this->processResponse($json);

		return $data;
	}

	/**
	 * @param ClientException $e
	 * @throws SturentsException
	 */
	private function exceptionHasResponse(ClientException $e){
		if (!$e->hasResponse()){
			return;
		}

		$json = (string)$e->getResponse()->getBody();
		$output = json_decode($json, true);
		if (empty($output['error'])){
			throw new SturentsException("An error response was returned but the content could not be parsed: $json");
		}

		$exception_message = [];
		foreach ($output['error'] as $field => $error_message){
			$exception_message[] = "For field '$field' the API reported: $error_message";
		}
		throw new SturentsException(implode("\n", $exception_message));
	}

	/**
	 * @param string $json
	 * @return \stdClass
	 * @throws SturentsException
	 */
	private function processResponse($json){
		if (empty($json)){
			throw new SturentsException("The request was successful but no data was returned");
		}

		$data = json_decode($json);

		if ($data===null){
			$this->debug_response_string = $data;
			throw new SturentsException("The request was successful but could not be parsed as JSON. The JSON parser reported ".json_last_error_msg(), self::EX_CODE_JSON);
		}

		return $data;
	}

	/**
	 * @param string $uri
	 */
	public function debugChangeUriBase($uri){
		$this->uri_base = $uri;
	}

	/**
	 * @return JsonMapper
	 */
	private function getJsonMapper(){
		$mapper = new JsonMapper();
		$mapper->bExceptionOnMissingData = true;
		$mapper->bStrictObjectTypeChecking = true;
		$mapper->bExceptionOnUndefinedProperty = true;
		$mapper->bStrictNullTypes = false;

		return $mapper;
	}
}
