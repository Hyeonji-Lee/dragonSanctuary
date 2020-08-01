<?php /* Smarty version Smarty-3.1.12, created on 2016-10-16 19:09:41
         compiled from "/home/u289645062/public_html/templates/acp/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16116594465784ec397b2244-95552448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07e2870a678716704c904e31774c12e0af13058a' => 
    array (
      0 => '/home/u289645062/public_html/templates/acp/header.tpl',
      1 => 1476560960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16116594465784ec397b2244-95552448',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5784ec397c7ef7_46125501',
  'variables' => 
  array (
    'browser_title' => 0,
    'home' => 0,
    'header' => 0,
    'temp' => 0,
    'theme' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784ec397c7ef7_46125501')) {function content_5784ec397c7ef7_46125501($_smarty_tpl) {?><html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['browser_title']->value;?>
</title>
<?php echo $_smarty_tpl->tpl_vars['header']->value->loadFavicon(((string)$_smarty_tpl->tpl_vars['home']->value)."favicon.ico");?>

<?php echo $_smarty_tpl->tpl_vars['header']->value->loadStyle(((string)$_smarty_tpl->tpl_vars['home']->value).((string)$_smarty_tpl->tpl_vars['temp']->value).((string)$_smarty_tpl->tpl_vars['theme']->value)."/media/acp-style.css");?>

<?php echo $_smarty_tpl->tpl_vars['header']->value->loadStyle(((string)$_smarty_tpl->tpl_vars['home']->value).((string)$_smarty_tpl->tpl_vars['temp']->value).((string)$_smarty_tpl->tpl_vars['theme']->value)."/media/DragonSanctuary.css");?>

<?php echo $_smarty_tpl->tpl_vars['header']->value->loadScript(((string)$_smarty_tpl->tpl_vars['home']->value).((string)$_smarty_tpl->tpl_vars['temp']->value).((string)$_smarty_tpl->tpl_vars['theme']->value)."/media/jquery.min.js");?>

<?php echo $_smarty_tpl->tpl_vars['header']->value->loadScript(((string)$_smarty_tpl->tpl_vars['home']->value).((string)$_smarty_tpl->tpl_vars['temp']->value).((string)$_smarty_tpl->tpl_vars['theme']->value)."/media/bootstrap.min.js");?>

<?php echo $_smarty_tpl->tpl_vars['header']->value->loadScript(((string)$_smarty_tpl->tpl_vars['home']->value).((string)$_smarty_tpl->tpl_vars['js']->value)."/acp.js");?>


</head><?php }} ?>