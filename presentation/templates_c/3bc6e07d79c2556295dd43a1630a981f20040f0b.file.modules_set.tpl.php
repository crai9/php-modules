<?php /* Smarty version Smarty-3.1.14, created on 2014-11-09 02:32:24
         compiled from "/vagrant/modules/presentation/templates/modules_set.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2058922210545c95d7da61a2-04560748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bc6e07d79c2556295dd43a1630a981f20040f0b' => 
    array (
      0 => '/vagrant/modules/presentation/templates/modules_set.tpl',
      1 => 1415500316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2058922210545c95d7da61a2-04560748',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_545c95d7de1560_77004992',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545c95d7de1560_77004992')) {function content_545c95d7de1560_77004992($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include '/vagrant/modules/presentation/smarty_plugins/function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"modules_set",'assign'=>"obj"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['obj']->value->mModules){?>
	<div id="styleChoice" >
		<div id="gridView" class="hidden" onclick="toggleView()">
			<img src="./images/grid.png" class="choice" alt="Grid View" />
		</div>
	</div>
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
					<a href='?op=Details&module_id=<?php echo $_smarty_tpl->tpl_vars['obj']->value->mModules[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['module_id'];?>
' alt='details'>     
					<img src="./images/<?php echo $_smarty_tpl->tpl_vars['obj']->value->mModules[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['module_image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mModules[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['module_title'];?>
" />
					</a>
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
<?php }?>
<?php if (count($_smarty_tpl->tpl_vars['obj']->value->mModuleListPages)>0){?>

<nav>
   <div class='' id='paginationDiv'>
   
      <?php if ($_smarty_tpl->tpl_vars['obj']->value->mLinkToPreviousPage){?>
         <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToPreviousPage;?>
">
            &laquo</a>
      <?php }?>

      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['m'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['m']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['name'] = 'm';
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['obj']->value->mModuleListPages) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total']);
?>
         <?php if ($_smarty_tpl->tpl_vars['obj']->value->mPage==$_smarty_tpl->getVariable('smarty')->value['section']['m']['index_next']){?>
            <strong><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['m']['index_next'];?>
</strong>
         <?php }else{ ?>
             <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mModuleListPages[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']];?>
">
                <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['m']['index_next'];?>
</a>
         <?php }?>
      <?php endfor; endif; ?>

      <?php if ($_smarty_tpl->tpl_vars['obj']->value->mLinkToNextPage){?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToNextPage;?>
">&raquo</a>
      <?php }?>
      
   </div>
   </nav>
<?php }?><?php }} ?>