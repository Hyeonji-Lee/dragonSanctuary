<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 13:07:10
         compiled from "/home/u289645062/public_html/templates/main/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:480626835784eb7ebe0553-28125663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d9fa596f66466868c7d36e6d48110090948578f' => 
    array (
      0 => '/home/u289645062/public_html/templates/main/header.tpl',
      1 => 1468328401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '480626835784eb7ebe0553-28125663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'browser_title' => 0,
    'home' => 0,
    'header' => 0,
    'temp' => 0,
    'theme' => 0,
    'css' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5784eb7ebfa9a6_35865692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784eb7ebfa9a6_35865692')) {function content_5784eb7ebfa9a6_35865692($_smarty_tpl) {?><html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['browser_title']->value;?>
</title>
<?php echo $_smarty_tpl->tpl_vars['header']->value->loadFavicon(((string)$_smarty_tpl->tpl_vars['home']->value)."favicon.ico");?>

<?php echo $_smarty_tpl->tpl_vars['header']->value->loadStyle(((string)$_smarty_tpl->tpl_vars['home']->value).((string)$_smarty_tpl->tpl_vars['temp']->value).((string)$_smarty_tpl->tpl_vars['theme']->value)."/media/style-city.css");?>

<?php echo $_smarty_tpl->tpl_vars['header']->value->loadStyle(((string)$_smarty_tpl->tpl_vars['home']->value).((string)$_smarty_tpl->tpl_vars['css']->value)."/menu.css");?>

<?php echo $_smarty_tpl->tpl_vars['header']->value->loadAdditionalStyle();?>

<!--[if lte IE 6]>
<?php echo $_smarty_tpl->tpl_vars['header']->value->loadStyle(((string)$_smarty_tpl->tpl_vars['home']->value).((string)$_smarty_tpl->tpl_vars['css']->value)."/media/dropdown_ie.css");?>

<![endif]-->
</head><?php }} ?>