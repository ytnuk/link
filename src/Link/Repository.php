<?php
namespace Ytnuk\Link;

use Nextras;
use Ytnuk;

/**
 * Class Repository
 *
 * @package Ytnuk\Link
 */
final class Repository
	extends Ytnuk\Orm\Repository
{

	/**
	 * @param Nextras\Orm\Mapper\Dbal\DbalCollection $collection
	 * @param array $parameters
	 *
	 * @return Nextras\Orm\Mapper\Dbal\DbalCollection
	 */
	public function sortByParameters(
		Nextras\Orm\Mapper\Dbal\DbalCollection $collection,
		array $parameters
	) {
		$collection = $collection->findBy(['this->parameters->id!=' => NULL]);
		$builder = $collection->getQueryBuilder();
		foreach (
			$parameters as $key => $value
		) {
			$arguments = [
				'query' => implode(
					' AND ',
					[
						implode(
							'=',
							[
								'parameters.key',
								'%s',
							]
						),
						'parameters.value',
					]
				),
				'key' => $key,
			];
			if ($value === NULL) {
				$arguments['query'] .= ' IS NULL';
			} else {
				$arguments['query'] .= ' = %s DESC';
				$arguments['value'] = $value;
			}
			call_user_func_array(
				[
					$builder,
					'addOrderBy',
				],
				$arguments
			);
		}

		return $collection;
	}
}
