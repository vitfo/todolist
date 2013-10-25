<?php

/**
 * ToDoList
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author IIVOS <miroslav.mrazek@gmail.com>
 */

namespace Todolist\Components;


/**
 * Komponenta logoutControl
 */
class LogoutControl extends BaseControl
{
	
	/**
	 * Provede odhlášení uživatele
	 */
	public function handleLogout()
	{
		$this->presenter->getUser()->logout();
		$this->presenter->flashMessage('Byl jste odhlášen.');
		$this->presenter->redirect('Sign:in');
	}
	
	
	/**
	 * Defaultní pohled
	 */
	public function render()
	{
		$this->template->setFile(__DIR__ . '/logoutControl.latte');
		$this->template->render();
	}
	
	/**
	 * Vykreslí komponentu jako tlačítko
	 */
	public function renderButton()
	{
		$this->template->setFile(__DIR__ . '/logoutControlButton.latte');
		$this->template->render();
	}
}

