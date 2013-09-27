<?php //netteCache[01]000397a:2:{s:4:"time";s:21:"0.73042200 1379060578";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkFiles";}i:1;s:73:"C:\xampp\htdocs\todolist\app\components\LogoutControl\logoutControl.latte";i:2;i:1379060578;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"2855c33 released on 2013-08-28";}}}?><?php

// source file: C:\xampp\htdocs\todolist\app\components\LogoutControl\logoutControl.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'lp76rjtsjb')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
<a href="<?php echo htmlSpecialChars($_presenter->link("Sign:out")) ?>">Odhlášení</a>