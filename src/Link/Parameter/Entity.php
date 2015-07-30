<?php
namespace Ytnuk\Link\Parameter;

use Nextras;
use Ytnuk;

/**
 * @property string $key
 * @property string $value
 * @property Nextras\Orm\Relationships\ManyHasOne|Ytnuk\Link\Entity $link {m:1 Ytnuk\Link\Entity::$parameters}
 */
final class Entity
	extends Ytnuk\Orm\Entity
{

	const PROPERTY_NAME = 'value';
}
