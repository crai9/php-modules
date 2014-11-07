<?php /* Smarty version Smarty-3.1.14, created on 2014-11-04 15:38:51
         compiled from "C:\xampp\htdocs\php-modules-master\presentation\templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:250145458e4fbec24a0-82445859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '779b33ea268e181d09d119ef905693368354939f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php-modules-master\\presentation\\templates\\menu.tpl',
      1 => 1414583735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250145458e4fbec24a0-82445859',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5458e4fbec79b7_50395521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5458e4fbec79b7_50395521')) {function content_5458e4fbec79b7_50395521($_smarty_tpl) {?>
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
		<a id="Menu_StudentAdminLink" href="studentadmin.php">Student Admin</a>
	</li>   	
	</ul>
</div>

<?php }} ?>