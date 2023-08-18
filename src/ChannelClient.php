<?php

namespace SturentsLib\Api;

use SturentsLib\Api\Requests\SwaggerRequest;

class ChannelClient extends SturentsClient {

	private $display_key;

	private $channel_id;

	/**
	 * FetchHouses constructor.
	 * @param string $landlord_id
	 * @param string $channel_id
	 * @param string $display_key
	 */
	public function __construct(string $landlord_id, string $channel_id, string $display_key){
		parent::__construct($landlord_id);
		$this->channel_id = $channel_id;
		$this->display_key = $display_key;
	}

	/**
	 * @param SwaggerRequest $request
	 * @return array
	 */
	protected function authQuery(SwaggerRequest $request): array{
		$timestamp = time();
		$auth = $this->generateAuth((string)$timestamp);

		return [
			'auth' => $auth,
			'timestamp' => $timestamp,
			'channel' => $this->channel_id,
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
