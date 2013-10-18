<?php

/**
 * ToDoList
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author IIVOS <miroslav.mrazek@gmail.com>
 */

namespace Todolist\Components;

use Todolist\Model\TaskRepository,
	Todolist\Model\CatalogRepository,
	Nette\Application\BadRequestException,
	Todolist\Components\TaskForm;


/**
 * Komponenta catalogComponent
 */
class CatalogComponent extends BaseComponent
{
	
	/** @var TaskRepository */
	protected $tasks;
	
	/** @var CatalogRepository */
	protected $catalogs;
	
	/** @var int */
	public $catalogId;
	
	
	public function __construct(TaskRepository $tasks,
								CatalogRepository $catalogs)
	{
		parent::__construct();
		$this->tasks = $tasks;
		$this->catalogs = $catalogs;
	}
	
	
	/** defaultní pohled */
	public function render()
	{
		$this->template->setFile(__DIR__ . '/catalogComponent.latte');
		
		$this->template->catalogId = $this->catalogId;
		if (!empty($this->catalogId))
		{
			$catalog = $this->catalogs->findBy(array('id' => $this->catalogId))->fetch();

			if(empty($catalog))
				throw new BadRequestException("Seznam neexistuje.");

			$this->template->catalog = $catalog;

			$tasks = $this->tasks->findByCatalog($this->catalogId);
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

