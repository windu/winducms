<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:21:20
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\common\trash_info_popover.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103675034a4903cff21-46361675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76075975153e7e29d3179ef47ce6014e4d504321' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\common\\trash_info_popover.tpl',
      1 => 1344376462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103675034a4903cff21-46361675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a4903e5d82_73030285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a4903e5d82_73030285')) {function content_5034a4903e5d82_73030285($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\serwer\\www\\winducms/app/plugins/html/smarty/plugins\\modifier.truncate.php';
?><div class='pad'><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['page']->value->content),200);?>
</div><?php }} ?>