<?php
namespace SturentsLib\Api\Requests;

/**
 * Returns contracts for the specified property. Includes the contract_id
 * field which is necessary in order to edit/delete an existing contract.
 * Will return disabled Contracts with the "disabled" field set to true
 */
class GetContracts extends SwaggerRequest
{
	const URI = 'https://sturents.com/api/contracts';
	const METHOD = 'GET';
	const RESPONSE_CLASS = '\SturentsLib\Api\Models\ContractFull';

	/**
	 * The property ID provided by the initial creation
	 * or a GET /properties request
	 *
	 *
	 * @var string
	 */
	public $property_id;

	protected static $param_names = ['property_id'];

	public $response_is_array = true;


	public function __construct($property_id)
	{
		$this->property_id = $property_id;
	}
}

