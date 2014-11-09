<?php /* Smarty version Smarty-3.1.14, created on 2014-11-09 02:50:28
         compiled from "/vagrant/modules/presentation/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89732667545c95d7e1be04-98130765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25afc0be37a3476ab9cb11cb9fbfd3541997ebf4' => 
    array (
      0 => '/vagrant/modules/presentation/templates/footer.tpl',
      1 => 1415501416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89732667545c95d7e1be04-98130765',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_545c95d7e28a29_92390689',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545c95d7e28a29_92390689')) {function content_545c95d7e28a29_92390689($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include '/vagrant/modules/presentation/smarty_plugins/function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"footer",'assign'=>"obj"),$_smarty_tpl);?>

<div id="footer">
	<div id="LastUpdate"> 			<!-- Details of Last Update -->
		<p>Page created: <strong><?php echo $_smarty_tpl->tpl_vars['obj']->value->mDate;?>
</strong><br>
		Last updated: <strong>19th October 2014</strong><br>
		Created by: <strong>Craig Miller</strong></p>

	</div>
</div>

<?php }} ?>