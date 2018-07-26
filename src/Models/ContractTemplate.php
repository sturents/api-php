<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class ContractTemplate extends SwaggerModel
{
	/**
	 * Title entered when creating this contract template
	 * within the StuRents website
	 *
	 * @var string
	 */
	private $title;

	/**
	 * Pass this as the "template_id" field when creating/updating a contract
	 *
	 * @var string
	 */
	private $template_id;


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

