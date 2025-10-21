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
	public const METHOD = 'GET';
	public const URI = '/api/rooms';

	/**
	 * The property ID provided by the initial creation
	 * or a GET /properties request
	 *
	 *
	 * @var string
	 */
	public $property_id;
	protected static array $path_params = ['property_id'];


	public function __construct($property_id)
	{
		$this->property_id = $property_id;
	}


	/**
	 * @return \SturentsLib\Api\Models\RoomOutbound|\SturentsLib\Api\Models\AuthError|\SturentsLib\Api\Models\GetError|\SturentsLib\Api\Models\Error|list<\SturentsLib\Api\Models\RoomOutbound>|list<\SturentsLib\Api\Models\AuthError>|list<\SturentsLib\Api\Models\GetError>|list<\SturentsLib\Api\Models\Error>
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
