<?php /* Smarty version Smarty-3.1.14, created on 2014-11-09 06:26:50
         compiled from "/vagrant/modules/presentation/templates/searchbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1400368895545c95d7cad250-28769210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c9d5ae24eaff432310576990314ca3408d6267c' => 
    array (
      0 => '/vagrant/modules/presentation/templates/searchbox.tpl',
      1 => 1415514389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1400368895545c95d7cad250-28769210',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_545c95d7cbbe54_02842321',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545c95d7cbbe54_02842321')) {function content_545c95d7cbbe54_02842321($_smarty_tpl) {?>
<div id="searchBox">
	<form method="post" action="?op=Search" id="searchForm">
	<div>
		<p>
			<input maxlength="100" id="searchText" name="searchText" size="25" placeholder="Search for modules..."/>
			<input type="submit" value="Go!" /><br />
		</p>
	</div>
	</form>
</div>




<?php }} ?>