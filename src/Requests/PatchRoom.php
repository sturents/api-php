<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\AuthError;
use SturentsLib\Api\Models\Error;
use SturentsLib\Api\Models\Room;
use SturentsLib\Api\Models\RoomSaved;
use SturentsLib\Api\Models\SendDataError;

/**
 * Update a room on a property
 */
class PatchRoom extends SwaggerRequest
{
	public const METHOD = 'PATCH';
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

	/**
	 * @param Room $room
	 *
	 * @throws \JsonException
	 */
	public function setBody(Room $room)
	{
		$this->body = json_encode($room, JSON_THROW_ON_ERROR);
	}


	public function __construct($property_id, $room_id)
	{
		$this->property_id = $property_id;
		$this->room_id = $room_id;
	}


	/**
	 * @return RoomSaved|SendDataError|AuthError|Error|list<RoomSaved>|list<SendDataError>|list<AuthError>|list<Error>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => RoomSaved::class,
			'400' => SendDataError::class,
			'401' => AuthError::class,
			'404' => Error::class,
			'default' => Error::class
		]);
	}
}
