<?php
namespace Ytnuk\Link\Parameter\Form;

use Nextras;
use Ytnuk;

final class Container
	extends Ytnuk\Orm\Form\Container
{

	protected function addProperty(Nextras\Orm\Entity\Reflection\PropertyMetadata $metadata)
	{
		$component = parent::addProperty($metadata);
		switch ($metadata->name) {
			case 'key':
				$component->setOption(
					'unique',
					TRUE
				);
		}

		return $component;
	}
}
