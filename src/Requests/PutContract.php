<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\AuthError;
use SturentsLib\Api\Models\ContractCreation;
use SturentsLib\Api\Models\ContractSaved;
use SturentsLib\Api\Models\Error;
use SturentsLib\Api\Models\SendDataError;

/**
 * Add a contract to a property
 */
class PutContract extends SwaggerRequest
{
	public const METHOD = 'PUT';
	public const URI = '/api/contract';

	/**
	 * The property ID provided by the initial creation
	 * or a GET /properties request
	 *
	 *
	 * @var string
	 */
	public $property_id;
	protected static array $path_params = ['property_id'];

	/**
	 * @param ContractCreation $contract
	 *
	 * @throws \JsonException
	 */
	public function setBody(ContractCreation $contract)
	{
		$this->body = json_encode($contract, JSON_THROW_ON_ERROR);
	}


	public function __construct($property_id)
	{
		$this->property_id = $property_id;
	}


	/**
	 * @return ContractSaved|SendDataError|AuthError|Error|list<ContractSaved>|list<SendDataError>|list<AuthError>|list<Error>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => ContractSaved::class,
			'400' => SendDataError::class,
			'401' => AuthError::class,
			'404' => Error::class,
			'default' => Error::class
		]);
	}
}
