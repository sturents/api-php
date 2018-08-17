<?php
namespace SturentsLib\Api\Requests;

/**
 * Returns tenancy templates for the authenticated property manager
 * The IDs of these templates will be required to set up Contract
 * entities using a specific tenancy template
 */
class GetTenancyTemplates extends SwaggerRequest
{
	const URI = '/api/tenancy-templates';
	const METHOD = 'GET';

	/**
	 * @param SwaggerClient $client
	 * @return \SturentsLib\Api\Models\TenancyTemplate[]
	 */
	public function send(SwaggerClient $client)
	{
		return $client->send($this, new \SturentsLib\Api\Models\TenancyTemplate());
	}
}

