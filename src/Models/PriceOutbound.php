<?php

namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * When fetching property details this describes a Price attached
 * to the contract and may also list the name of the Room to which
 * it applies.
 */
class PriceOutbound extends Price
{
	/**
	 * Describes the room for users consuming outbound data
	 *
	 * @var string
	 */
	private $room_name;


	/**
	 * @return string
	 */
	public function getRoomName()
	{
		return $this->room_name;
	}


	/**
	 * @param string $room_name
	 *
	 * @return $this
	 */
	public function setRoomName($room_name)
	{
		$this->room_name = $room_name;

		return $this;
	}
}

