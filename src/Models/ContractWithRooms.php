<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * The contract object returned for fetching property data
 * to display externally - includes basic information plus
 * a list of room specific pricing. Only Contracts which are
 * not disabled will be returned as this type.
 */
class ContractWithRooms extends ContractAbstract
{
	/**
	 * A URL where the property may be booked online using this contract.
	 * Will be blank if the property is not set up for this feature
	 *
	 * @var string
	 */
	protected $book_now_url = '';

    /**
     * A URL where the user can book a viewing for the property online.
     * Will be blank if the property is not set up for this feature
     *
     * @var string
     */
    protected $viewing_url = '';

	/**
	 * A list of 1 or more prices with optional room name. It may
	 * be the case that all the price values are equal but still
	 * one entity per room in the property is returned. This allows
	 * for the situation where each room is priced individually to be
	 * accommodated using the same data structure
	 *
	 * @var PriceOutbound[]
	 */
	protected $prices = [];


	/**
	 * @return string
	 */
	public function getBookNowUrl()
	{
		return $this->book_now_url;
	}


	/**
	 * @param string $book_now_url
	 *
	 * @return $this
	 */

	public function setBookNowUrl($book_now_url)
	{
		$this->book_now_url = $book_now_url;

		return $this;
	}
    /**
     * @return string
     */
    public function getViewingUrl()
    {
        return $this->viewing_url;
    }

    /**
     * @param string $viewing_url
     *
     * @return $this
     */
    public function setViewingUrl(string $viewing_url)
    {
        $this->viewing_url = $viewing_url;

        return $this;
    }


	/**
	 * @return PriceOutbound[]
	 */
	public function getPrices()
	{
		return $this->prices;
	}


	/**
	 * @param PriceOutbound[] $prices
	 *
	 * @return $this
	 */
	public function setPrices(array $prices)
	{
		$this->prices = $prices;

		return $this;
	}


	/**
	 * @param PriceOutbound $price
	 *
	 * @return $this
	 */
	public function addPrice(PriceOutbound $price)
	{
		$this->prices[] = $price;

		return $this;
	}
}
