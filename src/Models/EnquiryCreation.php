<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class EnquiryCreation extends SwaggerModel
{
	/**
	 * Plain (non-hashed) house id
	 * @var int
	 * @required
	 */
	protected $property_id;

	/**
	 * Hashed availability id
	 * @var string
	 * @required
	 */
	protected $contract_id;

	/**
	 * @var string
	 * @required
	 */
	protected $first_name;

	/**
	 * @var string
	 * @required
	 */
	protected $last_name;

	/**
	 * @var string
	 * @required
	 */
	protected $email;

	/**
	 * @var string
	 * @required
	 */
	protected $phone;

	/**
	 * @var string
	 * @required
	 */
	protected $tenant_type;

	/**
	 * @var string
	 * @required
	 */
	protected $enquiry_method;

	/**
	 * @var string
	 * @required
	 */
	protected $enquiry_type;

	/**
	 * Optional free-text message; used as the enquiry subject if provided,
	 * otherwise a label derived from enquiry_type is used
	 *
	 * @var string
	 */
	protected $message = '';


	/**
	 * @return int
	 */
	public function getPropertyId()
	{
		return $this->property_id;
	}


	/**
	 * @param int $property_id
	 *
	 * @return $this
	 */
	public function setPropertyId($property_id)
	{
		$this->property_id = $property_id;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getContractId()
	{
		return $this->contract_id;
	}


	/**
	 * @param string $contract_id
	 *
	 * @return $this
	 */
	public function setContractId($contract_id)
	{
		$this->contract_id = $contract_id;

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
	 * @return string
	 */
	public function getTenantType()
	{
		return $this->tenant_type;
	}


	/**
	 * @param string $tenant_type
	 *
	 * @return $this
	 */
	public function setTenantType($tenant_type)
	{
		$this->tenant_type = $tenant_type;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getEnquiryMethod()
	{
		return $this->enquiry_method;
	}


	/**
	 * @param string $enquiry_method
	 *
	 * @return $this
	 */
	public function setEnquiryMethod($enquiry_method)
	{
		$this->enquiry_method = $enquiry_method;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getEnquiryType()
	{
		return $this->enquiry_type;
	}


	/**
	 * @param string $enquiry_type
	 *
	 * @return $this
	 */
	public function setEnquiryType($enquiry_type)
	{
		$this->enquiry_type = $enquiry_type;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getMessage()
	{
		return $this->message;
	}


	/**
	 * @param string $message
	 *
	 * @return $this
	 */
	public function setMessage($message)
	{
		$this->message = $message;

		return $this;
	}
}
