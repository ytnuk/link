<?php
namespace Ytnuk\Link;

use Ytnuk;

/**
 * @method sortByParameters
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
