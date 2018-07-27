<?php
namespace SturentsLib\Api\Requests;

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
	 * @return \SturentsLib\Api\Models\PropertySaved
	 */
	public function send(SwaggerClient $client)
	{
		return $client->send($this, new \SturentsLib\Api\Models\PropertySaved());
	}
}

