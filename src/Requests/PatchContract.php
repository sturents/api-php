<?php
namespace SturentsLib\Api\Requests;

/**
 * Update a contract on a property
 */
class PatchContract extends SwaggerRequest
{
	const URI = 'https://sturents.com/api/contract';
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

	protected static $param_names = ['property_id', 'contract_id'];


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
	 * @return string[]
	 */
	public function send(SwaggerClient $client)
	{
		return $client->send($this, [
			'200' => '\\SturentsLib\\Api\\Models\\ContractSaved',
			'400' => '\\SturentsLib\\Api\\Models\\SendDataError',
			'401' => '\\SturentsLib\\Api\\Models\\SendAuthError',
			'404' => '\\SturentsLib\\Api\\Models\\SendAuthError',
			'default' => '\\SturentsLib\\Api\\Models\\Error'
		]);
	}
}

