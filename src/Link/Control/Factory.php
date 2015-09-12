<?php
namespace Ytnuk\Link\Control;

use Ytnuk;

interface Factory
{

	public function create(Ytnuk\Link\Entity $link) : Ytnuk\Link\Control;
}
