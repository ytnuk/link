<?php
namespace Ytnuk\Link;

use Nette;
use Ytnuk;

final class Control
	extends Ytnuk\Orm\Control
{

	const NAME = 'link';

	/**
	 * @var Entity
	 */
	private $link;

	/**
	 * @var Repository
	 */
	private $repository;

	/**
	 * @var Control\Factory
	 */
	private $control;

	/**
	 * @var Form\Control\Factory
	 */
	private $formControl;

	/**
	 * @var Ytnuk\Orm\Grid\Control\Factory
	 */
	private $gridControl;

	public function __construct(
		Entity $link,
		Repository $repository,
		Control\Factory $control,
		Form\Control\Factory $formControl,
		Ytnuk\Orm\Grid\Control\Factory $gridControl
	) {
		parent::__construct($link);
		$this->link = $link;
		$this->repository = $repository;
		$this->control = $control;
		$this->formControl = $formControl;
		$this->gridControl = $gridControl;
	}

	protected function createComponentForm() : Form\Control
	{
		return $this->formControl->create($this->link);
	}

	protected function createComponentGrid() : Ytnuk\Orm\Grid\Control
	{
		return $this->gridControl->create($this->repository);
	}
}
