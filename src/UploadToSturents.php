<?php
namespace SturentsLib\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use JsonMapper;
use JsonSerializable;
use SturentsLib\Api\Models\Property;
use SturentsLib\Responses\CreatePropertyResponse;

class UploadToSturents {

	const EX_CODE_NO_RESPONSE = 10;
	const EX_CODE_RESPONSE = 11;
	const EX_CODE_BODY = 12;

	private $landlord_id;
	private $api_key;

	/**
	 * @var GuzzleException
	 */
	public $debug_request_exception;

	/**
	 * SendHouses constructor
	 *
	 * @param int $landlord_id
	 * @param string $api_key
	 */
	public function __construct($landlord_id, $api_key){
		$this->landlord_id = $landlord_id;
		$this->api_key = $api_key;

		$this->uri_base = Fixtures::URI;
	}

	/**
	 * @param Property $property
	 * @return object
	 * @throws SturentsException
	 * @throws \JsonMapper_Exception
	 */
	public function createOrUpdateProperty(Property $property){
		$data = $this->sendInternal($property, Fixtures::PATH_HOUSE, Fixtures::METHOD_POST);

		$mapper = $this->getJsonMapper();

		$response = $mapper->map($data, new CreatePropertyResponse());

		return $response;
	}

	/**
	 * @param Property $property
	 * @return object
	 * @throws SturentsException
	 * @throws \JsonMapper_Exception
	 */
	public function updateProperty(Property $property){
		$data = $this->sendInternal($property, Fixtures::PATH_HOUSE, Fixtures::METHOD_PUT);

		$mapper = $this->getJsonMapper();

		$response = $mapper->map($data, new CreatePropertyResponse());

		return $response;
	}

	/**
	 * @param JsonSerializable $item
	 * @param string $url_path
	 * @param string $method
	 *
	 * @return UploadToSturents
	 *
	 * @throws SturentsException
	 */
	private function sendInternal(JsonSerializable $item, $url_path, $method){
		try {
			$client = new Client();
			$json = json_encode($item);

			$auth = $this->generateAuth($json);

			$response = $client->request($method, $this->uri_base.$url_path, [
				'query' => [
					'landlord' => $this->landlord_id,
					'auth' => $auth,
					'version' => Fixtures::VERSION,
				],
				'body' => $json,
			]);
		}
		catch (ClientException $e) {
			$this->debug_request_exception = $e;
			if ($e->hasResponse()){
				$output = (string)$e->getResponse()->getBody();
				$output = json_decode($output, true);
				$msg = is_array($output['error']) ? reset($output['error']) : $output['error'];

				throw new SturentsException($msg);
			}

			throw new SturentsException("The StuRents API could not be reached. The client reported: {$e->getMessage()}", self::EX_CODE_RESPONSE);
		}
		catch (GuzzleException $e) {
			$this->debug_request_exception = $e;
			throw new SturentsException("The StuRents API could not be reached. The connection reported: {$e->getMessage()}", self::EX_CODE_RESPONSE);
		}

		$json = (string) $response->getBody();

		$data = json_decode($json);

		return $data;
	}

	/**
	 * @param string $json
	 * @return string
	 */
	private function generateAuth($json){
		return hash_hmac('sha256', (string)$json, (string)$this->api_key);
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
		$mapper->bStrictObjectTypeChecking = true;

		return $mapper;
	}
}
