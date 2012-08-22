  	<div class="tabbable">
	  <ul class="nav nav-tabs" id="myTab">
	    {foreach $buckets as $key => $bucket}
	    <li><a href="#tab{$key}" data-toggle="tab"><i class="color-icons icons-gear icon-margin">&nbsp;</i>{L key = $configDB->bucketNames[$key]}</a></li>
	    {/foreach}
	  </ul>
	  <div class="tab-content">
	    {foreach $buckets as $key => $bucket}
	    <div class="tab-pane" id="tab{$key}">
	    	<div class="row-fluid">
			  <div class="span6">
			  	<div class="box">
				<table class="table table-striped tablesort">
				<thead>
					<tr>
						<th>{L key = "admin.config.tpl.constant"}</th>
						<th>{L key="admin.config.controller.value"}</th>
						<th>{L key="admin.config.controller.description"}</th>
						<th></th>
					</tr>
				</thead>				
				<tbody>
				  {foreach $bucket as $variable}
					<tr>
						<td><i class="color-icons icons-pill icon-margin">&nbsp;</i>{$variable->name}</td>
						<td>{$variable->value}</td>
						<td>{$variable->shortDescription}</td>
						<td>
							<div class="buttons">
								<a href="{$HOME}admin/config/edit/{$variable->id}/#tab{$key}"><i class="icon-pencil icon-blue">&nbsp;</i></a>
								{if $usersDB->isDeveloper()}
								<a href="{$HOME}admin/do/config/delete/{$variable->id}/#tab{$key}"><i class="icon-remove-sign icon-red">&nbsp;</i></a>
								{/if}
								<a href="#tab4" rel="popoverconstantlist" title=' {$variable->name}' data-content="<div class='pad'>{$variable->description}</div>">	
									<i class="icon-question-sign icon-grey" >&nbsp;</i>
								</a>								
							</div>
						</td>
					</tr>
				  {/foreach}   
				  </tbody>
				</table>
	      		</div>
	      		<div class="box pad margin-top">
	      			<a href="{$HOME}admin/config/#tab{$key}" class="btn">{L key = "admin.config.tpl.add"}</a>
	      		</div>			
			  </div>
			  <div class="span6 box">
			  	<h5>{L key = "admin.config.tpl.addconstanttoconfig"}</h5>
			  	{$forms.$key->toHtml()}
			  </div>
			</div>	     	
	    </div>
	    {/foreach}	    

	</div>
