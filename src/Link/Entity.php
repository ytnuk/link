<?php
namespace Ytnuk\Link;

use Nextras;
use Ytnuk;

/**
 * @property-read string $destination {virtual}
 * @property string $module
 * @property string $presenter {default Presenter}
 * @property string $action {default view}
 * @property Nextras\Orm\Relationships\OneHasMany|Alias\Entity[] $aliases {1:m Alias\Entity::$link}
 * @property Nextras\Orm\Relationships\OneHasMany|Parameter\Entity[] $parameters {1:m Parameter\Entity::$link}
 */
class Entity
	extends Ytnuk\Orm\Entity
{

	const PROPERTY_NAME = 'module';

	/**
	 * @return string
	 */
	public function getterDestination()
	{
		return implode(
			':',
			[
				NULL,
				$this->module,
				$this->presenter,
				$this->action,
			]
		);
	}
}
