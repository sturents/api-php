<?php
namespace SturentsLib\Api\Requests;

/**
 * Returns payment schedules for the authenticated property manager
 * The IDs of these schedules will be required to set up Contract
 * entities using a specific payment schedule
 */
class GetPaymentStructures extends SwaggerRequest
{
	const URI = 'https://sturents.com/api/payment-structures';
	const METHOD = 'GET';

	/**
	 * @param SwaggerClient $client
	 * @return string[]
	 */
	public function send(SwaggerClient $client)
	{
		return $client->send($this, [
			'200' => '\\SturentsLib\\Api\\Models\\array',
			'401' => '\\SturentsLib\\Api\\Models\\SendAuthError',
			'404' => '\\SturentsLib\\Api\\Models\\SendAuthError',
			'default' => '\\SturentsLib\\Api\\Models\\Error'
		]);
	}
}

