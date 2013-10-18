<?php

/**
 * ToDoList
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author IIVOS <miroslav.mrazek@gmail.com>
 */

namespace Todolist\Components;


/**
 * Komponenta logoutComponent
 */
class LogoutComponent extends BaseComponent
{
	
	/** defaultní pohled */
	public function render()
	{
		$this->template->setFile(__DIR__ . '/logoutComponent.latte');
		$this->template->render();
	}
	
	/** vykreslit jako tlačítko */
	public function renderButton()
	{
		$this->template->setFile(__DIR__ . '/logoutComponentButton.latte');
		$this->template->render();
	}
}

