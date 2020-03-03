<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class ContractSaved extends SwaggerModel
{
	/**
	 * Unique reference to the Contract on StuRents
	 * @var string
	 */
	protected $contract_id = '';


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
}
