<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:21:19
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\common\content_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:273575034a48fdb5f82-40091503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08ae2912f00e1811caa9ddc20e760bbcb7e9c0d6' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\common\\content_list.tpl',
      1 => 1345192024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273575034a48fdb5f82-40091503',
  'function' => 
  array (
    'treelist' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'data' => 0,
    'entry' => 0,
    'id' => 0,
    'HOME' => 0,
    'pagesDB' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a4901984a7_10661399',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a4901984a7_10661399')) {function content_5034a4901984a7_10661399($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\serwer\www\winducms/app/plugins/html/smarty/plugins\modifier.truncate.php';
?><?php if (!function_exists('smarty_template_function_treelist')) {
    function smarty_template_function_treelist($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['treelist']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?> 
  <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value){
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?> 
    <?php if ($_smarty_tpl->tpl_vars['entry']->value->type>=pagesDB::TYPE_LANG_CATALOG){?>
    	<li id="item-id-<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
" class="<?php if ($_smarty_tpl->tpl_vars['entry']->value->type==pagesDB::TYPE_GALLERY||$_smarty_tpl->tpl_vars['entry']->value->type==pagesDB::TYPE_NEWS_GROUP){?>no-nest<?php }?> <?php if ($_smarty_tpl->tpl_vars['entry']->value->id==$_smarty_tpl->tpl_vars['id']->value){?>active<?php }?>">
	    	<div>
				 <?php echo $_smarty_tpl->getSubTemplate ('common/content_list_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>$_smarty_tpl->tpl_vars['entry']->value->type), 0);?>

				 <?php if ($_smarty_tpl->tpl_vars['entry']->value->type==pagesDB::TYPE_LANG_CATALOG||$_smarty_tpl->tpl_vars['entry']->value->type==pagesDB::TYPE_CATALOG){?>
				 	<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/content/showTreelist/<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
/"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['entry']->value->name,30);?>
</a>
				 <?php }else{ ?>
				 	<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['entry']->value->name,30);?>

				 <?php }?>
				 <div class="buttons">
					 <?php if ($_smarty_tpl->tpl_vars['entry']->value->type==pagesDB::TYPE_GALLERY){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/content/gallery/<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
/"><i class="icon-plus-sign icon-green">&nbsp;</i></a>
					 <?php }elseif($_smarty_tpl->tpl_vars['entry']->value->type==pagesDB::TYPE_NEWS_GROUP){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/content/news/<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
/"><i class="icon-plus-sign icon-green">&nbsp;</i></a>
					 <?php }else{ ?>					 
					 	<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/content/add/<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
/"><i class="icon-plus-sign icon-green">&nbsp;</i></a>
					 <?php }?>				 
					<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/content/edit/<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
/"><i class="icon-pencil icon-blue">&nbsp;</i></a> 
					<?php if ($_smarty_tpl->tpl_vars['entry']->value->status==1){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/content/hide/<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
/"><i class="icon-eye-open icon-grey">&nbsp;</i></a>
					<?php }else{ ?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/content/activate/<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
/"><i class="icon-eye-close icon-red">&nbsp;</i></a>
					<?php }?>				
					<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/content/delete/<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
/"><i class="icon-remove-sign icon-red">&nbsp;</i></a>
					<a href="#tab1" onclick="togglepopover(<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
);">
						<i id="popover-id-<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
" class="icon-info-sign icon-grey cl-<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
" rel="popovercontentlist" title=' <?php echo $_smarty_tpl->tpl_vars['entry']->value->name;?>
' data-content="<?php echo $_smarty_tpl->getSubTemplate ('common/content_info_popover.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['entry']->value), 0);?>
">&nbsp;</i>
					</a>
				</div>
			</div>
			<?php if (cookie::readCookie('showAllOn')){?>
				<ul style="padding-left:20px;"><?php smarty_template_function_treelist($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['pagesDB']->value->getPagesByParent($_smarty_tpl->tpl_vars['entry']->value->id,"status !=0")));?>
</ul>
		    <?php }else{ ?>
				<?php if ($_smarty_tpl->tpl_vars['pagesDB']->value->checkParentsOpen(unserialize(cookie::readCookie('contentOpenId')),$_smarty_tpl->tpl_vars['entry']->value)){?>
		    	<ul style="padding-left:20px;"><?php smarty_template_function_treelist($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['pagesDB']->value->getPagesByParent($_smarty_tpl->tpl_vars['entry']->value->id,"status !=0")));?>
</ul>
		    	<?php }?>		    	
		    <?php }?>

    	</li>
	<?php }else{ ?>
		<li id="item-id-<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
" class="no-nest <?php if ($_smarty_tpl->tpl_vars['entry']->value->id==$_smarty_tpl->tpl_vars['id']->value){?>active<?php }?>">
			<div>
				<?php echo $_smarty_tpl->getSubTemplate ('common/content_list_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>$_smarty_tpl->tpl_vars['entry']->value->type), 0);?>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['entry']->value->name,30);?>

				<div class="buttons">
					 <?php if ($_smarty_tpl->tpl_vars['entry']->value->type==pagesDB::TYPE_URL){?>
					 	<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/content/editUrl/<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
/"><i class="icon-pencil icon-blue">&nbsp;</i></a> 
					 <?php }else{ ?>
					 	<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/content/edit/<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
/"><i class="icon-pencil icon-blue">&nbsp;</i></a> 
					 <?php }?>
					 
					<?php if ($_smarty_tpl->tpl_vars['entry']->value->status==1){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/content/hide/<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
/"><i class="icon-eye-open icon-grey">&nbsp;</i></a>
					<?php }else{ ?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/content/activate/<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
/"><i class="icon-eye-close icon-red">&nbsp;</i></a>
					<?php }?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/content/delete/<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
/"><i class="icon-remove-sign icon-red">&nbsp;</i></a>
					<a href="#tab1" onclick="togglepopover(<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
);">
						<i id="popover-id-<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
" class="icon-info-sign icon-grey cl-<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
" rel="popovercontentlist" title=' <?php echo $_smarty_tpl->tpl_vars['entry']->value->name;?>
' data-content="<?php echo $_smarty_tpl->getSubTemplate ('common/content_info_popover.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['entry']->value), 0);?>
">&nbsp;</i>
					</a>				
				</div>
			</div>
		</li> 
	<?php }?> 
  <?php } ?> 
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>



<ul class="sortable <?php if (cookie::readCookie('sortableOn')){?>sortable-cursor<?php }?> list-bg" <?php if (cookie::readCookie('sortableOn')){?>id="sortableTreeList"<?php }?>>
<?php smarty_template_function_treelist($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['pagesDB']->value->getPagesByParent(0,"status !=0")));?>

<?php smarty_template_function_treelist($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['pagesDB']->value->getPagesByParent(-1,"status !=0")));?>

</ul>  <?php }} ?>