<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:21:06
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\common\alert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:312405034a4825a8d51-50181565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a096334860607902283b38d72885119ecc4be380' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\common\\alert.tpl',
      1 => 1345561082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '312405034a4825a8d51-50181565',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REQUEST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a4825ca546_11906681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a4825ca546_11906681')) {function content_5034a4825ca546_11906681($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\serwer\\www\\winducms/data/functions\\function.L.php';
?><?php if ($_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('m')!=null){?>
<div class="alert fade in alert-success">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<i class="color-icons icons-tick-button icon-margin"> </i><strong><?php echo smarty_function_L(array('key'=>$_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('m')),$_smarty_tpl);?>
</strong>
</div>
<?php }?><?php }} ?>