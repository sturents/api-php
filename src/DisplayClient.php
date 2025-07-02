<?php

namespace SturentsLib\Api;

use Psr\Http\Message\RequestInterface;

class DisplayClient extends SturentsClient {

	private string $display_key;

	public function __construct(int $landlord_id, string $display_key){
		parent::__construct((string)$landlord_id);
		$this->display_key = $display_key;
	}

	protected function authQuery(RequestInterface $request): array{
		$timestamp = time();
		$auth = $this->generateAuth((string)$timestamp);

		return [
			'auth' => $auth,
			'timestamp' => $timestamp,
		];
	}

	private function generateAuth(string $timestamp): string{
		return hash_hmac('sha256', $timestamp, $this->display_key) ?: '';
	}
}
