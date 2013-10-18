<?php

/**
 * ToDoList
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author IIVOS <miroslav.mrazek@gmail.com>
 */

namespace Todolist\Model;


/**
 * Třída pro práci se seznamy úkolů
 */
class CatalogRepository extends Repository
{
	
	protected function getTable()
	{
		return 'list';
	}


}