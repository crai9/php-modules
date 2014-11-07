<?php /* Smarty version Smarty-3.1.14, created on 2014-11-04 16:44:37
         compiled from "C:\xampp\htdocs\php-modules-master\presentation\templates\categories_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116225458eab1d01166-39643574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6e0c204099878d54e1b4543b3e2267e3721de9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php-modules-master\\presentation\\templates\\categories_list.tpl',
      1 => 1415115871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116225458eab1d01166-39643574',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5458eab1d6f610_12149581',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5458eab1d6f610_12149581')) {function content_5458eab1d6f610_12149581($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\xampp\\htdocs\\php-modules-master/presentation/smarty_plugins\\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"categories_list",'assign'=>"obj"),$_smarty_tpl);?>

<div>
	<h2>Categories</h2>
	<?php if ($_smarty_tpl->tpl_vars['obj']->value->mCategories){?>
		<ul>
		
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['obj']->value->mCategories) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
		<li>
			
			<?php if ($_smarty_tpl->tpl_vars['obj']->value->mSearchString){?>
				<a href="?op=Filter&category=<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['module_category'];?>
&searchText=<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSearchString;?>
">
			<?php }else{ ?>
				<a href="?op=Filter&category=<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['module_category'];?>
"> 
			<?php }?>			
			<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['module_category'];?>
</a>&nbsp;
			(<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['kount'];?>
)
		</li>
		<?php endfor; endif; ?>
		</ul>
		
	<?php }?>
</div>



<?php }} ?>