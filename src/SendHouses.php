<?php
namespace Sturents\Api;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\MessageInterface;

class SendHouses {

	const URI = "https://sturents.com/api/houses";
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
	 * SendHouses constructor.
	 * @param int $landlord_id
	 * @param string $api_key
	 */
	public function __construct($landlord_id, $api_key){
		$this->landlord_id = $landlord_id;
		$this->api_key = $api_key;
	}

	public function setBody($json){
		$this->body = $json;

		$auth_string = $json.$this->api_key;
		$this->auth = md5($auth_string);

		return $this;
	}

	public function setJson(array $data){
		$json = json_encode($data);

		return $this->setBody($json);
	}

	public function send(){
		if (empty($this->body)){
			throw new Exception("You must set a valid request body", self::EX_CODE_BODY);
		}

		try {
			$client = new Client();
			$this->response = $client->request('POST', Fixtures::URI_HOUSES, [
				'query' => [
					'landlord' => $this->landlord_id,
					'auth' => $this->auth,
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

	public function responseJson(){
		$body = $this->responseString();
		$decoded = json_decode($body);

		return $decoded;
	}

	public function responseString(){
		$body = (string) $this->response()->getBody();

		return $body;
	}

	public function response(){
		if (is_null($this->response)){
			throw new Exception("No response has been recorded. Either run the send method or inspect the public 'request_exception' property", self::EX_CODE_NO_RESPONSE);
		}

		return $this->response;
	}
}
