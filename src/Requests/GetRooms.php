<?php
namespace SturentsLib\Api\Requests;

/**
 * Returns rooms for the specified property. Includes the room_id
 * field which is necessary in order to apply pricing specific to
 * a room, or to edit/delete an existing room
 */
class GetRooms extends SwaggerRequest
{
	const URI = '/api/rooms';
	const METHOD = 'GET';
	const RESPONSE_CLASS = '\SturentsLib\Api\Models\RoomOutbound';

	/**
	 * The property ID provided by the initial creation
	 * or a GET /properties request
	 *
	 *
	 * @var string
	 */
	public $property_id;

	protected static $param_names = ['property_id'];

	public $response_is_array = true;


	public function __construct($property_id)
	{
		$this->property_id = $property_id;
	}
}

