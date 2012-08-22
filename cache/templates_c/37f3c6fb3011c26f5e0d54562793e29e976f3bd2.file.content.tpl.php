<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:21:19
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119565034a48fba6f45-10804650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37f3c6fb3011c26f5e0d54562793e29e976f3bd2' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\content.tpl',
      1 => 1345561082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119565034a48fba6f45-10804650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
    'contentType' => 0,
    'form' => 0,
    'image' => 0,
    'formLang' => 0,
    'configList' => 0,
    'formConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a48fda34d6_15478634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a48fda34d6_15478634')) {function content_5034a48fda34d6_15478634($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\serwer\\www\\winducms/data/functions\\function.L.php';
?>  	<div class="tabbable">
	  <ul class="nav nav-tabs" id="myTab">
	    <li><a href="#tab1" data-toggle="tab"><i class="color-icons icons-clipboard-list icon-margin"> </i><?php echo smarty_function_L(array('key'=>"admin.content.tpl.pages"),$_smarty_tpl);?>
</a></li>
	    <li><a href="#tab2" data-toggle="tab"><i class="color-icons icons-direction icon-margin"> </i><?php echo smarty_function_L(array('key'=>"admin.content.tpl.languages"),$_smarty_tpl);?>
</a></li>
	    <li><a href="#tab3" data-toggle="tab"><i class="color-icons icons-popcorn icon-margin"> </i><?php echo smarty_function_L(array('key'=>"admin.content.tpl.trash"),$_smarty_tpl);?>
</a></li>
	    <li><a href="#tab4" data-toggle="tab"><i class="color-icons icons-gear icon-margin"> </i><?php echo smarty_function_L(array('key'=>"admin.content.tpl.settings"),$_smarty_tpl);?>
</a></li>
	  </ul>
	  <div class="tab-content">
	    <div class="tab-pane" id="tab1">
			<div class="row-fluid">
			  <div class="span4 box">
			  	<h5><?php echo smarty_function_L(array('key'=>"admin.content.common.tpl.pageslist"),$_smarty_tpl);?>

				  	<div class="buttons">
				  		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/mainDo/toogleCookie/sortableOn/tab1/" class="btn btn-small <?php if (cookie::readCookie('sortableOn')){?>btn-success<?php }?>"><?php echo smarty_function_L(array('key'=>"admin.content.tpl.sort"),$_smarty_tpl);?>
</a>
				  		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/mainDo/toogleCookie/showAllOn/tab1/" class="btn btn-small <?php if (cookie::readCookie('showAllOn')){?>btn-success<?php }?>"><?php echo smarty_function_L(array('key'=>"admin.content.tpl.showall"),$_smarty_tpl);?>
</a>
				  		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/content/hideTreelistAll/" class="btn btn-small">-</a>
				  	</div>
			  	</h5>
				<?php echo $_smarty_tpl->getSubTemplate ('common/content_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			  </div>
			  	<?php if ($_smarty_tpl->tpl_vars['contentType']->value=='form'){?>
				  	<div class="span8">
				  		<?php echo $_smarty_tpl->getSubTemplate ('common/alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				  		<div class="box">
					  		<h5><?php echo smarty_function_L(array('key'=>"admin.content.tpl.functions"),$_smarty_tpl);?>
</h5>
					  		<?php echo $_smarty_tpl->tpl_vars['form']->value->toHtml();?>

				  		</div>
				  	</div>
			  	<?php }elseif($_smarty_tpl->tpl_vars['contentType']->value=='gallery'){?>
				  	<div class="span8">
				  		<?php echo $_smarty_tpl->getSubTemplate ('common/alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				  		<div class="box" style="margin-bottom:20px;">
					  		<h5><?php echo smarty_function_L(array('key'=>"admin.content.common.tpl.addimages"),$_smarty_tpl);?>
</h5>
					  		<?php echo $_smarty_tpl->getSubTemplate ('common/images_multiuploader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					  	</div>	
					  	<div class="box" style="margin-bottom:20px;">
				  			<h5><?php echo smarty_function_L(array('key'=>"admin.content.common.tpl.imagelistingalery"),$_smarty_tpl);?>

							  	<div class="buttons">
							  		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/mainDo/toogleCookie/sortableOn/tab1/" class="btn btn-small <?php if (cookie::readCookie('sortableOn')){?>btn-success<?php }?>"><?php echo smarty_function_L(array('key'=>"admin.content.tpl.sort"),$_smarty_tpl);?>
</a>
							  	</div>				  			
				  			</h5>
				  			<?php echo $_smarty_tpl->getSubTemplate ('common/images_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
				  		</div>
				  	</div>
				<?php }elseif($_smarty_tpl->tpl_vars['contentType']->value=='image'){?>
				  	<div class="span8">
				  		<?php echo $_smarty_tpl->getSubTemplate ('common/alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				  		<div class="box" style="margin-bottom:20px;">
					  		<h5><?php echo smarty_function_L(array('key'=>"admin.content.tpl.editimages"),$_smarty_tpl);?>
</h5>
					  		<img src='<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
image/<?php echo $_smarty_tpl->tpl_vars['image']->value->ekey;?>
/250/180/smart/' class="margin">
					  	</div>	
				  		<div class="box">
					  		<h5><?php echo smarty_function_L(array('key'=>"admin.content.tpl.description"),$_smarty_tpl);?>
</h5>
					  		<?php echo $_smarty_tpl->tpl_vars['form']->value->toHtml();?>

					  	</div>	
				  	</div>	
				<?php }elseif($_smarty_tpl->tpl_vars['contentType']->value=='news'){?>
				  	<div class="span8">
				  		<?php echo $_smarty_tpl->getSubTemplate ('common/alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				  		<div class="box" style="margin-bottom:20px;">
					  		<h5><?php echo smarty_function_L(array('key'=>"admin.content.tpl.addnews"),$_smarty_tpl);?>
</h5>
					  		<?php echo $_smarty_tpl->tpl_vars['form']->value->toHtml();?>

					  	</div>	
				  		<div class="box">
					  		<h5><?php echo smarty_function_L(array('key'=>"admin.content.tpl.newslist"),$_smarty_tpl);?>
</h5>
					  		<?php echo $_smarty_tpl->getSubTemplate ('common/news_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
					  	</div>	
				  	</div>	
			  	<?php }else{ ?>
			  		<div class="span8">
			  			<?php echo $_smarty_tpl->getSubTemplate ('common/alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				  		<div class="box">
			  				<h5><?php echo smarty_function_L(array('key'=>"admin.content.common.tpl.help"),$_smarty_tpl);?>
</h5>
			  				<div class="pad">
			  				<?php echo $_smarty_tpl->getSubTemplate ('common/content_help.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			  				</div>
			  			</div>	
			  		</div>
			  	<?php }?>
			</div>     	
	    </div>
	    <div class="tab-pane" id="tab2">
			<div class="row-fluid">
			  <div class="span4 box">
			  	<h5><?php echo smarty_function_L(array('key'=>"admin.content.common.tpl.languages"),$_smarty_tpl);?>
</h5>
				<?php echo $_smarty_tpl->getSubTemplate ('common/lang_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
			  </div>
			  <div class="span8 box">
			  	<h5><?php echo smarty_function_L(array('key'=>"admin.content.tpl.addlanguage"),$_smarty_tpl);?>
</h5>
				<?php echo $_smarty_tpl->tpl_vars['formLang']->value->toHtml();?>

			  </div>
			</div> 	      		
	    </div>
	    <div class="tab-pane" id="tab3">
			<div class="row-fluid">
			  <div class="span4 box">
			  	<h5>
					<?php echo smarty_function_L(array('key'=>"admin.content.common.tpl.trashcontent"),$_smarty_tpl);?>

				  	<div class="buttons">
				  		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/trash/emptyTrash/" class="btn btn-small btn-danger"><?php echo smarty_function_L(array('key'=>"admin.content.tpl.emptytrash"),$_smarty_tpl);?>
</a>
				  	</div>					
			  	</h5>
				<?php echo $_smarty_tpl->getSubTemplate ('common/trash_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
			  </div>
			  <div class="span8 box">
			  	<div class="pad">
					pomoc czy cos takiego
				</div>
			  </div>
			</div> 	      		
	    </div>
	    <div class="tab-pane" id="tab4">
			<div class="row-fluid">
			  <div class="span8 box">
				<?php echo $_smarty_tpl->getSubTemplate ('common/config_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('list'=>$_smarty_tpl->tpl_vars['configList']->value,'class'=>'content','tab'=>'#tab4'), 0);?>

			  </div>
			  <div class="span4 box">
			  <?php if (is_object($_smarty_tpl->tpl_vars['formConfig']->value)){?>
			  	<h5><?php echo smarty_function_L(array('key'=>"admin.content.tpl.edit"),$_smarty_tpl);?>
</h5>
				<?php echo $_smarty_tpl->tpl_vars['formConfig']->value->toHtml();?>

			  <?php }else{ ?>
			  	<h5><?php echo smarty_function_L(array('key'=>"admin.content.tpl.help"),$_smarty_tpl);?>
</h5>
			  	<div class="pad">
			  		jakis tekst pomocy 	
			  	</div>
			  <?php }?>	
			  </div>
			</div> 	      		
	    </div>	    	    
	  </div>
	</div>


<?php }} ?>