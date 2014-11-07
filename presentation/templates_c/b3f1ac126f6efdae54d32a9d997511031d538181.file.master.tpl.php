<?php /* Smarty version Smarty-3.1.14, created on 2014-11-05 15:08:30
         compiled from "/vagrant/presentation/templates/master.tpl" */ ?>
<?php /*%%SmartyHeaderCode:558894497545a3d6e7b8717-06310815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3f1ac126f6efdae54d32a9d997511031d538181' => 
    array (
      0 => '/vagrant/presentation/templates/master.tpl',
      1 => 1414583736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '558894497545a3d6e7b8717-06310815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_545a3d6e92c5f7_21678306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545a3d6e92c5f7_21678306')) {function content_545a3d6e92c5f7_21678306($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include '/vagrant/presentation/smarty_plugins/function.load_presentation_object.php';
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