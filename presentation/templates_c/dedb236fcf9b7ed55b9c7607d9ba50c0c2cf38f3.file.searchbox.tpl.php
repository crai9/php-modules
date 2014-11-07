<?php /* Smarty version Smarty-3.1.14, created on 2014-11-04 15:38:51
         compiled from "C:\xampp\htdocs\php-modules-master\presentation\templates\searchbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160555458e4fbf05690-71888080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dedb236fcf9b7ed55b9c7607d9ba50c0c2cf38f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php-modules-master\\presentation\\templates\\searchbox.tpl',
      1 => 1414583735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160555458e4fbf05690-71888080',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5458e4fbf08280_30527203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5458e4fbf08280_30527203')) {function content_5458e4fbf08280_30527203($_smarty_tpl) {?>
<div id="searchBox">
	<form method="post" action="?op=Search" id="searchForm">
	<div>
		<p>
			<input maxlength="100" id="searchText" name="searchText" size="25" />
			<input type="submit" value="Go!" /><br />
		</p>
	</div>
	</form>
</div>




<?php }} ?>