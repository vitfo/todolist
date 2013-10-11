<?php

/**
 * ToDoList
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author IIVOS <miroslav.mrazek@gmail.com>
 */

namespace Todolist\Model;


/**
 * Třida pro práci s úkoly
 */
class TaskRepository extends Repository
{
	
	/**
	 * Nastaví úkol jako (ne)splněný
	 * 
	 * @param  int    $id
	 * @param  [bool] $done
	 */
	public function setDone($id, $done = TRUE)
	{
		if(empty($done))
			$done = FALSE;
		
		$this->connection
			->update($this->table, ['done' => $done])
			->where(['id' => $id])
			->execute();
	}
	
	
	/**
	 * Vrátí úkoly v daném seznamu
	 * 
	 * @param  int $id
	 * @return array
	 */
	public function findByList($id)
	{
		return $this->findBy(['list_id' => $id]);
	}
	
}