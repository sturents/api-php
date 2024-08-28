<?php

namespace SturentsLib\Api;

use Psr\Http\Message\RequestInterface;

class UploadClient extends SturentsClient {

	private string $upload_key;

	public function __construct(int $landlord_id, string $upload_key){
		parent::__construct((string)$landlord_id);
		$this->upload_key = $upload_key;
	}

	protected function authQuery(RequestInterface $request): array{
		$timestamp = time();
		$auth = $this->generateAuth((string)$request->getBody(), (string)$timestamp);

		return [
			'auth' => $auth,
			'timestamp' => $timestamp,
		];
	}

	private function generateAuth(string $json, string $timestamp): string{
		return hash_hmac('sha256', $json.$timestamp, $this->upload_key);
	}
}
