<?php
namespace Ytnuk\Link;

use Nextras;
use Ytnuk;

/**
 * @property int $id {primary}
 * @property-read string $destination {virtual}
 * @property string $module
 * @property string $presenter {default Presenter}
 * @property string $action {default view}
 * @property Nextras\Orm\Relationships\OneHasMany|Alias\Entity[] $aliases {1:m Alias\Entity::$link}
 * @property Nextras\Orm\Relationships\OneHasMany|Parameter\Entity[] $parameters {1:m Parameter\Entity::$link}
 * @property-read Alias\Entity|NULL $alias {virtual}
 */
final class Entity
	extends Ytnuk\Orm\Entity
{

	const PROPERTY_NAME = 'destination';

	public function getterDestination() : string
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

	public function getterAlias(string $locale)
	{
		return $this->aliases->get()->findBy(
			[
				'primary' => TRUE,
				'locale' => $locale,
			]
		)->fetch();
	}
}
