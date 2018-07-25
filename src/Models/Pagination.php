<?php

namespace SturentsLib\Api\Models;

class Pagination
{
	/**
	 * The number of pages total
	 * @var integer
	 */
	private $pages;

	/**
	 * For data integrity, the page that these results relate to
	 *
	 * @var integer
	 */
	private $current;

	/**
	 * If present this shows there is another page available after this one
	 *
	 * @var integer
	 */
	private $next;

	/**
	 * If present this shows there is another page available prior to this one
	 *
	 * @var integer
	 */
	private $prev;


	/**
	 * @return integer
	 */
	public function getPages()
	{
		return $this->pages;
	}


	/**
	 * @param integer $pages
	 *
	 * @return $this
	 */
	public function setPages($pages)
	{
		$this->pages = $pages;

		return $this;
	}


	/**
	 * @return integer
	 */
	public function getCurrent()
	{
		return $this->current;
	}


	/**
	 * @param integer $current
	 *
	 * @return $this
	 */
	public function setCurrent($current)
	{
		$this->current = $current;

		return $this;
	}


	/**
	 * @return integer
	 */
	public function getNext()
	{
		return $this->next;
	}


	/**
	 * @param integer $next
	 *
	 * @return $this
	 */
	public function setNext($next)
	{
		$this->next = $next;

		return $this;
	}


	/**
	 * @return integer
	 */
	public function getPrev()
	{
		return $this->prev;
	}


	/**
	 * @param integer $prev
	 *
	 * @return $this
	 */
	public function setPrev($prev)
	{
		$this->prev = $prev;

		return $this;
	}
}

