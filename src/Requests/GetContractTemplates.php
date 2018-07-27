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

	/**
	 * @param SwaggerClient $client
	 * @return \SturentsLib\Api\Models\ContractTemplate[]
	 */
	public function send(SwaggerClient $client)
	{
		return $client->send($this, new \SturentsLib\Api\Models\ContractTemplate());
	}
}

