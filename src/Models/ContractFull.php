<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * The contract object returned for fetching specific property contract
 * data. Also includes the contract_id value to allow edit/delete of contract
 */
class ContractFull extends ContractWithRooms
{
	/**
	 * A unique ID for this Contract which can be used when
	 * editing/deleting the Contract
	 *
	 * @var string
	 */
	protected $contract_id;


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
