<?php
namespace Sturents\Api;

/**
 * Allows you to submit multiple houses to property manager's portfolio
 * @see sturents.com/software/developer/houses-create
 *
 * Class SendHouses
 * @package Sturents\Api
 */
class SendHouses extends Send {

	public function send(){
		$this->sendInternal(Fixtures::URI_HOUSES, Fixtures::METHOD_POST);
	}

	/**
	 * @return string
	 */
	public function responseCountInserted(){
		$json = $this->responseJson();

		return (int) $json->counts->inserted;
	}

	/**
	 * @return string
	 */
	public function responseCountUpdated(){
		$json = $this->responseJson();

		return (int) $json->counts->updated;
	}
}
