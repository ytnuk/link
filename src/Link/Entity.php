<?php

namespace Ytnuk\Link;

use Nextras;
use Ytnuk;

/**
 * @property string $destination
 * @property Nextras\Orm\Relationships\OneHasMany|Alias\Entity[] $aliases {1:m Alias\Repository $link}
 * @property Nextras\Orm\Relationships\OneHasMany|Parameter\Entity[] $parameters {1:m Parameter\Repository $link}
 */
class Entity extends Ytnuk\Orm\Entity
{

}
