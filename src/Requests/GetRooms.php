<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\SwaggerModel;

/**
 * Returns rooms for the specified property. Includes the room_id
 * field which is necessary in order to apply pricing specific to
 * a room, or to edit/delete an existing room
 */
class GetRooms extends SwaggerRequest
{
	const URI = '/api/rooms';
	const METHOD = 'GET';

	/**
	 * The property ID provided by the initial creation
	 * or a GET /properties request
	 *
	 *
	 * @var string
	 */
	public $property_id;

	protected static $path_params = ['property_id'];


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
			'200' => '\\SturentsLib\\Api\\Models\\RoomOutbound',
			'401' => '\\SturentsLib\\Api\\Models\\AuthError',
			'404' => '\\SturentsLib\\Api\\Models\\GetError',
			'default' => '\\SturentsLib\\Api\\Models\\Error'
		]);
	}
}
