<?php
namespace SturentsLib\Api;

use SturentsLib\Api\Requests\SwaggerRequest;

class UploadClient extends SturentsClient {

	private $upload_key;

	/**
	 * SendHouses constructor
	 *
	 * @param int $landlord_id
	 * @param string $upload_key
	 */
	public function __construct(int $landlord_id, string $upload_key){
		parent::__construct($landlord_id);
		$this->upload_key = $upload_key;
	}

	/**
	 * @param SwaggerRequest $request
	 * @return array
	 */
	protected function authQuery(SwaggerRequest $request) :array{
		$timestamp = time();
		$auth = $this->generateAuth($request->getBody()->getContents(), $timestamp);

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
	protected function generateAuth(string $json, string $timestamp): string{
		return hash_hmac('sha256', $json.$timestamp, $this->upload_key);
	}
}
