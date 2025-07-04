<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\AuthError;
use SturentsLib\Api\Models\Error;

/**
 * Deletes a contract on a property. It will no longer appear
 * in GET /properties or GET /contracts requests
 */
class DeleteContract extends SwaggerRequest
{
	public const METHOD = 'DELETE';
	public const URI = '/api/contract';

	/**
	 * The property ID provided by the initial creation
	 * or a GET /properties request
	 *
	 *
	 * @var string
	 */
	public $property_id;

	/**
	 * The contract ID provided by the initial creation
	 * or a GET /contracts/{property_id} request
	 *
	 *
	 * @var string
	 */
	public $contract_id;
	protected static array $path_params = ['property_id', 'contract_id'];


	public function __construct($property_id, $contract_id)
	{
		$this->property_id = $property_id;
		$this->contract_id = $contract_id;
	}


	/**
	 * @return AuthError|Error|list<AuthError>|list<Error>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'204' => null,
			'401' => AuthError::class,
			'404' => Error::class,
			'default' => Error::class
		]);
	}
}
