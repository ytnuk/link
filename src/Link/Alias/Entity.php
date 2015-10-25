<?php
namespace Ytnuk\Link\Alias;

use Nextras;
use Ytnuk;

/**
 * @property int $id {primary}
 * @property string $value
 * @property Nextras\Orm\Relationships\ManyHasOne|Ytnuk\Link\Entity $link {m:1 Ytnuk\Link\Entity::$aliases}
 * @property bool|NULL $primary
 */
final class Entity
	extends Ytnuk\Orm\Entity
{

}
