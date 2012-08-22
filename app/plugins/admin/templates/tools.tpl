  	<div class="tabbable">
	  <ul class="nav nav-tabs" id="myTab">

	  	<li><a href="#tab1" data-toggle="tab"><i class="color-icons icons-wooden-box icon-margin">&nbsp;</i>{L key = "admin.tools.tpl.tools"}Narzędzia</a></li>
		<li><a href="#tab2" data-toggle="tab"><i class="color-icons icons-mail--arrow icon-margin">&nbsp;</i>{L key = "admin.tools.tpl.mailing"}</a></li>

	  </ul>
	  <div class="tab-content">
	    <div class="tab-pane" id="tab1">
		    <div class="row-fluid menu">
		      <div class="span2 box">
				<a href="{$HOME}admin/do/tools/showTab/2/" title="{L key = "admin.menu.content"}">
					<i class="picons picons-06 picons-menu"> </i>
					<h4>{L key = "admin.tools.tpl.mailing"}</h4>
					<div class="menu-content">{L key = "admin.tools.tpl.massmail"}</div>	
				</a>
		      </div>
		    </div>    	
	    </div>
	    <div class="tab-pane" id="tab2">
	    	<div class="row-fluid">
			  <div class="span6">
		  		<div class="box">
					<div class="pad">
						<a href="{$HOME}admin/tools/addMailingTemplate/#tab2" class="btn btn-primary">{L key = "admin.tools.tpl.addtemplate"}</a>
						<a href="{$HOME}admin/tools/addMailingContact/#tab2" class="btn btn-primary">{L key = "admin.tools.tpl.addcontact"}</a>
						<a href="{$HOME}admin/tools/addMailing/#tab2" class="btn btn-primary">{L key = "admin.tools.tpl.createmailing"}</a>
						<a href="{$HOME}admin/tools/#tab2" class="btn">{L key = "admin.tools.tpl.cancel"}</a>
					</div>
		  		</div>	
			  </div>
			  <div class="span6">
		  		<div class="box">
		  			{if is_object($form)}
			  		<h5>{$title}</h5>
			  		{$form->toHtml()}
			  		{else}
			  			<div class="pad">{L key = "admin.tools.tpl.test"}</div>
			  		{/if}
		  		</div>	
			  </div>
			</div>	     	
	    </div>
	</div>
