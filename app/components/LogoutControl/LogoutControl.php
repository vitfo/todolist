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
	
	/** defaultní pohled */
	public function render()
	{
		$this->template->setFile(__DIR__ . '/logoutControl.latte');
		$this->template->render();
	}
	
	/** vykreslit jako tlačítko */
	public function renderButton()
	{
		$this->template->setFile(__DIR__ . '/logoutControlButton.latte');
		$this->template->render();
	}
}

