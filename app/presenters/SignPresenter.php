<?php

/**
 * ToDoList
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author IIVOS <miroslav.mrazek@gmail.com>
 */

namespace Todolist;

use Nette\Application\UI\Form,
	Todolist\Components\ILoginFormFactory;


/**
 * Sign in/out presenters.
 */
class SignPresenter extends BasePresenter
{
	
	/** 
	 * @var Todolist\Components\ILoginFormFactory
	 * @inject
	 */
	public $loginFormFactory;
	
	
	/** Pohled In */
	public function renderIn()
	{
	}
	

	/**
	 * LoginForm factory.
	 * @return Form
	 */
	protected function createComponentLoginForm()
	{
		return $this->loginFormFactory->create();
	}


	public function actionOut()
	{
		$this->getUser()->logout();
		$this->flashMessage('Byl jste odhlášen.');
		$this->redirect('in');
	}

}
