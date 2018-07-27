<?php
namespace SturentsLib\Api\Requests;

/**
 * Update a room on a property
 */
class PatchRoom extends SwaggerRequest
{
	const URI = '/api/room';
	const METHOD = 'PATCH';

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


	/**
	 * @param SwaggerClient $client
	 * @return \SturentsLib\Api\Models\Room
	 */
	public function send(SwaggerClient $client)
	{
		return $client->send($this, new \SturentsLib\Api\Models\Room());
	}
}

