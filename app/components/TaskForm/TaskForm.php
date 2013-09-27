<?php

namespace App\Components;

use App,
	Model,
	Nette,
	Nette\Application\UI\Form,
	DateTime;

/**
 * Formulář pro vložení nového úkolu
 */
class TaskForm extends Form
{
	/** @var Model\TaskRepository */
	protected $tasks;
	
	public function __construct(Model\TaskRepository $tasks)
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
	 * @param Nette\Application\UI\Form $form
	 */
	public function newTaskFormSubmitted($form)
	{
		$values = $form->getValues();
		
		$values['list_id'] = $this->presenter->request->parameters['id']; // TODO refaktor
		$values['created'] = new DateTime();
		
		$this->tasks->insert($values);
		$this->presenter->redirect('this');
	}
}

