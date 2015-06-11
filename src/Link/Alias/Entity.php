<?php

namespace Ytnuk\Link\Alias;

use Nextras;
use Ytnuk;

/**
 * @property string $value
 * @property Nextras\Orm\Relationships\ManyHasOne|Ytnuk\Link\Entity $link {m:1 Ytnuk\Link\Repository $aliases}
 * @property bool $primary {default false}
 */
final class Entity extends Ytnuk\Orm\Entity
{

}
