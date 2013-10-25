<?php

/**
 * TODOLIST
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author IIVOS <miroslav.mrazek@gmail.com>
 */

namespace Todolist\Model;

use Nette,
	DibiConnection,
	Nette\Utils\Strings;


/**
 * Třída zajišťující ověření uživatele.
 */
class Authenticator extends Nette\Object implements Nette\Security\IAuthenticator
{
	
	/** @var DibiConnection */
	private $database; # používáme LeanMapper\Connection, ale to dědí od DibiConnection


	public function __construct(DibiConnection $database)
	{
		$this->database = $database;
	}


	/**
	 * Ověří uživatele.
	 * 
	 * @param array přihlašovací údaje
	 * @return Nette\Security\Identity
	 * @throws Nette\Security\AuthenticationException
	 */
	public function authenticate(array $credentials)
	{
		list($username, $password) = $credentials;
		$row = $this->database->query('
				SELECT *
				FROM [user]
				WHERE [username]=%s', $username
			)->fetch();

		if (!$row) {
			throw new Nette\Security\AuthenticationException('The username is incorrect.', self::IDENTITY_NOT_FOUND);
		}

//		if ($row->password !== $this->calculateHash($password, $row->password)) {
//			throw new Nette\Security\AuthenticationException('The password is incorrect.', self::INVALID_CREDENTIAL);
//		}
		
		return new Nette\Security\Identity($row->id, array(), array('name' => $row->name));
	}



	/**
	 * Vytvoří hash hesla.
	 * 
	 * @param string heslo
	 * @param string salt
	 * @return string
	 */
	public static function calculateHash($password, $salt = NULL)
	{
		if ($password === Strings::upper($password)) { // perhaps caps lock is on
			$password = Strings::lower($password);
		}
		return crypt($password, $salt ?: '$2a$07$' . Strings::random(22));
	}

}
