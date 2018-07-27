<?php
namespace SturentsLib\Api\Requests;

/**
 * Returns payment schedules for the authenticated property manager
 * The IDs of these schedules will be required to set up Contract
 * entities using a specific payment schedule
 */
class GetPaymentStructures extends SwaggerRequest
{
	const URI = '/api/payment-structures';
	const METHOD = 'GET';

	/**
	 * @param SwaggerClient $client
	 * @return \SturentsLib\Api\Models\PaymentSchedule[]
	 */
	public function send(SwaggerClient $client)
	{
		return $client->send($this, new \SturentsLib\Api\Models\PaymentSchedule());
	}
}

