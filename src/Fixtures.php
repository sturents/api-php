<?php
/**
 * Created by PhpStorm.
 * User: m1ke
 * Date: 10/02/16
 * Time: 17:22
 */

namespace Sturents\Api;


class Fixtures {
	const VERSION = 1.2

	const URI = "https://sturents.com/api";
	const URI_HOUSES = self::URI."/houses";
	const URI_HOUSE = self::URI."/house";

	const METHOD_GET = 'GET';
	const METHOD_POST = 'POST';
	const METHOD_PUT = 'PUT';
}
