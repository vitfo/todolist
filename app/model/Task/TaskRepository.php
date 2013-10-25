<?php

/**
 * TODOLIST
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
	 * Metoda nastaví úkol jako (ne)splněný
	 * 
	 * @param int     $id
	 * @param boolean $done
	 */
	public function setDone($id, $done = TRUE)
	{
		$task = $this->get($id);
		$task->done = $done;
		$this->persist($task);
	}

}