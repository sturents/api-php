<?php
namespace SturentsLib\Api\Requests;

/**
 * Returns contracts for the specified property. Includes the contract_id
 * field which is necessary in order to edit/delete an existing contract.
 * Will return disabled Contracts with the "disabled" field set to true
 */
class GetContracts extends SwaggerRequest
{
	const URI = '/api/contracts';
	const METHOD = 'GET';

	/**
	 * The property ID provided by the initial creation
	 * or a GET /properties request
	 *
	 *
	 * @var string
	 */
	public $property_id;

	protected static $param_names = ['property_id'];


	public function __construct($property_id)
	{
		$this->property_id = $property_id;
	}


	/**
	 * @param SwaggerClient $client
	 * @return \SturentsLib\Api\Models\ContractFull[]
	 */
	public function send(SwaggerClient $client)
	{
		return $client->send($this, new \SturentsLib\Api\Models\ContractFull());
	}
}

