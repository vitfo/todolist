<?php

namespace App;

use Nette,
	Model;


/**
 * Presenter, který pustí dál jen přihlášeného uživatele
 */
abstract class SecuredPresenter extends BasePresenter
{
	
	/** @var Model\UserRepository */
	protected $users;
	
	/** @var Model\TaskRepository */
	protected $tasks;
	
	/** @var Model\ListRepository */
	protected $lists;
	
	
	public function inject(Model\UserRepository $users,
			Model\TaskRepository $tasks,
			Model\ListRepository $lists)
	{
		$this->users = $users;
		$this->tasks = $tasks;
		$this->lists = $lists;
	}
	
	
	public function startup() {
		parent::startup();
		
		if(!$this->user->isLoggedIn())
		{
			$this->flashMessage("Bez přihlášení nelze vstoupit do aplikace.");
			$this->redirect ('Sign:in');
		}
	}


	


}
