<?php

/**
 * ToDoList
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author IIVOS <miroslav.mrazek@gmail.com>
 */

namespace Todolist\Components;

use Todolist\Model\TaskRepository,
	Todolist\Model\Task,
	Nette\Application\UI\Form,
	DateTime;


/**
 * Formulář pro vložení nového úkolu
 */
class TaskForm extends Form
{
	
	/** @var TaskRepository */
	protected $tasks;
	
	
	public function __construct(TaskRepository $tasks)
	{
		parent::__construct();
		
        $this->addText('text', 'Popis:')
			->addRule(Form::FILLED, "Zadejte popis úkolu.")
			->addRule(Form::MIN_LENGTH, "Popis musí mít alespoň %s znaků.", 5);
		$this->addSubmit('ok', 'Vytvořit');
        $this->onSuccess[] = callback($this, 'newTaskFormSubmitted');
		
		$this->tasks = $tasks;
	}
	
	
	/**
	 * Obsluha formuláře NewTaskForm
	 * 
	 * @param Form $form
	 */
	public function newTaskFormSubmitted($form)
	{
		$values = $form->getValues();
		
		$task = new Task($values);
		$task->catalog = $this->presenter->request->parameters['id']; # TODO: refaktor
		$task->created = new DateTime;
		
		$this->tasks->persist($task);
		$this->presenter->redirect('this');	
	}
}

