<?php
namespace SturentsLib\Api\Requests;

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
	 * @return \SturentsLib\Api\Models\string[]
	 */
	public function send(SwaggerClient $client)
	{
		return $client->send($this, new \SturentsLib\Api\Models\string());
	}
}

