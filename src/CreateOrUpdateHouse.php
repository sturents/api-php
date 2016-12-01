<?php
namespace Sturents\Api;

/**
 * Allows you to submit a single property to property manager's portfolio
 * @see sturents.com/software/developer/house-create
 *
 * Class CreateOrUpdateHouse
 * @package Sturents\Api
 */
class CreateOrUpdateHouse extends Send {

	public function send(){
		$this->sendInternal(Fixtures::URI_HOUSE, Fixtures::METHOD_POST);
	}
}
