<?php
namespace SturentsLib\Api\Requests;

/**
 * Create a new property
 */
class PutProperty extends SwaggerRequest
{
	const URI = '/api/property';
	const METHOD = 'PUT';
	const RESPONSE_CLASS = '\SturentsLib\Api\Models\PropertySaved';

	/**
	 * @param \SturentsLib\Api\Models\PropertyCreation $property
	 */
	public function setBody(\SturentsLib\Api\Models\PropertyCreation $property)
	{
		$this->body = json_encode($property);
	}
}

