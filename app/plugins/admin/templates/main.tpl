<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<style type="text/css">
				@import url("{$HOME}app/resources/bootstrap/css/bootstrap.min.css");
				@import url("{$HOME}app/resources/picons/picons.css");
				@import url("{$HOME}app/resources/icons/icons.css");
	            @import url("{$HOME}app/resources/css/jquery-ui/jquery-ui.css");
				{foreach $REQUEST->getVariable(CSS) as $css}
					@import url("{$HOME}{$css}");
				{/foreach}	            
		</style>
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		
		<script type="text/javascript">window.HOME = "{$HOME}";</script>
		<script type="text/javascript" src="{$HOME}app/resources/js/jquery.js"></script>
		<script type="text/javascript" src="{$HOME}app/resources/js/jquery-ui.js"></script>
		<script type="text/javascript" src="{$HOME}app/resources/bootstrap/js/bootstrap.min.js"></script>  

		{foreach $REQUEST->getVariable(JS) as $js}
			<script type="text/javascript" src="{$HOME}{$js}"></script>
		{/foreach}
		<!--[if gte IE 8]><script src="{$HOME}image/resources/blueimp-jQuery-File-Upload/js/cors/jquery.xdr-transport.js"></script><![endif]-->
		<title>Windu2 - Admin</title>
	</head>
<body>

	<div id="container">
		<div id="sidebar" class="sidebar-small">
			{include file='common/page_menu.tpl'}
		</div>
		<div id="content">
			<div class="user-dropdown">
				{if notifyDB::count()>0 and usersDB::permissionCheck(adminSystemController)}
					<a href="{$HOME}admin/system/#tab6" class="btn btn-danger" style="margin-right:2px; margin-bottom:-7px;" rel="tooltipimageslist" data-original-title="Powiadomienia"><strong>{notifyDB::count()}</strong></a>
				{/if}
				<div class="btn-group">
		          <a class="btn btn-{if $usersDB->isDeveloper()}danger{else}primary{/if}" href="{$HOME}admin/do/toggleDeveloperMode/">
		          	<i class="icon-{if $usersDB->isDeveloper()}fire{else}user{/if} icon-white"></i> {$loggedIn->email}
		          </a>
		          <a class="btn btn-{if $usersDB->isDeveloper()}danger{else}primary{/if} dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="{$HOME}admin/users/editUserSystem/{$loggedIn->id}/#tab1"><i class="icon-pencil"></i> {L key = "admin.main.tpl.editprofile"}</a></li>
		            <li><a href="#"><i class="icon-cog"></i> {L key = "admin.main.tpl.settings"}</a></li>
		            <li><a href="{$HOME}admin/do/toggleDeveloperMode/"><i class="icon-fire icon-red"></i> {L key = "admin.main.tpl.devmode"}</a></li>
		            <li class="divider"></li>
		            <li><a href="{$HOME}admin/login/logout/"><i class="icon-lock"></i> {L key = "admin.main.tpl.logout"}</a></li>
		          </ul> 
		        </div>	
		    </div>
			{include file=$page_content}
			<div id="footer">
				{L key = "admin.main.tpl.design"} <strong>Adam Czajkowski</strong><br>WinduCMS 2.0 rev: {config::get(revision)}
			</div>			
		</div>

	</div>

</body> 
</html>