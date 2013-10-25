<?php

/**
 * TODOLIST
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author IIVOS <miroslav.mrazek@gmail.com>
 */

namespace Todolist\Model;

use LeanMapper\Entity as LeanEntity;


/**
 * Třída entity
 */
abstract class Entity extends LeanEntity
{
	
	/**
	 * Z pole výsledků vytvoří Collection
	 * 
	 * @param array $entites
	 * @return Collection
	 */
	protected function createCollection(array $entites)
	{
		return Collection::from($entites);
	}
	
	
	/**
	 * Umožňuje předat entitě místo navázaných entit jejich 'id'
	 *
	 * @param string $name
	 * @param mixed  $value
	 */
	function __set($name, $value)
	{
		$property = $this->getReflection()->getEntityProperty($name);

		if ($property->hasRelationship() && !($value instanceof Entity))
		{
			$relationship = $property->getRelationship();
			$this->row->{$property->getColumn()} = $value;
			$this->row->cleanReferencedRowsCache($relationship->getTargetTable(),
					$relationship->getColumnReferencingTargetTable());
		}
		else
		{
			parent::__set($name, $value);
		}
	}

}
