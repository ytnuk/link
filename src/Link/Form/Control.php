<?php
namespace Ytnuk\Link\Form;

use Ytnuk;

final class Control
	extends Ytnuk\Orm\Form\Control
{

	public function __construct(
		Ytnuk\Link\Entity $link,
		Ytnuk\Orm\Form\Factory $form
	) {
		parent::__construct($link, $form);
	}
}
