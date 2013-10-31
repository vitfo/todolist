<?php

/**
 * TODOLIST
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author MMR <miroslav.mrazek@gmail.com>
 */

namespace Todolist;

use Todolist\Model\TaskService,
	Todolist\Components\CatalogControl,
	Todolist\Components\CatalogForm,
	Todolist\Components\LogoutControl;


/**
 * Catalog presenter.
 */
final class CatalogPresenter extends SecuredPresenter
{

	/**
	 * @var Todolist\Model\TaskService
	 * @inject
	 */
	public $taskService;


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

		$this['catalogControl']->catalogId = $id;
	}


	/**
	 * Vytvoří komponentu catalog
	 * 
	 * @return CatalogControl
	 */
	public function createComponentCatalogControl()
	{
		return new CatalogControl($this->tasks, $this->taskService, $this->catalogs);
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
	 * Vytvoří komponentu logoutControl
	 * 
	 * @return LogoutControl
	 */
	public function createComponentLogoutControl()
	{
		return new LogoutControl;
	}

}
