<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\AuthError;
use SturentsLib\Api\Models\Error;

/**
 * Remove a room from a property
 */
class DeleteRoom extends SwaggerRequest
{
	public const METHOD = 'DELETE';
	public const URI = '/api/room';

	/**
	 * The property ID provided by the initial creation
	 * or a GET /properties request
	 *
	 *
	 * @var string
	 */
	public $property_id;

	/**
	 * The room ID provided by the initial creation
	 * or a GET /rooms/{property_id} request
	 *
	 *
	 * @var string
	 */
	public $room_id;
	protected static array $path_params = ['property_id', 'room_id'];


	public function __construct($property_id, $room_id)
	{
		$this->property_id = $property_id;
		$this->room_id = $room_id;
	}


	/**
	 * @return AuthError|Error|list<AuthError>|list<Error>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'204' => null,
			'401' => AuthError::class,
			'404' => Error::class,
			'default' => Error::class
		]);
	}
}
