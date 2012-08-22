<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:21:25
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82685034a49508ae28-40054920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4927179ad574f7b12ec20816d24f1b30a6a7dfa9' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\config.tpl',
      1 => 1345561082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82685034a49508ae28-40054920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'buckets' => 0,
    'key' => 0,
    'configDB' => 0,
    'bucket' => 0,
    'variable' => 0,
    'HOME' => 0,
    'usersDB' => 0,
    'forms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a4951df838_06772170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a4951df838_06772170')) {function content_5034a4951df838_06772170($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\serwer\\www\\winducms/data/functions\\function.L.php';
?>  	<div class="tabbable">
	  <ul class="nav nav-tabs" id="myTab">
	    <?php  $_smarty_tpl->tpl_vars['bucket'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bucket']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['buckets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bucket']->key => $_smarty_tpl->tpl_vars['bucket']->value){
$_smarty_tpl->tpl_vars['bucket']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['bucket']->key;
?>
	    <li><a href="#tab<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-toggle="tab"><i class="color-icons icons-gear icon-margin">&nbsp;</i><?php echo smarty_function_L(array('key'=>$_smarty_tpl->tpl_vars['configDB']->value->bucketNames[$_smarty_tpl->tpl_vars['key']->value]),$_smarty_tpl);?>
</a></li>
	    <?php } ?>
	  </ul>
	  <div class="tab-content">
	    <?php  $_smarty_tpl->tpl_vars['bucket'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bucket']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['buckets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bucket']->key => $_smarty_tpl->tpl_vars['bucket']->value){
$_smarty_tpl->tpl_vars['bucket']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['bucket']->key;
?>
	    <div class="tab-pane" id="tab<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
	    	<div class="row-fluid">
			  <div class="span6">
			  	<div class="box">
				<table class="table table-striped tablesort">
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
 $_from = $_smarty_tpl->tpl_vars['bucket']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
admin/config/edit/<?php echo $_smarty_tpl->tpl_vars['variable']->value->id;?>
/#tab<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><i class="icon-pencil icon-blue">&nbsp;</i></a>
								<?php if ($_smarty_tpl->tpl_vars['usersDB']->value->isDeveloper()){?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/config/delete/<?php echo $_smarty_tpl->tpl_vars['variable']->value->id;?>
/#tab<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><i class="icon-remove-sign icon-red">&nbsp;</i></a>
								<?php }?>
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
				</table>
	      		</div>
	      		<div class="box pad margin-top">
	      			<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/config/#tab<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="btn"><?php echo smarty_function_L(array('key'=>"admin.config.tpl.add"),$_smarty_tpl);?>
</a>
	      		</div>			
			  </div>
			  <div class="span6 box">
			  	<h5><?php echo smarty_function_L(array('key'=>"admin.config.tpl.addconstanttoconfig"),$_smarty_tpl);?>
</h5>
			  	<?php echo $_smarty_tpl->tpl_vars['forms']->value[$_smarty_tpl->tpl_vars['key']->value]->toHtml();?>

			  </div>
			</div>	     	
	    </div>
	    <?php } ?>	    

	</div>
<?php }} ?>