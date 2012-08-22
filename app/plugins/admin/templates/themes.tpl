  	<div class="tabbable">
	  <ul class="nav nav-tabs" id="myTab">
	    <li><a href="#tab1" data-toggle="tab"><i class="color-icons icons-resource-monitor icon-margin"> </i>{L key = "admin.themes.tpl.graphictemplates"}</a></li>
	    <li><a href="#tab3" data-toggle="tab"><i class="color-icons icons-resource-monitor-protector icon-margin"> </i>{L key = "admin.themes.tpl.widgets"}</a></li>
	    <li><a href="#tab2" data-toggle="tab"><i class="color-icons icons-gear icon-margin"> </i>{L key = "admin.themes.tpl.settings"}</a></li>
	  </ul>
	  <div class="tab-content">
	    <div class="tab-pane" id="tab1">
	    	<div class="row-fluid">
			  <div class="span4 box">
			  	<h5>{L key = "admin.themes.common.tpl.graphicstyles"}
				  	<div class="buttons">
				  		<a href="{$HOME}admin/mainDo/toogleCookie/showThemesAllOn/tab1/" class="btn btn-small {if cookie::readCookie(showAllOn)}btn-success{/if}">{L key = "admin.content.tpl.showall"}</a>
				  		<a href="{$HOME}admin/do/themes/hideTreelistAll/" class="btn btn-small">-</a>
				  	</div>			  	
				</h5>  	
			  	{include file='common/themes_list.tpl'}
			  </div>
			  <div class="span8">
			  	{include file='common/alert.tpl'}
			  	<div class="box">
			  		{$formTheme->toHtml()}
			  	</div>
			  </div>
			</div>	     	
	    </div>
	    <div class="tab-pane" id="tab3">
			<div class="row-fluid">
			  <div class="span4 box">
			  	<h5>{L key = "admin.themes.common.tpl.widgets"}</h5>
				{include file='common/widget_list.tpl'}
			  </div>
			  <div class="span8">
			  	{include file='common/alert.tpl'}
			  	<div class="box">
			  		{$formWidget->toHtml()}
			  	</div>
			  </div>
			</div> 	     	
	    </div>	 	    
	    <div class="tab-pane" id="tab2">
			<div class="row-fluid">
			  <div class="span8 box">
				{include file='common/config_list.tpl' list=$configList class='themes' tab='#tab2'}
			  </div>
			  <div class="span4 box">
			  {if is_object($formConfig)}
			  	<h5>{L key = "admin.themes.tpl.edit"}</h5>
				{$formConfig->toHtml()}
			  {else}
			  	<h5>{L key = "admin.themes.tpl.help"}</h5>
			  	<div class="pad">
			  		jakis tekst pomocy
			  	</div>
			  {/if}	
			  </div>
			</div> 	     	
	    </div>
	</div>
