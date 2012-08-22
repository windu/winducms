<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:20:58
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204535034a47a72d3d9-93721002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20aba29efd4e7fbf7c25cd9eba07e16a2e4629ac' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\login.tpl',
      1 => 1345030041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204535034a47a72d3d9-93721002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a47a7499b7_55800381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a47a7499b7_55800381')) {function content_5034a47a7499b7_55800381($_smarty_tpl) {?>	<div class="loginbox">
		<img src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/plugins/admin/resources/img/logo-login.png">
		<div class="loginbox-white">
		<?php echo $_smarty_tpl->tpl_vars['form']->value->toHtml();?>

		</div>
		<p class="text-shadow">WinduCMS 2.00 rev. <?php echo config::get('revision');?>
</p>
	</div>
<?php }} ?>