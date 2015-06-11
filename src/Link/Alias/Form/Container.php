<?php

namespace Ytnuk\Link\Alias\Form;

use Ytnuk;
use Nextras;

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
			case 'value':
				$component->setOption('unique', TRUE);
				break;
			case 'primary':
				$component->setOption('unique', 'link');
				break;
		}

		return $component;
	}
}
