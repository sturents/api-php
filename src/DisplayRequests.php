<?php

namespace SturentsLib\Api;

use SturentsLib\Api\Requests\SwaggerRequest;

class DisplayRequests extends SturentsClient {

	private $display_key;

	/**
	 * FetchHouses constructor.
	 * @param int $landlord_id
	 * @param string $display_key
	 */
	public function __construct($landlord_id, $display_key){
		parent::__construct($landlord_id);
		$this->display_key = $display_key;
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
		return hash_hmac('sha256', (string)$timestamp, (string)$this->display_key);
	}
}
