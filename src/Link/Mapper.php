<?php
namespace Ytnuk\Link;

use Nextras;
use Ytnuk;

final class Mapper
	extends Ytnuk\Orm\Mapper
{

	public function sortByParameters(
		Nextras\Orm\Mapper\Dbal\DbalCollection $collection,
		array $parameters
	) : Nextras\Orm\Mapper\Dbal\DbalCollection
	{
		if ($parameters) {
			$builder = $collection->getQueryBuilder();
			$from = 'SELECT "link".* FROM "link" LEFT JOIN link_parameter AS "parameters" ON ("link"."id" = "parameters"."link_id")';
			$order = [];
			foreach (
				$parameters as $key => $value
			) {
				$order[] = 'parameters.key=\'' . $key . '\' AND parameters.value ' . ($value === NULL ? 'IS NULL' : '= \'' . (is_scalar($value) ? $value : serialize($value)) . '\' DESC');
			}
			//			dump($order);exit;
			$from .= ' ORDER BY ' . implode(', ', $order);
			$builder->from('(' . $from . ')', $builder->getFromAlias());
		}

		return $collection;
	}
}
