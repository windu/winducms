<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:21:06
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\themes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127945034a4822f71f8-84297761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ff1638fff596cad5a67d76b32433ad4ce6ee425' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\themes.tpl',
      1 => 1345561082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127945034a4822f71f8-84297761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
    'formTheme' => 0,
    'formWidget' => 0,
    'configList' => 0,
    'formConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a4823e80b1_25986599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a4823e80b1_25986599')) {function content_5034a4823e80b1_25986599($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\serwer\\www\\winducms/data/functions\\function.L.php';
?>  	<div class="tabbable">
	  <ul class="nav nav-tabs" id="myTab">
	    <li><a href="#tab1" data-toggle="tab"><i class="color-icons icons-resource-monitor icon-margin"> </i><?php echo smarty_function_L(array('key'=>"admin.themes.tpl.graphictemplates"),$_smarty_tpl);?>
</a></li>
	    <li><a href="#tab3" data-toggle="tab"><i class="color-icons icons-resource-monitor-protector icon-margin"> </i><?php echo smarty_function_L(array('key'=>"admin.themes.tpl.widgets"),$_smarty_tpl);?>
</a></li>
	    <li><a href="#tab2" data-toggle="tab"><i class="color-icons icons-gear icon-margin"> </i><?php echo smarty_function_L(array('key'=>"admin.themes.tpl.settings"),$_smarty_tpl);?>
</a></li>
	  </ul>
	  <div class="tab-content">
	    <div class="tab-pane" id="tab1">
	    	<div class="row-fluid">
			  <div class="span4 box">
			  	<h5><?php echo smarty_function_L(array('key'=>"admin.themes.common.tpl.graphicstyles"),$_smarty_tpl);?>

				  	<div class="buttons">
				  		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/mainDo/toogleCookie/showThemesAllOn/tab1/" class="btn btn-small <?php if (cookie::readCookie('showAllOn')){?>btn-success<?php }?>"><?php echo smarty_function_L(array('key'=>"admin.content.tpl.showall"),$_smarty_tpl);?>
</a>
				  		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/themes/hideTreelistAll/" class="btn btn-small">-</a>
				  	</div>			  	
				</h5>  	
			  	<?php echo $_smarty_tpl->getSubTemplate ('common/themes_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			  </div>
			  <div class="span8">
			  	<?php echo $_smarty_tpl->getSubTemplate ('common/alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			  	<div class="box">
			  		<?php echo $_smarty_tpl->tpl_vars['formTheme']->value->toHtml();?>

			  	</div>
			  </div>
			</div>	     	
	    </div>
	    <div class="tab-pane" id="tab3">
			<div class="row-fluid">
			  <div class="span4 box">
			  	<h5><?php echo smarty_function_L(array('key'=>"admin.themes.common.tpl.widgets"),$_smarty_tpl);?>
</h5>
				<?php echo $_smarty_tpl->getSubTemplate ('common/widget_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			  </div>
			  <div class="span8">
			  	<?php echo $_smarty_tpl->getSubTemplate ('common/alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			  	<div class="box">
			  		<?php echo $_smarty_tpl->tpl_vars['formWidget']->value->toHtml();?>

			  	</div>
			  </div>
			</div> 	     	
	    </div>	 	    
	    <div class="tab-pane" id="tab2">
			<div class="row-fluid">
			  <div class="span8 box">
				<?php echo $_smarty_tpl->getSubTemplate ('common/config_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('list'=>$_smarty_tpl->tpl_vars['configList']->value,'class'=>'themes','tab'=>'#tab2'), 0);?>

			  </div>
			  <div class="span4 box">
			  <?php if (is_object($_smarty_tpl->tpl_vars['formConfig']->value)){?>
			  	<h5><?php echo smarty_function_L(array('key'=>"admin.themes.tpl.edit"),$_smarty_tpl);?>
</h5>
				<?php echo $_smarty_tpl->tpl_vars['formConfig']->value->toHtml();?>

			  <?php }else{ ?>
			  	<h5><?php echo smarty_function_L(array('key'=>"admin.themes.tpl.help"),$_smarty_tpl);?>
</h5>
			  	<div class="pad">
			  		jakis tekst pomocy
			  	</div>
			  <?php }?>	
			  </div>
			</div> 	     	
	    </div>
	</div>
<?php }} ?>