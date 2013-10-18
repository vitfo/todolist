<?php

/**
 * ToDoList
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author IIVOS <miroslav.mrazek@gmail.com>
 */

namespace Todolist;

use Todolist\Components\ListControl,
	Todolist\Components\ListForm,
	Todolist\Components\LogoutControl;


/**
 * List presenter.
 */
final class ListPresenter extends SecuredPresenter
{

	/**
	 * Pohled na seznam a jeho úkoly
	 * 
	 * @param string
	 */
	public function actionList($id = NULL)
	{
		$user = $this->users->get($this->user->id);
		$catalogs = $user->catalogs;
		$this->template->catalogs = $catalogs;
		$this->template->id = $id;
		
		$this['listControl']->listId = $id;
	}
	
	
	/**
	 * Vytvoří komponentu listControl
	 * 
	 * @return ListControl
	 */
	public function createComponentListControl()
	{
		return new ListControl($this->tasks, $this->catalogs);
	}
	
	
	/**
	 * Vytvoří komponentu listForm
	 * 
	 * @return ListForm
	 */
	public function createComponentNewListForm()
	{
		return new ListForm($this->catalogs);
	}
	
	
	/**
	 * Vytvoří komponentu logoutControl
	 * 
	 * @return LogoutControl
	 */
	public function createComponentLogoutControl()
	{
		return new LogoutControl;
	}
	
}
