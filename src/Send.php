<?php
namespace Sturents\Api;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\MessageInterface;
use Sturents\Api\Models\Property;

abstract class Send {

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
	}

	/**
	 * Sends a property to StuRents
	 */
	abstract function send(Property $property);

	/**
	 * @param Property $property
	 * @param string $url
	 * @param string $method
	 * @return Send
	 * @throws Exception
	 */
	protected function sendInternal(Property $property, $url, $method){
		if (empty($this->body)){
			throw new Exception("You must set a valid request body", self::EX_CODE_BODY);
		}

		try {
			$client = new Client();
			$json = $property->asJson();

			$auth = $this->generateAuth($json);

			$this->response = $client->request($method, $url, [
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
				throw new Exception($output['Message']);
			}
			throw new Exception("The StuRents API could not be reached. The client reported: {$e->getMessage()}", self::EX_CODE_RESPONSE);
		}
		catch (GuzzleException $e) {
			$this->request_exception = $e;
			throw new Exception("The StuRents API could not be reached. The connection reported: {$e->getMessage()}", self::EX_CODE_RESPONSE);
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
	 * @throws Exception
	 */
	public function responseString(){
		$body = (string)$this->response()->getBody();

		return $body;
	}

	/**
	 * @return MessageInterface
	 * @throws Exception
	 */
	public function response(){
		if (is_null($this->response)){
			throw new Exception("No response has been recorded. Either run the send method or inspect the public 'request_exception' property", self::EX_CODE_NO_RESPONSE);
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
		return hash_hmac('sha256', (string) $json, (string) $this->api_key);
	}

	private function asJson(Property $property){

	}
}
