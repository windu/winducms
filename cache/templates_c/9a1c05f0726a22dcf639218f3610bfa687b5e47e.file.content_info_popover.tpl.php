<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:21:20
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\common\content_info_popover.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238435034a490265d44-76255889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a1c05f0726a22dcf639218f3610bfa687b5e47e' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\common\\content_info_popover.tpl',
      1 => 1344283941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238435034a490265d44-76255889',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a4902b9d66_33824547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a4902b9d66_33824547')) {function content_5034a4902b9d66_33824547($_smarty_tpl) {?><table class='table-popover'>
        <tbody>
          <tr>
            <td><i class='icon-share icon-white'></i></td>
            <td><strong><?php echo $_smarty_tpl->tpl_vars['page']->value->createTime;?>
</strong></td>
          </tr>
          <tr>
            <td><i class='icon-edit icon-white'></i></td>
            <td><strong><?php echo $_smarty_tpl->tpl_vars['page']->value->updateTime;?>
</strong></td>
          </tr>
          <tr>
            <td><i class='icon-hdd icon-white'></i></td>
            <td><strong><?php echo $_smarty_tpl->tpl_vars['page']->value->createIP;?>
</strong></td>
          </tr>
          <tr>
            <td><i class='icon-hdd icon-white'></i></td>
            <td><strong><?php echo $_smarty_tpl->tpl_vars['page']->value->updateIp;?>
</strong></td>
          </tr>
          <tr>
            <td><i class='icon-globe icon-white'></i></td>
            <td><strong><a href='<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value->urlKey;?>
' target='_blank'><?php echo $_smarty_tpl->tpl_vars['page']->value->urlKey;?>
</a></strong></td>
          </tr>
          <tr>
            <td><i class='icon-qrcode icon-white'></i></td>
            <td><strong>{{eval var=$pagesDB->get(<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
,content) }}</strong></td>
          </tr>                                        
        </tbody>
</table>
<?php }} ?>