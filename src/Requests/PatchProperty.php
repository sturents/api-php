<?php
namespace SturentsLib\Api\Requests;

/**
 * Update an existing property
 */
class PatchProperty extends SwaggerRequest
{
	const URI = '/api/property';
	const METHOD = 'PATCH';
	const RESPONSE_CLASS = '\SturentsLib\Api\Models\PropertySaved';

	/**
	 * The property ID provided by the initial creation
	 * or a GET /properties request
	 *
	 *
	 * @var string
	 */
	public $property_id;

	protected static $param_names = ['property_id'];


	/**
	 * @param \SturentsLib\Api\Models\Property $property
	 */
	public function setBody(\SturentsLib\Api\Models\Property $property)
	{
		$this->body = json_encode($property);
	}


	public function __construct($property_id)
	{
		$this->property_id = $property_id;
	}
}

