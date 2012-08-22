<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:20:58
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\mainSimple.tpl" */ ?>
<?php /*%%SmartyHeaderCode:253085034a47a6b1bc1-81282681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bcbf195e71c4a447f70dcc595d6301b71154108' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\mainSimple.tpl',
      1 => 1343252370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253085034a47a6b1bc1-81282681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a47a722939_09044554',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a47a722939_09044554')) {function content_5034a47a722939_09044554($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
app/plugins/admin/resources/css/login.css");
		</style>
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/bootstrap/js/bootstrap.min.js"></script>  
		<title>Login</title>
	</head>
<body>
<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['page']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>

</body> 
</html><?php }} ?>