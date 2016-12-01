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
}
