<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:21:06
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\common\config_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203595034a4827ad7c2-76025626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4d8ab80da53f15864f76faa4c45d413d6aaca0f' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\common\\config_list.tpl',
      1 => 1345561082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203595034a4827ad7c2-76025626',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'variable' => 0,
    'HOME' => 0,
    'class' => 0,
    'tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a4828216f1_67610542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a4828216f1_67610542')) {function content_5034a4828216f1_67610542($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\serwer\\www\\winducms/data/functions\\function.L.php';
?><table class="table table-striped tablesort">
<thead>
	<tr>
		<th><?php echo smarty_function_L(array('key'=>"admin.config.tpl.constant"),$_smarty_tpl);?>
</th>
		<th><?php echo smarty_function_L(array('key'=>"admin.config.controller.value"),$_smarty_tpl);?>
</th>
		<th><?php echo smarty_function_L(array('key'=>"admin.config.controller.description"),$_smarty_tpl);?>
</th>
		<th></th>
	</tr>
</thead>
<tbody>
  <?php  $_smarty_tpl->tpl_vars['variable'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variable']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variable']->key => $_smarty_tpl->tpl_vars['variable']->value){
$_smarty_tpl->tpl_vars['variable']->_loop = true;
?>
	<tr>
		<td><i class="color-icons icons-pill icon-margin">&nbsp;</i><?php echo $_smarty_tpl->tpl_vars['variable']->value->name;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['variable']->value->value;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['variable']->value->shortDescription;?>
</td>
		<td>
			<div class="buttons">
				<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
/editConfig/<?php echo $_smarty_tpl->tpl_vars['variable']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
"><i class="icon-pencil icon-blue">&nbsp;</i></a>
				<a href="#tab4" rel="popoverconstantlist" title=' <?php echo $_smarty_tpl->tpl_vars['variable']->value->name;?>
' data-content="<div class='pad'><?php echo $_smarty_tpl->tpl_vars['variable']->value->description;?>
</div>">	
					<i class="icon-question-sign icon-grey" >&nbsp;</i>
				</a>
			</div>
		</td>
	</tr>
  <?php } ?>   
  </tbody>
</table><?php }} ?>