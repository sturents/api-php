<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\SwaggerModel;

/**
 * Create a new property
 */
class PutProperty extends SwaggerRequest
{
	public const METHOD = 'PUT';
	public const URI = '/api/property';

	/**
	 * @param \SturentsLib\Api\Models\PropertyCreation $property
	 */
	public function setBody(\SturentsLib\Api\Models\PropertyCreation $property)
	{
		$this->body = json_encode($property, JSON_THROW_ON_ERROR);
	}


	/**
	 * @return \SturentsLib\Api\Models\PropertySaved|\SturentsLib\Api\Models\SendDataError|\SturentsLib\Api\Models\AuthError|\SturentsLib\Api\Models\Error|list<\SturentsLib\Api\Models\PropertySaved>|list<\SturentsLib\Api\Models\SendDataError>|list<\SturentsLib\Api\Models\AuthError>|list<\SturentsLib\Api\Models\Error>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => \SturentsLib\Api\Models\PropertySaved::class,
			'400' => \SturentsLib\Api\Models\SendDataError::class,
			'401' => \SturentsLib\Api\Models\AuthError::class,
			'default' => \SturentsLib\Api\Models\Error::class
		]);
	}
}
