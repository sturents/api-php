<?php
namespace SturentsLib\Api\Requests;

/**
 * Update a room on a property
 */
class PatchRoom extends SwaggerRequest
{
	const URI = 'https://sturents.com/api/room';
	const METHOD = 'PATCH';
	const RESPONSE_CLASS = '\SturentsLib\Api\Models\Room';

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

	protected static $param_names = ['property_id', 'room_id'];


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
}

