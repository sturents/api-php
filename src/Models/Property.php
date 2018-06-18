<?php

namespace Sturents\Api\Models;

use Sturents\Api\Model;

class Property extends Model {
	/**
	 * @var string
	 * @required
	 */
	private $reference;
	/**
	 * @var string
	 * @required
	 */
	private $designation;
	/**
	 * @var int
	 * @required
	 */
	private $beds_available;
	/**
	 * @var int
	 * @required
	 */
	private $beds_total;
	/**
	 * @var bool
	 * @required
	 */
	private $rooms_let_individually = false;
	/**
	 * @var int
	 */
	private $quantity;
	/**
	 * @var int
	 */
	private $quantity_available;
	/**
	 * @var string
	 */
	private $room_type;
	/**
	 * @var string
	 */
	private $property_type = 'Residential';
	/**
	 * @var string
	 * @required
	 */
	private $description;
	/**
	 * @var int
	 */
	private $bathrooms;
	/**
	 * @var float
	 * @required
	 */
	private $floor_space;
	/**
	 * @var string[]
	 * @required
	 */
	private $facilities;
	/**
	 * @var Address
	 * @required
	 */
	private $address;
	/**
	 * @var Coordinates
	 * @required
	 */
	private $coordinates;
	/**
	 * @var Contract[]
	 * @required
	 */
	private $contracts;
	/**
	 * @var Media
	 * @required
	 */
	private $media;
	/**
	 * @var EnergyPerformance
	 * @required
	 */
	private $energy_performance;
	/**
	 * @var Accreditation[]
	 * @required
	 */
	private $accreditations;
	/**
	 * @var bool
	 */
	private $disabled = false;
	/**
	 * @var Eligibility
	 * @required
	 */
	private $eligibility;

	/**
	 * @return Eligibility
	 */
	public function getEligibility(){
		return $this->eligibility;
	}

	/**
	 * @param Eligibility $eligibility
	 *
	 * @return Property
	 */
	public function setEligibility(Eligibility $eligibility){
		$this->eligibility = $eligibility;

		return $this;
	}

	/**
	 * @return Accreditation[]
	 */
	public function getAccreditations(){
		return $this->accreditations;
	}

	/**
	 * @param Accreditation[] $accreditations
	 *
	 * @return Property
	 * @internal
	 */
	public function setAccreditations(array $accreditations){
		$this->accreditations = $accreditations;

		return $this;
	}

	/**
	 * @param Accreditation $accreditation
	 *
	 * @return Property
	 */
	public function addAccreditation(Accreditation $accreditation){
		$this->accreditations[] = $accreditation;

		return $this;
	}

	/**
	 * @return EnergyPerformance
	 */
	public function getEnergyPerformance(){
		return $this->energy_performance;
	}

	/**
	 * @param EnergyPerformance $energy_performance
	 *
	 * @return Property
	 */
	public function setEnergyPerformance(EnergyPerformance $energy_performance){
		$this->energy_performance = $energy_performance;

		return $this;
	}

	/**
	 * @return Media
	 */
	public function getMedia(){
		return $this->media;
	}

	/**
	 * @param Media $media
	 *
	 * @return Property
	 */
	public function setMedia(Media $media){
		$this->media = $media;

		return $this;
	}

	/**
	 * @return Contract[]
	 */
	public function getContracts(){
		return $this->contracts;
	}

	/**
	 * @param Contract[] $contracts
	 *
	 * @return Property
	 * @internal
	 */
	public function setContracts(array $contracts){
		$this->contracts = $contracts;

		return $this;
	}

	/**
	 * @param Contract $contract
	 *
	 * @return Property
	 */
	public function addContract(Contract $contract){
		$this->contracts[] = $contract;

		return $this;
	}

	/**
	 * @return Coordinates
	 */
	public function getCoordinates(){
		return $this->coordinates;
	}

	/**
	 * @param Coordinates $coordinates
	 *
	 * @return Property
	 */
	public function setCoordinates(Coordinates $coordinates){
		$this->coordinates = $coordinates;

		return $this;
	}

	/**
	 * @return Address
	 */
	public function getAddress(){
		return $this->address;
	}

	/**
	 * @param Address $address
	 *
	 * @return Property
	 */
	public function setAddress(Address $address){
		$this->address = $address;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getReference(){
		return $this->reference;
	}

	/**
	 * @param string $reference
	 * @return Property
	 */
	public function setReference($reference){
		$this->reference = $reference;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getDesignation(){
		return $this->designation;
	}

	/**
	 * @param string $designation
	 * @return Property
	 */
	public function setDesignation($designation){
		$this->designation = $designation;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getBedsAvailable(){
		return $this->beds_available;
	}

	/**
	 * @param int $beds_available
	 * @return Property
	 */
	public function setBedsAvailable($beds_available){
		$this->beds_available = $beds_available;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getBedsTotal(){
		return $this->beds_total;
	}

	/**
	 * @param int $beds_total
	 * @return Property
	 */
	public function setBedsTotal($beds_total){
		$this->beds_total = $beds_total;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isRoomsLetIndividually(){
		return $this->rooms_let_individually;
	}

	/**
	 * @param boolean $rooms_let_individually
	 * @return Property
	 */
	public function setRoomsLetIndividually($rooms_let_individually){
		$this->rooms_let_individually = $rooms_let_individually;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getQuantity(){
		return $this->quantity;
	}

	/**
	 * @param int $quantity
	 * @return Property
	 */
	public function setQuantity($quantity){
		$this->quantity = $quantity;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getQuantityAvailable(){
		return $this->quantity_available;
	}

	/**
	 * @param int $quantity_available
	 * @return Property
	 */
	public function setQuantityAvailable($quantity_available){
		$this->quantity_available = $quantity_available;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getRoomType(){
		return $this->room_type;
	}

	/**
	 * @param string $room_type
	 * @return Property
	 */
	public function setRoomType($room_type){
		$this->room_type = $room_type;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPropertyType(){
		return $this->property_type;
	}

	/**
	 * @param string $property_type
	 * @return Property
	 */
	public function setPropertyType($property_type){
		$this->property_type = $property_type;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getDescription(){
		return $this->description;
	}

	/**
	 * @param string $description
	 * @return Property
	 */
	public function setDescription($description){
		$this->description = $description;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getBathrooms(){
		return $this->bathrooms;
	}

	/**
	 * @param int $bathrooms
	 * @return Property
	 */
	public function setBathrooms($bathrooms){
		$this->bathrooms = $bathrooms;

		return $this;
	}

	/**
	 * @return float
	 */
	public function getFloorSpace(){
		return $this->floor_space;
	}

	/**
	 * @param float $floor_space
	 * @return Property
	 */
	public function setFloorSpace($floor_space){
		$this->floor_space = $floor_space;

		return $this;
	}

	/**
	 * @return \string[]
	 */
	public function getFacilities(){
		return $this->facilities;
	}

	/**
	 * @param \string[] $facilities
	 * @return Property
	 */
	public function setFacilities(array $facilities){
		$this->facilities = $facilities;

		return $this;
	}

	/**
	 * @param string $facilities
	 * @return Property
	 */
	public function addFacility($facility){
		$this->facilities[] = $facility;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isDisabled(){
		return $this->disabled;
	}

	/**
	 * @param boolean $disabled
	 * @return Property
	 */
	public function setDisabled($disabled){
		$this->disabled = $disabled;

		return $this;
	}
}
