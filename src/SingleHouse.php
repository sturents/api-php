<?php
namespace Sturents\Api;

abstract class SingleHouse extends Send {

	/**
	 * @return int
	 */
	public function responseAffectedProperty(){
		$json = $this->responseJson();

		return (int) $json->sturents_id;
	}
}
