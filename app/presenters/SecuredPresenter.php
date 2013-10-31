<?php

/**
 * TODOLIST
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author MMR <miroslav.mrazek@gmail.com>
 */

namespace Todolist;

use Todolist\Model\UserRepository,
	Todolist\Model\TaskRepository,
	Todolist\Model\CatalogRepository;


/**
 * Presenter, který pustí dál jen přihlášeného uživatele
 */
abstract class SecuredPresenter extends BasePresenter
{

	/**
	 * @var Todolist\Model\UserRepository
	 * @inject
	 */
	public $users;

	/**
	 * @var Todolist\Model\TaskRepository
	 * @inject
	 */
	public $tasks;

	/**
	 * @var Todolist\Model\CatalogRepository
	 * @inject
	 */
	public $catalogs;


	public function startup()
	{
		parent::startup();

		if (!$this->user->isLoggedIn()) {
			$this->flashMessage("Bez přihlášení nelze vstoupit do aplikace.");
			$this->redirect('Application:login');
		}
	}

}
