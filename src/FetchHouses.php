<?php
/**
 * Created by PhpStorm.
 * User: m1ke
 * Date: 10/02/16
 * Time: 17:21
 */

namespace Sturents\Api;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;

class FetchHouses {
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
	private $result;

	/**
	 * FetchHouses constructor.
	 * @param int $landlord_id
	 * @param string $public_key
	 */
	public function __construct($landlord_id, $public_key){
		$this->landlord_id = $landlord_id;
		$this->public_key = $public_key;
	}

	/**
	 * @return $this
	 * @throws Exception
	 */
	public function fetchAll(){
		$response = $this->makeRequest();

		$this->processResponse($response);

		return $this;
	}

	/**
	 * @param int $house_id
	 * @return $this
	 * @throws Exception
	 */
	public function fetchOne($house_id){
		$response = $this->makeRequest($house_id);

		$this->processResponse($response);

		return $this;
	}

	/**
	 * @return array
	 * @throws Exception
	 */
	public function getProperties(){
		$data = $this->getResult();

		return $data['branches'][0]['properties'];
	}

	/**
	 * @param string $reference
	 * @return array
	 * @throws Exception
	 */
	public function getProperty($reference){
		$properties = $this->getProperties();

		foreach ($properties as $property){
			if ((string) $property['reference']===(string) $reference){
				return $property;
			}
		}

		throw new Exception("No property could be found with the reference ($reference) that you specified.", self::EX_CODE_NOT_FOUND);
	}

	/**
	 * @return string yyyy-mm-dd hh:min:sec
	 * @throws Exception
	 */
	public function getDate(){
		$data = $this->getResult();

		return $data['date'];
	}

	/**
	 * @param int $house_id
	 * @return string
	 * @throws Exception
	 */
	protected function makeRequest($house_id = null){
		try {
			$client = new Client();
			$url =  Fixtures::URI_HOUSES.($house_id ? '/'.$house_id : '');
			$response = $client->request('GET', $url, [
				'query' => [
					'landlord' => $this->landlord_id,
					'public' => $this->public_key,
				],
			]);

			return (string) $response->getBody();
		}
		catch (ClientException $e) {
			$this->request_exception = $e;
			if ($e->hasResponse()){
				$output = (string)$e->getResponse()->getBody();
				$output = json_decode($output, true);
				throw new Exception($output['Message']);
			}
			throw new Exception('The StuRents API could not be reached.', self::EX_CODE_RESPONSE);
		}
		catch (GuzzleException $e) {
			$this->request_exception = $e;
			throw new Exception('The StuRents API could not be reached.', self::EX_CODE_RESPONSE);
		}
	}

	/**
	 * @param $response
	 * @throws Exception
	 */
	protected function processResponse($response){
		if (empty($response)){
			throw new Exception("The request was successful but no data was returned");
		}

		$data = json_decode($response);

		if (empty($data)){
			$this->response_string = $data;
			throw new Exception("The request was successful but could not be parsed as JSON. The JSON parser reported ".json_last_error_msg(), self::EX_CODE_JSON);
		}

		$this->result = $data;
	}

	/**
	 * @return mixed
	 * @throws Exception
	 */
	protected function getResult(){
		$data = $this->result;

		if (empty($data)){
			throw new Exception("No data has been downloaded. Either run a fetch method or inspect the public 'request_exception' property", self::EX_CODE_NO_DATA);
		}

		return $data;
	}
}
