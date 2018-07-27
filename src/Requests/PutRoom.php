<?php
namespace SturentsLib\Api\Requests;

/**
 * Add a room to a property
 */
class PutRoom extends SwaggerRequest
{
	const URI = 'https://sturents.com/api/room';
	const METHOD = 'PUT';
	const RESPONSE_CLASS = '\SturentsLib\Api\Models\RoomSaved';

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
	 * @param \SturentsLib\Api\Models\RoomSaved $room
	 */
	public function setBody(\SturentsLib\Api\Models\RoomSaved $room)
	{
		$this->body = json_encode($room);
	}


	public function __construct($property_id)
	{
		$this->property_id = $property_id;
	}
}

