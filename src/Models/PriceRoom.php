<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * For creating or updating a price specific to one room, also allows
 * setting the room_id value to a unique room ID from a
 * GET /rooms/{property_id} request
 */
class PriceRoom extends Price
{
	/**
	 * The room_id field from a GET or PUT /rooms request, unique
	 * identifier for the room that this price relates to
	 *
	 * @var string
	 */
	protected $room_id;


	/**
	 * @return string
	 */
	public function getRoomId()
	{
		return $this->room_id;
	}


	/**
	 * @param string $room_id
	 *
	 * @return $this
	 */
	public function setRoomId($room_id)
	{
		$this->room_id = $room_id;

		return $this;
	}
}

