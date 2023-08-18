<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\SwaggerModel;

/**
 * Create a new property
 */
class PutProperty extends SwaggerRequest
{
	public const URI = '/api/property';
	public const METHOD = 'PUT';

	/**
	 * @param \SturentsLib\Api\Models\PropertyCreation $property
	 */
	public function setBody(\SturentsLib\Api\Models\PropertyCreation $property)
	{
		$this->body = json_encode($property);
	}


	/**
	 * @param SwaggerClient $client
	 * @return SwaggerModel|SwaggerModel[]
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
