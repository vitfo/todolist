<?php

/**
 * ToDoList
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author IIVOS <miroslav.mrazek@gmail.com>
 */

namespace Todolist;

use Todolist\Model\UserRepository,
	Todolist\Model\TaskRepository,
	Todolist\Model\ListRepository;


/**
 * Presenter, který pustí dál jen přihlášeného uživatele
 */
abstract class SecuredPresenter extends BasePresenter
{
	
	/** @var UserRepository */
	protected $users;
	
	/** @var TaskRepository */
	protected $tasks;
	
	/** @var ListRepository */
	protected $lists;
	
	
	public function inject(UserRepository $users,
							TaskRepository $tasks,
							ListRepository $lists)
	{
		$this->users = $users;
		$this->tasks = $tasks;
		$this->lists = $lists;
	}
	
	
	public function startup()
	{
		parent::startup();
		
		if(!$this->user->isLoggedIn())
		{
			$this->flashMessage("Bez přihlášení nelze vstoupit do aplikace.");
			$this->redirect ('Sign:in');
		}
	}


	


}
