<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\SwaggerModel;

/**
 * Update a contract on a property
 */
class PatchContract extends SwaggerRequest
{
	const URI = '/api/contract';
	const METHOD = 'PATCH';

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

	protected static $path_params = ['property_id', 'contract_id'];


	/**
	 * @param \SturentsLib\Api\Models\ContractCreation $contract
	 */
	public function setBody(\SturentsLib\Api\Models\ContractCreation $contract)
	{
		$this->body = json_encode($contract);
	}


	public function __construct($property_id, $contract_id)
	{
		$this->property_id = $property_id;
		$this->contract_id = $contract_id;
	}


	/**
	 * @param SwaggerClient $client
	 * @return SwaggerModel
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => '\\SturentsLib\\Api\\Models\\ContractSaved',
			'400' => '\\SturentsLib\\Api\\Models\\SendDataError',
			'401' => '\\SturentsLib\\Api\\Models\\AuthError',
			'404' => '\\SturentsLib\\Api\\Models\\Error',
			'default' => '\\SturentsLib\\Api\\Models\\Error'
		]);
	}
}
