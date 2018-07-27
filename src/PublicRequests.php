<?php

namespace SturentsLib\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use JsonMapper;
use JsonMapper_Exception;
use SturentsLib\Api\Models\Property;
use SturentsLib\Api\Models\PropertyOutbound;
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
		return [
			'public' => $this->public_key,
		];
	}

}
