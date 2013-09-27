<?php

namespace Model;

use Nette,
	DibiConnection,
	DibiFluent;



/**
 * Provádí operace nad databázovou tabulkou.
 */
abstract class Repository extends Nette\Object
{
	/** @var DibiConnection */
	protected $connection;
	
	/** @var string|NULL */
	protected $table = NULL;



	public function __construct(DibiConnection $db)
	{
		$this->connection = $db;
		if(is_null($this->table))
		{
			$this->table = $this->getTable();
		}
	}



	/**
	 * Vrací název tabulky.
	 * @return string
	 */
	protected function getTable()
	{
		// název tabulky odvodíme z názvu třídy
		preg_match('#(\w+)Repository$#', get_class($this), $m);
		return lcfirst($m[1]);
	}



	/**
	 * Vrací všechny řádky z tabulky.
	 * @return DibiFluent
	 */
	public function findAll()
	{
		return $this->connection->select('*')->from($this->getTable());
	}



	/**
	 * Vrací řádky podle filtru, např. array('name' => 'John').
	 * @return DibiFluent
	 */
	public function findBy(array $by)
	{
		return $this->findAll()->where($by);
	}
	
	
	/**
	 * Vloží záznam do tabulky
	 * 
	 * @param array $values
	 */
	public function insert(\Traversable $values)
	{
		return $this->connection->insert($this->table, $values);
	}

}
