<?php

/**
 * TODOLIST
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author IIVOS <miroslav.mrazek@gmail.com>
 */

namespace Todolist\Components;

use Todolist\Model\CatalogRepository,
	Todolist\Model\Catalog,
	Nette\Application\UI\Form,
	Nette\Templating\FileTemplate,
	Nette\Latte\Engine;


/**
 * Formulář pro vložení nového seznamu
 */
class CatalogForm extends Form
{

	/** @var CatalogRepository */
	protected $catalogs;


	public function __construct(CatalogRepository $catalogs)
	{
		parent::__construct();

		$this->addText('title', 'Název:')
			->addRule(Form::FILLED, "Zadejte název seznamu.")
			->addRule(Form::MIN_LENGTH, "Název musí mít alespoň %s znaků.", 3);
		$this->addSubmit('ok', 'Vytvořit');
		$this->onSuccess[] = callback($this, 'newCatalogFormSubmitted');

		$this->catalogs = $catalogs;
	}


	public function render()
	{
		$template = new FileTemplate;
		$template->registerFilter(new Engine);
		$template->_control = $this->presenter;
		$template->setFile(__DIR__ . '/catalogForm.latte');
		$template->render();
	}


	/**
	 * Obsluha formuláře NewCatalogForm
	 * 
	 * @param Form $form
	 */
	public function newCatalogFormSubmitted($form)
	{
		$values = $form->getValues();

		$catalog = new Catalog($values);
		$catalog->user = $this->presenter->user->id;

		$this->catalogs->persist($catalog);
		$this->presenter->redirect('this');
	}

}
