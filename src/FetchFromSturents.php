<?php

namespace Sturents\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use JsonMapper;
use JsonMapper_Exception;
use Sturents\Api\Models\Property;
use Sturents\Api\Models\PropertyOutbound;

class FetchFromSturents {

	const EX_CODE_NO_DATA = 10;
	const EX_CODE_JSON = 12;
	const EX_CODE_RESPONSE = 11;
	const EX_CODE_NOT_FOUND = 13;

	/**
	 * @var GuzzleException
	 */
	public $request_exception;
	public $response_string;

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
	public function fetchAll(){
		$json = $this->makeRequest();

		$data = $this->processResponse($json);

		$mapper = new JsonMapper();
		$mapper->bExceptionOnMissingData = true;
		$mapper->bStrictObjectTypeChecking = true;
		$mapper->bExceptionOnUndefinedProperty = true;

		try {
			$property = $mapper->map($data, new Property());
		}
		catch (JsonMapper_Exception $e){
			throw new SturentsException('Unfortunately one of your fields has short circuited our JSON parser. Your JSON was formatted correctly but likely a field expecting a scalar value (string, integer) received an object. We don\'t have details of the field name, but check your JSON against our spec or contact us for an assesment of your request.');
		}

		return $property;
	}

	/**
	 * @param int $house_id
	 *
	 * @return Property
	 * @throws SturentsException
	 */
	public function fetchOne($house_id){
		$json = $this->makeRequest($house_id);

		$data = $this->processResponse($json);
		$property_obj = $data->branches[0]->properties[0];

		$mapper = new JsonMapper();
		$mapper->bExceptionOnMissingData = true;
		$mapper->bStrictObjectTypeChecking = true;
		$mapper->bExceptionOnUndefinedProperty = true;
		$mapper->bStrictNullTypes = false;

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
	 * @return string
	 * @throws SturentsException
	 */
	protected function makeRequest($house_id = null){
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

			return (string) $response->getBody();
		}
		catch (ClientException $e) {
			$this->request_exception = $e;

			$this->exceptionHasResponse($e);
			
			throw new SturentsException('The StuRents API could not be reached.', self::EX_CODE_RESPONSE);
		}
		catch (GuzzleException $e) {
			$this->request_exception = $e;
			throw new SturentsException('The StuRents API could not be reached.', self::EX_CODE_RESPONSE);
		}
	}

	/**
	 * @param ClientException $e
	 * @throws SturentsException
	 */
	private function exceptionHasResponse(ClientException $e){
		if ($e->hasResponse()){
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
	}

	/**
	 * @param string $json
	 * @return \stdClass
	 * @throws SturentsException
	 */
	protected function processResponse($json){
		if (empty($json)){
			throw new SturentsException("The request was successful but no data was returned");
		}

		$data = json_decode($json);

		if ($data===false){
			$this->response_string = $data;
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
}
