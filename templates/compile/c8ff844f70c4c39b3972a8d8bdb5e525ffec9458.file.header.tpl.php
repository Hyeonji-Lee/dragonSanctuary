<?php /* Smarty version Smarty-3.1.12, created on 2016-10-17 05:08:53
         compiled from "/home/u289645062/public_html/templates/Bootstrap/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14316124245784fa52a1e028-87390030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8ff844f70c4c39b3972a8d8bdb5e525ffec9458' => 
    array (
      0 => '/home/u289645062/public_html/templates/Bootstrap/header.tpl',
      1 => 1476648442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14316124245784fa52a1e028-87390030',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5784fa52a369a0_62983967',
  'variables' => 
  array (
    'browser_title' => 0,
    'home' => 0,
    'temp' => 0,
    'theme' => 0,
    'header' => 0,
    'css' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784fa52a369a0_62983967')) {function content_5784fa52a369a0_62983967($_smarty_tpl) {?><!-- / / / / / / / / / / Need help with this template?
You can contact me (Kyttias) on AIM, GoogleTalk, Skype, Tumblr, 
DeviantART or @gmail.com. I prefer chatting over AIM, and email 
is your best bet if I've not been recently active on Tumblr or
DeviantART. I can use GoogleTalk or Skype if it is of preference
to you. -->

<!DOCTYPE html>
<html lang="ko"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $_smarty_tpl->tpl_vars['browser_title']->value;?>
</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- / / / / / / / / / FULL CSS RESET -->
 <link href="//cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css" rel="stylesheet">
 <!-- / / / / / / / / / BOOTSTRAP 3 -->
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" title="bootstrap">
 <!-- 
 If you picked out a theme from BootSwatch, find it on BootstrapCDN.com and replace the link above.
 If using themeswitcher.js, make sure the line above always includes title="bootstrap" as an attribute!
 If you make a custom Bootstrap theme at StyleBootstrap.info, observe the lines below as a hint on how to include it.
 Replace the href above if you prefer to use a custom theme with the theme changer, or, delete the line above,
 and include in the same manner as the stylesheet is below. <?php echo $_smarty_tpl->tpl_vars['home']->value;?>
<?php echo $_smarty_tpl->tpl_vars['temp']->value;?>
<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 is this template folder!
 -->
<?php echo $_smarty_tpl->tpl_vars['header']->value->loadFavicon(((string)$_smarty_tpl->tpl_vars['home']->value)."favicon.ico");?>

<?php echo $_smarty_tpl->tpl_vars['header']->value->loadStyle(((string)$_smarty_tpl->tpl_vars['home']->value).((string)$_smarty_tpl->tpl_vars['temp']->value).((string)$_smarty_tpl->tpl_vars['theme']->value)."/DragonSanctuary.css");?>

<?php echo $_smarty_tpl->tpl_vars['header']->value->loadStyle(((string)$_smarty_tpl->tpl_vars['home']->value).((string)$_smarty_tpl->tpl_vars['temp']->value).((string)$_smarty_tpl->tpl_vars['theme']->value)."/style-kyt.css");?>

<?php echo $_smarty_tpl->tpl_vars['header']->value->loadAdditionalStyle();?>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
<?php echo $_smarty_tpl->tpl_vars['header']->value->loadStyle(((string)$_smarty_tpl->tpl_vars['home']->value).((string)$_smarty_tpl->tpl_vars['css']->value)."/tooltip.css");?>

<!--<script src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
<?php echo $_smarty_tpl->tpl_vars['temp']->value;?>
<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/flickerfix-kyt.js""></script>-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/tooltip.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/tabs.js"></script> <!--상점-->
<!--<script>
$(function() { $("#profile").organicTabs(); });-->
</script>
</head>

<?php }} ?>