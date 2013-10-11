<?php

/**
 * ToDoList
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author IIVOS <miroslav.mrazek@gmail.com>
 */

namespace Todolist\Model;

use Nette;


/**
 * Třida pro práci se seznamy úkolů
 */
class ListRepository extends Repository
{
	
	/**
	 * Vrátí seznamy podle uživatele
	 * 
	 * @param  int $id
	 * @return array
	 */
	public function findByUser($id)
	{
		return $this->findBy(['user_id' => $id]);
	}
}