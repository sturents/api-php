<?php

namespace SturentsLib\Api\Models;

class ContractSaved
{
	/**
	 * Unique reference to the Contract on StuRents
	 * @var string
	 */
	private $contract_id;


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
