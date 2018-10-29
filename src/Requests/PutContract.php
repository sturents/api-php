<?php
namespace SturentsLib\Api\Requests;

/**
 * Add a contract to a property
 */
class PutContract extends SwaggerRequest
{
	const URI = 'https://sturents.com/api/contract';
	const METHOD = 'PUT';

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

