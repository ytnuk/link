<?php
namespace Ytnuk\Link;

use Nette;
use Ytnuk;

final class Presenter
	extends Ytnuk\Web\Presenter
{

	/**
	 * @var Repository
	 */
	private $repository;

	/**
	 * @var Control\Factory
	 */
	private $control;

	/**
	 * @var Entity
	 */
	private $link;

	public function __construct(
		Repository $repository,
		Control\Factory $control
	) {
		parent::__construct();
		$this->repository = $repository;
		$this->control = $control;
	}

	public function actionEdit(int $id)
	{
		if ( ! $this->link = $this->repository->getById($id)) {
			$this->error();
		}
	}

	public function renderEdit()
	{
		$this[Ytnuk\Web\Control::class][Ytnuk\Menu\Control::class][] = 'link.presenter.action.edit';
	}

	protected function createComponentYtnukLinkControl() : Control
	{
		return $this->control->create($this->link ? : new Entity);
	}
}
