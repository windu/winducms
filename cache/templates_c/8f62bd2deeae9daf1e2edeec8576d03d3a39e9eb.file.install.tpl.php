<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:23:50
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\install.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105135034a526436e69-73356924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f62bd2deeae9daf1e2edeec8576d03d3a39e9eb' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\install.tpl',
      1 => 1345452230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105135034a526436e69-73356924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
    'title' => 0,
    'form' => 0,
    'load' => 0,
    'finish' => 0,
    'checkserver' => 0,
    'phpok' => 0,
    'extensions' => 0,
    'key' => 0,
    'ext' => 0,
    'chmodErrorCountFile' => 0,
    'chmodError' => 0,
    'file' => 0,
    'chmodErrorCountDir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a5265f18a0_99715769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a5265f18a0_99715769')) {function content_5034a5265f18a0_99715769($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\serwer\\www\\winducms/data/functions\\function.L.php';
?>	<div class="loginbox">
		<img src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/plugins/admin/resources/img/logo-login.png">
		<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
		<div class="loginbox-white">
			<?php if (is_object($_smarty_tpl->tpl_vars['form']->value)){?>
				<div class="progress progress-striped active" style="margin-left:35px; margin-right:35px;">
				  <div class="bar" style="width: <?php echo $_smarty_tpl->tpl_vars['load']->value;?>
%;"></div>
				</div>				
				<?php echo $_smarty_tpl->tpl_vars['form']->value->toHtml();?>

			<?php }elseif($_smarty_tpl->tpl_vars['finish']->value==true){?>	
				<div class="progress progress-striped active" style="margin-left:35px; margin-right:35px;">
				  <div class="bar" style="width: <?php echo $_smarty_tpl->tpl_vars['load']->value;?>
%;"></div>
				</div>
				<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/" class="btn btn-primary btn-large" style="margin-bottom:30px;"><?php echo smarty_function_L(array('key'=>"admin.install.tpl.adminpanel"),$_smarty_tpl);?>
</a>
			<?php }elseif($_smarty_tpl->tpl_vars['checkserver']->value==true){?>	
				<div class="progress progress-striped active" style="margin-left:35px; margin-right:35px;">
				  <div class="bar" style="width: <?php echo $_smarty_tpl->tpl_vars['load']->value;?>
%;"></div>
				</div>			
				<table class="table table-striped margin-bottom">
					<tbody>
						<tr>	
							<td class="left-column-install">PHP <?php echo phpversion();?>
</td>
							<td class="right-column-install"><strong>
							<?php if ($_smarty_tpl->tpl_vars['phpok']->value){?><span class="badge badge-success">OK</span><?php }else{ ?><span class="badge badge-important">ERROR</span><?php }?>
							</strong></td>
						</tr>					
					<?php  $_smarty_tpl->tpl_vars['ext'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ext']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['extensions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ext']->key => $_smarty_tpl->tpl_vars['ext']->value){
$_smarty_tpl->tpl_vars['ext']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['ext']->key;
?>
						<tr>	
							<td class="left-column-install"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
							<td class="right-column-install"><span class="badge badge-<?php if ($_smarty_tpl->tpl_vars['ext']->value=='OK'){?>success<?php }else{ ?>important<?php }?>"><?php echo $_smarty_tpl->tpl_vars['ext']->value;?>
</span></td>
						</tr>
					<?php } ?>
					<?php if ($_smarty_tpl->tpl_vars['chmodErrorCountFile']->value>0){?>
						<tr>	
							<td class="left-column-install"><?php echo smarty_function_L(array('key'=>"admin.install.tpl.cantsave"),$_smarty_tpl);?>
</td>
							<td class="right-column-install"><span class="badge badge-important"><?php echo $_smarty_tpl->tpl_vars['chmodErrorCountFile']->value;?>
</span></td>
						</tr>		
						<?php if ($_smarty_tpl->tpl_vars['chmodErrorCountFile']->value<4){?>
							<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['chmodError']->value['file']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>	
							<tr>	
								<td class="left-column-install"><?php echo $_smarty_tpl->tpl_vars['file']->value;?>
</td>
								<td></td>
							</tr>						
							<?php } ?>		
						<?php }?>
					<?php }?>	
					<?php if ($_smarty_tpl->tpl_vars['chmodErrorCountDir']->value>0){?>
						<tr>	
							<td class="left-column-install"><?php echo smarty_function_L(array('key'=>"admin.install.tpl.cantsave"),$_smarty_tpl);?>
</td>
							<td class="right-column-install"><span class="badge badge-important"><?php echo $_smarty_tpl->tpl_vars['chmodErrorCountDir']->value;?>
</span></td>
						</tr>		
						<?php if ($_smarty_tpl->tpl_vars['chmodErrorCountDir']->value<4){?>
							<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['chmodError']->value['dir']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>	
							<tr>	
								<td class="left-column-install"><?php echo $_smarty_tpl->tpl_vars['file']->value;?>
</td>
								<td></td>
							</tr>						
							<?php } ?>		
						<?php }?>
					<?php }?>		
					</tbody>
				</table>
				

				<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/install/setAdministrator/" class="btn btn-primary btn-large" style="margin-bottom:30px;"><?php echo smarty_function_L(array('key'=>"admin.install.tpl.continueinstall"),$_smarty_tpl);?>
</a>
			<?php }else{ ?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/install/checkServer/" class="btn btn-primary btn-large" style="margin-bottom:30px;"><?php echo smarty_function_L(array('key'=>"admin.install.tpl.begininstall"),$_smarty_tpl);?>
</a>
			<?php }?>	
		</div>
	</div>
<?php }} ?>