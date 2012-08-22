<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:20:54
         compiled from "C:\serwer\www\winducms\data\themes\adwokat\common\menu-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58535034a4768b30b1-59606303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dd0d2f14e5a1be8fe5ce1e1c8bf7950e5a094ec' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\data\\themes\\adwokat\\common\\menu-top.tpl',
      1 => 1345486115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58535034a4768b30b1-59606303',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
    'TEMPLATE_HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a4768d0104_70862787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a4768d0104_70862787')) {function content_5034a4768d0104_70862787($_smarty_tpl) {?><?php if (!is_callable('smarty_function_W')) include 'C:\\serwer\\www\\winducms/data/functions\\function.W.php';
?>	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
      	<div class="container">
          <a class="brand" href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_HOME']->value;?>
/img/logo-small.jpg" alt="adwokat"></a>
          <div class="nav-collapse pull-right">
            <?php echo smarty_function_W(array('name'=>'menuDroppy','class'=>'nav pull-right','closed'=>true),$_smarty_tpl);?>

          </div>
         </div> 
      </div>
    </div><?php }} ?>