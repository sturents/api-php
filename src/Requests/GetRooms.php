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
	public const URI = '/api/rooms';
	public const METHOD = 'GET';

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
	 * @return SwaggerModel|SwaggerModel[]
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => \SturentsLib\Api\Models\RoomOutbound::class,
			'401' => \SturentsLib\Api\Models\AuthError::class,
			'404' => \SturentsLib\Api\Models\GetError::class,
			'default' => \SturentsLib\Api\Models\Error::class
		]);
	}
}
