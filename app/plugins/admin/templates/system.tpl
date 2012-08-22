  	<div class="tabbable">
	  <ul class="nav nav-tabs" id="myTab">
	  	<li><a href="#tab6" data-toggle="tab"><i class="color-icons icons icons-caution-board icon-margin">&nbsp;</i>{L key = "admin.system.tpl.notifications"}</a></li>
	  	<li><a href="#tab2" data-toggle="tab"><i class="color-icons icons-system-monitor icon-margin">&nbsp;</i>{L key = "admin.system.tpl.maintenance"}</a></li>
	    <li><a href="#tab1" data-toggle="tab"><i class="color-icons icons-chart-up icon-margin">&nbsp;</i>{L key = "admin.system.tpl.stats"}</a></li>
	    <li><a href="#tab3" data-toggle="tab"><i class="color-icons icons-rocket icon-margin">&nbsp;</i>{L key = "admin.system.tpl.update"}</a></li>
	    <li><a href="#tab7" data-toggle="tab"><i class="color-icons icons-wooden-box-label icon-margin">&nbsp;</i>{L key = "admin.system.tpl.backup"}</a></li>
	    <li><a href="#tab5" data-toggle="tab"><i class="color-icons icons-money icon-margin">&nbsp;</i>{L key = "admin.system.tpl.license"}</a></li>
	    <li><a href="#tab4" data-toggle="tab"><i class="color-icons icons-gear icon-margin">&nbsp;</i>{L key = "admin.system.tpl.settings"}</a></li>
	  </ul>
	  <div class="tab-content">
	    <div class="tab-pane" id="tab1">
	    	<div class="row-fluid">
			  <div class="span12 box">
			  	<h5>{L key = "admin.system.tpl.adminlist"}</h5>
			  	{literal}
				    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
				    <script type="text/javascript">
				      google.load("visualization", "1", {packages:["corechart"]});
				      google.setOnLoadCallback(drawChart);
				      function drawChart() {
				        var data = google.visualization.arrayToDataTable([
						  {/literal}
						  ['Date', 'Views'],
						  {foreach $statistics as $stat}
						  ['{$stat->date}', {$stat->views}],
						  {/foreach}
				     	  {literal}
				        ]);
				
				        var options = {
				          title: 'Page Views'
				        };
				
				        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
				        chart.draw(data, options);
				      }
				    </script>	
				 {/literal}		
				 <div id="chart_div" style="width: 100%; height: 500px;"></div>  	
			  </div>
			</div>	     	
	    </div>
	    <div class="tab-pane" id="tab2">
	    	<div class="row-fluid">
			  <div class="span6">
			  	<div class="box">
			  		<h5>{L key = "admin.system.tpl.systemfolders"}</h5>
					<table class="table table-striped">
					  <tbody>
					  	{foreach $dataFolders as $dataFolder}
						  	{if cache::isCached($dataFolder->path)==false}
								{cache::write($dataFolder->path,round(baseFile::getSize({$dataFolder->path})/1048576,2),'disSize')}
							{/if}
						<tr>
							<td><i class="color-icons icons-databases icon-margin">&nbsp;</i>{$dataFolder->name}</td>
							<td> {cache::read($dataFolder->path)}MB</td>
							<td></td>
						</tr>	
						{/foreach}											  
						<tr>
							<td><i class="color-icons icons-databases icon-margin">&nbsp;</i>{$dataFolder->name}</td>
							<td> {cache::read($dataFolder->path)}MB</td>
							<td></td>
						</tr>														
					  </tbody>
					</table>			  			
				</div>	
				<div class="box pad" style="margin-top:20px;">
					<a href="{$HOME}admin/do/system/clearBucketCache/disSize/" class="btn btn-primary">{L key = "admin.system.tpl.refreshdata"}</a>
				</div>		  	
			  </div>
			  <div class="span6">
			  	<div class="box">
			  		<h5>{L key = "admin.system.tpl.lastusers"}</h5>
					<table class="table table-striped">
					  <tbody>
					  	{assign "cname" 'COUNT(data)'}
					  {foreach $logDB->fetchCountGroup('data',"bucket = 2 or bucket = 3","createTime DESC",'*',10) as $log}
						<tr>
							<td><i class="color-icons {if $log->bucket == 2}icons-user-white{else}icons-user-thief{/if} icon-margin">&nbsp;</i>{$log->data}</td>
							<td>{$log->$cname}</td>
							<td>{$log->createTime}</td>
							<td>{$log->createIp}</td>
						</tr>
					  {/foreach}   
					  </tbody>
					</table>			  		
				</div>
			  	<div class="box margin-top">
			  		<h5>{L key = "admin.system.tpl.commonerrors"}</h5>
					<table class="table table-striped">
					  <tbody>
						{assign "cname" 'COUNT(data)'}
					  {foreach $logDB->fetchCountGroup('data',"bucket = 1",null,'*', 10) as $log}
						<tr>
							<td><i class="color-icons icons-document--exclamation icon-margin">&nbsp;</i>{$log->data}</td>
							<td>{$log->$cname}</td>
							<td>{$log->createTime}</td>
							<td>{$log->createIp}</td>
						</tr>
					  {/foreach}   
					  </tbody>
					</table>					
				</div>	
			    <div class="box margin-top">
			    	<div class="pad">
				    	<a href="{$HOME}admin/do/system/clean/30/" class="btn">{L key = "admin.system.tpl.cleanlast30"}</a>
				    	<a href="{$HOME}admin/do/system/clean/7/" class="btn btn-warning">{L key = "admin.system.tpl.cleanlast7"}</a>
				    	<a href="{$HOME}admin/do/system/clean/0/" class="btn btn-danger">{L key = "admin.system.tpl.cleanall"}</a>
			    	</div>
			    </div>						 	
			  </div>
			</div>	     	
	    </div>
	    <div class="tab-pane" id="tab3">
	    	<div class="row-fluid">
			  <div class="span12 box pad">
			  	{if adminUpdateController::checkForUpdate()}
			  		<a href="{$HOME}admin/update/" class="btn btn-primary btn-large">{L key = "admin.system.tpl.updatesystem"}</a>
				{else}
					<h3>{L key = "admin.system.tpl.systemuptodate"}</h3>
				{/if}
			  </div>

			</div>	     	
	    </div>	
	    <div class="tab-pane" id="tab7">
	    	<div class="row-fluid">
			  <div class="span6 box">
			  	<h5>{L key = "admin.system.common.tpl.backuplist"}</h5>
				{include file='common/backup_list.tpl'}
			  </div>
			  <div class="span6 box pad">
			  	{include file='common/alert.tpl'}
			  	<a href="{$HOME}admin/do/backup/backup/" class="btn btn-primary">{L key = "admin.system.tpl.backupcopy"}</a>
			  </div>
			</div>	     	
	    </div>	        
	    <div class="tab-pane" id="tab4">
			<div class="row-fluid">
			  <div class="span8 box">
				{include file='common/config_list.tpl' list=$configList class='system'  tab='#tab4'}
			  </div>
			  <div class="span4 box">
			  {if is_object($formConfig)}
			  	<h5>Edycja</h5>
				{$formConfig->toHtml()}
			  {else}
			  	<h5>{L key = "admin.system.tpl.help"}</h5>
			  	<div class="pad">
			  	jakis tekst pomocy 	
			  	</div>
			  {/if}	
			  </div>
			</div> 	     	
	    </div>	
	    <div class="tab-pane" id="tab5">
	    	<div class="row-fluid">
			  <div class="span12 box pad">
			  	{L key = "admin.system.tpl.license"}
			  </div>
			</div>	     	
	    </div>	
	    <div class="tab-pane" id="tab6">
	    	<div class="row-fluid">
			  <div class="span12 box">
			  	{include file='common/notify_list.tpl'}
			  </div>
		 	</div>	  
			<div class="row-fluid">  
			  <div class="span12 box margin-top">
			  	{include file='common/notify_closed_list.tpl'}
			  </div>			  
			</div>	     	
	    </div>	            
	</div>
