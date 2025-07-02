<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\AuthError;
use SturentsLib\Api\Models\ContractFull;
use SturentsLib\Api\Models\Error;
use SturentsLib\Api\Models\GetError;

/**
 * Returns contracts for the specified property. Includes the contract_id
 * field which is necessary in order to edit/delete an existing contract.
 */
class GetContracts extends SwaggerRequest
{
	public const METHOD = 'GET';
	public const URI = '/api/contracts';

	/**
	 * The property ID provided by the initial creation
	 * or a GET /properties request
	 *
	 *
	 * @var string
	 */
	public $property_id;
	protected static array $path_params = ['property_id'];


	public function __construct($property_id)
	{
		$this->property_id = $property_id;
	}


	/**
	 * @return ContractFull|AuthError|GetError|Error|list<ContractFull>|list<AuthError>|list<GetError>|list<Error>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => ContractFull::class,
			'401' => AuthError::class,
			'404' => GetError::class,
			'default' => Error::class
		]);
	}
}
