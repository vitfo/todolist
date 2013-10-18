<?php

/**
 * ToDoList
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author IIVOS <miroslav.mrazek@gmail.com>
 */

namespace Todolist\Components;

use Todolist\Model\CatalogRepository,
	Nette\Application\UI\Form,
	Nette\Templating\FileTemplate,
	Nette\Latte\Engine;


/**
 * Formulář pro vložení nového seznamu
 */
class ListForm extends Form
{
	
	/** @var ListRepository */
	protected $lists;
	
	
	public function __construct(CatalogRepository $lists)
	{
		parent::__construct();
        $this->addText('title', 'Název:')
			->addRule(Form::FILLED, "Zadejte název seznamu.")
			->addRule(Form::MIN_LENGTH, "Název musí mít alespoň %s znaků.", 3);
		$this->addSubmit('ok', 'Vytvořit');
		$this->onSuccess[] = callback($this, 'newListFormSubmitted');
		
		$this->lists = $lists;
	}


	public function render()
	{
		$template = new FileTemplate;
		$template->registerFilter(new Engine);
		$template->_control = $this->presenter;
		$template->setFile(__DIR__.'/template.latte');
		$template->render();
	}

	
	/**
	 * Obsluha formuláře NewListForm
	 * 
	 * @param Form $form
	 */
	public function newListFormSubmitted($form)
	{
		$values = $form->getValues();
		
		$values['user_id'] = $this->presenter->user->id;
		$this->lists->insert($values)->execute();
		$this->presenter->redirect('this');			
	}
}

