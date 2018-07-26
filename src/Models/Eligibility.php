<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * Each key is a boolean indicating if the specified item is
 * eligible to rent the property. At least one of the first
 * four fields must be set to true
 */
class Eligibility extends SwaggerModel
{
	/**
	 * @var boolean
	 */
	private $undergraduate_student;

	/**
	 * @var boolean
	 */
	private $postgraduate_student;

	/**
	 * @var boolean
	 */
	private $professional;

	/**
	 * @var boolean
	 */
	private $trainee;

	/**
	 * Allows a recipient of UK housing benefit
	 * @var boolean
	 */
	private $dss;

	/**
	 * @var boolean
	 */
	private $pets_permitted;

	/**
	 * @var boolean
	 */
	private $smoking_permitted;

	/**
	 * @var boolean
	 */
	private $female_only;

	/**
	 * @var boolean
	 */
	private $male_only;


	/**
	 * @return boolean
	 */
	public function getUndergraduateStudent()
	{
		return $this->undergraduate_student;
	}


	/**
	 * @param boolean $undergraduate_student
	 *
	 * @return $this
	 */
	public function setUndergraduateStudent($undergraduate_student)
	{
		$this->undergraduate_student = $undergraduate_student;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getPostgraduateStudent()
	{
		return $this->postgraduate_student;
	}


	/**
	 * @param boolean $postgraduate_student
	 *
	 * @return $this
	 */
	public function setPostgraduateStudent($postgraduate_student)
	{
		$this->postgraduate_student = $postgraduate_student;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getProfessional()
	{
		return $this->professional;
	}


	/**
	 * @param boolean $professional
	 *
	 * @return $this
	 */
	public function setProfessional($professional)
	{
		$this->professional = $professional;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getTrainee()
	{
		return $this->trainee;
	}


	/**
	 * @param boolean $trainee
	 *
	 * @return $this
	 */
	public function setTrainee($trainee)
	{
		$this->trainee = $trainee;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getDss()
	{
		return $this->dss;
	}


	/**
	 * @param boolean $dss
	 *
	 * @return $this
	 */
	public function setDss($dss)
	{
		$this->dss = $dss;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getPetsPermitted()
	{
		return $this->pets_permitted;
	}


	/**
	 * @param boolean $pets_permitted
	 *
	 * @return $this
	 */
	public function setPetsPermitted($pets_permitted)
	{
		$this->pets_permitted = $pets_permitted;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getSmokingPermitted()
	{
		return $this->smoking_permitted;
	}


	/**
	 * @param boolean $smoking_permitted
	 *
	 * @return $this
	 */
	public function setSmokingPermitted($smoking_permitted)
	{
		$this->smoking_permitted = $smoking_permitted;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getFemaleOnly()
	{
		return $this->female_only;
	}


	/**
	 * @param boolean $female_only
	 *
	 * @return $this
	 */
	public function setFemaleOnly($female_only)
	{
		$this->female_only = $female_only;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getMaleOnly()
	{
		return $this->male_only;
	}


	/**
	 * @param boolean $male_only
	 *
	 * @return $this
	 */
	public function setMaleOnly($male_only)
	{
		$this->male_only = $male_only;

		return $this;
	}
}

