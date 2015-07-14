<?php
namespace Ytnuk\Link;

use Nextras;
use Ytnuk;

/**
 * @property-read string $destination {virtual}
 * @property string $module
 * @property string $presenter {default Presenter}
 * @property string $action {default view}
 * @property Nextras\Orm\Relationships\OneHasMany|Alias\Entity[] $aliases {1:m Alias\Repository $link}
 * @property Nextras\Orm\Relationships\OneHasMany|Parameter\Entity[] $parameters {1:m Parameter\Repository $link}
 */
class Entity extends Ytnuk\Orm\Entity
{

	/**
	 * @param bool $fullyQualified
	 *
	 * @return string
	 */
	public function getterDestination($fullyQualified = TRUE)
	{
		return ($fullyQualified ? ':' : NULL) . implode(':', [
			$this->module,
			$this->presenter,
			$this->action
		]);
	}
}
