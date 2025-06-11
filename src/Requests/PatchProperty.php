<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\AuthError;
use SturentsLib\Api\Models\Error;
use SturentsLib\Api\Models\Property;
use SturentsLib\Api\Models\PropertySaved;
use SturentsLib\Api\Models\SendDataError;

/**
 * Update an existing property
 */
class PatchProperty extends SwaggerRequest
{
	public const METHOD = 'PATCH';
	public const URI = '/api/property';

	/**
	 * The property ID provided by the initial creation
	 * or a GET /properties request
	 *
	 *
	 * @var string
	 */
	public $property_id;
	protected static array $path_params = ['property_id'];

	/**
	 * @param Property $property
	 *
	 * @throws \JsonException
	 */
	public function setBody(Property $property)
	{
		$this->body = json_encode($property, JSON_THROW_ON_ERROR);
	}


	public function __construct($property_id)
	{
		$this->property_id = $property_id;
	}


	/**
	 * @return PropertySaved|SendDataError|AuthError|Error|list<PropertySaved>|list<SendDataError>|list<AuthError>|list<Error>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => PropertySaved::class,
			'400' => SendDataError::class,
			'401' => AuthError::class,
			'404' => Error::class,
			'default' => Error::class
		]);
	}
}
