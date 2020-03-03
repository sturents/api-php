<?php

namespace SturentsLib\Api;

use SturentsLib\Api\Requests\SwaggerRequest;

class DisplayClient extends SturentsClient {

	private $display_key;

	/**
	 * FetchHouses constructor.
	 * @param int $landlord_id
	 * @param string $display_key
	 */
	public function __construct(int $landlord_id, string $display_key){
		parent::__construct($landlord_id);
		$this->display_key = $display_key;
	}

	/**
	 * @param SwaggerRequest $request
	 * @return array
	 */
	protected function authQuery(SwaggerRequest $request) :array{
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
	protected function generateAuth(string $timestamp): string{
		return hash_hmac('sha256', $timestamp, $this->display_key);
	}
}
