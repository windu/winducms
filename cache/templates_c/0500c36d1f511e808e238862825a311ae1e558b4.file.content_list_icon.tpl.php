<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:21:20
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\common\content_list_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16185034a4901a1f00-65922566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0500c36d1f511e808e238862825a311ae1e558b4' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\common\\content_list_icon.tpl',
      1 => 1345561082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16185034a4901a1f00-65922566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'icon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a49025e084_55611498',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a49025e084_55611498')) {function content_5034a49025e084_55611498($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['type']->value==pagesDB::TYPE_LANG_CATALOG){?>
	<?php if (isset($_smarty_tpl->tpl_vars["icon"])) {$_smarty_tpl->tpl_vars["icon"] = clone $_smarty_tpl->tpl_vars["icon"];
$_smarty_tpl->tpl_vars["icon"]->value = "bank"; $_smarty_tpl->tpl_vars["icon"]->nocache = null; $_smarty_tpl->tpl_vars["icon"]->scope = 0;
} else $_smarty_tpl->tpl_vars["icon"] = new Smarty_variable("bank", null, 0);?>
<?php }elseif($_smarty_tpl->tpl_vars['type']->value==pagesDB::TYPE_CATALOG){?> 
	<?php if (isset($_smarty_tpl->tpl_vars["icon"])) {$_smarty_tpl->tpl_vars["icon"] = clone $_smarty_tpl->tpl_vars["icon"];
$_smarty_tpl->tpl_vars["icon"]->value = "folder-horizontal"; $_smarty_tpl->tpl_vars["icon"]->nocache = null; $_smarty_tpl->tpl_vars["icon"]->scope = 0;
} else $_smarty_tpl->tpl_vars["icon"] = new Smarty_variable("folder-horizontal", null, 0);?>
<?php }elseif($_smarty_tpl->tpl_vars['type']->value==pagesDB::TYPE_GALLERY){?> 
	<?php if (isset($_smarty_tpl->tpl_vars["icon"])) {$_smarty_tpl->tpl_vars["icon"] = clone $_smarty_tpl->tpl_vars["icon"];
$_smarty_tpl->tpl_vars["icon"]->value = "photo-album-blue"; $_smarty_tpl->tpl_vars["icon"]->nocache = null; $_smarty_tpl->tpl_vars["icon"]->scope = 0;
} else $_smarty_tpl->tpl_vars["icon"] = new Smarty_variable("photo-album-blue", null, 0);?>
<?php }elseif($_smarty_tpl->tpl_vars['type']->value==pagesDB::TYPE_NEWS_GROUP){?> 
	<?php if (isset($_smarty_tpl->tpl_vars["icon"])) {$_smarty_tpl->tpl_vars["icon"] = clone $_smarty_tpl->tpl_vars["icon"];
$_smarty_tpl->tpl_vars["icon"]->value = "calendar-list"; $_smarty_tpl->tpl_vars["icon"]->nocache = null; $_smarty_tpl->tpl_vars["icon"]->scope = 0;
} else $_smarty_tpl->tpl_vars["icon"] = new Smarty_variable("calendar-list", null, 0);?>
<?php }elseif($_smarty_tpl->tpl_vars['type']->value==pagesDB::TYPE_PAGE){?> 
	<?php if (isset($_smarty_tpl->tpl_vars["icon"])) {$_smarty_tpl->tpl_vars["icon"] = clone $_smarty_tpl->tpl_vars["icon"];
$_smarty_tpl->tpl_vars["icon"]->value = "notebook"; $_smarty_tpl->tpl_vars["icon"]->nocache = null; $_smarty_tpl->tpl_vars["icon"]->scope = 0;
} else $_smarty_tpl->tpl_vars["icon"] = new Smarty_variable("notebook", null, 0);?>
<?php }elseif($_smarty_tpl->tpl_vars['type']->value==pagesDB::TYPE_NEWS){?> 
	<?php if (isset($_smarty_tpl->tpl_vars["icon"])) {$_smarty_tpl->tpl_vars["icon"] = clone $_smarty_tpl->tpl_vars["icon"];
$_smarty_tpl->tpl_vars["icon"]->value = "calendar-list"; $_smarty_tpl->tpl_vars["icon"]->nocache = null; $_smarty_tpl->tpl_vars["icon"]->scope = 0;
} else $_smarty_tpl->tpl_vars["icon"] = new Smarty_variable("calendar-list", null, 0);?> 
<?php }elseif($_smarty_tpl->tpl_vars['type']->value==pagesDB::TYPE_URL){?> 
	<?php if (isset($_smarty_tpl->tpl_vars["icon"])) {$_smarty_tpl->tpl_vars["icon"] = clone $_smarty_tpl->tpl_vars["icon"];
$_smarty_tpl->tpl_vars["icon"]->value = "document-globe"; $_smarty_tpl->tpl_vars["icon"]->nocache = null; $_smarty_tpl->tpl_vars["icon"]->scope = 0;
} else $_smarty_tpl->tpl_vars["icon"] = new Smarty_variable("document-globe", null, 0);?> 
<?php }else{ ?>    
	<?php if (isset($_smarty_tpl->tpl_vars["icon"])) {$_smarty_tpl->tpl_vars["icon"] = clone $_smarty_tpl->tpl_vars["icon"];
$_smarty_tpl->tpl_vars["icon"]->value = "document-medium"; $_smarty_tpl->tpl_vars["icon"]->nocache = null; $_smarty_tpl->tpl_vars["icon"]->scope = 0;
} else $_smarty_tpl->tpl_vars["icon"] = new Smarty_variable("document-medium", null, 0);?> 
<?php }?>
<i class="color-icons icons-<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
 icon-margin"> </i> <?php }} ?>