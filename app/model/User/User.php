<?php

/**
 * ToDoList
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author IIVOS <miroslav.mrazek@gmail.com>
 */

namespace Todolist\Model;


/**
 * Entita reprezentujici uživatele
 * 
 * @property Catalog[] $catalogs m:belongsToMany
 * 
 * @property int       $id
 * @property string    $username
 * @property string    $password
 * @property string    $name
 */
class User extends Entity
{

}