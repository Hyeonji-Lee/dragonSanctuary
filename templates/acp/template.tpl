{include file="{$root}{$temp}{$theme}/header.tpl"}

<body>
<div>
<div class="banner"><center>
<img src="http://i40.tinypic.com/64gk1k.jpg" alt="Mysidia PHP Adoptables" title="Mysidia Adoptables" />
</center></div>

<nav class="navbar navbar-default navbar-fixed-top"><div width="25%" id="logo"><strong>MyMysidia</strong> Admin</div></nav>

	<!-- / / / / / / / / / SIDEBAR -->
	<div class="col-sm-3" style="margin-top: 35px;">
		<div class="panel panel-default" style="padding: 10px;">
			{$sidebar}
		</div>
	</div>
	<!-- SIDEBAR END / / / / / / / / / -->

	<!-- / / / / / / / / / CONTENTS --> 
	<div class="col-xs-12 col-sm-9" style="margin-top: 20px;">
		<h2>{$document_title}</h2>
		<p>	{$document_content}</p>
	</div>
	<!-- CONTENTS END / / / / / / / / / -->
</div>

<center><b>MyMysidia</b> Powered By <a href="http://mysidiaadoptables.com">Mysidia Adoptables</a> &copy;Copyright 2011-2014.</center>
	
<script src="{$home}{$temp}{$theme}/media/js-kyt.js"></script>

</body>
</html>