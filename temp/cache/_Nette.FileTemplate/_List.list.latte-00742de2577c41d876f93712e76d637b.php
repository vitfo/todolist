<?php //netteCache[01]000378a:2:{s:4:"time";s:21:"0.56166100 1379060578";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkFiles";}i:1;s:54:"C:\xampp\htdocs\todolist\app\templates\List\list.latte";i:2;i:1379060578;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"2855c33 released on 2013-08-28";}}}?><?php

// source file: C:\xampp\htdocs\todolist\app\templates\List\list.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '6p6m457lhu')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbdb776f57b5_content')) { function _lbdb776f57b5_content($_l, $_args) { extract($_args)
?><div class="row">
<div id="lists" class="span5">
	<h2>Seznamy úkolů</h2>
	<ul class="nav nav-list"<?php echo ' id="' . $_control->getSnippetId('list') . '"' ?>>
<?php call_user_func(reset($_l->blocks['_list']), $_l, $template->getParameters()) ?>
	</ul>
</div>

<div id="listForm" class="span5">
	<h2>Nový seznam</h2>
<?php $_ctrl = $_control->getComponent("newListForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
</div>
</div>

<br>

<?php $_ctrl = $_control->getComponent("listControl"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>

<?php
}}

//
// block _list
//
if (!function_exists($_l->blocks['_list'][] = '_lb9741980d82__list')) { function _lb9741980d82__list($_l, $_args) { extract($_args); $_control->validateControl('list')
;$iterations = 0; foreach ($lists as $listItem): ?>		<li<?php if ($_l->tmp = array_filter(array($listItem->id == $id ? 'active' : NULL))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>>
			<a href="<?php echo htmlSpecialChars($_control->link("List:list", array($listItem->id))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($listItem->title, ENT_NOQUOTES) ?></a>
		</li>
<?php $iterations++; endforeach ;
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 