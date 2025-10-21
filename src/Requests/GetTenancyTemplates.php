<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\SwaggerModel;

/**
 * Returns tenancy templates for the authenticated property manager.
 * The IDs of these templates will be required to set up Contract
 * entities using a specific tenancy template
 */
class GetTenancyTemplates extends SwaggerRequest
{
	public const METHOD = 'GET';
	public const URI = '/api/tenancy-templates';

	/**
	 * @return \SturentsLib\Api\Models\TenancyTemplate|\SturentsLib\Api\Models\AuthError|\SturentsLib\Api\Models\GetError|\SturentsLib\Api\Models\Error|list<\SturentsLib\Api\Models\TenancyTemplate>|list<\SturentsLib\Api\Models\AuthError>|list<\SturentsLib\Api\Models\GetError>|list<\SturentsLib\Api\Models\Error>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => \SturentsLib\Api\Models\TenancyTemplate::class,
			'401' => \SturentsLib\Api\Models\AuthError::class,
			'404' => \SturentsLib\Api\Models\GetError::class,
			'default' => \SturentsLib\Api\Models\Error::class
		]);
	}
}
