<?php /* Smarty version Smarty-3.1.11, created on 2012-08-22 09:21:04
         compiled from "C:\serwer\www\winducms\app\plugins\admin\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:307485034a480240e02-15120257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b84aac33f1cd5e2854ba7f4cf6c4faf79735411' => 
    array (
      0 => 'C:\\serwer\\www\\winducms\\app\\plugins\\admin\\templates\\index.tpl',
      1 => 1345561082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307485034a480240e02-15120257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5034a4803785c5_81855198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5034a4803785c5_81855198')) {function content_5034a4803785c5_81855198($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\serwer\\www\\winducms/data/functions\\function.L.php';
?>  	<div class="tabbable">
	  <ul class="nav nav-tabs" id="myTab">
	  	<li><a href="#tab1" data-toggle="tab"><i class="color-icons icons-chalkboard-text icon-margin"> </i><?php echo smarty_function_L(array('key'=>"admin.index.tpl.welcome"),$_smarty_tpl);?>
</a></li>
	    <li><a href="#tab2" data-toggle="tab"><i class="icon-file icon-grey icon-margin"> </i><?php echo smarty_function_L(array('key'=>"admin.index.tpl.icons"),$_smarty_tpl);?>
</a></li>
	  </ul>
	  <div class="tab-content">
	  	<div class="tab-pane" id="tab1">
	  	
		    <div class="row-fluid menu">
		    <?php if (usersDB::permissionCheck('adminContentController')){?>
		      <div class="span2 box">
				
					<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/content/" title="<?php echo smarty_function_L(array('key'=>"admin.menu.content"),$_smarty_tpl);?>
">
					<i class="picons picons-11 picons-menu"> </i>
					<h4><?php echo smarty_function_L(array('key'=>"admin.menu.content"),$_smarty_tpl);?>
</h4>
					<div class="menu-content"><?php echo smarty_function_L(array('key'=>"admin.index.tpl.deleteedit"),$_smarty_tpl);?>
</div>	
					</a>
		      </div>
		      <?php }?>
		      <?php if (usersDB::permissionCheck('adminUsersController')){?>
		      <div class="span2 box">
				
					<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/users/" title="<?php echo smarty_function_L(array('key'=>"admin.menu.users"),$_smarty_tpl);?>
">
					<i class="picons picons-15 picons-menu"> </i>
					<h4><?php echo smarty_function_L(array('key'=>"admin.menu.users"),$_smarty_tpl);?>
</h4>
					<div class="menu-content"><?php echo smarty_function_L(array('key'=>"admin.index.tpl.addusers"),$_smarty_tpl);?>
</div>
					</a>
			  </div>	
			  <?php }?>
		      <?php if (usersDB::permissionCheck('adminThemesController')){?>
			  <div class="span2 box">
					<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/themes/" title="<?php echo smarty_function_L(array('key'=>"admin.menu.themes"),$_smarty_tpl);?>
">
					<i class="picons picons-37 picons-menu"> </i>
					<h4><?php echo smarty_function_L(array('key'=>"admin.menu.themes"),$_smarty_tpl);?>
</h4>
					<div class="menu-content"><?php echo smarty_function_L(array('key'=>"admin.index.tpl.themes"),$_smarty_tpl);?>
</div>
					</a>
			  </div>
			  <?php }?>
			  <?php if (usersDB::permissionCheck('adminBackupController')){?>
			  <div class="span2 box">
					<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/tools/" title="<?php echo smarty_function_L(array('key'=>"admin.menu.tools"),$_smarty_tpl);?>
">
					<i class="picons picons-23 picons-menu"> </i>
					<h4><?php echo smarty_function_L(array('key'=>"admin.menu.tools"),$_smarty_tpl);?>
</h4>
					<div class="menu-content"><?php echo smarty_function_L(array('key'=>"admin.index.tpl.tools"),$_smarty_tpl);?>
</div>
					</a>
			  </div>
			  <?php }?>
			  <?php if (usersDB::permissionCheck('adminConfigController')){?>
		      <div class="span2 box">
					<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/config/" title="<?php echo smarty_function_L(array('key'=>"admin.menu.config"),$_smarty_tpl);?>
">
					<i class="picons picons-31 picons-menu"> </i>
					<h4><?php echo smarty_function_L(array('key'=>"admin.menu.config"),$_smarty_tpl);?>
</h4>
					<div class="menu-content"><?php echo smarty_function_L(array('key'=>"admin.index.tpl.config"),$_smarty_tpl);?>
</div>
					</a>
		      </div>
		      <?php }?>			  
			  <?php if (usersDB::permissionCheck('adminSystemController')){?>
			  <div class="span2 box">
					<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/system/" title="<?php echo smarty_function_L(array('key'=>"admin.menu.system"),$_smarty_tpl);?>
">
					<i class="picons picons-41 picons-menu"> </i>
					<h4><?php echo smarty_function_L(array('key'=>"admin.menu.system"),$_smarty_tpl);?>
</h4>
					<div class="menu-content"><?php echo smarty_function_L(array('key'=>"admin.index.tpl.system"),$_smarty_tpl);?>
</div>
					</a>
			  </div>
			  <?php }?>	      
		    </div>
		    <?php if (usersDB::permissionCheck('adminSystemController')&&notifyDB::count()>0){?>
	    	<div class="row-fluid margin-top">
			  <div class="span12 box">
			  	<?php echo $_smarty_tpl->getSubTemplate ('common/notify_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			  </div>
			</div>	
			<?php }?>		    	  
	  	</div>
	    <div class="tab-pane" id="tab2">
 <i class="color-icons icons-abacus"> </i>
<i class="color-icons icons-address-book-open"> </i> <!-- 0 -36px; width: 16px; height: 16px;--> 
<i class="color-icons icons-address-book"> </i> <!-- 0 -72px; width: 16px; height: 16px;--> 
<i class="color-icons icons-application--arrow"> </i> <!-- 0 -108px; width: 16px; height: 16px;--> 
<i class="color-icons icons-application-ab"> </i> <!-- 0 -144px; width: 16px; height: 16px;--> 
<i class="color-icons icons-application-blog"> </i> <!-- 0 -180px; width: 16px; height: 16px;--> 
<i class="color-icons icons-application-blue"> </i> <!-- 0 -216px; width: 16px; height: 16px;--> 
<i class="color-icons icons-application-browser"> </i> <!-- 0 -252px; width: 16px; height: 16px;--> 
<i class="color-icons icons-application-detail"> </i> <!-- 0 -288px; width: 16px; height: 16px;--> 
<i class="color-icons icons-application-dialog"> </i> <!-- 0 -324px; width: 16px; height: 16px;--> 
<i class="color-icons icons-application-documents"> </i> <!-- 0 -360px; width: 16px; height: 16px;--> 
<i class="color-icons icons-application-export"> </i> <!-- 0 -396px; width: 16px; height: 16px;--> 
<i class="color-icons icons-application-icon-large"> </i> <!-- 0 -432px; width: 16px; height: 16px;--> 
<i class="color-icons icons-application-import"> </i> <!-- 0 -468px; width: 16px; height: 16px;--> 
<i class="color-icons icons-application-list"> </i> <!-- 0 -504px; width: 16px; height: 16px;--> 
<i class="color-icons icons-application-medium"> </i> <!-- 0 -540px; width: 16px; height: 16px;--> 
<i class="color-icons icons-application-monitor"> </i> <!-- 0 -576px; width: 16px; height: 16px;--> 
<i class="color-icons icons-application-search-result"> </i> <!-- 0 -612px; width: 16px; height: 16px;--> 
<i class="color-icons icons-application-share"> </i> <!-- 0 -648px; width: 16px; height: 16px;--> 
<i class="color-icons icons-application-sidebar"> </i> <!-- 0 -684px; width: 16px; height: 16px;--> 
<i class="color-icons icons-application"> </i> <!-- 0 -720px; width: 16px; height: 16px;--> 
<i class="color-icons icons-applications-blue"> </i> <!-- 0 -756px; width: 16px; height: 16px;--> 
<i class="color-icons icons-applications"> </i> <!-- 0 -792px; width: 16px; height: 16px;--> 
<i class="color-icons icons-arrow-045"> </i> <!-- 0 -828px; width: 16px; height: 16px;--> 
<i class="color-icons icons-arrow-090"> </i> <!-- 0 -864px; width: 16px; height: 16px;--> 
<i class="color-icons icons-arrow-circle-045-left"> </i> <!-- 0 -900px; width: 16px; height: 16px;--> 
<i class="color-icons icons-arrow-circle-double-135"> </i> <!-- 0 -936px; width: 16px; height: 16px;--> 
<i class="color-icons icons-arrow-circle"> </i> <!-- 0 -972px; width: 16px; height: 16px;--> 
<i class="color-icons icons-arrow-continue-000-top"> </i> <!-- 0 -1008px; width: 16px; height: 16px;--> 
<i class="color-icons icons-arrow-continue-090-left"> </i> <!-- 0 -1044px; width: 16px; height: 16px;--> 
<i class="color-icons icons-arrow"> </i> <!-- 0 -1080px; width: 16px; height: 16px;--> 
<i class="color-icons icons-at-sign-document"> </i> <!-- 0 -1116px; width: 16px; height: 16px;--> 
<i class="color-icons icons-balloon--arrow"> </i> <!-- 0 -1152px; width: 16px; height: 16px;--> 
<i class="color-icons icons-balloon-box-left"> </i> <!-- 0 -1188px; width: 16px; height: 16px;--> 
<i class="color-icons icons-balloon-quotation"> </i> <!-- 0 -1224px; width: 16px; height: 16px;--> 
<i class="color-icons icons-balloon-white-left"> </i> <!-- 0 -1260px; width: 16px; height: 16px;--> 
<i class="color-icons icons-balloon"> </i> <!-- 0 -1296px; width: 16px; height: 16px;--> 
<i class="color-icons icons-balloons"> </i> <!-- 0 -1332px; width: 16px; height: 16px;--> 
<i class="color-icons icons-bandaid--arrow"> </i> <!-- 0 -1368px; width: 16px; height: 16px;--> 
<i class="color-icons icons-bandaid"> </i> <!-- 0 -1404px; width: 16px; height: 16px;--> 
<i class="color-icons icons-bank--arrow"> </i> <!-- 0 -1440px; width: 16px; height: 16px;--> 
<i class="color-icons icons-bank"> </i> <!-- 0 -1476px; width: 16px; height: 16px;--> 
<i class="color-icons icons-binocular--arrow"> </i> <!-- 0 -1512px; width: 16px; height: 16px;--> 
<i class="color-icons icons-binocular"> </i> <!-- 0 -1548px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blog--arrow"> </i> <!-- 0 -1584px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blog-blue"> </i> <!-- 0 -1620px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blog-posterous"> </i> <!-- 0 -1656px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blog-tumblr"> </i> <!-- 0 -1692px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blog"> </i> <!-- 0 -1728px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blogs-stack"> </i> <!-- 0 -1764px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blogs"> </i> <!-- 0 -1800px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document--arrow"> </i> <!-- 0 -1836px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-binary"> </i> <!-- 0 -1872px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-block"> </i> <!-- 0 -1908px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-bookmark"> </i> <!-- 0 -1944px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-code"> </i> <!-- -36px 0; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-convert"> </i> <!-- -36px -36px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-copy"> </i> <!-- -36px -72px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-excel"> </i> <!-- -36px -108px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-export"> </i> <!-- -36px -144px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-film"> </i> <!-- -36px -180px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-flash-movie"> </i> <!-- -36px -216px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-flash"> </i> <!-- -36px -252px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-globe"> </i> <!-- -36px -288px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-hf-delete-footer"> </i> <!-- -36px -324px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-hf-delete"> </i> <!-- -36px -360px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-hf-insert-footer"> </i> <!-- -36px -396px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-hf-select-footer"> </i> <!-- -36px -432px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-hf"> </i> <!-- -36px -468px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-import"> </i> <!-- -36px -504px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-invoice"> </i> <!-- -36px -540px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-list"> </i> <!-- -36px -576px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-medium"> </i> <!-- -36px -612px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-music-playlist"> </i> <!-- -36px -648px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document-node"> </i> <!-- -36px -684px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-document"> </i> <!-- -36px -720px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-folder-horizontal-open"> </i> <!-- -36px -756px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-folder-horizontal"> </i> <!-- -36px -792px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-folder-open-document-music-playlist"> </i> <!-- -36px -828px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-folder-open-document-text"> </i> <!-- -36px -864px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-folder-open-document"> </i> <!-- -36px -900px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-folder-open-film"> </i> <!-- -36px -936px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-folder-open-image"> </i> <!-- -36px -972px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-folder-open-slide"> </i> <!-- -36px -1008px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-folder-open-table"> </i> <!-- -36px -1044px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-folder-open"> </i> <!-- -36px -1080px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-folder-share"> </i> <!-- -36px -1116px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-folder-shred"> </i> <!-- -36px -1152px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-folder-stamp"> </i> <!-- -36px -1188px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-folder-stand"> </i> <!-- -36px -1224px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-folder-sticky-note"> </i> <!-- -36px -1260px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-folder-zipper"> </i> <!-- -36px -1296px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-folders-stack"> </i> <!-- -36px -1332px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blue-folders"> </i> <!-- -36px -1368px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blueprint--arrow"> </i> <!-- -36px -1404px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blueprint-horizontal"> </i> <!-- -36px -1440px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blueprint-medium"> </i> <!-- -36px -1476px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blueprint"> </i> <!-- -36px -1512px; width: 16px; height: 16px;--> 
<i class="color-icons icons-blueprints"> </i> <!-- -36px -1548px; width: 16px; height: 16px;--> 
<i class="color-icons icons-book-open-bookmark"> </i> <!-- -36px -1584px; width: 16px; height: 16px;--> 
<i class="color-icons icons-book-open-list"> </i> <!-- -36px -1620px; width: 16px; height: 16px;--> 
<i class="color-icons icons-book-open-next"> </i> <!-- -36px -1656px; width: 16px; height: 16px;--> 
<i class="color-icons icons-book-open-previous"> </i> <!-- -36px -1692px; width: 16px; height: 16px;--> 
<i class="color-icons icons-book-open-text-image"> </i> <!-- -36px -1728px; width: 16px; height: 16px;--> 
<i class="color-icons icons-book-open-text"> </i> <!-- -36px -1764px; width: 16px; height: 16px;--> 
<i class="color-icons icons-book-open"> </i> <!-- -36px -1800px; width: 16px; height: 16px;--> 
<i class="color-icons icons-box--arrow"> </i> <!-- -36px -1836px; width: 16px; height: 16px;--> 
<i class="color-icons icons-box--exclamation"> </i> <!-- -36px -1872px; width: 16px; height: 16px;--> 
<i class="color-icons icons-box--minus"> </i> <!-- -36px -1908px; width: 16px; height: 16px;--> 
<i class="color-icons icons-box--pencil"> </i> <!-- -36px -1944px; width: 16px; height: 16px;--> 
<i class="color-icons icons-box--plus"> </i> <!-- -72px 0; width: 16px; height: 16px;--> 
<i class="color-icons icons-box-document"> </i> <!-- -72px -36px; width: 16px; height: 16px;--> 
<i class="color-icons icons-box-label"> </i> <!-- -72px -72px; width: 16px; height: 16px;--> 
<i class="color-icons icons-box-medium"> </i> <!-- -72px -108px; width: 16px; height: 16px;--> 
<i class="color-icons icons-box-search-result"> </i> <!-- -72px -144px; width: 16px; height: 16px;--> 
<i class="color-icons icons-box-share"> </i> <!-- -72px -180px; width: 16px; height: 16px;--> 
<i class="color-icons icons-box-small"> </i> <!-- -72px -216px; width: 16px; height: 16px;--> 
<i class="color-icons icons-box-zipper"> </i> <!-- -72px -252px; width: 16px; height: 16px;--> 
<i class="color-icons icons-box"> </i> <!-- -72px -288px; width: 16px; height: 16px;--> 
<i class="color-icons icons-briefcase--arrow"> </i> <!-- -72px -324px; width: 16px; height: 16px;--> 
<i class="color-icons icons-briefcase"> </i> <!-- -72px -360px; width: 16px; height: 16px;--> 
<i class="color-icons icons-calendar--arrow"> </i> <!-- -72px -396px; width: 16px; height: 16px;--> 
<i class="color-icons icons-calendar--pencil"> </i> <!-- -72px -432px; width: 16px; height: 16px;--> 
<i class="color-icons icons-calendar-blue"> </i> <!-- -72px -468px; width: 16px; height: 16px;--> 
<i class="color-icons icons-calendar-day"> </i> <!-- -72px -504px; width: 16px; height: 16px;--> 
<i class="color-icons icons-calendar-delete"> </i> <!-- -72px -540px; width: 16px; height: 16px;--> 
<i class="color-icons icons-calendar-import"> </i> <!-- -72px -576px; width: 16px; height: 16px;--> 
<i class="color-icons icons-calendar-list"> </i> <!-- -72px -612px; width: 16px; height: 16px;--> 
<i class="color-icons icons-calendar-month"> </i> <!-- -72px -648px; width: 16px; height: 16px;--> 
<i class="color-icons icons-calendar-next"> </i> <!-- -72px -684px; width: 16px; height: 16px;--> 
<i class="color-icons icons-calendar-previous"> </i> <!-- -72px -720px; width: 16px; height: 16px;--> 
<i class="color-icons icons-calendar-relation"> </i> <!-- -72px -756px; width: 16px; height: 16px;--> 
<i class="color-icons icons-calendar-search-result"> </i> <!-- -72px -792px; width: 16px; height: 16px;--> 
<i class="color-icons icons-calendar-select-week"> </i> <!-- -72px -828px; width: 16px; height: 16px;--> 
<i class="color-icons icons-calendar-select"> </i> <!-- -72px -864px; width: 16px; height: 16px;--> 
<i class="color-icons icons-calendar-share"> </i> <!-- -72px -900px; width: 16px; height: 16px;--> 
<i class="color-icons icons-calendar-task"> </i> <!-- -72px -936px; width: 16px; height: 16px;--> 
<i class="color-icons icons-calendar"> </i> <!-- -72px -972px; width: 16px; height: 16px;--> 
<i class="color-icons icons-cassette--arrow"> </i> <!-- -72px -1008px; width: 16px; height: 16px;--> 
<i class="color-icons icons-cassette-label"> </i> <!-- -72px -1044px; width: 16px; height: 16px;--> 
<i class="color-icons icons-cassette"> </i> <!-- -72px -1080px; width: 16px; height: 16px;--> 
<i class="color-icons icons-caution-board-prohibition"> </i> <!-- -72px -1116px; width: 16px; height: 16px;--> 
<i class="color-icons icons-caution-board"> </i> <!-- -72px -1152px; width: 16px; height: 16px;--> 
<i class="color-icons icons-chair--arrow"> </i> <!-- -72px -1188px; width: 16px; height: 16px;--> 
<i class="color-icons icons-chair"> </i> <!-- -72px -1224px; width: 16px; height: 16px;--> 
<i class="color-icons icons-chalkboard-text"> </i> <!-- -72px -1260px; width: 16px; height: 16px;--> 
<i class="color-icons icons-chalkboard"> </i> <!-- -72px -1296px; width: 16px; height: 16px;--> 
<i class="color-icons icons-chart--arrow"> </i> <!-- -72px -1332px; width: 16px; height: 16px;--> 
<i class="color-icons icons-chart--pencil"> </i> <!-- -72px -1368px; width: 16px; height: 16px;--> 
<i class="color-icons icons-chart--plus"> </i> <!-- -72px -1404px; width: 16px; height: 16px;--> 
<i class="color-icons icons-chart-pie-separate"> </i> <!-- -72px -1440px; width: 16px; height: 16px;--> 
<i class="color-icons icons-chart-pie"> </i> <!-- -72px -1476px; width: 16px; height: 16px;--> 
<i class="color-icons icons-chart-up"> </i> <!-- -72px -1512px; width: 16px; height: 16px;--> 
<i class="color-icons icons-chart"> </i> <!-- -72px -1548px; width: 16px; height: 16px;--> 
<i class="color-icons icons-cheque--arrow"> </i> <!-- -72px -1584px; width: 16px; height: 16px;--> 
<i class="color-icons icons-cheque"> </i> <!-- -72px -1620px; width: 16px; height: 16px;--> 
<i class="color-icons icons-clipboard--arrow"> </i> <!-- -72px -1656px; width: 16px; height: 16px;--> 
<i class="color-icons icons-clipboard--exclamation"> </i> <!-- -72px -1692px; width: 16px; height: 16px;--> 
<i class="color-icons icons-clipboard--pencil"> </i> <!-- -72px -1728px; width: 16px; height: 16px;--> 
<i class="color-icons icons-clipboard--plus"> </i> <!-- -72px -1764px; width: 16px; height: 16px;--> 
<i class="color-icons icons-clipboard-empty"> </i> <!-- -72px -1800px; width: 16px; height: 16px;--> 
<i class="color-icons icons-clipboard-invoice"> </i> <!-- -72px -1836px; width: 16px; height: 16px;--> 
<i class="color-icons icons-clipboard-list"> </i> <!-- -72px -1872px; width: 16px; height: 16px;--> 
<i class="color-icons icons-clipboard-paste-document-text"> </i> <!-- -72px -1908px; width: 16px; height: 16px;--> 
<i class="color-icons icons-clipboard-paste-image"> </i> <!-- -72px -1944px; width: 16px; height: 16px;--> 
<i class="color-icons icons-clipboard-paste-word"> </i> <!-- -108px 0; width: 16px; height: 16px;--> 
<i class="color-icons icons-clipboard-paste"> </i> <!-- -108px -36px; width: 16px; height: 16px;--> 
<i class="color-icons icons-clipboard-sign"> </i> <!-- -108px -72px; width: 16px; height: 16px;--> 
<i class="color-icons icons-clipboard-task"> </i> <!-- -108px -108px; width: 16px; height: 16px;--> 
<i class="color-icons icons-clipboard-text"> </i> <!-- -108px -144px; width: 16px; height: 16px;--> 
<i class="color-icons icons-clipboard"> </i> <!-- -108px -180px; width: 16px; height: 16px;--> 
<i class="color-icons icons-clock-frame"> </i> <!-- -108px -216px; width: 16px; height: 16px;--> 
<i class="color-icons icons-clock-history-frame"> </i> <!-- -108px -252px; width: 16px; height: 16px;--> 
<i class="color-icons icons-clock-moon-phase"> </i> <!-- -108px -288px; width: 16px; height: 16px;--> 
<i class="color-icons icons-clock"> </i> <!-- -108px -324px; width: 16px; height: 16px;--> 
<i class="color-icons icons-co2"> </i> <!-- -108px -360px; width: 16px; height: 16px;--> 
<i class="color-icons icons-construction"> </i> <!-- -108px -396px; width: 16px; height: 16px;--> 
<i class="color-icons icons-cup--arrow"> </i> <!-- -108px -432px; width: 16px; height: 16px;--> 
<i class="color-icons icons-cup-empty"> </i> <!-- -108px -468px; width: 16px; height: 16px;--> 
<i class="color-icons icons-cup"> </i> <!-- -108px -504px; width: 16px; height: 16px;--> 
<i class="color-icons icons-database--arrow"> </i> <!-- -108px -540px; width: 16px; height: 16px;--> 
<i class="color-icons icons-database--exclamation"> </i> <!-- -108px -576px; width: 16px; height: 16px;--> 
<i class="color-icons icons-database-delete"> </i> <!-- -108px -612px; width: 16px; height: 16px;--> 
<i class="color-icons icons-database-import"> </i> <!-- -108px -648px; width: 16px; height: 16px;--> 
<i class="color-icons icons-database-network"> </i> <!-- -108px -684px; width: 16px; height: 16px;--> 
<i class="color-icons icons-database-share"> </i> <!-- -108px -720px; width: 16px; height: 16px;--> 
<i class="color-icons icons-database"> </i> <!-- -108px -756px; width: 16px; height: 16px;--> 
<i class="color-icons icons-databases"> </i> <!-- -108px -792px; width: 16px; height: 16px;--> 
<i class="color-icons icons-direction--arrow"> </i> <!-- -108px -828px; width: 16px; height: 16px;--> 
<i class="color-icons icons-direction"> </i> <!-- -108px -864px; width: 16px; height: 16px;--> 
<i class="color-icons icons-disk-black"> </i> <!-- -108px -900px; width: 16px; height: 16px;--> 
<i class="color-icons icons-do-not-disturb-sign-prohibition"> </i> <!-- -108px -936px; width: 16px; height: 16px;--> 
<i class="color-icons icons-do-not-disturb-sign"> </i> <!-- -108px -972px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document--exclamation"> </i> <!-- -108px -1008px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document--minus"> </i> <!-- -108px -1044px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document--pencil"> </i> <!-- -108px -1080px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document--plus"> </i> <!-- -108px -1116px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-bookmark"> </i> <!-- -108px -1152px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-braille"> </i> <!-- -108px -1188px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-break"> </i> <!-- -108px -1224px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-broken"> </i> <!-- -108px -1260px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-clock"> </i> <!-- -108px -1296px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-code"> </i> <!-- -108px -1332px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-convert"> </i> <!-- -108px -1368px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-copy"> </i> <!-- -108px -1404px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-excel-table"> </i> <!-- -108px -1440px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-export"> </i> <!-- -108px -1476px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-film"> </i> <!-- -108px -1512px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-flash-movie"> </i> <!-- -108px -1548px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-flash"> </i> <!-- -108px -1584px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-globe"> </i> <!-- -108px -1620px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-hf-delete-footer"> </i> <!-- -108px -1656px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-hf-delete"> </i> <!-- -108px -1692px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-hf-insert-footer"> </i> <!-- -108px -1728px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-hf-insert"> </i> <!-- -108px -1764px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-hf-select-footer"> </i> <!-- -108px -1800px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-hf-select"> </i> <!-- -108px -1836px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-hf"> </i> <!-- -108px -1872px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-horizontal-text"> </i> <!-- -108px -1908px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-horizontal"> </i> <!-- -108px -1944px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-illustrator"> </i> <!-- -144px 0; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-image"> </i> <!-- -144px -36px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-import"> </i> <!-- -144px -72px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-insert"> </i> <!-- -144px -108px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-invoice"> </i> <!-- -144px -144px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-list"> </i> <!-- -144px -180px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-medium"> </i> <!-- -144px -216px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-music-playlist"> </i> <!-- -144px -252px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-music"> </i> <!-- -144px -288px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-node"> </i> <!-- -144px -324px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-outlook"> </i> <!-- -144px -360px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-pdf-text"> </i> <!-- -144px -396px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-pdf"> </i> <!-- -144px -432px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-php"> </i> <!-- -144px -468px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-powerpoint"> </i> <!-- -144px -504px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-rename"> </i> <!-- -144px -540px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-search-result"> </i> <!-- -144px -576px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-share"> </i> <!-- -144px -612px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-shred"> </i> <!-- -144px -648px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-stamp"> </i> <!-- -144px -684px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-stand"> </i> <!-- -144px -720px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-sticky-note"> </i> <!-- -144px -756px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-sub"> </i> <!-- -144px -792px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-table"> </i> <!-- -144px -828px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-tag"> </i> <!-- -144px -864px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-task"> </i> <!-- -144px -900px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-template"> </i> <!-- -144px -936px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-tex"> </i> <!-- -144px -972px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-text-image"> </i> <!-- -144px -1008px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-text"> </i> <!-- -144px -1044px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-tree"> </i> <!-- -144px -1080px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-view-book"> </i> <!-- -144px -1116px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-view-thumbnail"> </i> <!-- -144px -1152px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-view"> </i> <!-- -144px -1188px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-visual-studio"> </i> <!-- -144px -1224px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-word-text"> </i> <!-- -144px -1260px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-word"> </i> <!-- -144px -1296px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-xaml"> </i> <!-- -144px -1332px; width: 16px; height: 16px;--> 
<i class="color-icons icons-document-zipper"> </i> <!-- -144px -1368px; width: 16px; height: 16px;--> 
<i class="color-icons icons-documents-stack"> </i> <!-- -144px -1404px; width: 16px; height: 16px;--> 
<i class="color-icons icons-documents-text"> </i> <!-- -144px -1440px; width: 16px; height: 16px;--> 
<i class="color-icons icons-documents"> </i> <!-- -144px -1476px; width: 16px; height: 16px;--> 
<i class="color-icons icons-drawer--arrow"> </i> <!-- -144px -1512px; width: 16px; height: 16px;--> 
<i class="color-icons icons-drawer-open"> </i> <!-- -144px -1548px; width: 16px; height: 16px;--> 
<i class="color-icons icons-drawer"> </i> <!-- -144px -1584px; width: 16px; height: 16px;--> 
<i class="color-icons icons-e-book-reader-black"> </i> <!-- -144px -1620px; width: 16px; height: 16px;--> 
<i class="color-icons icons-e-book-reader-white"> </i> <!-- -144px -1656px; width: 16px; height: 16px;--> 
<i class="color-icons icons-e-book-reader"> </i> <!-- -144px -1692px; width: 16px; height: 16px;--> 
<i class="color-icons icons-envelope--arrow"> </i> <!-- -144px -1728px; width: 16px; height: 16px;--> 
<i class="color-icons icons-envelope--exclamation"> </i> <!-- -144px -1764px; width: 16px; height: 16px;--> 
<i class="color-icons icons-envelope-at-sign"> </i> <!-- -144px -1800px; width: 16px; height: 16px;--> 
<i class="color-icons icons-envelope-label"> </i> <!-- -144px -1836px; width: 16px; height: 16px;--> 
<i class="color-icons icons-envelope-share"> </i> <!-- -144px -1872px; width: 16px; height: 16px;--> 
<i class="color-icons icons-envelope-string"> </i> <!-- -144px -1908px; width: 16px; height: 16px;--> 
<i class="color-icons icons-envelope"> </i> <!-- -144px -1944px; width: 16px; height: 16px;--> 
<i class="color-icons icons-exclamation-red"> </i> <!-- -180px 0; width: 16px; height: 16px;--> 
<i class="color-icons icons-exclamation"> </i> <!-- -180px -36px; width: 16px; height: 16px;--> 
<i class="color-icons icons-folder-horizontal-open"> </i> <!-- -180px -72px; width: 16px; height: 16px;--> 
<i class="color-icons icons-folder-horizontal"> </i> <!-- -180px -108px; width: 16px; height: 16px;--> 
<i class="color-icons icons-folder-open-film"> </i> <!-- -180px -144px; width: 16px; height: 16px;--> 
<i class="color-icons icons-folder-open-image"> </i> <!-- -180px -180px; width: 16px; height: 16px;--> 
<i class="color-icons icons-folder-open-slide"> </i> <!-- -180px -216px; width: 16px; height: 16px;--> 
<i class="color-icons icons-folder-open-table"> </i> <!-- -180px -252px; width: 16px; height: 16px;--> 
<i class="color-icons icons-folder-share"> </i> <!-- -180px -288px; width: 16px; height: 16px;--> 
<i class="color-icons icons-folder-shred"> </i> <!-- -180px -324px; width: 16px; height: 16px;--> 
<i class="color-icons icons-folder-smiley"> </i> <!-- -180px -360px; width: 16px; height: 16px;--> 
<i class="color-icons icons-folder-stamp"> </i> <!-- -180px -396px; width: 16px; height: 16px;--> 
<i class="color-icons icons-folder-stand"> </i> <!-- -180px -432px; width: 16px; height: 16px;--> 
<i class="color-icons icons-folder-sticky-note"> </i> <!-- -180px -468px; width: 16px; height: 16px;--> 
<i class="color-icons icons-folder-tree"> </i> <!-- -180px -504px; width: 16px; height: 16px;--> 
<i class="color-icons icons-folder-zipper"> </i> <!-- -180px -540px; width: 16px; height: 16px;--> 
<i class="color-icons icons-folding-fan"> </i> <!-- -180px -576px; width: 16px; height: 16px;--> 
<i class="color-icons icons-fruit-apple-half"> </i> <!-- -180px -612px; width: 16px; height: 16px;--> 
<i class="color-icons icons-fruit-grape"> </i> <!-- -180px -648px; width: 16px; height: 16px;--> 
<i class="color-icons icons-fruit-lime"> </i> <!-- -180px -684px; width: 16px; height: 16px;--> 
<i class="color-icons icons-fruit"> </i> <!-- -180px -720px; width: 16px; height: 16px;--> 
<i class="color-icons icons-funnel"> </i> <!-- -180px -756px; width: 16px; height: 16px;--> 
<i class="color-icons icons-gear--arrow"> </i> <!-- -180px -792px; width: 16px; height: 16px;--> 
<i class="color-icons icons-gear--pencil"> </i> <!-- -180px -828px; width: 16px; height: 16px;--> 
<i class="color-icons icons-gear"> </i> <!-- -180px -864px; width: 16px; height: 16px;--> 
<i class="color-icons icons-globe--arrow"> </i> <!-- -180px -900px; width: 16px; height: 16px;--> 
<i class="color-icons icons-globe-network-ethernet"> </i> <!-- -180px -936px; width: 16px; height: 16px;--> 
<i class="color-icons icons-globe"> </i> <!-- -180px -972px; width: 16px; height: 16px;--> 
<i class="color-icons icons-hammer-screwdriver"> </i> <!-- -180px -1008px; width: 16px; height: 16px;--> 
<i class="color-icons icons-hammer"> </i> <!-- -180px -1044px; width: 16px; height: 16px;--> 
<i class="color-icons icons-hand-shake"> </i> <!-- -180px -1080px; width: 16px; height: 16px;--> 
<i class="color-icons icons-headstone-cross"> </i> <!-- -180px -1116px; width: 16px; height: 16px;--> 
<i class="color-icons icons-headstone-rip"> </i> <!-- -180px -1152px; width: 16px; height: 16px;--> 
<i class="color-icons icons-headstone"> </i> <!-- -180px -1188px; width: 16px; height: 16px;--> 
<i class="color-icons icons-heart-break"> </i> <!-- -180px -1224px; width: 16px; height: 16px;--> 
<i class="color-icons icons-heart-empty"> </i> <!-- -180px -1260px; width: 16px; height: 16px;--> 
<i class="color-icons icons-heart-half"> </i> <!-- -180px -1296px; width: 16px; height: 16px;--> 
<i class="color-icons icons-home--arrow"> </i> <!-- -180px -1332px; width: 16px; height: 16px;--> 
<i class="color-icons icons-home"> </i> <!-- -180px -1368px; width: 16px; height: 16px;--> 
<i class="color-icons icons-ice--arrow"> </i> <!-- -180px -1404px; width: 16px; height: 16px;--> 
<i class="color-icons icons-ice"> </i> <!-- -180px -1440px; width: 16px; height: 16px;--> 
<i class="color-icons icons-inbox--arrow"> </i> <!-- -180px -1476px; width: 16px; height: 16px;--> 
<i class="color-icons icons-inbox--exclamation"> </i> <!-- -180px -1512px; width: 16px; height: 16px;--> 
<i class="color-icons icons-inbox-document-music-playlist"> </i> <!-- -180px -1548px; width: 16px; height: 16px;--> 
<i class="color-icons icons-inbox-document-music"> </i> <!-- -180px -1584px; width: 16px; height: 16px;--> 
<i class="color-icons icons-inbox-document-text"> </i> <!-- -180px -1620px; width: 16px; height: 16px;--> 
<i class="color-icons icons-inbox-document"> </i> <!-- -180px -1656px; width: 16px; height: 16px;--> 
<i class="color-icons icons-inbox-download"> </i> <!-- -180px -1692px; width: 16px; height: 16px;--> 
<i class="color-icons icons-inbox-film"> </i> <!-- -180px -1728px; width: 16px; height: 16px;--> 
<i class="color-icons icons-inbox-image"> </i> <!-- -180px -1764px; width: 16px; height: 16px;--> 
<i class="color-icons icons-inbox-slide"> </i> <!-- -180px -1800px; width: 16px; height: 16px;--> 
<i class="color-icons icons-inbox-table"> </i> <!-- -180px -1836px; width: 16px; height: 16px;--> 
<i class="color-icons icons-inbox-upload"> </i> <!-- -180px -1872px; width: 16px; height: 16px;--> 
<i class="color-icons icons-inbox"> </i> <!-- -180px -1908px; width: 16px; height: 16px;--> 
<i class="color-icons icons-jar--arrow"> </i> <!-- -180px -1944px; width: 16px; height: 16px;--> 
<i class="color-icons icons-jar-empty"> </i> <!-- -216px 0; width: 16px; height: 16px;--> 
<i class="color-icons icons-jar-label"> </i> <!-- -216px -36px; width: 16px; height: 16px;--> 
<i class="color-icons icons-jar-open"> </i> <!-- -216px -72px; width: 16px; height: 16px;--> 
<i class="color-icons icons-jar"> </i> <!-- -216px -108px; width: 16px; height: 16px;--> 
<i class="color-icons icons-keyboard-full-wireless"> </i> <!-- -216px -144px; width: 16px; height: 16px;--> 
<i class="color-icons icons-keyboard-full"> </i> <!-- -216px -180px; width: 16px; height: 16px;--> 
<i class="color-icons icons-layout-header-2"> </i> <!-- -216px -216px; width: 16px; height: 16px;--> 
<i class="color-icons icons-layout-header"> </i> <!-- -216px -252px; width: 16px; height: 16px;--> 
<i class="color-icons icons-luggage-tag"> </i> <!-- -216px -288px; width: 16px; height: 16px;--> 
<i class="color-icons icons-luggage"> </i> <!-- -216px -324px; width: 16px; height: 16px;--> 
<i class="color-icons icons-magnifier-left"> </i> <!-- -216px -360px; width: 16px; height: 16px;--> 
<i class="color-icons icons-magnifier-medium-left"> </i> <!-- -216px -396px; width: 16px; height: 16px;--> 
<i class="color-icons icons-magnifier-medium"> </i> <!-- -216px -432px; width: 16px; height: 16px;--> 
<i class="color-icons icons-magnifier"> </i> <!-- -216px -468px; width: 16px; height: 16px;--> 
<i class="color-icons icons-mahjong--plus"> </i> <!-- -216px -504px; width: 16px; height: 16px;--> 
<i class="color-icons icons-mail--arrow"> </i> <!-- -216px -540px; width: 16px; height: 16px;--> 
<i class="color-icons icons-mail-air"> </i> <!-- -216px -576px; width: 16px; height: 16px;--> 
<i class="color-icons icons-mail-forward"> </i> <!-- -216px -612px; width: 16px; height: 16px;--> 
<i class="color-icons icons-mail-open-document-music-playlist"> </i> <!-- -216px -648px; width: 16px; height: 16px;--> 
<i class="color-icons icons-mail-open-document-music"> </i> <!-- -216px -684px; width: 16px; height: 16px;--> 
<i class="color-icons icons-mail-open-document-text"> </i> <!-- -216px -720px; width: 16px; height: 16px;--> 
<i class="color-icons icons-mail-open-document"> </i> <!-- -216px -756px; width: 16px; height: 16px;--> 
<i class="color-icons icons-mail-open-film"> </i> <!-- -216px -792px; width: 16px; height: 16px;--> 
<i class="color-icons icons-mail-open-image"> </i> <!-- -216px -828px; width: 16px; height: 16px;--> 
<i class="color-icons icons-mail-open-table"> </i> <!-- -216px -864px; width: 16px; height: 16px;--> 
<i class="color-icons icons-mail-open"> </i> <!-- -216px -900px; width: 16px; height: 16px;--> 
<i class="color-icons icons-mail-send-receive"> </i> <!-- -216px -936px; width: 16px; height: 16px;--> 
<i class="color-icons icons-media-player-black"> </i> <!-- -216px -972px; width: 16px; height: 16px;--> 
<i class="color-icons icons-media-player-phone-protector"> </i> <!-- -216px -1008px; width: 16px; height: 16px;--> 
<i class="color-icons icons-media-player-protector"> </i> <!-- -216px -1044px; width: 16px; height: 16px;--> 
<i class="color-icons icons-media-player-small-blue"> </i> <!-- -216px -1080px; width: 16px; height: 16px;--> 
<i class="color-icons icons-media-player-small"> </i> <!-- -216px -1116px; width: 16px; height: 16px;--> 
<i class="color-icons icons-media-players"> </i> <!-- -216px -1152px; width: 16px; height: 16px;--> 
<i class="color-icons icons-microphone--arrow"> </i> <!-- -216px -1188px; width: 16px; height: 16px;--> 
<i class="color-icons icons-microphone"> </i> <!-- -216px -1224px; width: 16px; height: 16px;--> 
<i class="color-icons icons-milk"> </i> <!-- -216px -1260px; width: 16px; height: 16px;--> 
<i class="color-icons icons-minus-button"> </i> <!-- -216px -1296px; width: 16px; height: 16px;--> 
<i class="color-icons icons-minus-circle-frame"> </i> <!-- -216px -1332px; width: 16px; height: 16px;--> 
<i class="color-icons icons-minus-circle"> </i> <!-- -216px -1368px; width: 16px; height: 16px;--> 
<i class="color-icons icons-minus-shield"> </i> <!-- -216px -1404px; width: 16px; height: 16px;--> 
<i class="color-icons icons-mobile-phone--arrow"> </i> <!-- -216px -1440px; width: 16px; height: 16px;--> 
<i class="color-icons icons-mobile-phone"> </i> <!-- -216px -1476px; width: 16px; height: 16px;--> 
<i class="color-icons icons-money--arrow"> </i> <!-- -216px -1512px; width: 16px; height: 16px;--> 
<i class="color-icons icons-money-coin"> </i> <!-- -216px -1548px; width: 16px; height: 16px;--> 
<i class="color-icons icons-money"> </i> <!-- -216px -1584px; width: 16px; height: 16px;--> 
<i class="color-icons icons-moneys"> </i> <!-- -216px -1620px; width: 16px; height: 16px;--> 
<i class="color-icons icons-network-cloud"> </i> <!-- -216px -1656px; width: 16px; height: 16px;--> 
<i class="color-icons icons-network-clouds"> </i> <!-- -216px -1692px; width: 16px; height: 16px;--> 
<i class="color-icons icons-network-ethernet"> </i> <!-- -216px -1728px; width: 16px; height: 16px;--> 
<i class="color-icons icons-network-ip-local"> </i> <!-- -216px -1764px; width: 16px; height: 16px;--> 
<i class="color-icons icons-newspaper--arrow"> </i> <!-- -216px -1800px; width: 16px; height: 16px;--> 
<i class="color-icons icons-newspaper"> </i> <!-- -216px -1836px; width: 16px; height: 16px;--> 
<i class="color-icons icons-notebook--arrow"> </i> <!-- -216px -1872px; width: 16px; height: 16px;--> 
<i class="color-icons icons-notebook--pencil"> </i> <!-- -216px -1908px; width: 16px; height: 16px;--> 
<i class="color-icons icons-notebook--plus"> </i> <!-- -216px -1944px; width: 16px; height: 16px;--> 
<i class="color-icons icons-notebook-share"> </i> <!-- -252px 0; width: 16px; height: 16px;--> 
<i class="color-icons icons-notebook"> </i> <!-- -252px -36px; width: 16px; height: 16px;--> 
<i class="color-icons icons-notebooks"> </i> <!-- -252px -72px; width: 16px; height: 16px;--> 
<i class="color-icons icons-oil-barrel"> </i> <!-- -252px -108px; width: 16px; height: 16px;--> 
<i class="color-icons icons-open-share-document"> </i> <!-- -252px -144px; width: 16px; height: 16px;--> 
<i class="color-icons icons-opml-document"> </i> <!-- -252px -180px; width: 16px; height: 16px;--> 
<i class="color-icons icons-paint-brush--arrow"> </i> <!-- -252px -216px; width: 16px; height: 16px;--> 
<i class="color-icons icons-paint-brush"> </i> <!-- -252px -252px; width: 16px; height: 16px;--> 
<i class="color-icons icons-paint-can--arrow"> </i> <!-- -252px -288px; width: 16px; height: 16px;--> 
<i class="color-icons icons-paint-can"> </i> <!-- -252px -324px; width: 16px; height: 16px;--> 
<i class="color-icons icons-palette--pencil"> </i> <!-- -252px -360px; width: 16px; height: 16px;--> 
<i class="color-icons icons-paper-bag--arrow"> </i> <!-- -252px -396px; width: 16px; height: 16px;--> 
<i class="color-icons icons-paper-bag-label"> </i> <!-- -252px -432px; width: 16px; height: 16px;--> 
<i class="color-icons icons-paper-bag-recycle"> </i> <!-- -252px -468px; width: 16px; height: 16px;--> 
<i class="color-icons icons-paper-bag"> </i> <!-- -252px -504px; width: 16px; height: 16px;--> 
<i class="color-icons icons-paper-lantern-repast"> </i> <!-- -252px -540px; width: 16px; height: 16px;--> 
<i class="color-icons icons-paper-lantern"> </i> <!-- -252px -576px; width: 16px; height: 16px;--> 
<i class="color-icons icons-paper-plane--arrow"> </i> <!-- -252px -612px; width: 16px; height: 16px;--> 
<i class="color-icons icons-paper-plane"> </i> <!-- -252px -648px; width: 16px; height: 16px;--> 
<i class="color-icons icons-pearl-shell"> </i> <!-- -252px -684px; width: 16px; height: 16px;--> 
<i class="color-icons icons-photo-album--arrow"> </i> <!-- -252px -720px; width: 16px; height: 16px;--> 
<i class="color-icons icons-photo-album-blue"> </i> <!-- -252px -756px; width: 16px; height: 16px;--> 
<i class="color-icons icons-photo-album"> </i> <!-- -252px -792px; width: 16px; height: 16px;--> 
<i class="color-icons icons-picture--arrow"> </i> <!-- -252px -828px; width: 16px; height: 16px;--> 
<i class="color-icons icons-piggy-bank"> </i> <!-- -252px -864px; width: 16px; height: 16px;--> 
<i class="color-icons icons-pill--arrow"> </i> <!-- -252px -900px; width: 16px; height: 16px;--> 
<i class="color-icons icons-pill"> </i> <!-- -252px -936px; width: 16px; height: 16px;--> 
<i class="color-icons icons-plate-cutlery"> </i> <!-- -252px -972px; width: 16px; height: 16px;--> 
<i class="color-icons icons-plate"> </i> <!-- -252px -1008px; width: 16px; height: 16px;--> 
<i class="color-icons icons-playing-card--arrow"> </i> <!-- -252px -1044px; width: 16px; height: 16px;--> 
<i class="color-icons icons-playing-card"> </i> <!-- -252px -1080px; width: 16px; height: 16px;--> 
<i class="color-icons icons-plus-button"> </i> <!-- -252px -1116px; width: 16px; height: 16px;--> 
<i class="color-icons icons-plus-circle"> </i> <!-- -252px -1152px; width: 16px; height: 16px;--> 
<i class="color-icons icons-plus"> </i> <!-- -252px -1188px; width: 16px; height: 16px;--> 
<i class="icon-remove-sign icon-red-empty"> </i> <!-- -252px -1224px; width: 16px; height: 16px;--> 
<i class="icon-remove-sign icon-red"> </i> <!-- -252px -1260px; width: 16px; height: 16px;--> 
<i class="color-icons icons-price-tag--arrow"> </i> <!-- -252px -1296px; width: 16px; height: 16px;--> 
<i class="color-icons icons-price-tag--pencil"> </i> <!-- -252px -1332px; width: 16px; height: 16px;--> 
<i class="color-icons icons-price-tag--plus"> </i> <!-- -252px -1368px; width: 16px; height: 16px;--> 
<i class="color-icons icons-price-tag"> </i> <!-- -252px -1404px; width: 16px; height: 16px;--> 
<i class="color-icons icons-printer-empty"> </i> <!-- -252px -1440px; width: 16px; height: 16px;--> 
<i class="color-icons icons-printer"> </i> <!-- -252px -1476px; width: 16px; height: 16px;--> 
<i class="color-icons icons-projection-screen--arrow"> </i> <!-- -252px -1512px; width: 16px; height: 16px;--> 
<i class="color-icons icons-projection-screen"> </i> <!-- -252px -1548px; width: 16px; height: 16px;--> 
<i class="color-icons icons-property-blue"> </i> <!-- -252px -1584px; width: 16px; height: 16px;--> 
<i class="color-icons icons-property-export"> </i> <!-- -252px -1620px; width: 16px; height: 16px;--> 
<i class="color-icons icons-property"> </i> <!-- -252px -1656px; width: 16px; height: 16px;--> 
<i class="icon-pencil icon-blue--arrow"> </i> <!-- -252px -1692px; width: 16px; height: 16px;--> 
<i class="icon-pencil icon-blue"> </i> <!-- -252px -1728px; width: 16px; height: 16px;--> 
<i class="color-icons icons-regular-expression"> </i> <!-- -252px -1764px; width: 16px; height: 16px;--> 
<i class="color-icons icons-remote-control"> </i> <!-- -252px -1800px; width: 16px; height: 16px;--> 
<i class="color-icons icons-report-paper"> </i> <!-- -252px -1836px; width: 16px; height: 16px;--> 
<i class="color-icons icons-resource-monitor-protector"> </i> <!-- -252px -1872px; width: 16px; height: 16px;--> 
<i class="color-icons icons-resource-monitor"> </i> <!-- -252px -1908px; width: 16px; height: 16px;--> 
<i class="color-icons icons-ribbon"> </i> <!-- -252px -1944px; width: 16px; height: 16px;--> 
<i class="color-icons icons-robot"> </i> <!-- -288px 0; width: 16px; height: 16px;--> 
<i class="color-icons icons-rocket"> </i> <!-- -288px -36px; width: 16px; height: 16px;--> 
<i class="color-icons icons-ruby"> </i> <!-- -288px -72px; width: 16px; height: 16px;--> 
<i class="color-icons icons-ruler--arrow"> </i> <!-- -288px -108px; width: 16px; height: 16px;--> 
<i class="color-icons icons-ruler-triangle"> </i> <!-- -288px -144px; width: 16px; height: 16px;--> 
<i class="color-icons icons-ruler"> </i> <!-- -288px -180px; width: 16px; height: 16px;--> 
<i class="color-icons icons-safe--arrow"> </i> <!-- -288px -216px; width: 16px; height: 16px;--> 
<i class="color-icons icons-safe"> </i> <!-- -288px -252px; width: 16px; height: 16px;--> 
<i class="color-icons icons-shoe--arrow"> </i> <!-- -288px -288px; width: 16px; height: 16px;--> 
<i class="color-icons icons-shoe"> </i> <!-- -288px -324px; width: 16px; height: 16px;--> 
<i class="color-icons icons-shopping-basket--arrow"> </i> <!-- -288px -360px; width: 16px; height: 16px;--> 
<i class="color-icons icons-shopping-basket"> </i> <!-- -288px -396px; width: 16px; height: 16px;--> 
<i class="color-icons icons-skull"> </i> <!-- -288px -432px; width: 16px; height: 16px;--> 
<i class="color-icons icons-sofa--arrow"> </i> <!-- -288px -468px; width: 16px; height: 16px;--> 
<i class="color-icons icons-sofa"> </i> <!-- -288px -504px; width: 16px; height: 16px;--> 
<i class="color-icons icons-speaker--arrow"> </i> <!-- -288px -540px; width: 16px; height: 16px;--> 
<i class="color-icons icons-speaker"> </i> <!-- -288px -576px; width: 16px; height: 16px;--> 
<i class="color-icons icons-stamp--arrow"> </i> <!-- -288px -612px; width: 16px; height: 16px;--> 
<i class="color-icons icons-stamp"> </i> <!-- -288px -648px; width: 16px; height: 16px;--> 
<i class="color-icons icons-switch"> </i> <!-- -288px -684px; width: 16px; height: 16px;--> 
<i class="color-icons icons-system-monitor--arrow"> </i> <!-- -288px -720px; width: 16px; height: 16px;--> 
<i class="color-icons icons-system-monitor-network"> </i> <!-- -288px -756px; width: 16px; height: 16px;--> 
<i class="color-icons icons-system-monitor-protector"> </i> <!-- -288px -792px; width: 16px; height: 16px;--> 
<i class="color-icons icons-system-monitor"> </i> <!-- -288px -828px; width: 16px; height: 16px;--> 
<i class="color-icons icons-table--arrow"> </i> <!-- -288px -864px; width: 16px; height: 16px;--> 
<i class="color-icons icons-table"> </i> <!-- -288px -900px; width: 16px; height: 16px;--> 
<i class="color-icons icons-tag--arrow"> </i> <!-- -288px -936px; width: 16px; height: 16px;--> 
<i class="color-icons icons-tag-cloud"> </i> <!-- -288px -972px; width: 16px; height: 16px;--> 
<i class="color-icons icons-tag-label"> </i> <!-- -288px -1008px; width: 16px; height: 16px;--> 
<i class="color-icons icons-tag"> </i> <!-- -288px -1044px; width: 16px; height: 16px;--> 
<i class="color-icons icons-telephone-share"> </i> <!-- -288px -1080px; width: 16px; height: 16px;--> 
<i class="color-icons icons-television"> </i> <!-- -288px -1116px; width: 16px; height: 16px;--> 
<i class="color-icons icons-thumb-small-up"> </i> <!-- -288px -1152px; width: 16px; height: 16px;--> 
<i class="color-icons icons-thumb-small"> </i> <!-- -288px -1188px; width: 16px; height: 16px;--> 
<i class="color-icons icons-thumb-up"> </i> <!-- -288px -1224px; width: 16px; height: 16px;--> 
<i class="color-icons icons-thumb"> </i> <!-- -288px -1260px; width: 16px; height: 16px;--> 
<i class="color-icons icons-tick-button"> </i> <!-- -288px -1296px; width: 16px; height: 16px;--> 
<i class="color-icons icons-tick-octagon"> </i> <!-- -288px -1332px; width: 16px; height: 16px;--> 
<i class="color-icons icons-tick-red"> </i> <!-- -288px -1368px; width: 16px; height: 16px;--> 
<i class="color-icons icons-tick"> </i> <!-- -288px -1404px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user--arrow"> </i> <!-- -288px -1440px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-black-female"> </i> <!-- -288px -1476px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-black"> </i> <!-- -288px -1512px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-business-boss"> </i> <!-- -288px -1548px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-business-gray-boss"> </i> <!-- -288px -1584px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-business-gray"> </i> <!-- -288px -1620px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-business"> </i> <!-- -288px -1656px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-detective-gray"> </i> <!-- -288px -1692px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-detective"> </i> <!-- -288px -1728px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-female"> </i> <!-- -288px -1764px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-gray-female"> </i> <!-- -288px -1800px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-gray"> </i> <!-- -288px -1836px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-medical-female"> </i> <!-- -288px -1872px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-medical"> </i> <!-- -288px -1908px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-medium-female"> </i> <!-- -288px -1944px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-medium"> </i> <!-- -324px 0; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-red-female"> </i> <!-- -324px -36px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-red"> </i> <!-- -324px -72px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-share"> </i> <!-- -324px -108px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-silhouette-question"> </i> <!-- -324px -144px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-silhouette"> </i> <!-- -324px -180px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-thief-baldie"> </i> <!-- -324px -216px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-thief-female"> </i> <!-- -324px -252px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-thief"> </i> <!-- -324px -288px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-white-female"> </i> <!-- -324px -324px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-white"> </i> <!-- -324px -360px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-worker-boss"> </i> <!-- -324px -396px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-worker"> </i> <!-- -324px -432px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-yellow-female"> </i> <!-- -324px -468px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user-yellow"> </i> <!-- -324px -504px; width: 16px; height: 16px;--> 
<i class="color-icons icons-user"> </i> <!-- -324px -540px; width: 16px; height: 16px;--> 
<i class="color-icons icons-users"> </i> <!-- -324px -576px; width: 16px; height: 16px;--> 
<i class="color-icons icons-wallet--arrow"> </i> <!-- -324px -612px; width: 16px; height: 16px;--> 
<i class="color-icons icons-wallet"> </i> <!-- -324px -648px; width: 16px; height: 16px;--> 
<i class="color-icons icons-water--arrow"> </i> <!-- -324px -684px; width: 16px; height: 16px;--> 
<i class="color-icons icons-water"> </i> <!-- -324px -720px; width: 16px; height: 16px;--> 
<i class="color-icons icons-wooden-box--arrow"> </i> <!-- -324px -756px; width: 16px; height: 16px;--> 
<i class="color-icons icons-wooden-box-label"> </i> <!-- -324px -792px; width: 16px; height: 16px;--> 
<i class="color-icons icons-wooden-box"> </i> <!-- -324px -828px; width: 16px; height: 16px;-->    	
	    </div>
	  </div>
	</div>
<?php }} ?>