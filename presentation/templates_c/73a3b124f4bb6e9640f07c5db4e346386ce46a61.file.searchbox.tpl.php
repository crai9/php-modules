<?php /* Smarty version Smarty-3.1.14, created on 2014-11-05 15:08:30
         compiled from "/vagrant/presentation/templates/searchbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:361911169545a3d6ea30808-19674833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73a3b124f4bb6e9640f07c5db4e346386ce46a61' => 
    array (
      0 => '/vagrant/presentation/templates/searchbox.tpl',
      1 => 1414583736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '361911169545a3d6ea30808-19674833',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_545a3d6ea38c41_47053350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545a3d6ea38c41_47053350')) {function content_545a3d6ea38c41_47053350($_smarty_tpl) {?>
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