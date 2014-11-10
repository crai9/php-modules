<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 01:39:14
         compiled from "/vagrant/modules/presentation/templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1490287128545c95d7c6bdf7-78777373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3f5d603661a89273707d9f69543c6c2b6e45cc5' => 
    array (
      0 => '/vagrant/modules/presentation/templates/menu.tpl',
      1 => 1415583543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1490287128545c95d7c6bdf7-78777373',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_545c95d7c7b0e8_39660560',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545c95d7c7b0e8_39660560')) {function content_545c95d7c7b0e8_39660560($_smarty_tpl) {?>
<div id="main-nav">
	<?php echo $_smarty_tpl->getSubTemplate ("searchbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <ul id="menu">
	<li>
		<a id="Menu_HomeLink" href="Index.php">Home</a>
	</li>
	<li>
		<a id="Menu_ModulesLink" href="?op=Modules">Modules</a>
	</li>
	<li>
		<a id="Menu_ModuleLeadersLink" href="?op=ModuleLeaders">Module Leaders</a>
	</li>   
	<li>
		<a id="Menu_ModuleAdminLink" href="moduleadmin.php">Module Admin</a>
	</li>     
	<li>
		<a id="Menu_StudentAdminLink" href="#">Student Admin</a>
	</li>   	
	</ul>
</div>

<?php }} ?>