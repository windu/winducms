<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:21:26
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\common\users_types_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:300085034a496798ef1-45202170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27f729c0eb143751c1d6e473ead394cc661c9eb3' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\common\\users_types_list.tpl',
      1 => 1345561082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300085034a496798ef1-45202170',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userTypes' => 0,
    'userType' => 0,
    'userTypesArray' => 0,
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a496805e60_93086369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a496805e60_93086369')) {function content_5034a496805e60_93086369($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\serwer\\www\\winducms/data/functions\\function.L.php';
?><table class="table table-striped tablesort">
	<thead>
	<tr>
		<th><?php echo smarty_function_L(array('key'=>"admin.users.common.tpl.typesofauth"),$_smarty_tpl);?>
</th>
		<th><?php echo smarty_function_L(array('key'=>"admin.users.common.tpl.extension"),$_smarty_tpl);?>
</th>
		<th><?php echo smarty_function_L(array('key'=>"admin.users.common.tpl.regexp"),$_smarty_tpl);?>
</th>
		<th></th>
	</tr>
	</thead>
  <tbody>
  <?php  $_smarty_tpl->tpl_vars['userType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userType']->key => $_smarty_tpl->tpl_vars['userType']->value){
$_smarty_tpl->tpl_vars['userType']->_loop = true;
?>
	<tr>
		<td><i class="color-icons icons-safe--arrow"> </i> <?php echo $_smarty_tpl->tpl_vars['userType']->value->name;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['userTypesArray']->value[$_smarty_tpl->tpl_vars['userType']->value->extends];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['userType']->value->regexp;?>
</td>
		<td>
			<div class="buttons">
				<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/users/editUserType/<?php echo $_smarty_tpl->tpl_vars['userType']->value->id;?>
/#tab3"><i class="icon-pencil icon-blue">&nbsp;</i></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/users/deleteUserType/<?php echo $_smarty_tpl->tpl_vars['userType']->value->id;?>
/"><i class="icon-remove-sign icon-red">&nbsp;</i></a>
			</div>
		</td>		
	</tr>
  <?php } ?>   
  </tbody>
</table><?php }} ?>