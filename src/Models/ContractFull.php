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
	 * A contract may be temporarily unavailable for some reason; this field
	 * allows setting or reading that status. API consumers may want to discard
	 * contracts with this setting, or may want to display a different status to
	 * users. If this is set to true then the Contract is not available, but can
	 * still be edited. Being not available means it is not returned for
	 * GET /properties requests, and Book Now URLs will not work for it. API senders
	 * might tie this to a similar internal status, but this should not be used to
	 * permanently remove a Contract - use the DELETE method instead for that purpose.
	 *
	 * @var boolean
	 */
	protected $disabled;

	/**
	 * A unique ID for this Contract which can be used when
	 * editing/deleting the Contract
	 *
	 * @var string
	 */
	protected $contract_id;


	/**
	 * @return boolean
	 */
	public function getDisabled()
	{
		return $this->disabled;
	}


	/**
	 * @param boolean $disabled
	 *
	 * @return $this
	 */
	public function setDisabled($disabled)
	{
		$this->disabled = $disabled;

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
}
