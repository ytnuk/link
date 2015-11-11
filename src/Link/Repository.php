<?php
namespace Ytnuk\Link;

use Ytnuk;

final class Repository
	extends Ytnuk\Orm\Repository
{

	public static function getEntityClassNames() : array
	{
		return [
			Entity::class,
		];
	}

	public function sortByParameters()
	{
		return call_user_func(
			[
				$this->getMapper(),
				__FUNCTION__,
			],
			...
			func_get_args()
		);
	}
}
