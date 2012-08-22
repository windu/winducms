<a href="{$HOME}admin/"><img src="{$HOME}app/plugins/admin/resources/img/logo-icon.png" style="padding:15px; padding-top:30px; padding-bottom:20px;"></a>
<ul class="menu">
	{if usersDB::permissionCheck(adminContentController)}
	<li {if $REQUEST->controllerName()=='adminContentController'}class="active"{/if}>
		<a href="{$HOME}admin/content/" rel="tooltipmenu" title="{L key = "admin.menu.content"}"><i class="picons picons-11 picons-menu"> </i></a>
	</li>
	{/if}
	{if usersDB::permissionCheck(adminUsersController)}
	<li {if $REQUEST->controllerName()=='adminUsersController'}class="active"{/if}>
		<a href="{$HOME}admin/users/" rel="tooltipmenu" title="{L key = "admin.menu.users"}"><i class="picons picons-15 picons-menu"> </i></a>
	</li>
	{/if}
	{if usersDB::permissionCheck(adminThemesController)}
	<li {if $REQUEST->controllerName()=='adminThemesController'}class="active"{/if}>
		<a href="{$HOME}admin/themes/" rel="tooltipmenu" title="{L key = "admin.menu.themes"}"><i class="picons picons-37 picons-menu"> </i></a>
	</li>
	{/if}
	{if usersDB::permissionCheck(adminToolsController)}
	<li {if $REQUEST->controllerName()=='adminToolsController'}class="active"{/if}>
		<a href="{$HOME}admin/tools/" rel="tooltipmenu" title="{L key = "admin.menu.tools"}"><i class="picons picons-23 picons-menu"> </i></a>
	</li>
	{/if}
	{if usersDB::permissionCheck(adminConfigController)}
	<li {if $REQUEST->controllerName()=='adminConfigController'}class="active"{/if}>
		<a href="{$HOME}admin/config/" rel="tooltipmenu" title="{L key = "admin.menu.config"}"><i class="picons picons-31 picons-menu"> </i></a>
	</li>
	{/if}	
	{if usersDB::permissionCheck(adminSystemController)}
	<li {if $REQUEST->controllerName()=='adminSystemController'}class="active"{/if}>
		<a href="{$HOME}admin/system/" rel="tooltipmenu" title="{L key = "admin.menu.system"}"><i class="picons picons-41 picons-menu"> </i></a>
	</li>
	{/if}
</ul>
