<?php /* Smarty version Smarty-3.1.14, created on 2014-11-05 15:10:33
         compiled from "/vagrant/presentation/templates/modules_set.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1825569675545a3de965fa76-59770339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bec8adcbf200a9006bd810b9ba52837e49c2b19' => 
    array (
      0 => '/vagrant/presentation/templates/modules_set.tpl',
      1 => 1414583736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1825569675545a3de965fa76-59770339',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_545a3de96ce708_92052269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545a3de96ce708_92052269')) {function content_545a3de96ce708_92052269($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include '/vagrant/presentation/smarty_plugins/function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"modules_set",'assign'=>"obj"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['obj']->value->mModules){?>
	<div id="main" class="grid">
		<div class="modules">
		
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['obj']->value->mModules) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<div class="album">
				<div class="image">     
					<img src="./images/<?php echo $_smarty_tpl->tpl_vars['obj']->value->mModules[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['module_image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mModules[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['module_title'];?>
" />
					<div class="albumdetails">
						<span class="albumtitle"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mModules[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['module_title'];?>
</span>
						<span class="artist"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mModules[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['module_leader'];?>
</span>
					</div>
				</div>				
			</div>           
		<?php endfor; endif; ?>
		</div>
		
	</div>
<?php }?><?php }} ?>