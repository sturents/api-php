<?php
namespace SturentsLib\Api\Requests;
use SwaggerGen\SwaggerModel;

/**
 * Create a new property
 */
class PutProperty extends SwaggerRequest
{
	const URI = '/api/property';
	const METHOD = 'PUT';

	/**
	 * @param \SturentsLib\Api\Models\PropertyCreation $property
	 */
	public function setBody(\SturentsLib\Api\Models\PropertyCreation $property)
	{
		$this->body = json_encode($property);
	}


	/**
	 * @param SwaggerClient $client
	 * @return SwaggerModel
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => '\\SturentsLib\\Api\\Models\\PropertySaved',
			'400' => '\\SturentsLib\\Api\\Models\\SendDataError',
			'401' => '\\SturentsLib\\Api\\Models\\AuthError',
			'default' => '\\SturentsLib\\Api\\Models\\Error'
		]);
	}
}
