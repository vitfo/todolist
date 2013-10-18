<?php

/**
 * ToDoList
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author IIVOS <miroslav.mrazek@gmail.com>
 */

namespace Todolist;

use Todolist\Components\CatalogComponent,
	Todolist\Components\CatalogForm,
	Todolist\Components\LogoutComponent;


/**
 * Catalog presenter.
 */
final class CatalogPresenter extends SecuredPresenter
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
		
		$this['catalogComponent']->catalogId = $id;
	}
	
	
	/**
	 * Vytvoří komponentu catalogComponent
	 * 
	 * @return CatalogComponent
	 */
	public function createComponentCatalogComponent()
	{
		return new CatalogComponent($this->tasks, $this->catalogs);
	}
	
	
	/**
	 * Vytvoří komponentu catalogForm
	 * 
	 * @return CatalogForm
	 */
	public function createComponentNewCatalogForm()
	{
		return new CatalogForm($this->catalogs);
	}
	
	
	/**
	 * Vytvoří komponentu logoutComponent
	 * 
	 * @return LogoutComponent
	 */
	public function createComponentLogoutComponent()
	{
		return new LogoutComponent;
	}
	
}
