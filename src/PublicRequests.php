<?php

namespace SturentsLib\Api;

use SturentsLib\Api\Requests\SwaggerRequest;

class PublicRequests extends SturentsClient {


	private $public_key;

	/**
	 * FetchHouses constructor.
	 * @param int $landlord_id
	 * @param string $public_key
	 */
	public function __construct($landlord_id, $public_key){
		parent::__construct($landlord_id);
		$this->public_key = $public_key;
	}

	/**
	 * @param SwaggerRequest $request
	 * @return array
	 */
	protected function authQuery(SwaggerRequest $request){
		$timestamp = time();
		$auth = $this->generateAuth($timestamp);

		return [
			'auth' => $auth,
			'timestamp' => $timestamp,
		];
	}

	/**
	 * @param string $timestamp
	 * @return string
	 */
	protected function generateAuth($timestamp){
		return hash_hmac('sha256', (string)$timestamp, (string)$this->public_key);
	}
}
