<?php

namespace Model;

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
	 * @return Nette\Database\Table\Selection
	 */
	public function findByUser($id)
	{
		return $this->findBy(array('user_id' => $id));
	}
}