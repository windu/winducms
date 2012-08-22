<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:20:54
         compiled from "C:\serwer\www\winducms\data\themes\adwokat\views\main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:269155034a476a02ae1-92387901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19981b450e48f7a629423e5c80803b4fed6fbf07' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\data\\themes\\adwokat\\views\\main_page.tpl',
      1 => 1345561082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '269155034a476a02ae1-92387901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a476a26836_32893448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a476a26836_32893448')) {function content_5034a476a26836_32893448($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\serwer\\www\\winducms/data/functions\\function.L.php';
?><div class="top-home">
	<div class="container">
		<div class="row">
			<div class="span12">
				
			</div>		
		</div>			
	</div>
</div>
<div class="top-down">
	<div class="container">
		<div class="row">
			<div class="span4">
				<h3><span class="picons picons-08">&nbsp;</span>O Nas</h3>
				<div class="box-content">
					Phasellus nisl mi, aliquet pulvinar faucibus pulvinar, bibendum nec ipsum. Phasellus imperdiet urna id enim mattis eget bibendum vehicu vulputate magna porttitor. Donec lorem orci, rutrutetur non, fringilla sed velit.<br><br>
					<a class="btn" href="./1/83/222/">więcej</a>
				</div>
			</div>			
			<div class="span4">
				<h3><span class="picons picons-10">&nbsp;</span>Zakres usług</h3>
				<div class="box-content">
					Curabitur et felis bibendum sapien ultrices laoreet nec eget tellus. Vivamus quis nisl et eros hendrerit aliquet vitae vel odio. Morbi quis urna ac mi eleifend egestas vel vel nulla. Morbi quam massa, ultricies quis euismod ac, elementum non nisl.<br><br>
					<a class="btn" href="./1/83/225/">więcej</a>
				</div>
			</div>
			<div class="span4">
				<h3><span class="picons picons-05">&nbsp;</span>Kontakt</h3>
				<div class="box-content">
					Curabitur et felis bibendum sapien ultrices laoreet nec eget tellus. Vivamus quis nisl et eros hendrerit aliquet vitae vel odio. Morbi quis urna ac mi eleifend egestas vel vel nulla. Morbi quam massa, ultricies quis euismod ac, elementum non nisl.<br><br>
					<a class="btn" href="./1/83/225/">więcej</a>
				</div>
			</div>
		</div>		
	</div>
</div>
<div class="container" style="padding-top: 30px; padding-bottom: 30px;">
	<div class="row">
		<div class="span9">
			<h3 class="title"><?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
</h3>
			<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['page']->value->content, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
		</div>
		<div class="span3">
			<?php echo smarty_function_L(array('key'=>"front.form.send"),$_smarty_tpl);?>

		</div>
	</div>
</div>
<footer>
	<p>© Windu 2.0</p>
</footer><?php }} ?>