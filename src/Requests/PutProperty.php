<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\AuthError;
use SturentsLib\Api\Models\Error;
use SturentsLib\Api\Models\PropertyCreation;
use SturentsLib\Api\Models\PropertySaved;
use SturentsLib\Api\Models\SendDataError;

/**
 * Create a new property
 */
class PutProperty extends SwaggerRequest
{
	public const METHOD = 'PUT';
	public const URI = '/api/property';

	/**
	 * @param PropertyCreation $property
	 *
	 * @throws \JsonException
	 */
	public function setBody(PropertyCreation $property)
	{
		$this->body = json_encode($property, JSON_THROW_ON_ERROR);
	}


	/**
	 * @return PropertySaved|SendDataError|AuthError|Error|list<PropertySaved>|list<SendDataError>|list<AuthError>|list<Error>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => PropertySaved::class,
			'400' => SendDataError::class,
			'401' => AuthError::class,
			'default' => Error::class
		]);
	}
}
