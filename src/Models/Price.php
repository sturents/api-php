<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * Defined pricing details for tenants renting the property.
 * When submitted as the "price" field of the Contract object
 * this will apply to all rooms. That field may be left null
 * if the "room_prices" array is used instead.
 */
class Price extends SwaggerModel
{
	/**
	 * For fixed term contracts, this is the monetary value indicating
	 * the weekly rent each tenant will be expected to pay during their
	 * tenancy in the property.
	 *
	 * For rolling contracts, this is the monetary value indicating the
	 * daily rent each tenant will pay for the first payment period.
	 * The first payment period covers the rent from the start date to
	 * the day before the first rolling monthly payment day. The first payment rent
	 * is calculated based on the number of days in the period multiplied by the per day rate.
	 *
	 * Whether fixed or rolling, this does not mean the rent is paid weekly or daily - the StuRents
	 * search and profiles display all rents as a weekly amount and this
	 * will be used to calculate total and scheduled payments when
	 * creating a tenancy and/or rent collection for the property
	 *
	 * @var float
	 * @required
	 */
	protected $price_per_person_per_week;

	/**
	 * A monetary value indicating the deposit each tenant will be
	 * expected to pay upon signing a contract to rent the property
	 *
	 * @var float
	 */
	protected $deposit_per_person = 0.0;

	/**
	 * A monetary value indicating the fee to the property manager which
	 * each tenant will be expected to pay upon signing a contract to
	 * rent the property
	 *
	 * @var float
	 */
	protected $fee_per_person = 0.0;

	/**
	 * A monetary value indicating the monthly rent each tenant will
	 * be expected to pay during their rolling tenancy in the property.
	 * This is required if is_fixed_term is false
	 *
	 * The StuRents search and profiles display all rents as a weekly amount and this
	 * will be used to calculate total and scheduled payments when
	 * creating a tenancy and/or rent collection for the property.
	 *
	 * @var float
	 */
	protected $rolling_price_per_person_per_month = 0.0;


	/**
	 * @return float
	 */
	public function getPricePerPersonPerWeek()
	{
		return $this->price_per_person_per_week;
	}


	/**
	 * @param float $price_per_person_per_week
	 *
	 * @return $this
	 */
	public function setPricePerPersonPerWeek($price_per_person_per_week)
	{
		$this->price_per_person_per_week = $price_per_person_per_week;

		return $this;
	}


	/**
	 * @return float
	 */
	public function getDepositPerPerson()
	{
		return $this->deposit_per_person;
	}


	/**
	 * @param float $deposit_per_person
	 *
	 * @return $this
	 */
	public function setDepositPerPerson($deposit_per_person)
	{
		$this->deposit_per_person = $deposit_per_person;

		return $this;
	}


	/**
	 * @return float
	 */
	public function getFeePerPerson()
	{
		return $this->fee_per_person;
	}


	/**
	 * @param float $fee_per_person
	 *
	 * @return $this
	 */
	public function setFeePerPerson($fee_per_person)
	{
		$this->fee_per_person = $fee_per_person;

		return $this;
	}


	/**
	 * @return float
	 */
	public function getRollingPricePerPersonPerMonth()
	{
		return $this->rolling_price_per_person_per_month;
	}


	/**
	 * @param float $rolling_price_per_person_per_month
	 *
	 * @return $this
	 */
	public function setRollingPricePerPersonPerMonth($rolling_price_per_person_per_month)
	{
		$this->rolling_price_per_person_per_month = $rolling_price_per_person_per_month;

		return $this;
	}
}
