<?php

/**
 * ToDoList
 * Školní projekt k seznámení s Nette a ORM
 * 
 */

namespace Todolist\Model;

use LeanMapper\DefaultMapper,
	LeanMapper\Row;

/**
 * Standard mapper for conventions:
 * - underdash separated names of tables and cols
 * - PK and FK is in [table]_id format
 * - entity repository is named [Entity]Repository
 * - M:N relations are stored in [table1]_[table2] tables
 *
 * @author Jan Nedbal
 */
class Mapper extends DefaultMapper
{

	/**
	 * PK format [table]_id
	 * @param string $table
	 * @return string
	 */
	public function getPrimaryKey($table)
	{
		return $table . "_id";
	}

	/**
	 * @param string $sourceTable
	 * @param string $targetTable
	 * @return string
	 */
	public function getRelationshipColumn($sourceTable, $targetTable)
	{
		return $this->getPrimaryKey($targetTable);
	}

	/**
	 * some_entity -> Model\Entity\SomeEntity
	 * @param string $table
	 * @param \LeanMapper\Row $row
	 * @return string
	 */
	public function getEntityClass($table, Row $row = null)
	{
		return $this->defaultEntityNamespace . '\\' . ucfirst($this->underdashToCamel($table));
	}

	/**
	 * Model\Entity\SomeEntity -> some_entity
	 * @param string $entityClass
	 * @return string
	 */
	public function getTable($entityClass)
	{
		return $this->camelToUnderdash($this->trimNamespace($entityClass));
	}

	/**
	 * someField -> some_field
	 * @param string $entityClass
	 * @param string $field
	 * @return string
	 */
	public function getColumn($entityClass, $field)
	{
		return $this->camelToUnderdash($field);
	}

	/**
	 * some_field -> someField
	 * @param string $table
	 * @param string $column
	 * @return string
	 */
	public function getEntityField($table, $column)
	{
		return $this->underdashToCamel($column);
	}

	/**
	 * Model\Repository\SomeEntityRepository -> some_entity
	 * @param string $repositoryClass
	 * @return string
	 */
	public function getTableByRepositoryClass($repositoryClass)
	{
		$class = preg_replace('#([a-z0-9]+)Repository$#', '$1', $repositoryClass);
		return $this->camelToUnderdash($this->trimNamespace($class));
	}

	/**
	 * camelCase -> underdash_separated.
	 * @param  string
	 * @return string
	 */
	protected function camelToUnderdash($s)
	{
		$s = preg_replace('#(.)(?=[A-Z])#', '$1_', $s);
		$s = strtolower($s);
		$s = rawurlencode($s);
		return $s;
	}

	/**
	 * underdash_separated -> camelCase
	 * @param  string
	 * @return string
	 */
	protected function underdashToCamel($s)
	{
		$s = strtolower($s);
		$s = preg_replace('#_(?=[a-z])#', ' ', $s);
		$s = substr(ucwords('x' . $s), 1);
		$s = str_replace(' ', '', $s);
		return $s;
	}

}
