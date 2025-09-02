<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\AuthError;
use SturentsLib\Api\Models\Error;
use SturentsLib\Api\Models\GetError;
use SturentsLib\Api\Models\PaymentSchedule;

/**
 * Returns payment schedules for the authenticated property manager.
 * The IDs of these schedules will be required to set up Contract
 * entities using a specific payment schedule
 */
class GetPaymentStructures extends SwaggerRequest
{
	public const METHOD = 'GET';
	public const URI = '/api/payment-structures';

	/**
	 * @return PaymentSchedule|AuthError|GetError|Error|list<PaymentSchedule>|list<AuthError>|list<GetError>|list<Error>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => PaymentSchedule::class,
			'401' => AuthError::class,
			'404' => GetError::class,
			'default' => Error::class
		]);
	}
}
