<?php
namespace SturentsLib\Api\Requests;

use SturentsLib\Api\Models\SwaggerModel;

interface SwaggerClient {

	/**
	 * @param SwaggerRequest $request
	 * @param SwaggerModel $response_model
	 * @return SwaggerModel
	 */
	public function send(SwaggerRequest $request, SwaggerModel $response_model);
}
