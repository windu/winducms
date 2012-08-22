<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:21:26
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62935034a4965987a5-07193235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3006ea842e681178d38ac2015fee096daae562d' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\users.tpl',
      1 => 1345561082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62935034a4965987a5-07193235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
    'userSystem' => 0,
    'userPage' => 0,
    'userType' => 0,
    'configList' => 0,
    'formConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a4966a0ba8_97399062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a4966a0ba8_97399062')) {function content_5034a4966a0ba8_97399062($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\serwer\\www\\winducms/data/functions\\function.L.php';
?>  	<div class="tabbable">
	  <ul class="nav nav-tabs" id="myTab">
	    <li><a href="#tab1" data-toggle="tab"><i class="color-icons icons-user-black icon-margin">&nbsp;</i><?php echo smarty_function_L(array('key'=>"admin.users.ctpl.admins"),$_smarty_tpl);?>
</a></li>
	    <li><a href="#tab2" data-toggle="tab"><i class="color-icons icons-user-yellow icon-margin">&nbsp;</i><?php echo smarty_function_L(array('key'=>"admin.users.ctpl.users"),$_smarty_tpl);?>
</a></li>
	    <li><a href="#tab3" data-toggle="tab"><i class="color-icons icons-wallet icon-margin">&nbsp;</i><?php echo smarty_function_L(array('key'=>"admin.users.ctpl.authorization"),$_smarty_tpl);?>
</a></li>
	    <li><a href="#tab4" data-toggle="tab"><i class="color-icons icons-gear icon-margin"> </i><?php echo smarty_function_L(array('key'=>"admin.users.ctpl.settings"),$_smarty_tpl);?>
</a></li>
	  </ul>
	  <div class="tab-content">
	    <div class="tab-pane" id="tab1">
	    	<div class="row-fluid">
			  <div class="span6">
			  	<div class="box">
	     		<?php echo $_smarty_tpl->getSubTemplate ('common/users_system_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	      		</div>
	      		<div class="box pad margin-top">
	      			<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/users/#tab1" class="btn"><?php echo smarty_function_L(array('key'=>"admin.users.ctpl.add"),$_smarty_tpl);?>
</a>
	      		</div>	     		
			  </div>
			  <div class="span6 box">
			  	<h5><?php echo smarty_function_L(array('key'=>"admin.users.tpl.adduser"),$_smarty_tpl);?>
</h5>
			  	<?php echo $_smarty_tpl->tpl_vars['userSystem']->value->toHtml();?>

			  </div>
			</div>	     	
	    </div>
	    <div class="tab-pane" id="tab2">
	    	<div class="row-fluid">
			  <div class="span6">	
			  	<div class="box">  
	      		<?php echo $_smarty_tpl->getSubTemplate ('common/users_page_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	      		</div>
	      		<div class="box pad margin-top">
	      			<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/users/#tab2" class="btn"><?php echo smarty_function_L(array('key'=>"admin.users.ctpl.add"),$_smarty_tpl);?>
</a>
	      		</div>	      		
			  </div>
			  <div class="span6 box">
			  	<h5><?php echo smarty_function_L(array('key'=>"admin.users.tpl.adduser"),$_smarty_tpl);?>
</h5>
			  	<?php echo $_smarty_tpl->tpl_vars['userPage']->value->toHtml();?>

			  </div>
			</div>	 	      		
	    </div>
	    <div class="tab-pane" id="tab3">
	    	<div class="row-fluid">
			  <div class="span6">	
			  	<div class="box">   
	      		<?php echo $_smarty_tpl->getSubTemplate ('common/users_types_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	      		</div>
	      		<div class="box pad margin-top">
	      			<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/users/#tab3" class="btn"><?php echo smarty_function_L(array('key'=>"admin.users.ctpl.add"),$_smarty_tpl);?>
</a>
	      		</div>
			  </div>
			  <div class="span6 box">
			  	<h5><?php echo smarty_function_L(array('key'=>"admin.users.tpl.addtypeofauth"),$_smarty_tpl);?>
</h5>
			  	<?php echo $_smarty_tpl->tpl_vars['userType']->value->toHtml();?>
  	
			  </div>
			</div>	 	      		
	    </div>	
	    <div class="tab-pane" id="tab4">
			<div class="row-fluid">
			  <div class="span8 box">
				<?php echo $_smarty_tpl->getSubTemplate ('common/config_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('list'=>$_smarty_tpl->tpl_vars['configList']->value,'class'=>'users','tab'=>'#tab4'), 0);?>

			  </div>
			  <div class="span4 box">
			  <?php if (is_object($_smarty_tpl->tpl_vars['formConfig']->value)){?>
			  	<h5><?php echo smarty_function_L(array('key'=>"admin.users.tpl.edit"),$_smarty_tpl);?>
</h5>
				<?php echo $_smarty_tpl->tpl_vars['formConfig']->value->toHtml();?>

			  <?php }else{ ?>
			  	<h5><?php echo smarty_function_L(array('key'=>"admin.users.tpl.help"),$_smarty_tpl);?>
</h5>
			  	<div class="pad">
			  		jakis tekst pomocy 	
			  	</div>
			  <?php }?>	
			  </div>
			</div> 	 	      		
	    </div>		        
	  </div>
	</div>
<?php }} ?>