<?php
namespace SturentsLib\Api\Requests;

/**
 * Add a contract to a property
 */
class PutContract extends SwaggerRequest
{
	const URI = '/api/contract';
	const METHOD = 'PUT';
	const RESPONSE_CLASS = '\SturentsLib\Api\Models\ContractSaved';

	/**
	 * The property ID provided by the initial creation
	 * or a GET /properties request
	 *
	 *
	 * @var string
	 */
	public $property_id;

	protected static $param_names = ['property_id'];


	/**
	 * @param \SturentsLib\Api\Models\ContractCreation $contract
	 */
	public function setBody(\SturentsLib\Api\Models\ContractCreation $contract)
	{
		$this->body = json_encode($contract);
	}


	public function __construct($property_id)
	{
		$this->property_id = $property_id;
	}
}

