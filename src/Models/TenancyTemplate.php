<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class TenancyTemplate extends SwaggerModel
{
	/**
	 * Title entered when creating this tenancy template
	 * within the StuRents website
	 *
	 * @var string
	 */
	protected $title;

	/**
	 * Pass this as the "template_id" field when creating/updating a contract
	 *
	 * @var string
	 */
	protected $template_id;


	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}


	/**
	 * @param string $title
	 *
	 * @return $this
	 */
	public function setTitle($title)
	{
		$this->title = $title;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getTemplateId()
	{
		return $this->template_id;
	}


	/**
	 * @param string $template_id
	 *
	 * @return $this
	 */
	public function setTemplateId($template_id)
	{
		$this->template_id = $template_id;

		return $this;
	}
}

