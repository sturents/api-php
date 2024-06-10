<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class PropertyOutbound extends Property
{
	/**
	 * a unique reference to the property which will not change
	 *
	 * @var string
	 */
	protected $property_id = '';

	/**
	 * One or more RoomOutbound objects
	 * @var RoomOutbound[]
	 */
	protected $room_details = [];

	/**
	 * One or more Contracts (will not show contracts which have
	 * been subject to a DELETE request and which show as "disabled"
	 * in GET /contracts requests)
	 *
	 * @var ContractWithRooms[]
	 */
	protected $contracts = [];

	/**
	 * One or more Contracts (only those contracts which have
	 * been subject to a DELETE request and which show as "disabled"
	 * in GET /contracts requests)
	 *
	 * @var ContractWithRooms[]
	 */
	protected $contracts_disabled = [];

	/**
	 * @var Media
	 */
	protected $media;


	/**
	 * @return string
	 */
	public function getPropertyId()
	{
		return $this->property_id;
	}


	/**
	 * @param string $property_id
	 *
	 * @return $this
	 */
	public function setPropertyId($property_id)
	{
		$this->property_id = $property_id;

		return $this;
	}


	/**
	 * @return RoomOutbound[]
	 */
	public function getRoomDetails()
	{
		return $this->room_details;
	}


	/**
	 * @param RoomOutbound[] $room_details
	 *
	 * @return $this
	 */
	public function setRoomDetails(array $room_details)
	{
		$this->room_details = $room_details;

		return $this;
	}


	/**
	 * @param RoomOutbound $room_detail
	 *
	 * @return $this
	 */
	public function addRoomDetail(RoomOutbound $room_detail)
	{
		$this->room_details[] = $room_detail;

		return $this;
	}


	/**
	 * @return ContractWithRooms[]
	 */
	public function getContracts()
	{
		return $this->contracts;
	}


	/**
	 * @param ContractWithRooms[] $contracts
	 *
	 * @return $this
	 */
	public function setContracts(array $contracts)
	{
		$this->contracts = $contracts;

		return $this;
	}


	/**
	 * @param ContractWithRooms $contract
	 *
	 * @return $this
	 */
	public function addContract(ContractWithRooms $contract)
	{
		$this->contracts[] = $contract;

		return $this;
	}


	/**
	 * @return ContractWithRooms[]
	 */
	public function getContractsDisabled()
	{
		return $this->contracts_disabled;
	}


	/**
	 * @param ContractWithRooms[] $contracts
	 *
	 * @return $this
	 */
	public function setContractsDisabled(array $contracts)
	{
		$this->contracts_disabled = $contracts;

		return $this;
	}


	/**
	 * @param ContractWithRooms $contract
	 *
	 * @return $this
	 */
	public function addDisabledContract(ContractWithRooms $contract)
	{
		$this->contracts_disabled[] = $contract;

		return $this;
	}


	/**
	 * @return Media
	 */
	public function getMedia()
	{
		return $this->media;
	}


	/**
	 * @param Media $media
	 *
	 * @return $this
	 */
	public function setMedia(Media $media)
	{
		$this->media = $media;

		return $this;
	}
}
