<?php
namespace Ytnuk\Link\Alias\Form;

use Nextras;
use Ytnuk;

/**
 * Class Container
 *
 * @package Ytnuk\Link
 */
final class Container
	extends Ytnuk\Orm\Form\Container
{

	/**
	 * @inheritdoc
	 */
	protected function addProperty(Nextras\Orm\Entity\Reflection\PropertyMetadata $metadata)
	{
		$component = parent::addProperty($metadata);
		switch ($metadata->name) {
			case 'value':
				$component->setOption(
					'unique',
					TRUE
				);
				break;
			case 'primary':
				$component->setOption(
					'unique',
					'link'
				);
				break;
		}

		return $component;
	}
}
