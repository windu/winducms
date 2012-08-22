<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:21:06
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\common\themes_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91315034a4823f77b1-29660156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1744b0ec97af367fd09f8fa21a0c39c03eb6b85' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\common\\themes_list.tpl',
      1 => 1345627293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91315034a4823f77b1-29660156',
  'function' => 
  array (
    'treelist' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'data' => 0,
    'tpl' => 0,
    'HOME' => 0,
    'theme' => 0,
    'usersDB' => 0,
    'themes' => 0,
    'REQUEST' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a48259bb85_04063344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a48259bb85_04063344')) {function content_5034a48259bb85_04063344($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_treelist')) {
    function smarty_template_function_treelist($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['treelist']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?> 
 	<?php  $_smarty_tpl->tpl_vars['tpl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tpl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value->subdir; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tpl']->key => $_smarty_tpl->tpl_vars['tpl']->value){
$_smarty_tpl->tpl_vars['tpl']->_loop = true;
?>
 		<tr>
		 	<?php if (is_dir($_smarty_tpl->tpl_vars['tpl']->value->path)){?>
			    <td>&nbsp;&nbsp;&nbsp;&nbsp;<i class="color-icons icons-folder-horizontal-open icon-margin"> </i><?php echo $_smarty_tpl->tpl_vars['tpl']->value->name;?>
</td>
			    <td>
				    <div class="buttons">
				      	<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/themes/add/<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['tpl']->value->name;?>
/"><i class="icon-plus-sign icon-green">&nbsp;</i></a>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
				    </div>
			    </td>						 	
	 			<?php smarty_template_function_treelist($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['tpl']->value));?>

		 	<?php }else{ ?>
			    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="color-icons icons-document-code icon-margin"> </i><?php echo $_smarty_tpl->tpl_vars['tpl']->value->name;?>
</td>
			    <td>
				    <div class="buttons">
				      	<?php if ($_smarty_tpl->tpl_vars['data']->value->name!='img'){?><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/themes/edit/<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['tpl']->value->name;?>
/"><i class="icon-pencil icon-blue">&nbsp;</i></a>
						<?php }else{ ?>
						<a href="#tab4" rel="popoverconstantlist" title=' <?php echo $_smarty_tpl->tpl_vars['tpl']->value->name;?>
' data-content="<div class='pad'>{{$TEMPLATE_HOME}}/img/{$tpl->name}</div>">	
							<i class="icon-question-sign icon-grey" >&nbsp;</i>
						</a><?php }?>
				      	<?php if ($_smarty_tpl->tpl_vars['usersDB']->value->isDeveloper()){?><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/themes/delete/<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['tpl']->value->name;?>
/"><i class="icon-remove-sign icon-red">&nbsp;</i></a><?php }?>
				    </div>
			    </td>
			<?php }?>
	    </tr>
	<?php } ?> 
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<table class="table table-striped">
  <tbody>
	<?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value){
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>
    <tr>
      <td>
      	<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/themes/show/<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
/">
      		<i class="color-icons icons-newspaper icon-margin"> </i>
			<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>

		</a>
      </td>
      <td>
	    <div class="buttons">
	    	<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/themes/editTheme/<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
/"><i class="icon-pencil icon-blue">&nbsp;</i></a>
	    	<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/themes/duplicateTemplate/<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
/"><i class="icon-random icon-green">&nbsp;</i></a>
			<?php if ($_smarty_tpl->tpl_vars['theme']->value->name==config::get('template')){?>
				&nbsp;<i class="icon-eye-open icon-blue">&nbsp;</i>&nbsp;
			<?php }else{ ?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/themes/setTempleteActive/<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
/"><i class="icon-eye-close icon-grey">&nbsp;</i></a>
			<?php }?>	    
	      	<?php if ($_smarty_tpl->tpl_vars['usersDB']->value->isDeveloper()&&$_smarty_tpl->tpl_vars['theme']->value->name!=config::get('template')){?><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/themes/delete_template/<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
/"><i class="icon-remove-sign icon-red">&nbsp;</i></a>
			<?php }else{ ?>
				&nbsp;<i class="icon-remove-sign icon-grey">&nbsp;</i>&nbsp;
			<?php }?>
	    </div>
      </td>
    </tr>
		<?php if ($_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('theme')==$_smarty_tpl->tpl_vars['theme']->value->name){?>
  			<?php smarty_template_function_treelist($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['theme']->value));?>

		<?php }?>
	<?php } ?>	  	
  </tbody>
</table>



<?php }} ?>