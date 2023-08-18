<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\SwaggerModel;

/**
 * Remove a room from a property
 */
class DeleteRoom extends SwaggerRequest
{
	public const URI = '/api/room';
	public const METHOD = 'DELETE';

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


	public function __construct($property_id, $room_id)
	{
		$this->property_id = $property_id;
		$this->room_id = $room_id;
	}


	/**
	 * @param SwaggerClient $client
	 * @return SwaggerModel|SwaggerModel[]
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'204' => '',
			'401' => \SturentsLib\Api\Models\AuthError::class,
			'404' => \SturentsLib\Api\Models\Error::class,
			'default' => \SturentsLib\Api\Models\Error::class
		]);
	}
}
