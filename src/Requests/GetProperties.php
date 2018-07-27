<?php
namespace SturentsLib\Api\Requests;

/**
 * Returns properties for the authenticated property manager
 */
class GetProperties extends SwaggerRequest
{
	const URI = '/api/properties';
	const METHOD = 'GET';
	const RESPONSE_CLASS = '\SturentsLib\Api\Models\ListProperties';

}

