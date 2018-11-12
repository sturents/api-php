<?php
namespace SturentsLib\Api\Requests;
use SwaggerGen\SwaggerModel;

/**
 * Returns a list of all available facilities which can be
 * submitted as strings when creating/updating a property
 */
class GetFacilities extends SwaggerRequest
{
	const URI = '/api/facilities';
	const METHOD = 'GET';

	/**
	 * @param SwaggerClient $client
	 * @return SwaggerModel
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => ''
		]);
	}
}
