<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\SwaggerModel;

/**
 * Provides the booking status and basic contract information for a hosted booking
 */
class GetBookingStatus extends SwaggerRequest
{
	public const URI = '/api//booking-status';
	public const METHOD = 'GET';

	/**
	 * Unique booking identifier provided in the redirect URL
	 *
	 * @var null
	 */
	public $booking_id;
	protected static $query_params = ['booking_id'];


	public function __construct($booking_id)
	{
		$this->booking_id = $booking_id;
	}


	/**
	 * @param SwaggerClient $client
	 * @return SwaggerModel
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => '\SturentsLib\Api\Models\BookingStatus::class',
			'401' => '\SturentsLib\Api\Models\AuthError::class',
			'404' => '\SturentsLib\Api\Models\GetError::class',
			'default' => '\SturentsLib\Api\Models\Error::class'
		]);
	}
}
