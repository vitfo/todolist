<?php

/**
 * ToDoList
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author IIVOS <miroslav.mrazek@gmail.com>
 */

namespace Todolist\Model;

use LeanMapper\Repository as LeanRepository,
	LeanMapper\Entity,
	LeanMapper\Exception\InvalidValueException;



/**
 * Provádí operace nad databázovou tabulkou.
 */
abstract class Repository extends LeanRepository
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
	 * Vrátí záznam podle primárního klíče.
	 * 
	 * @param int|Entity $id
	 * @return Entity
	 * @throws InvalidValueException
	 */
	public function get($id)
	{
		if ($id instanceof Entity)
			$id = $id->id;

		$row = $this->connection->select('*')
			->from($this->getTable())
			->where('id = %i', $id)
			->fetch();

		if ($row === false)
		{
			throw new InvalidValueException('Nepodařilo se získat data z databáze.', 404);
		}

		return $this->createEntity($row);
	}
	
	
	/**
	 * Vrátí právě jeden záznam podle podmínky.
	 * 
	 * @param string $by Podmínka
	 * @return Entity
	 * @throws InvalidValueException
	 */
	public function getBy($by)
	{
		$rows = $this->connection->select('*')
			->from($this->getTable())
			->where($by)
			->fetchAll();
		
		if (count($rows) === 1)
		{
			return $this->createEntity($rows[0]);
		}
		elseif (count($rows) > 1)
		{
			throw new InvalidValueException('Databáze vrátila více záznamů.');
		}
		else
		{
			throw new InvalidValueException('Nepodařilo se získat data z databáze.', 404);
		}
	}


	/**
	 * Vrátí pole všech entit.
	 * 
	 * @return Collection
	 */
	public function findAll()
	{
		$entities = $this->connection->select('*')
					->from($this->getTable())
					->fetchAll();
		
		return $this->createEntities($entities);
	}
	
	
	/**
	 * Vrátí pole entit podle podmínky.
	 * 
	 * @param array $by Podmínka
	 * @return Collection
	 */
	public function findBy($by)
	{
		$entities = $this->connection->select('*')
					->from($this->getTable())
					->where($by)
					->fetchAll();
		
		return $this->createEntities($entities);
	}

}
