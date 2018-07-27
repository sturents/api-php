<?php
namespace SturentsLib\Api\Requests;

/**
 * Disables a contract on a property. It will no longer appear
 * in GET /properties requests but will appear in GET /contracts
 * requests with the "disabled" boolean set to true.
 */
class DeleteContract extends SwaggerRequest
{
	const URI = '/api/contract';
	const METHOD = 'DELETE';

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


	public function __construct($property_id, $contract_id)
	{
		$this->property_id = $property_id;
		$this->contract_id = $contract_id;
	}
}

