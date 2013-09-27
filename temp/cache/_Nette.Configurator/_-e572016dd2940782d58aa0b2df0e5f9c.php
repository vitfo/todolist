<?php //netteCache[01]003744a:2:{s:4:"time";s:21:"0.31092500 1379063342";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkFiles";}i:1;a:50:{i:0;s:47:"C:\xampp\htdocs\todolist\app\config\config.neon";i:1;s:46:"C:\xampp\htdocs\todolist\app\config\model.neon";i:2;s:53:"C:\xampp\htdocs\todolist\app\config\config.local.neon";i:3;s:66:"C:\xampp\htdocs\todolist\libs\Nette\DI\Extensions\PhpExtension.php";i:4;s:72:"C:\xampp\htdocs\todolist\libs\Nette\DI\Extensions\ConstantsExtension.php";i:5;s:68:"C:\xampp\htdocs\todolist\libs\Nette\DI\Extensions\NetteExtension.php";i:6;s:73:"C:\xampp\htdocs\todolist\libs\Nette\DI\Extensions\ExtensionsExtension.php";i:7;s:73:"C:\xampp\htdocs\todolist\libs\dibi\bridges\Nette\DibiNette21Extension.php";i:8;s:53:"C:\xampp\htdocs\todolist\libs\Nette\common\Object.php";i:9;s:67:"C:\xampp\htdocs\todolist\libs\Nette\DI\Extensions\NetteAccessor.php";i:10;s:65:"C:\xampp\htdocs\todolist\libs\Nette\Caching\Storages\IJournal.php";i:11;s:68:"C:\xampp\htdocs\todolist\libs\Nette\Caching\Storages\FileJournal.php";i:12;s:56:"C:\xampp\htdocs\todolist\libs\Nette\Caching\IStorage.php";i:13;s:68:"C:\xampp\htdocs\todolist\libs\Nette\Caching\Storages\FileStorage.php";i:14;s:59:"C:\xampp\htdocs\todolist\libs\Nette\Http\RequestFactory.php";i:15;s:53:"C:\xampp\htdocs\todolist\libs\Nette\Http\IRequest.php";i:16;s:52:"C:\xampp\htdocs\todolist\libs\Nette\Http\Request.php";i:17;s:54:"C:\xampp\htdocs\todolist\libs\Nette\Http\IResponse.php";i:18;s:53:"C:\xampp\htdocs\todolist\libs\Nette\Http\Response.php";i:19;s:52:"C:\xampp\htdocs\todolist\libs\Nette\Http\Context.php";i:20;s:52:"C:\xampp\htdocs\todolist\libs\Nette\Http\Session.php";i:21;s:61:"C:\xampp\htdocs\todolist\libs\Nette\Security\IUserStorage.php";i:22;s:56:"C:\xampp\htdocs\todolist\libs\Nette\Http\UserStorage.php";i:23;s:53:"C:\xampp\htdocs\todolist\libs\Nette\Security\User.php";i:24;s:63:"C:\xampp\htdocs\todolist\libs\Nette\Application\Application.php";i:25;s:69:"C:\xampp\htdocs\todolist\libs\Nette\Application\IPresenterFactory.php";i:26;s:68:"C:\xampp\htdocs\todolist\libs\Nette\Application\PresenterFactory.php";i:27;s:59:"C:\xampp\htdocs\todolist\libs\Nette\Application\IRouter.php";i:28;s:52:"C:\xampp\htdocs\todolist\libs\Nette\Mail\IMailer.php";i:29;s:59:"C:\xampp\htdocs\todolist\libs\Nette\Mail\SendmailMailer.php";i:30;s:54:"C:\xampp\htdocs\todolist\libs\dibi\libs\DibiObject.php";i:31;s:58:"C:\xampp\htdocs\todolist\libs\dibi\libs\DibiConnection.php";i:32;s:61:"C:\xampp\htdocs\todolist\libs\Nette\Diagnostics\IBarPanel.php";i:33;s:67:"C:\xampp\htdocs\todolist\libs\dibi\bridges\Nette\DibiNettePanel.php";i:34;s:53:"C:\xampp\htdocs\todolist\app\router\RouterFactory.php";i:35;s:49:"C:\xampp\htdocs\todolist\app\model\Repository.php";i:36;s:53:"C:\xampp\htdocs\todolist\app\model\ListRepository.php";i:37;s:53:"C:\xampp\htdocs\todolist\app\model\TaskRepository.php";i:38;s:53:"C:\xampp\htdocs\todolist\app\model\UserRepository.php";i:39;s:63:"C:\xampp\htdocs\todolist\libs\Nette\Security\IAuthenticator.php";i:40;s:52:"C:\xampp\htdocs\todolist\app\model\Authenticator.php";i:41;s:52:"C:\xampp\htdocs\todolist\libs\Nette\DI\Container.php";i:42;s:76:"C:\xampp\htdocs\todolist\libs\Nette\Application\Diagnostics\RoutingPanel.php";i:43;s:50:"C:\xampp\htdocs\todolist\libs\Nette\Forms\Form.php";i:44;s:53:"C:\xampp\htdocs\todolist\libs\Nette\Caching\Cache.php";i:45;s:52:"C:\xampp\htdocs\todolist\libs\Nette\Latte\Engine.php";i:46;s:52:"C:\xampp\htdocs\todolist\libs\Nette\Mail\Message.php";i:47;s:63:"C:\xampp\htdocs\todolist\libs\Nette\Templating\FileTemplate.php";i:48;s:59:"C:\xampp\htdocs\todolist\libs\Nette\Templating\Template.php";i:49;s:70:"C:\xampp\htdocs\todolist\libs\Nette\Security\Diagnostics\UserPanel.php";}i:2;i:1379063342;}}}?><?php
// source: C:\xampp\htdocs\todolist\app/config/config.neon 
// source: C:\xampp\htdocs\todolist\app/config/config.local.neon 

/**
 * @property Nette\Application\Application $application
 * @property Model\Authenticator $authenticator
 * @property Nette\Caching\Storages\FileStorage $cacheStorage
 * @property Nette\DI\Container $container
 * @property Nette\Http\Request $httpRequest
 * @property Nette\Http\Response $httpResponse
 * @property Model\ListRepository $listRepository
 * @property Nette\DI\Extensions\NetteAccessor $nette
 * @property Nette\Application\IRouter $router
 * @property App\RouterFactory $routerFactory
 * @property Nette\Http\Session $session
 * @property Model\TaskRepository $taskRepository
 * @property Nette\Security\User $user
 * @property Model\UserRepository $userRepository
 */
class SystemContainer extends Nette\DI\Container
{

	protected $meta = array(
		'types' => array(
			'nette\\object' => array(
				'nette',
				'nette.cacheJournal',
				'cacheStorage',
				'nette.httpRequestFactory',
				'httpRequest',
				'httpResponse',
				'nette.httpContext',
				'session',
				'nette.userStorage',
				'user',
				'application',
				'nette.presenterFactory',
				'nette.mailer',
				'listRepository',
				'taskRepository',
				'userRepository',
				'authenticator',
				'container',
			),
			'nette\\di\\extensions\\netteaccessor' => array('nette'),
			'nette\\caching\\storages\\ijournal' => array('nette.cacheJournal'),
			'nette\\caching\\storages\\filejournal' => array('nette.cacheJournal'),
			'nette\\caching\\istorage' => array('cacheStorage'),
			'nette\\caching\\storages\\filestorage' => array('cacheStorage'),
			'nette\\http\\requestfactory' => array('nette.httpRequestFactory'),
			'nette\\http\\irequest' => array('httpRequest'),
			'nette\\http\\request' => array('httpRequest'),
			'nette\\http\\iresponse' => array('httpResponse'),
			'nette\\http\\response' => array('httpResponse'),
			'nette\\http\\context' => array('nette.httpContext'),
			'nette\\http\\session' => array('session'),
			'nette\\security\\iuserstorage' => array('nette.userStorage'),
			'nette\\http\\userstorage' => array('nette.userStorage'),
			'nette\\security\\user' => array('user'),
			'nette\\application\\application' => array('application'),
			'nette\\application\\ipresenterfactory' => array('nette.presenterFactory'),
			'nette\\application\\presenterfactory' => array('nette.presenterFactory'),
			'nette\\application\\irouter' => array('router'),
			'nette\\mail\\imailer' => array('nette.mailer'),
			'nette\\mail\\sendmailmailer' => array('nette.mailer'),
			'dibiobject' => array('dibi.connection', 'dibi.panel'),
			'dibiconnection' => array('dibi.connection'),
			'nette\\diagnostics\\ibarpanel' => array('dibi.panel'),
			'dibinettepanel' => array('dibi.panel'),
			'app\\routerfactory' => array('routerFactory'),
			'model\\repository' => array(
				'listRepository',
				'taskRepository',
				'userRepository',
			),
			'model\\listrepository' => array('listRepository'),
			'model\\taskrepository' => array('taskRepository'),
			'model\\userrepository' => array('userRepository'),
			'nette\\security\\iauthenticator' => array('authenticator'),
			'model\\authenticator' => array('authenticator'),
			'nette\\di\\container' => array('container'),
		),
	);


	public function __construct()
	{
		parent::__construct(array(
			'appDir' => 'C:\\xampp\\htdocs\\todolist\\app',
			'wwwDir' => 'C:\\xampp\\htdocs\\todolist\\www',
			'debugMode' => TRUE,
			'productionMode' => FALSE,
			'environment' => 'development',
			'consoleMode' => FALSE,
			'container' => array(
				'class' => 'SystemContainer',
				'parent' => 'Nette\\DI\\Container',
				'accessors' => TRUE,
			),
			'tempDir' => 'C:\\xampp\\htdocs\\todolist\\app/../temp',
		));
	}


	/**
	 * @return Nette\Application\Application
	 */
	public function createServiceApplication()
	{
		$service = new Nette\Application\Application($this->getService('nette.presenterFactory'), $this->getService('router'), $this->getService('httpRequest'), $this->getService('httpResponse'));
		$service->catchExceptions = FALSE;
		$service->errorPresenter = 'Error';
		!headers_sent() && header('X-Powered-By: Nette Framework');;
		Nette\Application\Diagnostics\RoutingPanel::initializePanel($service);
		Nette\Diagnostics\Debugger::getBar()->addPanel(new Nette\Application\Diagnostics\RoutingPanel($this->getService('router'), $this->getService('httpRequest')));
		return $service;
	}


	/**
	 * @return Model\Authenticator
	 */
	public function createServiceAuthenticator()
	{
		$service = new Model\Authenticator($this->getService('dibi.connection'));
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\FileStorage
	 */
	public function createServiceCacheStorage()
	{
		$service = new Nette\Caching\Storages\FileStorage('C:\\xampp\\htdocs\\todolist\\app/../temp/cache', $this->getService('nette.cacheJournal'));
		return $service;
	}


	/**
	 * @return Nette\DI\Container
	 */
	public function createServiceContainer()
	{
		return $this;
	}


	/**
	 * @return DibiConnection
	 */
	public function createServiceDibi__connection()
	{
		$service = new DibiConnection(array(
			'host' => 'localhost',
			'username' => 'root',
			'password' => NULL,
			'database' => 'todolist',
			'lazy' => TRUE,
		));
		$service->onEvent[] = array(
			$this->getService('dibi.panel'),
			'logEvent',
		);
		return $service;
	}


	/**
	 * @return DibiNettePanel
	 */
	public function createServiceDibi__panel()
	{
		$service = new DibiNettePanel;
		Nette\Diagnostics\Debugger::getBar()->addPanel($service);
		Nette\Diagnostics\Debugger::getBlueScreen()->addPanel('DibiNettePanel::renderException');
		return $service;
	}


	/**
	 * @return Nette\Http\Request
	 */
	public function createServiceHttpRequest()
	{
		$service = $this->getService('nette.httpRequestFactory')->createHttpRequest();
		if (!$service instanceof Nette\Http\Request) {
			throw new Nette\UnexpectedValueException('Unable to create service \'httpRequest\', value returned by factory is not Nette\\Http\\Request type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Http\Response
	 */
	public function createServiceHttpResponse()
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	/**
	 * @return Model\ListRepository
	 */
	public function createServiceListRepository()
	{
		$service = new Model\ListRepository($this->getService('dibi.connection'));
		return $service;
	}


	/**
	 * @return Nette\DI\Extensions\NetteAccessor
	 */
	public function createServiceNette()
	{
		$service = new Nette\DI\Extensions\NetteAccessor($this);
		return $service;
	}


	/**
	 * @return Nette\Forms\Form
	 */
	public function createServiceNette__basicForm()
	{
		$service = new Nette\Forms\Form;
		return $service;
	}


	/**
	 * @return Nette\Caching\Cache
	 */
	public function createServiceNette__cache($namespace = NULL)
	{
		$service = new Nette\Caching\Cache($this->getService('cacheStorage'), $namespace);
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\FileJournal
	 */
	public function createServiceNette__cacheJournal()
	{
		$service = new Nette\Caching\Storages\FileJournal('C:\\xampp\\htdocs\\todolist\\app/../temp');
		return $service;
	}


	/**
	 * @return Nette\Http\Context
	 */
	public function createServiceNette__httpContext()
	{
		$service = new Nette\Http\Context($this->getService('httpRequest'), $this->getService('httpResponse'));
		return $service;
	}


	/**
	 * @return Nette\Http\RequestFactory
	 */
	public function createServiceNette__httpRequestFactory()
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy(array());
		return $service;
	}


	/**
	 * @return Nette\Latte\Engine
	 */
	public function createServiceNette__latte()
	{
		$service = new Nette\Latte\Engine;
		return $service;
	}


	/**
	 * @return Nette\Mail\Message
	 */
	public function createServiceNette__mail()
	{
		$service = new Nette\Mail\Message;
		$service->setMailer($this->getService('nette.mailer'));
		return $service;
	}


	/**
	 * @return Nette\Mail\SendmailMailer
	 */
	public function createServiceNette__mailer()
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	/**
	 * @return Nette\Application\PresenterFactory
	 */
	public function createServiceNette__presenterFactory()
	{
		$service = new Nette\Application\PresenterFactory('C:\\xampp\\htdocs\\todolist\\app', $this);
		$service->setMapping(array('*' => 'App\\*Module\\*Presenter'));
		return $service;
	}


	/**
	 * @return Nette\Templating\FileTemplate
	 */
	public function createServiceNette__template()
	{
		$service = new Nette\Templating\FileTemplate;
		$service->registerFilter($this->createServiceNette__latte());
		$service->registerHelperLoader('Nette\\Templating\\Helpers::loader');
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\PhpFileStorage
	 */
	public function createServiceNette__templateCacheStorage()
	{
		$service = new Nette\Caching\Storages\PhpFileStorage('C:\\xampp\\htdocs\\todolist\\app/../temp/cache', $this->getService('nette.cacheJournal'));
		return $service;
	}


	/**
	 * @return Nette\Http\UserStorage
	 */
	public function createServiceNette__userStorage()
	{
		$service = new Nette\Http\UserStorage($this->getService('session'));
		return $service;
	}


	/**
	 * @return Nette\Application\IRouter
	 */
	public function createServiceRouter()
	{
		$service = $this->getService('routerFactory')->createRouter();
		if (!$service instanceof Nette\Application\IRouter) {
			throw new Nette\UnexpectedValueException('Unable to create service \'router\', value returned by factory is not Nette\\Application\\IRouter type.');
		}
		return $service;
	}


	/**
	 * @return App\RouterFactory
	 */
	public function createServiceRouterFactory()
	{
		$service = new App\RouterFactory;
		return $service;
	}


	/**
	 * @return Nette\Http\Session
	 */
	public function createServiceSession()
	{
		$service = new Nette\Http\Session($this->getService('httpRequest'), $this->getService('httpResponse'));
		$service->setExpiration('14 days');
		return $service;
	}


	/**
	 * @return Model\TaskRepository
	 */
	public function createServiceTaskRepository()
	{
		$service = new Model\TaskRepository($this->getService('dibi.connection'));
		return $service;
	}


	/**
	 * @return Nette\Security\User
	 */
	public function createServiceUser()
	{
		$service = new Nette\Security\User($this->getService('nette.userStorage'), $this->getService('authenticator'));
		Nette\Diagnostics\Debugger::getBar()->addPanel(new Nette\Security\Diagnostics\UserPanel($service));
		return $service;
	}


	/**
	 * @return Model\UserRepository
	 */
	public function createServiceUserRepository()
	{
		$service = new Model\UserRepository($this->getService('dibi.connection'));
		return $service;
	}


	public function initialize()
	{
		date_default_timezone_set('Europe/Prague');
		Nette\Caching\Storages\FileStorage::$useDirectories = TRUE;
		$this->getService("session")->exists() && $this->getService("session")->start();
		header('X-Frame-Options: SAMEORIGIN');
	}

}
