<?php

/**
 * ToDoList
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author IIVOS <miroslav.mrazek@gmail.com>
 */

namespace Todolist\Components;

use Todolist\Model\TaskRepository,
	Todolist\Model\ListRepository,
	Nette\Application\BadRequestException,
	Todolist\Components\TaskForm;


/**
 * Komponenta listControl
 */
class ListControl extends BaseControl
{
	
	/** @var TaskRepository */
	protected $tasks;
	
	/** @var ListRepository */
	protected $lists;
	
	/** @var int */
	public $listId;
	
	
	public function __construct(TaskRepository $tasks,
								ListRepository $lists)
	{
		parent::__construct();
		$this->tasks = $tasks;
		$this->lists = $lists;
	}
	
	
	/** defaultní pohled */
	public function render()
	{
		$this->template->setFile(__DIR__ . '/listControl.latte');
		
		$this->template->listId = $this->listId;
		if (!empty($this->listId))
		{
			$list = $this->lists->findBy(array('id' => $this->listId))->fetch();

			if(empty($list))
				throw new BadRequestException("Seznam neexistuje.");

			$this->template->list = $list;

			$tasks = $this->tasks->findByList($this->listId);
			$this->template->tasks = $tasks;
		}
		
		$this->template->render();
	}
	
	
	/**
	 * Signál, který nastaví úkol jako (ne)splněný
	 * 
	 * @param int  $id
	 * @param bool $done
	 */
	public function handleSetDone($taskId, $done)
	{
		$this->tasks->setDone($taskId, $done);
		if($this->presenter->isAjax())
		{
			$this->invalidateControl('tasks');
		}
		else
		{
			$this->presenter->redirect('this');
			
		}
	}
	
	
	/**
	 * Vytvoří komponentu newTaskForm
	 * 
	 * @return TaskForm
	 */
	public function createComponentNewTaskForm()
	{
		return new TaskForm($this->tasks);
	}
	
}

