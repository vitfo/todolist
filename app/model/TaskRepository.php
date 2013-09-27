<?php

namespace Model;

use Nette;


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
		
		$this->connection->update($this->table, array('done' => $done))
				->where(array('id' => $id))->execute();
	}
	
	/**
	 * Vrátí úkoly v daném seznamu
	 * 
	 * @param  int $id
	 * @return Nette\Database\Table\Selection
	 */
	public function findByList($id)
	{
		return $this->findBy(array('list_id' => $id));
	}
}