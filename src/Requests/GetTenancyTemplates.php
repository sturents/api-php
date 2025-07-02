<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\AuthError;
use SturentsLib\Api\Models\Error;
use SturentsLib\Api\Models\GetError;
use SturentsLib\Api\Models\TenancyTemplate;

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
	 * @return TenancyTemplate|AuthError|GetError|Error|list<TenancyTemplate>|list<AuthError>|list<GetError>|list<Error>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => TenancyTemplate::class,
			'401' => AuthError::class,
			'404' => GetError::class,
			'default' => Error::class
		]);
	}
}
