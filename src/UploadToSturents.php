<?php
namespace Sturents\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use JsonSerializable;
use Psr\Http\Message\MessageInterface;
use Sturents\Api\Models\Property;

class UploadToSturents {

	const EX_CODE_NO_RESPONSE = 10;
	const EX_CODE_RESPONSE = 11;
	const EX_CODE_BODY = 12;

	private $landlord_id;
	private $api_key;

	/**
	 * @var GuzzleException
	 */
	public $request_exception;
	/**
	 * @var MessageInterface
	 */
	private $response;

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

	public function createOrUpdateProperty(Property $property){
		$this->sendInternal($property, Fixtures::PATH_HOUSE, Fixtures::METHOD_POST);
	}

	public function updateProperty(Property $property){
		$this->sendInternal($property, Fixtures::PATH_HOUSE, Fixtures::METHOD_PUT);
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
	protected function sendInternal(JsonSerializable $item, $url_path, $method){
		try {
			$client = new Client();
			$json = json_encode($item);

			$auth = $this->generateAuth($json);

			$this->response = $client->request($method, $this->uri_base.$url_path, [
				'query' => [
					'landlord' => $this->landlord_id,
					'auth' => $auth,
					'version' => Fixtures::VERSION,
				],
				'body' => $json,
			]);

			return $this;
		}
		catch (ClientException $e) {
			$this->request_exception = $e;
			if ($e->hasResponse()){
				$output = (string)$e->getResponse()->getBody();
				$output = json_decode($output, true);
				throw new SturentsException($output['Message']);
			}
			throw new SturentsException("The StuRents API could not be reached. The client reported: {$e->getMessage()}", self::EX_CODE_RESPONSE);
		}
		catch (GuzzleException $e) {
			$this->request_exception = $e;
			throw new SturentsException("The StuRents API could not be reached. The connection reported: {$e->getMessage()}", self::EX_CODE_RESPONSE);
		}
	}

	/**
	 * @return \stdClass
	 */
	public function responseJson(){
		$body = $this->responseString();
		$decoded = json_decode($body);

		return $decoded;
	}

	/**
	 * @return string
	 * @throws SturentsException
	 */
	public function responseString(){
		$body = (string)$this->response()->getBody();

		return $body;
	}

	/**
	 * @return MessageInterface
	 * @throws SturentsException
	 */
	public function response(){
		if (is_null($this->response)){
			throw new SturentsException("No response has been recorded. Either run the send method or inspect the public 'request_exception' property", self::EX_CODE_NO_RESPONSE);
		}

		return $this->response;
	}

	/**
	 * @return bool
	 */
	public function isSuccess(){
		$json = $this->responseJson();

		return !empty($json->success);
	}

	/**
	 * @return array
	 */
	public function responseMessages(){
		$json = $this->responseJson();

		return $json->messages ?: [];
	}

	/**
	 * @return string
	 */
	public function responseErrorFirst(){
		$json = $this->responseJson();

		return reset($json->error) ?: '';
	}

	/**
	 * @return array
	 */
	public function responseErrors(){
		$json = $this->responseJson();

		return $json->error ?: [];
	}

	/**
	 * @return int
	 */
	public function responseAffectedProperty(){
		$json = $this->responseJson();

		return (int)$json->sturents_id;
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
}
