<?php /* Smarty version Smarty-3.1.14, created on 2014-11-07 09:50:15
         compiled from "/vagrant/modules/presentation/templates/master.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166014188545c95d7998443-90863241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83d0e116a2b978f143655e60a5ed610bc2b97ab4' => 
    array (
      0 => '/vagrant/modules/presentation/templates/master.tpl',
      1 => 1414583736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166014188545c95d7998443-90863241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_545c95d7b5ccb5_23800399',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545c95d7b5ccb5_23800399')) {function content_545c95d7b5ccb5_23800399($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include '/vagrant/modules/presentation/smarty_plugins/function.load_presentation_object.php';
?>
<?php  $_config = new Smarty_Internal_Config("site.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"master",'assign'=>"obj"),$_smarty_tpl);?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Martin L Gallacher" />
	<meta name="keywords" content="Module, Catalogue" />
	<meta name="description" content="Module Catalogue" />
	<link rel="stylesheet" type="text/css" href="./Styles/styles2014.css"
	    title="Default" media="all" />
	<script src="./scripts/modules2014.js"></script>		
	<title><?php echo $_smarty_tpl->getConfigVariable('site_title');?>
</title>
</head>
<body>
	<div id="container">
		<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
		<div id="sidebar">
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['obj']->value->mSideBar, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
        
		</div>
	
		<div id="content">
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['obj']->value->mContents, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
	
		<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</body>
</html>
<?php }} ?>