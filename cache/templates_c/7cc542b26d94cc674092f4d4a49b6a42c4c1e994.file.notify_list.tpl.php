<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:21:04
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\common\notify_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:235895034a4803a08b6-15576704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cc542b26d94cc674092f4d4a49b6a42c4c1e994' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\common\\notify_list.tpl',
      1 => 1345452230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235895034a4803a08b6-15576704',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notifications' => 0,
    'notify' => 0,
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a4804034a9_12817789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a4804034a9_12817789')) {function content_5034a4804034a9_12817789($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\serwer\\www\\winducms/data/functions\\function.L.php';
?><?php if (notifyDB::count()>0){?>
<table class="table table-striped tablesort">
<thead>
	<tr>
		<th><?php echo smarty_function_L(array('key'=>"admin.notify_list.tpl.notification"),$_smarty_tpl);?>
</th>
		<th><?php echo smarty_function_L(array('key'=>"admin.notify_list.tpl.dateofading"),$_smarty_tpl);?>
</th>
		<th><?php echo smarty_function_L(array('key'=>"admin.notify_list.tpl.priority"),$_smarty_tpl);?>
</th>
		<th></th>
	</tr>
</thead>
<tbody>
  <?php  $_smarty_tpl->tpl_vars['notify'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notify']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notify']->key => $_smarty_tpl->tpl_vars['notify']->value){
$_smarty_tpl->tpl_vars['notify']->_loop = true;
?>
	<tr>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['notify']->value->content;?>

		</td>
		<td><?php echo $_smarty_tpl->tpl_vars['notify']->value->insertTime;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['notify']->value->priority;?>
</td>
		<td>
			<div class="buttons">
				<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/system/closeNotify/<?php echo $_smarty_tpl->tpl_vars['notify']->value->id;?>
/"><i class="icon-remove icon-red">&nbsp;</i></a>
			</div>
		</td>
	</tr>
  <?php } ?>   
  </tbody>
</table>
<?php }?><?php }} ?>