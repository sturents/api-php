<?php
namespace SturentsLib\Api\Requests;

/**
 * Returns a list of all available facilities which can be
 * submitted as strings when creating/updating a property
 */
class GetFacilities extends SwaggerRequest
{
	const URI = 'https://sturents.com/api/facilities';
	const METHOD = 'GET';
	const RESPONSE_CLASS = '\SturentsLib\Api\Models\string';

	public $response_is_array = true;


}

