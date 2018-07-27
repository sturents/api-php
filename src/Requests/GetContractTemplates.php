<?php
namespace SturentsLib\Api\Requests;

/**
 * Returns contract templates for the authenticated property manager
 * The IDs of these templates will be required to set up Contract
 * entities using a specific contract template
 */
class GetContractTemplates extends SwaggerRequest
{
	const URI = '/api/contract-templates';
	const METHOD = 'GET';
	const RESPONSE_CLASS = '\SturentsLib\Api\Models\ContractTemplate';

	public $response_is_array = true;


}

