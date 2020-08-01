<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 17:59:16
         compiled from "/home/u289645062/public_html/templates/acp/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2802532885784ec39781c62-35670199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '907056be69f17fed84f8ca0d5f9a8e3fcb0d47ae' => 
    array (
      0 => '/home/u289645062/public_html/templates/acp/template.tpl',
      1 => 1468346117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2802532885784ec39781c62-35670199',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5784ec397af1e4_90894021',
  'variables' => 
  array (
    'root' => 0,
    'temp' => 0,
    'theme' => 0,
    'sidebar' => 0,
    'document_title' => 0,
    'document_content' => 0,
    'home' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784ec397af1e4_90894021')) {function content_5784ec397af1e4_90894021($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['root']->value).((string)$_smarty_tpl->tpl_vars['temp']->value).((string)$_smarty_tpl->tpl_vars['theme']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>
<div>
<div class="banner"><center>
<img src="http://i40.tinypic.com/64gk1k.jpg" alt="Mysidia PHP Adoptables" title="Mysidia Adoptables" />
</center></div>

<nav class="navbar navbar-default navbar-fixed-top"><div width="25%" id="logo"><strong>MyMysidia</strong> Admin</div></nav>

	<!-- / / / / / / / / / SIDEBAR -->
	<div class="col-sm-3" style="margin-top: 35px;">
		<div class="panel panel-default" style="padding: 10px;">
			<?php echo $_smarty_tpl->tpl_vars['sidebar']->value;?>

		</div>
	</div>
	<!-- SIDEBAR END / / / / / / / / / -->

	<!-- / / / / / / / / / CONTENTS --> 
	<div class="col-xs-12 col-sm-9" style="margin-top: 20px;">
		<h2><?php echo $_smarty_tpl->tpl_vars['document_title']->value;?>
</h2>
		<p>	<?php echo $_smarty_tpl->tpl_vars['document_content']->value;?>
</p>
	</div>
	<!-- CONTENTS END / / / / / / / / / -->
</div>

<center><b>MyMysidia</b> Powered By <a href="http://mysidiaadoptables.com">Mysidia Adoptables</a> &copy;Copyright 2011-2014.</center>
	
<script src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
<?php echo $_smarty_tpl->tpl_vars['temp']->value;?>
<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/media/js-kyt.js"></script>

</body>
</html><?php }} ?>