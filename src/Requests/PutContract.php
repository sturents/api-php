<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\SwaggerModel;

/**
 * Add a contract to a property
 */
class PutContract extends SwaggerRequest
{
	public const URI = '/api/contract';
	public const METHOD = 'PUT';

	/**
	 * The property ID provided by the initial creation
	 * or a GET /properties request
	 *
	 *
	 * @var string
	 */
	public $property_id;

	protected static $path_params = ['property_id'];


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
	 * @return SwaggerModel|SwaggerModel[]
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => \SturentsLib\Api\Models\ContractSaved::class,
			'400' => \SturentsLib\Api\Models\SendDataError::class,
			'401' => \SturentsLib\Api\Models\AuthError::class,
			'404' => \SturentsLib\Api\Models\Error::class,
			'default' => \SturentsLib\Api\Models\Error::class
		]);
	}
}
