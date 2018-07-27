<?php
namespace SturentsLib\Api;

use SturentsLib\Api\Requests\SwaggerRequest;

class AuthRequests extends SturentsClient {

	private $api_key;

	/**
	 * SendHouses constructor
	 *
	 * @param int $landlord_id
	 * @param string $api_key
	 */
	public function __construct($landlord_id, $api_key){
		parent::__construct($landlord_id);
		$this->api_key = $api_key;
	}

	/**
	 * @param SwaggerRequest $request
	 * @return array
	 */
	protected function authQuery(SwaggerRequest $request){
		$timestamp = time();
		$auth = $this->generateAuth($request->getBody(), $timestamp);

		return [
			'auth' => $auth,
			'timestamp' => $timestamp,
		];
	}

	/**
	 * @param string $json
	 * @param string $timestamp
	 * @return string
	 */
	protected function generateAuth($json, $timestamp){
		return hash_hmac('sha256', (string)$json.(string)$timestamp, (string)$this->api_key);
	}
}
