<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\SwaggerModel;

/**
 * Update a room on a property
 */
class PatchRoom extends SwaggerRequest
{
	public const URI = '/api//room/{property_id}/{room_id}';
	public const METHOD = 'PATCH';

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
	protected static $path_params = ['property_id', 'room_id'];


	/**
	 * @param \SturentsLib\Api\Models\Room $room
	 */
	public function setBody(\SturentsLib\Api\Models\Room $room)
	{
		$this->body = json_encode($room);
	}


	public function __construct($property_id, $room_id)
	{
		$this->property_id = $property_id;
		$this->room_id = $room_id;
	}


	/**
	 * @param SwaggerClient $client
	 * @return SwaggerModel
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => '\SturentsLib\Api\Models\RoomSaved::class',
			'400' => '\SturentsLib\Api\Models\SendDataError::class',
			'401' => '\SturentsLib\Api\Models\AuthError::class',
			'404' => '\SturentsLib\Api\Models\Error::class',
			'default' => '\SturentsLib\Api\Models\Error::class'
		]);
	}
}
