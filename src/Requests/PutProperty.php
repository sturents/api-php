<?php
namespace SturentsLib\Api\Requests;

/**
 * Create a new property
 */
class PutProperty extends SwaggerRequest
{
	const URI = 'https://sturents.com/api/property';
	const METHOD = 'PUT';

	/**
	 * @param \SturentsLib\Api\Models\PropertyCreation $property
	 */
	public function setBody(\SturentsLib\Api\Models\PropertyCreation $property)
	{
		$this->body = json_encode($property);
	}
}

