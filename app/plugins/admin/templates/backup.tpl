  	<div class="tabbable">
	  <ul class="nav nav-tabs" id="myTab">
	    <li><a href="#tab1" data-toggle="tab"><i class="color-icons icons-box-zipper icon-margin"> </i>{L key = "admin.backup.tpl.backup"}</a></li>
	    <li><a href="#tab3" data-toggle="tab"><i class="color-icons icons-gear icon-margin"> </i>L key = "admin.backup.tpl.settings"}</a></li>
	  </ul>
	  <div class="tab-content">
	    <div class="tab-pane" id="tab1">
	    	<div class="row-fluid">
			  <div class="span6 box">
			  	<h5>{L key = "admin.backup.common.tpl.backuplist"}</h5>
				{include file='common/backup_list.tpl'}
			  </div>
			  <div class="span6 box pad">
			  	{include file='common/alert.tpl'}
			  	<a href="{$HOME}admin/do/backup/backup/" class="btn btn-primary">{L key = "admin.backup.tpl.backupcopy"}</a>
			  </div>
			</div>	     	
	    </div>
	    <div class="tab-pane" id="tab3">
			<div class="row-fluid">
			  <div class="span8 box">
				{include file='common/config_list.tpl' list=$configList class='backup' tab='#tab3'}
			  </div>
			  <div class="span4 box">
			  {if is_object($formConfig)}
			  	<h5>{L key = "admin.backup.tpl.edit"}</h5>
				{$formConfig->toHtml()}
			  {else}
			  	<h5>{L key = "admin.backup.tpl.help"}</h5>
			  	<div class="pad">
			  	jakis tekst pomocy 	
			  	</div>
			  {/if}	
			  </div>
			</div> 	     	
	    </div>	    
	</div>
