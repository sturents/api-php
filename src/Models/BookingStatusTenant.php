<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class BookingStatusTenant extends SwaggerModel
{
	/**
	 * Title of the user
	 * @var string
	 * @required
	 */
	protected $title;

	/**
	 * First name of the user
	 * @var string
	 * @required
	 */
	protected $first_name;

	/**
	 * Last name of the user
	 * @var string
	 * @required
	 */
	protected $last_name;

	/**
	 * Email address of the user
	 * @var string
	 * @required
	 */
	protected $email;

	/**
	 * Phone number of the user
	 * @var string
	 * @required
	 */
	protected $phone;

	/**
	 * Indicates whether the user requires a guarantor
	 * @var ?bool
	 * @required
	 */
	protected $guarantor_required;

	/**
	 * Rent per week
	 * @var ?float
	 * @required
	 */
	protected $rent_pw;

	/**
	 * Total rent
	 * @var ?float
	 * @required
	 */
	protected $total_rent;

	/**
	 * Number of rent instalments due throughout the duration of the contract
	 * @var ?int
	 * @required
	 */
	protected $rent_instalments;

	/**
	 * Date and time that the tenant signed the tenancy
	 * @var ?string
	 * @required
	 */
	protected $signed_datetime;


	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}


	/**
	 * @param string $title
	 *
	 * @return $this
	 */
	public function setTitle($title)
	{
		$this->title = $title;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getFirstName()
	{
		return $this->first_name;
	}


	/**
	 * @param string $first_name
	 *
	 * @return $this
	 */
	public function setFirstName($first_name)
	{
		$this->first_name = $first_name;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getLastName()
	{
		return $this->last_name;
	}


	/**
	 * @param string $last_name
	 *
	 * @return $this
	 */
	public function setLastName($last_name)
	{
		$this->last_name = $last_name;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}


	/**
	 * @param string $email
	 *
	 * @return $this
	 */
	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getPhone()
	{
		return $this->phone;
	}


	/**
	 * @param string $phone
	 *
	 * @return $this
	 */
	public function setPhone($phone)
	{
		$this->phone = $phone;

		return $this;
	}


	/**
	 * @return ?bool
	 */
	public function getGuarantorRequired()
	{
		return $this->guarantor_required;
	}


	/**
	 * @param ?bool $guarantor_required
	 *
	 * @return $this
	 */
	public function setGuarantorRequired($guarantor_required)
	{
		$this->guarantor_required = $guarantor_required;

		return $this;
	}


	/**
	 * @return ?float
	 */
	public function getRentPw()
	{
		return $this->rent_pw;
	}


	/**
	 * @param ?float $rent_pw
	 *
	 * @return $this
	 */
	public function setRentPw($rent_pw)
	{
		$this->rent_pw = $rent_pw;

		return $this;
	}


	/**
	 * @return ?float
	 */
	public function getTotalRent()
	{
		return $this->total_rent;
	}


	/**
	 * @param ?float $total_rent
	 *
	 * @return $this
	 */
	public function setTotalRent($total_rent)
	{
		$this->total_rent = $total_rent;

		return $this;
	}


	/**
	 * @return ?int
	 */
	public function getRentInstalments()
	{
		return $this->rent_instalments;
	}


	/**
	 * @param ?int $rent_instalments
	 *
	 * @return $this
	 */
	public function setRentInstalments($rent_instalments)
	{
		$this->rent_instalments = $rent_instalments;

		return $this;
	}


	/**
	 * @return ?string
	 */
	public function getSignedDatetime()
	{
		return $this->signed_datetime;
	}


	/**
	 * @param ?string $signed_datetime
	 *
	 * @return $this
	 */
	public function setSignedDatetime($signed_datetime)
	{
		$this->signed_datetime = $signed_datetime;

		return $this;
	}
}
