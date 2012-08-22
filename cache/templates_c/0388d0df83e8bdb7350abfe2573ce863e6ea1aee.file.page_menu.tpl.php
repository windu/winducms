<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:21:04
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\common\page_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157595034a48010b229-45146470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0388d0df83e8bdb7350abfe2573ce863e6ea1aee' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\common\\page_menu.tpl',
      1 => 1345293918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157595034a48010b229-45146470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
    'REQUEST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a48021fed9_20037426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a48021fed9_20037426')) {function content_5034a48021fed9_20037426($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\serwer\\www\\winducms/data/functions\\function.L.php';
?><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/"><img src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/plugins/admin/resources/img/logo-icon.png" style="padding:15px; padding-top:30px; padding-bottom:20px;"></a>
<ul class="menu">
	<?php if (usersDB::permissionCheck('adminContentController')){?>
	<li <?php if ($_smarty_tpl->tpl_vars['REQUEST']->value->controllerName()=='adminContentController'){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/content/" rel="tooltipmenu" title="<?php echo smarty_function_L(array('key'=>"admin.menu.content"),$_smarty_tpl);?>
"><i class="picons picons-11 picons-menu"> </i></a>
	</li>
	<?php }?>
	<?php if (usersDB::permissionCheck('adminUsersController')){?>
	<li <?php if ($_smarty_tpl->tpl_vars['REQUEST']->value->controllerName()=='adminUsersController'){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/users/" rel="tooltipmenu" title="<?php echo smarty_function_L(array('key'=>"admin.menu.users"),$_smarty_tpl);?>
"><i class="picons picons-15 picons-menu"> </i></a>
	</li>
	<?php }?>
	<?php if (usersDB::permissionCheck('adminThemesController')){?>
	<li <?php if ($_smarty_tpl->tpl_vars['REQUEST']->value->controllerName()=='adminThemesController'){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/themes/" rel="tooltipmenu" title="<?php echo smarty_function_L(array('key'=>"admin.menu.themes"),$_smarty_tpl);?>
"><i class="picons picons-37 picons-menu"> </i></a>
	</li>
	<?php }?>
	<?php if (usersDB::permissionCheck('adminToolsController')){?>
	<li <?php if ($_smarty_tpl->tpl_vars['REQUEST']->value->controllerName()=='adminToolsController'){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/tools/" rel="tooltipmenu" title="<?php echo smarty_function_L(array('key'=>"admin.menu.tools"),$_smarty_tpl);?>
"><i class="picons picons-23 picons-menu"> </i></a>
	</li>
	<?php }?>
	<?php if (usersDB::permissionCheck('adminConfigController')){?>
	<li <?php if ($_smarty_tpl->tpl_vars['REQUEST']->value->controllerName()=='adminConfigController'){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/config/" rel="tooltipmenu" title="<?php echo smarty_function_L(array('key'=>"admin.menu.config"),$_smarty_tpl);?>
"><i class="picons picons-31 picons-menu"> </i></a>
	</li>
	<?php }?>	
	<?php if (usersDB::permissionCheck('adminSystemController')){?>
	<li <?php if ($_smarty_tpl->tpl_vars['REQUEST']->value->controllerName()=='adminSystemController'){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/system/" rel="tooltipmenu" title="<?php echo smarty_function_L(array('key'=>"admin.menu.system"),$_smarty_tpl);?>
"><i class="picons picons-41 picons-menu"> </i></a>
	</li>
	<?php }?>
</ul>
<?php }} ?>