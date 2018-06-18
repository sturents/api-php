<?php

namespace Sturents\Api\Models;

class Property {
	/**
	 * @var string
	 * @required
	 */
	public $reference;
	/**
	 * @var string
	 * @required
	 */
	public $designation;
	/**
	 * @var int
	 * @required
	 */
	public $beds_available;
	/**
	 * @var int
	 * @required
	 */
	public $beds_total;
	/**
	 * @var bool
	 * @required
	 */
	public $rooms_let_individually = false;
	/**
	 * @var int
	 */
	public $quantity;
	/**
	 * @var int
	 */
	public $quantity_available;
	/**
	 * @var string
	 */
	public $room_type;
	/**
	 * @var string
	 */
	public $property_type = 'Residential';
	/**
	 * @var string
	 * @required
	 */
	public $description;
	/**
	 * @var int
	 */
	public $bathrooms;
	/**
	 * @var float
	 * @required
	 */
	public $floor_space;
	/**
	 * @var string[]
	 * @required
	 */
	public $facilities;
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
	public $disabled = false;
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
}
