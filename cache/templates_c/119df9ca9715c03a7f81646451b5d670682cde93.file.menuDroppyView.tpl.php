<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:20:54
         compiled from "C:\serwer\www\winducms\data\widgets\menuDroppy\menuDroppyView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169785034a4768e0e24-69372514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '119df9ca9715c03a7f81646451b5d670682cde93' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\data\\widgets\\menuDroppy\\menuDroppyView.tpl',
      1 => 1345561082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169785034a4768e0e24-69372514',
  'function' => 
  array (
    'menuDroppyTree' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'params' => 0,
    'pages' => 0,
    'page' => 0,
    'data' => 0,
    'HOME' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a4769f03b9_43297073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a4769f03b9_43297073')) {function content_5034a4769f03b9_43297073($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['params']->value['sort']==''){?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['sort'] = 'position ASC';?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['params']->value['where']==''){?><?php ob_start();?><?php echo pagesDB::TYPE_NEWS;?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['where'] = "type != ".$_tmp1;?><?php }?>

<?php if (!function_exists('smarty_template_function_menuDroppyTree')) {
    function smarty_template_function_menuDroppyTree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['menuDroppyTree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['data']->value['pagesDB']->hasChild($_smarty_tpl->tpl_vars['page']->value->id)){?>
			<li>
				<a href="<?php if (strlen($_smarty_tpl->tpl_vars['page']->value->content)>3){?><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value->urlKey;?>
<?php }else{ ?>#<?php }?>"><?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
</a>
				<ul>
				<?php smarty_template_function_menuDroppyTree($_smarty_tpl,array('pages'=>$_smarty_tpl->tpl_vars['data']->value['pagesDB']->getPagesByParent($_smarty_tpl->tpl_vars['page']->value->id,$_smarty_tpl->tpl_vars['params']->value['where'],$_smarty_tpl->tpl_vars['params']->value['sort'],'*',null,null,true)));?>

				</ul>
			</li>
		<?php }else{ ?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value->urlKey;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
</a></li>
		<?php }?>
	<?php } ?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<ul id="droppy">
<?php smarty_template_function_menuDroppyTree($_smarty_tpl,array('pages'=>$_smarty_tpl->tpl_vars['data']->value['pagesDB']->getPages($_smarty_tpl->tpl_vars['params']->value['parent'],$_smarty_tpl->tpl_vars['params']->value['where'],$_smarty_tpl->tpl_vars['params']->value['sort'],'*',null,null,true)));?>

</ul>
<?php }} ?>