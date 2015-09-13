<?php
namespace Ytnuk\Link\Parameter;

use Ytnuk;

/**
 * @method Entity|NULL getByKey(string $key)
 */
final class Repository
	extends Ytnuk\Orm\Repository
{

	public static function getEntityClassNames() : array
	{
		return [
			Entity::class,
		];
	}
}
