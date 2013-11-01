<?php

/**
 * TODOLIST
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author MMR <miroslav.mrazek@gmail.com>
 */

namespace Todolist\Components;

use Todolist\Model\TaskRepository,
	Todolist\Model\TaskService,
	Todolist\Model\CatalogRepository,
	Todolist\Components\TaskForm,
	Todolist\Components\ITaskFormFactory,
	Nette\InvalidArgumentException;


/**
 * Komponenta catalogControl
 */
class CatalogControl extends BaseControl
{

	/** @var TaskRepository */
	protected $tasks;

	/** @var TaskService */
	protected $taskService;

	/** @var CatalogRepository */
	protected $catalogs;

	/** @var int */
	public $catalogId;
	
	/** @var ITaskFormFactory */
	protected $taskFormFactory;


	
	public function __construct(TaskRepository $tasks,
								TaskService $taskService,
								CatalogRepository $catalogs,
								ITaskFormFactory $taskFormFactory)
	{
		parent::__construct();
		$this->tasks = $tasks;
		$this->taskService = $taskService;
		$this->catalogs = $catalogs;
		$this->taskFormFactory = $taskFormFactory;
	}


	/** defaultní pohled */
	public function render()
	{
		$this->template->setFile(__DIR__ . '/catalogControl.latte');

		$this->template->catalogId = $this->catalogId;
		if (!empty($this->catalogId)) {
			$catalog = $this->catalogs->get($this->catalogId);

			$this->template->catalog = $catalog;

			$tasks = $catalog->tasks;
			$this->template->tasks = $tasks;
		}

		$this->template->render();
	}


	/**
	 * Signál, který nastaví úkol jako (ne)splněný
	 * 
	 * @param int    $id
	 * @param string $done 'yes'|'no'
	 */
	public function handleSetDone($taskId, $done)
	{
		if ($done === "yes") {
			$done = TRUE;
		}
		elseif ($done === "no") {
			$done = FALSE;
		}
		else {
			throw new InvalidArgumentException("Parametr 'done' může nabývat jen hodnot 'yes', nebo 'no'.");
		}

		$this->taskService->setDone($taskId, $done);
		
		if ($this->presenter->isAjax()) {
			$this->invalidateControl('tasks');
		}
		else {
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
		return $this->taskFormFactory->create();
	}

}


# ---------------------------------------------------------------------------- #

/**
 * Rozhranní pro generovanou továrničku
 */
interface ICatalogControlFactory
{

	/** @return CatalogControl */
	function create();

}