<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\AuthError;
use SturentsLib\Api\Models\BookingStatus;
use SturentsLib\Api\Models\Error;
use SturentsLib\Api\Models\GetError;

/**
 * Provides the booking status and basic contract information for a hosted booking
 */
class GetBookingStatus extends SwaggerRequest
{
	public const METHOD = 'GET';
	public const URI = '/api/booking-status';

	/**
	 * Unique booking identifier provided in the redirect URL
	 *
	 * @var null
	 */
	public $booking_id;
	protected static array $query_params = ['booking_id'];


	public function __construct($booking_id)
	{
		$this->booking_id = $booking_id;
	}


	/**
	 * @return BookingStatus|AuthError|GetError|Error|list<BookingStatus>|list<AuthError>|list<GetError>|list<Error>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => BookingStatus::class,
			'401' => AuthError::class,
			'404' => GetError::class,
			'default' => Error::class
		]);
	}
}
