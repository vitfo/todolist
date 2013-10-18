<?php

/**
 * ToDoList
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author IIVOS <miroslav.mrazek@gmail.com>
 */

namespace Todolist\Model;


/**
 * Entita reprezentujici úkol
 * 
 * @property Catalog  $catalog m:hasOne
 * 
 * @property int      $id
 * @property string   $text
 * @property boolean  $done
 * @property DateTime $created
 */
class Task extends Entity
{

}
