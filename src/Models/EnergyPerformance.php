<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class EnergyPerformance extends SwaggerModel
{
	/**
	 * The reference on the property's energy performance certificate.
	 * This is known as an RRN and is a 20 character alphanumeric code
	 *
	 * @var string
	 */
	protected $epc_reference = '';

	/**
	 * A URL to download the energy performance certificate
	 * @var string
	 */
	protected $epc_certificate = '';

	/**
	 * @var int
	 */
	protected $eef_current = 0;

	/**
	 * @var int
	 */
	protected $eef_potential = 0;

	/**
	 * @var int
	 */
	protected $co2_current = 0;

	/**
	 * @var int
	 */
	protected $co2_potential = 0;


	/**
	 * @return string
	 */
	public function getEpcReference()
	{
		return $this->epc_reference;
	}


	/**
	 * @param string $epc_reference
	 *
	 * @return $this
	 */
	public function setEpcReference($epc_reference)
	{
		$this->epc_reference = $epc_reference;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getEpcCertificate()
	{
		return $this->epc_certificate;
	}


	/**
	 * @param string $epc_certificate
	 *
	 * @return $this
	 */
	public function setEpcCertificate($epc_certificate)
	{
		$this->epc_certificate = $epc_certificate;

		return $this;
	}


	/**
	 * @return int
	 */
	public function getEefCurrent()
	{
		return $this->eef_current;
	}


	/**
	 * @param int $eef_current
	 *
	 * @return $this
	 */
	public function setEefCurrent($eef_current)
	{
		$this->eef_current = $eef_current;

		return $this;
	}


	/**
	 * @return int
	 */
	public function getEefPotential()
	{
		return $this->eef_potential;
	}


	/**
	 * @param int $eef_potential
	 *
	 * @return $this
	 */
	public function setEefPotential($eef_potential)
	{
		$this->eef_potential = $eef_potential;

		return $this;
	}


	/**
	 * @return int
	 */
	public function getCo2Current()
	{
		return $this->co2_current;
	}


	/**
	 * @param int $co2_current
	 *
	 * @return $this
	 */
	public function setCo2Current($co2_current)
	{
		$this->co2_current = $co2_current;

		return $this;
	}


	/**
	 * @return int
	 */
	public function getCo2Potential()
	{
		return $this->co2_potential;
	}


	/**
	 * @param int $co2_potential
	 *
	 * @return $this
	 */
	public function setCo2Potential($co2_potential)
	{
		$this->co2_potential = $co2_potential;

		return $this;
	}
}
