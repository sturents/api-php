<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\AuthError;
use SturentsLib\Api\Models\Error;
use SturentsLib\Api\Models\GetError;
use SturentsLib\Api\Models\PropertyManager;

/**
 * Returns all property managers in the channel
 */
class GetSummary extends SwaggerRequest
{
	public const METHOD = 'GET';
	public const URI = '/api/summary';

	/**
	 * @return PropertyManager|Error|AuthError|GetError|list<PropertyManager>|list<Error>|list<AuthError>|list<GetError>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => PropertyManager::class,
			'400' => Error::class,
			'401' => AuthError::class,
			'404' => GetError::class,
			'default' => Error::class
		]);
	}
}
