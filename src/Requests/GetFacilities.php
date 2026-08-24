<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\SwaggerModel;

/**
 * Returns a list of all available facilities which can be
 * submitted as strings when creating/updating a property
 */
class GetFacilities extends SwaggerRequest
{
	public const METHOD = 'GET';
	public const URI = '/api/facilities';

	/**
	 * @return SwaggerModel|list<SwaggerModel>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => null
		]);
	}
}
