<?php

namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class Property
{
	/**
	 * "house" or "pbsa"
	 *
	 * @var string
	 */
	private $designation;

	/**
	 * When designation is set to "house" this indicates whether
	 * rooms can be individually let or not
	 *
	 * @var boolean
	 */
	private $rooms_let_individually;

	/**
	 * When designation is set to "pbsa" this describes the total
	 * number of identical rooms (including those currrently let).
	 * If designation is "house" then this should be set to 0
	 *
	 * @var integer
	 */
	private $quantity;

	/**
	 * When designation is set to “pbsa” this describes the number
	 * of identical rooms still available. If designation is "house"
	 * then this should be set to 0
	 *
	 * @var integer
	 */
	private $quantity_available;

	/**
	 * When designation is set to "pbsa" each property record
	 * describes a type of room. This field gives that type a
	 * name e.g. "Deluxe En-suite". If designation is "house"
	 * then this should be left blank.
	 *
	 * @var string
	 */
	private $room_type;

	/**
	 * When designation is set to "pbsa" this indicates number of rooms
	 * in a single cluster. If designation is "house"
	 * then this should be set to 0.
	 *
	 * @var integer
	 */
	private $cluster_size;

	/**
	 * A plain text or HTML description of the property.
	 * Please note HTML will be stripped but the HTML
	 * structure will be used to render line breaks where
	 * necessary. It is recommended this is at least 150 characters.
	 *
	 * @var string
	 */
	private $description;

	/**
	 * Number of bathrooms
	 * @var integer
	 */
	private $bathrooms;

	/**
	 * Floor space of the whole property in square metres
	 *
	 * @var number
	 */
	private $floor_space;

	/**
	 * The unique ID for a bank account where it is intended that
	 * the rent for this property will be paid to. This ID can be
	 * retrived from the /bank-accounts endpoint. Note that this ID
	 * will not contain sensitive information, e.g. account number
	 * or sort code - that information cannot be retrieved
	 *
	 * @var string
	 */
	private $bank_id;

	/**
	 * Zero or more facility names. Allowed names can be found
	 * by making a GET /facilities request
	 *
	 * @var string[]
	 */
	private $facilities;

	/**
	 * @var Address
	 */
	private $address;

	/**
	 * @var Coordinates
	 */
	private $coordinates;

	/**
	 * @var Media
	 */
	private $media;

	/**
	 * @var EnergyPerformance
	 */
	private $energy_performance;

	/**
	 * Zero or more accreditations
	 * @var Accreditation[]
	 */
	private $accreditations;

	/**
	 * where true indicates that the property is not ready
	 * to be made public to students or shown in search results
	 *
	 * @var boolean
	 */
	private $disabled;

	/**
	 * @var Eligibility
	 */
	private $eligibility;


	/**
	 * @return string
	 */
	public function getDesignation()
	{
		return $this->designation;
	}


	/**
	 * @param string $designation
	 *
	 * @return $this
	 */
	public function setDesignation($designation)
	{
		$this->designation = $designation;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getRoomsLetIndividually()
	{
		return $this->rooms_let_individually;
	}


	/**
	 * @param boolean $rooms_let_individually
	 *
	 * @return $this
	 */
	public function setRoomsLetIndividually($rooms_let_individually)
	{
		$this->rooms_let_individually = $rooms_let_individually;

		return $this;
	}


	/**
	 * @return integer
	 */
	public function getQuantity()
	{
		return $this->quantity;
	}


	/**
	 * @param integer $quantity
	 *
	 * @return $this
	 */
	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;

		return $this;
	}


	/**
	 * @return integer
	 */
	public function getQuantityAvailable()
	{
		return $this->quantity_available;
	}


	/**
	 * @param integer $quantity_available
	 *
	 * @return $this
	 */
	public function setQuantityAvailable($quantity_available)
	{
		$this->quantity_available = $quantity_available;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getRoomType()
	{
		return $this->room_type;
	}


	/**
	 * @param string $room_type
	 *
	 * @return $this
	 */
	public function setRoomType($room_type)
	{
		$this->room_type = $room_type;

		return $this;
	}


	/**
	 * @return integer
	 */
	public function getClusterSize()
	{
		return $this->cluster_size;
	}


	/**
	 * @param integer $cluster_size
	 *
	 * @return $this
	 */
	public function setClusterSize($cluster_size)
	{
		$this->cluster_size = $cluster_size;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}


	/**
	 * @param string $description
	 *
	 * @return $this
	 */
	public function setDescription($description)
	{
		$this->description = $description;

		return $this;
	}


	/**
	 * @return integer
	 */
	public function getBathrooms()
	{
		return $this->bathrooms;
	}


	/**
	 * @param integer $bathrooms
	 *
	 * @return $this
	 */
	public function setBathrooms($bathrooms)
	{
		$this->bathrooms = $bathrooms;

		return $this;
	}


	/**
	 * @return number
	 */
	public function getFloorSpace()
	{
		return $this->floor_space;
	}


	/**
	 * @param number $floor_space
	 *
	 * @return $this
	 */
	public function setFloorSpace($floor_space)
	{
		$this->floor_space = $floor_space;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getBankId()
	{
		return $this->bank_id;
	}


	/**
	 * @param string $bank_id
	 *
	 * @return $this
	 */
	public function setBankId($bank_id)
	{
		$this->bank_id = $bank_id;

		return $this;
	}


	/**
	 * @return string[]
	 */
	public function getFacilities()
	{
		return $this->facilities;
	}


	/**
	 * @param string[] $facilities
	 *
	 * @return $this
	 */
	public function setFacilities(array $facilities)
	{
		$this->facilities = $facilities;

		return $this;
	}


	/**
	 * @param string $facilitie
	 *
	 * @return $this
	 */
	public function addFacilitie($facilitie)
	{
		$this->facilities[] = $facilitie;

		return $this;
	}


	/**
	 * @return Address
	 */
	public function getAddress()
	{
		return $this->address;
	}


	/**
	 * @param Address $address
	 *
	 * @return $this
	 */
	public function setAddress(Address $address)
	{
		$this->address = $address;

		return $this;
	}


	/**
	 * @return Coordinates
	 */
	public function getCoordinates()
	{
		return $this->coordinates;
	}


	/**
	 * @param Coordinates $coordinates
	 *
	 * @return $this
	 */
	public function setCoordinates(Coordinates $coordinates)
	{
		$this->coordinates = $coordinates;

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


	/**
	 * @return EnergyPerformance
	 */
	public function getEnergyPerformance()
	{
		return $this->energy_performance;
	}


	/**
	 * @param EnergyPerformance $energy_performance
	 *
	 * @return $this
	 */
	public function setEnergyPerformance(EnergyPerformance $energy_performance)
	{
		$this->energy_performance = $energy_performance;

		return $this;
	}


	/**
	 * @return Accreditation[]
	 */
	public function getAccreditations()
	{
		return $this->accreditations;
	}


	/**
	 * @param Accreditation[] $accreditations
	 *
	 * @return $this
	 */
	public function setAccreditations(array $accreditations)
	{
		$this->accreditations = $accreditations;

		return $this;
	}


	/**
	 * @param Accreditation $accreditation
	 *
	 * @return $this
	 */
	public function addAccreditation(Accreditation $accreditation)
	{
		$this->accreditations[] = $accreditation;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getDisabled()
	{
		return $this->disabled;
	}


	/**
	 * @param boolean $disabled
	 *
	 * @return $this
	 */
	public function setDisabled($disabled)
	{
		$this->disabled = $disabled;

		return $this;
	}


	/**
	 * @return Eligibility
	 */
	public function getEligibility()
	{
		return $this->eligibility;
	}


	/**
	 * @param Eligibility $eligibility
	 *
	 * @return $this
	 */
	public function setEligibility(Eligibility $eligibility)
	{
		$this->eligibility = $eligibility;

		return $this;
	}
}

