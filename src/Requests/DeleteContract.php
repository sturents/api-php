<?php
namespace SturentsLib\Api\Requests;

/**
 * Deletes a contract on a property. It will no longer appear
 * in GET /properties or GET /contracts requests
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

	protected static $path_params = ['property_id', 'contract_id'];


	public function __construct($property_id, $contract_id)
	{
		$this->property_id = $property_id;
		$this->contract_id = $contract_id;
	}


	/**
	 * @param SwaggerClient $client
	 * @return string[]
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'204' => '',
			'401' => '\\SturentsLib\\Api\\Models\\AuthError',
			'404' => '\\SturentsLib\\Api\\Models\\Error',
			'default' => '\\SturentsLib\\Api\\Models\\Error'
		]);
	}
}

