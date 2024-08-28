<?php

namespace SturentsLib\Api;

use Psr\Http\Message\RequestInterface;

class ChannelClient extends SturentsClient {

	private string $display_key;

	private string $channel_id;

	public function __construct(string $landlord_id, string $channel_id, string $display_key){
		parent::__construct($landlord_id);
		$this->channel_id = $channel_id;
		$this->display_key = $display_key;
	}

	protected function authQuery(RequestInterface $request): array{
		$timestamp = time();
		$auth = $this->generateAuth((string)$timestamp);

		return [
			'auth' => $auth,
			'timestamp' => $timestamp,
			'channel' => $this->channel_id,
		];
	}

	private function generateAuth(string $timestamp): string{
		return hash_hmac('sha256', $timestamp, $this->display_key);
	}
}
