<?php
namespace Sturents\Api;

/**
 * Allows you to update a single existing property on property manager's portfolio
 * If a property with the specified reference field does not exist the endpoint will return a warning.
 * @see sturents.com/software/developer/house-update/
 *
 * Class UpdateHouse
 * @package Sturents\Api
 */
class UpdateHouse extends SingleHouse {

	public function send(){
		$this->sendInternal(Fixtures::URI_HOUSE, Fixtures::METHOD_PUT);
	}
}
