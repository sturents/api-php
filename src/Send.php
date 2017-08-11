<?php
namespace Sturents\Api;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\MessageInterface;

abstract class Send {

	const EX_CODE_NO_RESPONSE = 10;
	const EX_CODE_RESPONSE = 11;
	const EX_CODE_BODY = 12;

	private $landlord_id;
	private $api_key;
	private $body;
	private $auth;

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
	 * Sends properties to StuRents
	 */
	abstract function send();

	/**
	 * @param string $json
	 *
	 * @return Send
	 */
	public function setBody($json){
		$this->body = $json;

		$auth_string = $json.$this->api_key;
		$this->auth = md5($auth_string);

		return $this;
	}

	/**
	 * @param array $data
	 *
	 * @return Send
	 */
	public function setJson(array $data){
		$json = json_encode($data);

		return $this->setBody($json);
	}

	/**
	 * @param string $url
	 * @param string $method
	 *
	 * @return Send
	 * @throws Exception
	 */
	protected function sendInternal($url, $method){
		if (empty($this->body)){
			throw new Exception("You must set a valid request body", self::EX_CODE_BODY);
		}

		try {
			$client = new Client();
			$this->response = $client->request($method, $url, [
				'query' => [
					'landlord' => $this->landlord_id,
					'auth' => $this->auth,
					'version' => Fixtures::VERSION
				],
				'body' => $this->body,
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
		$body = (string) $this->response()->getBody();

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

		return (int) $json->sturents_id;
	}
}
