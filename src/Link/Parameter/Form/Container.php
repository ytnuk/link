<?php

namespace Ytnuk\Link\Parameter\Form;

use Nextras;
use Ytnuk;

/**
 * Class Container
 *
 * @package Ytnuk\Link
 */
final class Container extends Ytnuk\Orm\Form\Container
{

	/**
	 * @inheritdoc
	 */
	protected function addProperty(Nextras\Orm\Entity\Reflection\PropertyMetadata $property)
	{
		$component = parent::addProperty($property);
		switch ($property->name) {
			case 'key':
				$component->setOption('unique', TRUE);
		}

		return $component;
	}
}
