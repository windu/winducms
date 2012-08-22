<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:21:20
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\common\lang_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:224895034a4902d3bc8-62756350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87b2e12f0692e62abd8c395de90938ea7ad311ba' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\common\\lang_list.tpl',
      1 => 1345561082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '224895034a4902d3bc8-62756350',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langs' => 0,
    'lang' => 0,
    'HOME' => 0,
    'languagePath' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a4903482a6_63838715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a4903482a6_63838715')) {function content_5034a4903482a6_63838715($_smarty_tpl) {?><table class="table table-striped">
  <tbody>
  <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
	<tr>
		<td>
			<?php echo $_smarty_tpl->getSubTemplate ('common/content_list_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>$_smarty_tpl->tpl_vars['lang']->value->type), 0);?>

			<a href=""><?php echo $_smarty_tpl->tpl_vars['lang']->value->name;?>
</a>
		</td>
		<td>
			<div class="buttons">
				<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/content/deleteLang/<?php echo $_smarty_tpl->tpl_vars['lang']->value->id;?>
/"><i class="icon-remove-sign icon-red">&nbsp;</i></a>
			</div>
		</td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = baseFile::getFilesList(((string)$_smarty_tpl->tpl_vars['languagePath']->value).((string)$_smarty_tpl->tpl_vars['lang']->value->name)."/"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
	<tr>
		<td style="padding-left:25px;">
			<i class="color-icons icons-document-list icon-margin"> </i>
			<a href=""><?php echo $_smarty_tpl->tpl_vars['file']->value->name;?>
</a>
		</td>
		<td>
			<div class="buttons">
				<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/content/editLang/<?php echo $_smarty_tpl->tpl_vars['lang']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['file']->value->name;?>
/#tab2"><i class="icon-pencil icon-blue">&nbsp;</i></a>
			</div>
		</td>
	</tr>	
	<?php } ?>
  <?php } ?>   
  </tbody>
</table>




<?php }} ?>