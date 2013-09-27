<?php

namespace App;

use App\Components\ListControl,
	App\Components\ListForm,
	App\Components\LogoutControl;


/**
 * List presenter.
 */
final class ListPresenter extends SecuredPresenter
{

	/**
	 * Pohled na seznam a jeho úkoly
	 */
	public function actionList($id = NULL)
	{
		$lists = $this->lists->findByUser($this->user->id);
		$this->template->lists = $lists;
		$this->template->id = $id;
		
		$this['listControl']->listId = $id;
	}
	
	
	/**
	 * Vytvoří komponentu listControl
	 * 
	 * @return ListControl
	 */
	public function createComponentListControl()
	{
		return new ListControl($this->tasks, $this->lists);
	}
	
	
	/**
	 * Vytvoří komponentu listForm
	 * 
	 * @return ListForm
	 */
	public function createComponentNewListForm()
	{
		return new ListForm($this->lists);
	}
	
	
	/**
	 * Vytvoří komponentu logoutControl
	 * 
	 * @return LogoutControl
	 */
	public function createComponentLogoutControl()
	{
		return new LogoutControl;
	}
	
}
