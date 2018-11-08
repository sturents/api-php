<?php
namespace SturentsLib\Api\Requests;

/**
 * Returns all property managers in the channel
 */
class GetSummary extends SwaggerRequest
{
	const URI = '/api/summary';
	const METHOD = 'GET';


	/**
	 * @param SwaggerClient $client
	 * @return string[]
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => '\\SturentsLib\\Api\\Models\\PropertyManager',
			'400' => '\\SturentsLib\\Api\\Models\\Error',
			'401' => '\\SturentsLib\\Api\\Models\\AuthError',
			'404' => '\\SturentsLib\\Api\\Models\\GetError',
			'default' => '\\SturentsLib\\Api\\Models\\Error'
		]);
	}
}
