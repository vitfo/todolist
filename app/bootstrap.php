<?php

/**
 * ToDoList
 * Školní projekt k seznámení s Nette a ORM
 * 
 * @author IIVOS <miroslav.mrazek@gmail.com>
 */


/**
 * Přípravné rutiny pro spuštění aplikace.
 */

# Načteme třídy Nette
require __DIR__ . '/../libs/autoload.php';

# Definujeme si zkratku pro rychlé dumpování do DebugBaru
function barDump($var, $title='')
{
    $backtrace = debug_backtrace();
    $source = (isset($backtrace[1]['class'])) ?
        $backtrace[1]['class'] :
        basename($backtrace[0]['file']);
    $line = $backtrace[0]['line'];
    if($title !== '')
        $title .= ' – ';
    return Nette\Diagnostics\Debugger::barDump($var, $title . $source . ' (' . $line .')');
}

# Vytvoříme nový konfigurátor
$configurator = new Nette\Config\Configurator;

# Povolíme ladící a logovací funkce
//$configurator->setDebugMode(TRUE);  # vynutí debug mód i na produkčním serveru
$configurator->enableDebugger(__DIR__ . '/../log');

# Zapneme a nakonfigurujeme RobotLoader
$configurator->setTempDirectory(__DIR__ . '/../temp');
$configurator->createRobotLoader()
	->addDirectory(__DIR__)              # APP_DIR
	->addDirectory(__DIR__ . '/../libs') # LIBS_DIR
	->register();

# Načteme konfigurační soubory
$configurator->addConfig(__DIR__ . '/config/config.neon');
$configurator->addConfig(__DIR__ . '/config/config.local.neon');

# Z připraveného konfigurátoru vytvoříme a vrátíme DI kontejner
return $configurator->createContainer();
