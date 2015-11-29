<?php
namespace Ytnuk\Link\Alias;

use Nextras;
use Ytnuk;

/**
 * @property int $id {primary}
 * @property Nextras\Orm\Relationships\ManyHasOne|Ytnuk\Link\Entity $link {m:1 Ytnuk\Link\Entity::$aliases}
 * @property Nextras\Orm\Relationships\ManyHasOne|Ytnuk\Translation\Locale\Entity $locale {m:1 Ytnuk\Translation\Locale\Entity::$linkAliases}
 * @property string $value
 * @property bool|NULL $primary
 */
final class Entity
	extends Ytnuk\Orm\Entity
{

}
