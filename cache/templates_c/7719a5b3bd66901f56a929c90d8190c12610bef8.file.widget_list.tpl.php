<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:21:06
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\common\widget_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55375034a4825d2801-26618406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7719a5b3bd66901f56a929c90d8190c12610bef8' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\common\\widget_list.tpl',
      1 => 1345561082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55375034a4825d2801-26618406',
  'function' => 
  array (
    'widgettreelist' => 
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
    'padding' => 0,
    'HOME' => 0,
    'theme' => 0,
    'subdir' => 0,
    'usersDB' => 0,
    'widgets' => 0,
    'REQUEST' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a48277a854_31180588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a48277a854_31180588')) {function content_5034a48277a854_31180588($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_widgettreelist')) {
    function smarty_template_function_widgettreelist($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['widgettreelist']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?> 
 	<?php  $_smarty_tpl->tpl_vars['tpl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tpl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value->subdir; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tpl']->key => $_smarty_tpl->tpl_vars['tpl']->value){
$_smarty_tpl->tpl_vars['tpl']->_loop = true;
?>
 		<?php if (is_dir($_smarty_tpl->tpl_vars['tpl']->value->path)){?>
	 		<tr>
			    <td style="padding-left:<?php echo $_smarty_tpl->tpl_vars['padding']->value;?>
px;"><i class="color-icons icons-folder-horizontal-open icon-margin"> </i><?php echo $_smarty_tpl->tpl_vars['tpl']->value->name;?>
</td>
			    <td>
				    <div class="buttons">
				      	<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/themes/addWidget/<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['tpl']->value->name;?>
/#tab3"><i class="icon-plus-sign icon-green">&nbsp;</i></a>
				    </div>
			    </td>
			    <?php if (isset($_smarty_tpl->tpl_vars['padding'])) {$_smarty_tpl->tpl_vars['padding'] = clone $_smarty_tpl->tpl_vars['padding'];
$_smarty_tpl->tpl_vars['padding']->value = $_smarty_tpl->tpl_vars['padding']->value+25; $_smarty_tpl->tpl_vars['padding']->nocache = null; $_smarty_tpl->tpl_vars['padding']->scope = 0;
} else $_smarty_tpl->tpl_vars['padding'] = new Smarty_variable($_smarty_tpl->tpl_vars['padding']->value+25, null, 0);?>
			    <?php if (isset($_smarty_tpl->tpl_vars['subdir'])) {$_smarty_tpl->tpl_vars['subdir'] = clone $_smarty_tpl->tpl_vars['subdir'];
$_smarty_tpl->tpl_vars['subdir']->value = $_smarty_tpl->tpl_vars['tpl']->value->name; $_smarty_tpl->tpl_vars['subdir']->nocache = null; $_smarty_tpl->tpl_vars['subdir']->scope = 0;
} else $_smarty_tpl->tpl_vars['subdir'] = new Smarty_variable($_smarty_tpl->tpl_vars['tpl']->value->name, null, 0);?>
			    <?php smarty_template_function_widgettreelist($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['tpl']->value));?>

			    <?php if (isset($_smarty_tpl->tpl_vars['subdir'])) {$_smarty_tpl->tpl_vars['subdir'] = clone $_smarty_tpl->tpl_vars['subdir'];
$_smarty_tpl->tpl_vars['subdir']->value = ''; $_smarty_tpl->tpl_vars['subdir']->nocache = null; $_smarty_tpl->tpl_vars['subdir']->scope = 0;
} else $_smarty_tpl->tpl_vars['subdir'] = new Smarty_variable('', null, 0);?>
			    <?php if (isset($_smarty_tpl->tpl_vars['padding'])) {$_smarty_tpl->tpl_vars['padding'] = clone $_smarty_tpl->tpl_vars['padding'];
$_smarty_tpl->tpl_vars['padding']->value = 25; $_smarty_tpl->tpl_vars['padding']->nocache = null; $_smarty_tpl->tpl_vars['padding']->scope = 0;
} else $_smarty_tpl->tpl_vars['padding'] = new Smarty_variable(25, null, 0);?>
		    </tr>
		<?php }else{ ?>
	 		<tr>
			    <td style="padding-left:<?php echo $_smarty_tpl->tpl_vars['padding']->value;?>
px;"><i class="color-icons icons-document-code icon-margin"> </i><?php echo $_smarty_tpl->tpl_vars['tpl']->value->name;?>
</td>
			    <td>
				    <div class="buttons">
				      	<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/themes/editWidget/<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
/<?php if ($_smarty_tpl->tpl_vars['subdir']->value!=''){?><?php echo $_smarty_tpl->tpl_vars['subdir']->value;?>
/<?php }?><?php echo $_smarty_tpl->tpl_vars['tpl']->value->name;?>
/#tab3"><i class="icon-pencil icon-blue">&nbsp;</i></a>
				    	<?php if (in_array($_smarty_tpl->tpl_vars['subdir']->value,widgetsDB::$baseWidgetFolders)&&$_smarty_tpl->tpl_vars['usersDB']->value->isDeveloper()){?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/themes/deleteWidgetFile/<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['subdir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['tpl']->value->name;?>
/#tab3"><i class="icon-remove-sign icon-red">&nbsp;</i></a>
				   		<?php }?>
				    </div>
			    </td>
		    </tr>		
	    <?php }?>
	<?php } ?> 
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<table class="table table-striped">
  <tbody>
	<?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value){
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>
    <tr>
      <td>
      	<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/themes/show/<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
/#tab3">
      		<i class="color-icons icons-rocket icon-margin"> </i>
			<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>

		</a>
      </td>
      <td>
	    <div class="buttons">
	      	<?php if ($_smarty_tpl->tpl_vars['usersDB']->value->isDeveloper()){?><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/themes/delete_widget/<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
/"><i class="icon-remove-sign icon-red">&nbsp;</i></a><?php }?>
			<a href="#tab3" onclick="togglepopover('<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
');">
				<i id="popover-id-<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
" class="icon-info-sign icon-grey cl-<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
" rel="popovercontentlist" title=' <?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
' data-content="<?php echo $_smarty_tpl->getSubTemplate ('common/widget_info_popover.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('widget'=>$_smarty_tpl->tpl_vars['theme']->value), 0);?>
">&nbsp;</i>
			</a>	   
	    </div>
      </td>
    </tr>
		<?php if ($_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('theme')==$_smarty_tpl->tpl_vars['theme']->value->name){?>
			<?php if (isset($_smarty_tpl->tpl_vars['padding'])) {$_smarty_tpl->tpl_vars['padding'] = clone $_smarty_tpl->tpl_vars['padding'];
$_smarty_tpl->tpl_vars['padding']->value = 25; $_smarty_tpl->tpl_vars['padding']->nocache = null; $_smarty_tpl->tpl_vars['padding']->scope = 0;
} else $_smarty_tpl->tpl_vars['padding'] = new Smarty_variable(25, null, 0);?>
  			<?php smarty_template_function_widgettreelist($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['theme']->value));?>

		<?php }?>
	<?php } ?>	  	
  </tbody>
</table>



<?php }} ?>