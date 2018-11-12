<?php
namespace SturentsLib\Api\Requests;
use SwaggerGen\SwaggerModel;

/**
 * Update an existing property
 */
class PatchProperty extends SwaggerRequest
{
	const URI = '/api/property';
	const METHOD = 'PATCH';

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
	 * @param \SturentsLib\Api\Models\Property $property
	 */
	public function setBody(\SturentsLib\Api\Models\Property $property)
	{
		$this->body = json_encode($property);
	}


	public function __construct($property_id)
	{
		$this->property_id = $property_id;
	}


	/**
	 * @param SwaggerClient $client
	 * @return SwaggerModel
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => '\\SturentsLib\\Api\\Models\\PropertySaved',
			'400' => '\\SturentsLib\\Api\\Models\\SendDataError',
			'401' => '\\SturentsLib\\Api\\Models\\AuthError',
			'404' => '\\SturentsLib\\Api\\Models\\Error',
			'default' => '\\SturentsLib\\Api\\Models\\Error'
		]);
	}
}
