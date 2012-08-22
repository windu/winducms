  	<div class="tabbable">
	  <ul class="nav nav-tabs" id="myTab">
	    <li><a href="#tab1" data-toggle="tab"><i class="color-icons icons-user-black icon-margin">&nbsp;</i>{L key = "admin.users.ctpl.admins"}</a></li>
	    <li><a href="#tab2" data-toggle="tab"><i class="color-icons icons-user-yellow icon-margin">&nbsp;</i>{L key = "admin.users.ctpl.users"}</a></li>
	    <li><a href="#tab3" data-toggle="tab"><i class="color-icons icons-wallet icon-margin">&nbsp;</i>{L key = "admin.users.ctpl.authorization"}</a></li>
	    <li><a href="#tab4" data-toggle="tab"><i class="color-icons icons-gear icon-margin"> </i>{L key = "admin.users.ctpl.settings"}</a></li>
	  </ul>
	  <div class="tab-content">
	    <div class="tab-pane" id="tab1">
	    	<div class="row-fluid">
			  <div class="span6">
			  	<div class="box">
	     		{include file='common/users_system_list.tpl'}
	      		</div>
	      		<div class="box pad margin-top">
	      			<a href="{$HOME}admin/users/#tab1" class="btn">{L key = "admin.users.ctpl.add"}</a>
	      		</div>	     		
			  </div>
			  <div class="span6 box">
			  	<h5>{L key = "admin.users.tpl.adduser"}</h5>
			  	{$userSystem->toHtml()}
			  </div>
			</div>	     	
	    </div>
	    <div class="tab-pane" id="tab2">
	    	<div class="row-fluid">
			  <div class="span6">	
			  	<div class="box">  
	      		{include file='common/users_page_list.tpl'}
	      		</div>
	      		<div class="box pad margin-top">
	      			<a href="{$HOME}admin/users/#tab2" class="btn">{L key = "admin.users.ctpl.add"}</a>
	      		</div>	      		
			  </div>
			  <div class="span6 box">
			  	<h5>{L key = "admin.users.tpl.adduser"}</h5>
			  	{$userPage->toHtml()}
			  </div>
			</div>	 	      		
	    </div>
	    <div class="tab-pane" id="tab3">
	    	<div class="row-fluid">
			  <div class="span6">	
			  	<div class="box">   
	      		{include file='common/users_types_list.tpl'}
	      		</div>
	      		<div class="box pad margin-top">
	      			<a href="{$HOME}admin/users/#tab3" class="btn">{L key = "admin.users.ctpl.add"}</a>
	      		</div>
			  </div>
			  <div class="span6 box">
			  	<h5>{L key = "admin.users.tpl.addtypeofauth"}</h5>
			  	{$userType->toHtml()}  	
			  </div>
			</div>	 	      		
	    </div>	
	    <div class="tab-pane" id="tab4">
			<div class="row-fluid">
			  <div class="span8 box">
				{include file='common/config_list.tpl' list=$configList class='users' tab='#tab4'}
			  </div>
			  <div class="span4 box">
			  {if is_object($formConfig)}
			  	<h5>{L key = "admin.users.tpl.edit"}</h5>
				{$formConfig->toHtml()}
			  {else}
			  	<h5>{L key = "admin.users.tpl.help"}</h5>
			  	<div class="pad">
			  		jakis tekst pomocy 	
			  	</div>
			  {/if}	
			  </div>
			</div> 	 	      		
	    </div>		        
	  </div>
	</div>
