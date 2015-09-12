<?php
namespace Ytnuk\Link\Form\Control;

use Ytnuk;

interface Factory
{

	public function create(Ytnuk\Link\Entity $link) : Ytnuk\Link\Form\Control;
}
