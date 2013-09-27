<?php

namespace App\Components;

use App,
	Model,
	Nette,
	Nette\Application\UI\Form;

/**
 * Formulář pro vložení nového seznamu
 */
class ListForm extends Form
{
	/** @var Model\ListRepository */
	protected $lists;
	
	public function __construct(Model\ListRepository $lists)
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
		$template = new \Nette\Templating\FileTemplate;
		$template->registerFilter(new Nette\Latte\Engine);
		$template->_control = $this->presenter;
		$template->setFile(__DIR__.'/template.latte');
		$template->render();
	}


	
	/**
	 * Obsluha formuláře NewListForm
	 * 
	 * @param Nette\Application\UI\Form $form
	 */
	public function newListFormSubmitted($form)
	{
		$values = $form->getValues();
		
		$values['user_id'] = $this->presenter->user->id;
		$this->lists->insert($values)->execute();
		$this->presenter->redirect('this');			
	}
}

