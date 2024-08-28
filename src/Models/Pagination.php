<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class Pagination extends SwaggerModel
{
	/**
	 * The number of pages total
	 * @var int
	 * @required
	 */
	protected $pages;

	/**
	 * For data integrity, the page that these results relate to
	 *
	 * @var int
	 */
	protected $current = 0;

	/**
	 * If present this shows there is another page available after this one
	 *
	 * @var int
	 */
	protected $next = 0;

	/**
	 * If present this shows there is another page available prior to this one
	 *
	 * @var int
	 */
	protected $prev = 0;


	/**
	 * @return int
	 */
	public function getPages()
	{
		return $this->pages;
	}


	/**
	 * @param int $pages
	 *
	 * @return $this
	 */
	public function setPages($pages)
	{
		$this->pages = $pages;

		return $this;
	}


	/**
	 * @return int
	 */
	public function getCurrent()
	{
		return $this->current;
	}


	/**
	 * @param int $current
	 *
	 * @return $this
	 */
	public function setCurrent($current)
	{
		$this->current = $current;

		return $this;
	}


	/**
	 * @return int
	 */
	public function getNext()
	{
		return $this->next;
	}


	/**
	 * @param int $next
	 *
	 * @return $this
	 */
	public function setNext($next)
	{
		$this->next = $next;

		return $this;
	}


	/**
	 * @return int
	 */
	public function getPrev()
	{
		return $this->prev;
	}


	/**
	 * @param int $prev
	 *
	 * @return $this
	 */
	public function setPrev($prev)
	{
		$this->prev = $prev;

		return $this;
	}
}
