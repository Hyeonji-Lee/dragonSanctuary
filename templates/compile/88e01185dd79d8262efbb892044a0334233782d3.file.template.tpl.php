<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 14:40:17
         compiled from "/home/u289645062/public_html/templates/Bootstrap/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8728718345784fa529dce79-03237255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88e01185dd79d8262efbb892044a0334233782d3' => 
    array (
      0 => '/home/u289645062/public_html/templates/Bootstrap/template.tpl',
      1 => 1468334408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8728718345784fa529dce79-03237255',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5784fa52a1abf4_01709426',
  'variables' => 
  array (
    'root' => 0,
    'temp' => 0,
    'theme' => 0,
    'path' => 0,
    'site_name' => 0,
    'menu' => 0,
    'sidebar' => 0,
    'document_title' => 0,
    'document_content' => 0,
    'footer' => 0,
    'home' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784fa52a1abf4_01709426')) {function content_5784fa52a1abf4_01709426($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['root']->value).((string)$_smarty_tpl->tpl_vars['temp']->value).((string)$_smarty_tpl->tpl_vars['theme']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>
 <!-- / / / / / / / / / PAGE WRAP -->
<div id="wrap">
 <!-- / / / / / / / / / TOP NAVIGATION -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Site Name and Toggle Button -->
  <div class="navbar-header" style="margin-left: 10%;">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
	<a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
index"><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</a>
  </div>
  <!-- Responsive Toggle -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
  <!-- ddmenu -->
  <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>
 
  </div> 
  </nav>
 <!-- TOP NAVIGATION END / / / / / / / / / -->

 <!-- / / / / / / / / / SIDEBAR -->
<div class="col-sm-3" style="margin-top: 65px;">
<div class="panel panel-default" style="padding: 10px;">
<?php echo $_smarty_tpl->tpl_vars['sidebar']->value;?>

</div>
</div>
 <!-- SIDEBAR END / / / / / / / / / -->

 <!-- / / / / / / / / / CONTENTS --> 
<div class="col-xs-12 col-sm-9" style="margin-top: 50px;">
<h2><?php echo $_smarty_tpl->tpl_vars['document_title']->value;?>
</h2>
<p>	<?php echo $_smarty_tpl->tpl_vars['document_content']->value;?>
</p>
</div>
 <!-- CONTENTS END / / / / / / / / / -->

</div>
 <!-- PAGE WRAP END / / / / / / / / / -->

 <!-- / / / / / / / / / FOOTER -->
<div id="footer" class="container text-center" style="padding: 0px; margin: 10px;">
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

</div>
 <!-- FOOTER WRAP END / / / / / / / / / --> 

<!-- / / / / / / / / / SCRIPT LINKS --> 
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> <!-- REQUIRED -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script> <!-- REQUIRED -->
	<script src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
<?php echo $_smarty_tpl->tpl_vars['temp']->value;?>
<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js-kyt.js"></script> <!-- REQUIRED -->
	<script src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
<?php echo $_smarty_tpl->tpl_vars['temp']->value;?>
<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/mods-kyt.js"></script>

<!-- Theme Switcher - comment out this line to remove: -->
<!-- <script src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
<?php echo $_smarty_tpl->tpl_vars['temp']->value;?>
<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/themeswitcher-kyt.js"></script> -->
<!-- End Theme Switcher -->
<!-- INCLUDE YOUR JQUERY PLUGINS AND MODS BELOW THIS LINE -->

<!-- SCRIPT LINKS END / / / / / / / / / --> 
 
</body></html><?php }} ?>