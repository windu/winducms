<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:21:26
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\common\users_system_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34985034a4966af7f5-41175674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acd60d8996679b8db23fc27d22d9b902980a7aef' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\common\\users_system_list.tpl',
      1 => 1345561082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34985034a4966af7f5-41175674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usersSystem' => 0,
    'user' => 0,
    'userTypesArray' => 0,
    'HOME' => 0,
    'loggedIn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a4967266a9_25264349',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a4967266a9_25264349')) {function content_5034a4967266a9_25264349($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\serwer\\www\\winducms/data/functions\\function.L.php';
?><table class="table table-striped tablesort">
	<thead>
	<tr>
		<th><?php echo smarty_function_L(array('key'=>"admin.users.controller.username"),$_smarty_tpl);?>
</th>
		<th><?php echo smarty_function_L(array('key'=>"admin.users.ctpl.authorization"),$_smarty_tpl);?>
</th>
		<th></th>
	</tr>
	</thead>
  <tbody> 
  <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usersSystem']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
	<tr>
		<td><i class="color-icons icons-user-black icon-margin">&nbsp;</i><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['userTypesArray']->value[$_smarty_tpl->tpl_vars['user']->value->type];?>
</td>
		<td>
			<div class="buttons">
				<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/users/editUserSystem/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
/#tab1"><i class="icon-pencil icon-blue">&nbsp;</i></a>
				<?php if ($_smarty_tpl->tpl_vars['loggedIn']->value->email!=$_smarty_tpl->tpl_vars['user']->value->email){?><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/users/deleteSystemUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
/#tab1"><i class="icon-remove-sign icon-red">&nbsp;</i></a><?php }else{ ?>&nbsp;<i class="icon-remove-sign icon-grey">&nbsp;</i>&nbsp;<?php }?>
			</div>
		</td>
	</tr>
  <?php } ?>   
  </tbody>
</table><?php }} ?>