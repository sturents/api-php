<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\SwaggerModel;

/**
 * Returns all property managers in the channel
 */
class GetSummary extends SwaggerRequest
{
	public const METHOD = 'GET';
	public const URI = '/api/summary';

	/**
	 * @return \SturentsLib\Api\Models\PropertyManager|\SturentsLib\Api\Models\Error|\SturentsLib\Api\Models\AuthError|\SturentsLib\Api\Models\GetError|list<\SturentsLib\Api\Models\PropertyManager>|list<\SturentsLib\Api\Models\Error>|list<\SturentsLib\Api\Models\AuthError>|list<\SturentsLib\Api\Models\GetError>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => \SturentsLib\Api\Models\PropertyManager::class,
			'400' => \SturentsLib\Api\Models\Error::class,
			'401' => \SturentsLib\Api\Models\AuthError::class,
			'404' => \SturentsLib\Api\Models\GetError::class,
			'default' => \SturentsLib\Api\Models\Error::class
		]);
	}
}
