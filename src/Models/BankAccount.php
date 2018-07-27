<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class BankAccount extends SwaggerModel
{
	/**
	 * How the bank account is described internally on StuRents
	 * @var string
	 */
	protected $descriptor;

	/**
	 * Pass this as the "bank_id" field when creating/updating a property
	 *
	 * @var string
	 */
	protected $bank_id;


	/**
	 * @return string
	 */
	public function getDescriptor()
	{
		return $this->descriptor;
	}


	/**
	 * @param string $descriptor
	 *
	 * @return $this
	 */
	public function setDescriptor($descriptor)
	{
		$this->descriptor = $descriptor;

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
}

