<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:21:20
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\common\trash_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137265034a49035c420-07618110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2873ddc86879ee94dc8fe9f56c4ce12c458140f0' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\common\\trash_list.tpl',
      1 => 1343977389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137265034a49035c420-07618110',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'deletedPages' => 0,
    'page' => 0,
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a4903c7f91_00064592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a4903c7f91_00064592')) {function content_5034a4903c7f91_00064592($_smarty_tpl) {?><table class="table table-striped">
  <tbody>
  <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deletedPages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
	<tr>
		<td><?php echo $_smarty_tpl->getSubTemplate ('common/content_list_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>$_smarty_tpl->tpl_vars['page']->value->type), 0);?>
<?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
</td>
		<td>
			<div class="buttons">
				<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/trash/restore/<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
/"><i class="icon-share icon-blue">&nbsp;</i></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/trash/delete/<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
/"><i class="icon-remove-sign icon-red">&nbsp;</i></a>
				<i id="popover-id-<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
" class="icon-info-sign icon-grey cl-<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
" rel="popoverconstantlist" title=' <?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
' data-content="<?php echo $_smarty_tpl->getSubTemplate ('common/trash_info_popover.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['page']->value), 0);?>
">&nbsp;</i>
			</div>
		</td>
	</tr>
  <?php } ?>   
  </tbody>
</table><?php }} ?>