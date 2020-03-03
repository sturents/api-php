<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class Pagination extends SwaggerModel
{
	/**
	 * The number of pages total
	 * @var integer
	 * @required
	 */
	protected $pages;

	/**
	 * For data integrity, the page that these results relate to
	 *
	 * @var integer
	 */
	protected $current = 0;

	/**
	 * If present this shows there is another page available after this one
	 *
	 * @var integer
	 */
	protected $next = 0;

	/**
	 * If present this shows there is another page available prior to this one
	 *
	 * @var integer
	 */
	protected $prev = 0;


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
