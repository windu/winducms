<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:21:03
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135505034a47feb6e28-17425119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dab82d688e26737fea2151eb9c5416d54d796b5d' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\main.tpl',
      1 => 1345561082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135505034a47feb6e28-17425119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
    'REQUEST' => 0,
    'css' => 0,
    'js' => 0,
    'usersDB' => 0,
    'loggedIn' => 0,
    'page_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a4800feb30_94657684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a4800feb30_94657684')) {function content_5034a4800feb30_94657684($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\serwer\\www\\winducms/data/functions\\function.L.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<style type="text/css">
				@import url("<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/bootstrap/css/bootstrap.min.css");
				@import url("<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/picons/picons.css");
				@import url("<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/icons/icons.css");
	            @import url("<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/css/jquery-ui/jquery-ui.css");
				<?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('CSS'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value){
$_smarty_tpl->tpl_vars['css']->_loop = true;
?>
					@import url("<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
");
				<?php } ?>	            
		</style>
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		
		<script type="text/javascript">window.HOME = "<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
";</script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/js/jquery-ui.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/bootstrap/js/bootstrap.min.js"></script>  

		<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('JS'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value){
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
			<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"></script>
		<?php } ?>
		<!--[if gte IE 8]><script src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
image/resources/blueimp-jQuery-File-Upload/js/cors/jquery.xdr-transport.js"></script><![endif]-->
		<title>Windu2 - Admin</title>
	</head>
<body>

	<div id="container">
		<div id="sidebar" class="sidebar-small">
			<?php echo $_smarty_tpl->getSubTemplate ('common/page_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
		<div id="content">
			<div class="user-dropdown">
				<?php if (notifyDB::count()>0&&usersDB::permissionCheck('adminSystemController')){?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/system/#tab6" class="btn btn-danger" style="margin-right:2px; margin-bottom:-7px;" rel="tooltipimageslist" data-original-title="Powiadomienia"><strong><?php echo notifyDB::count();?>
</strong></a>
				<?php }?>
				<div class="btn-group">
		          <a class="btn btn-<?php if ($_smarty_tpl->tpl_vars['usersDB']->value->isDeveloper()){?>danger<?php }else{ ?>primary<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/toggleDeveloperMode/">
		          	<i class="icon-<?php if ($_smarty_tpl->tpl_vars['usersDB']->value->isDeveloper()){?>fire<?php }else{ ?>user<?php }?> icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['loggedIn']->value->email;?>

		          </a>
		          <a class="btn btn-<?php if ($_smarty_tpl->tpl_vars['usersDB']->value->isDeveloper()){?>danger<?php }else{ ?>primary<?php }?> dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/users/editUserSystem/<?php echo $_smarty_tpl->tpl_vars['loggedIn']->value->id;?>
/#tab1"><i class="icon-pencil"></i> <?php echo smarty_function_L(array('key'=>"admin.main.tpl.editprofile"),$_smarty_tpl);?>
</a></li>
		            <li><a href="#"><i class="icon-cog"></i> <?php echo smarty_function_L(array('key'=>"admin.main.tpl.settings"),$_smarty_tpl);?>
</a></li>
		            <li><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/toggleDeveloperMode/"><i class="icon-fire icon-red"></i> <?php echo smarty_function_L(array('key'=>"admin.main.tpl.devmode"),$_smarty_tpl);?>
</a></li>
		            <li class="divider"></li>
		            <li><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/login/logout/"><i class="icon-lock"></i> <?php echo smarty_function_L(array('key'=>"admin.main.tpl.logout"),$_smarty_tpl);?>
</a></li>
		          </ul> 
		        </div>	
		    </div>
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['page_content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div id="footer">
				<?php echo smarty_function_L(array('key'=>"admin.main.tpl.design"),$_smarty_tpl);?>
 <strong>Adam Czajkowski</strong><br>WinduCMS 2.0 rev: <?php echo config::get('revision');?>

			</div>			
		</div>

	</div>

</body> 
</html><?php }} ?>