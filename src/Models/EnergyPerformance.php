<?php

namespace Sturents\Api\Models;

use Sturents\Api\Model;

class EnergyPerformance extends Model {
	/**
	 * @var string
	 * @required
	 */
	protected $epc_reference;
	/**
	 * @var string
	 * @required
	 */
	protected $epc_certificate;
	/**
	 * @var int
	 */
	protected $eef_current;
	/**
	 * @var int
	 */
	protected $eef_potential;
	/**
	 * @var int
	 */
	protected $co2_current;
	/**
	 * @var int
	 */
	protected $co2_potential;

	/**
	 * @return string
	 */
	public function getEpcReference(){
		return $this->epc_reference;
	}

	/**
	 * @param string $epc_reference
	 * @return EnergyPerformance
	 */
	public function setEpcReference($epc_reference){
		$this->epc_reference = $epc_reference;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getEpcCertificate(){
		return $this->epc_certificate;
	}

	/**
	 * @param string $epc_certificate
	 * @return EnergyPerformance
	 */
	public function setEpcCertificate($epc_certificate){
		$this->epc_certificate = $epc_certificate;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getEefCurrent(){
		return $this->eef_current;
	}

	/**
	 * @param int $eef_current
	 * @return EnergyPerformance
	 */
	public function setEefCurrent($eef_current){
		$this->eef_current = $eef_current;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getEefPotential(){
		return $this->eef_potential;
	}

	/**
	 * @param int $eef_potential
	 * @return EnergyPerformance
	 */
	public function setEefPotential($eef_potential){
		$this->eef_potential = $eef_potential;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getCo2Current(){
		return $this->co2_current;
	}

	/**
	 * @param int $co2_current
	 * @return EnergyPerformance
	 */
	public function setCo2Current($co2_current){
		$this->co2_current = $co2_current;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getCo2Potential(){
		return $this->co2_potential;
	}

	/**
	 * @param int $co2_potential
	 * @return EnergyPerformance
	 */
	public function setCo2Potential($co2_potential){
		$this->co2_potential = $co2_potential;

		return $this;
	}
}
