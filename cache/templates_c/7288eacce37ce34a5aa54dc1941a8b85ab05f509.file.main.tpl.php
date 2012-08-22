<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:20:54
         compiled from "C:\serwer\www\winducms\data\themes\adwokat\main\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27405034a4767d67f8-21265183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7288eacce37ce34a5aa54dc1941a8b85ab05f509' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\data\\themes\\adwokat\\main\\main.tpl',
      1 => 1345486115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27405034a4767d67f8-21265183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta' => 0,
    'HOME' => 0,
    'CSS' => 0,
    'JS' => 0,
    'pageTpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a47689b8b6_05098685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a47689b8b6_05098685')) {function content_5034a47689b8b6_05098685($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="robots" content="INDEX, FOLLOW">
        <meta name="GOOGLEBOT" content="INDEX, FOLLOW">
        <meta name="revisit-after" content="7 days">
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['meta']->value->description;?>
">
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta']->value->keywords;?>
">
        <meta name="copyright" content="Copyright (c) WinduCMS">
        <meta name="distribution" content="global">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
		<style type="text/css">
			@import url("<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/bootstrap/css/bootstrap.css");
			@import url("<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/css/jquery-ui/jquery-ui.css");
			<?php  $_smarty_tpl->tpl_vars['CSS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CSS']->_loop = false;
 $_from = themesDB::getAllResources('css'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CSS']->key => $_smarty_tpl->tpl_vars['CSS']->value){
$_smarty_tpl->tpl_vars['CSS']->_loop = true;
?>
			@import url("<?php echo $_smarty_tpl->tpl_vars['CSS']->value;?>
");
			<?php } ?>			
		</style>
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/js/jquery-ui.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/bootstrap/js/bootstrap.min.js"></script>  
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/plugins/front/resources/js/front.js"></script>
		<?php  $_smarty_tpl->tpl_vars['JS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['JS']->_loop = false;
 $_from = themesDB::getAllResources('js'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['JS']->key => $_smarty_tpl->tpl_vars['JS']->value){
$_smarty_tpl->tpl_vars['JS']->_loop = true;
?>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JS']->value;?>
"></script>
		<?php } ?>
		<title><?php echo $_smarty_tpl->tpl_vars['meta']->value->title;?>
</title>
	</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ('../common/menu-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['pageTpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body> 
</html><?php }} ?>