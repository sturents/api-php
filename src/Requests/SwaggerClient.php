<?php
namespace SturentsLib\Api\Requests;

use SturentsLib\Api\Models\SwaggerModel;

interface SwaggerClient {

	/**
	 * @param SwaggerRequest $request
	 * @param string[] $response_models
	 * @return SwaggerModel
	 */
	public function make(SwaggerRequest $request, array $response_models);
}
