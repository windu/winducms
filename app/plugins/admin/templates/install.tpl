	<div class="loginbox">
		<img src="{$HOME}app/plugins/admin/resources/img/logo-login.png">
		<h3>{$title}</h3>
		<div class="loginbox-white">
			{if is_object($form)}
				<div class="progress progress-striped active" style="margin-left:35px; margin-right:35px;">
				  <div class="bar" style="width: {$load}%;"></div>
				</div>				
				{$form->toHtml()}
			{elseif $finish == true}	
				<div class="progress progress-striped active" style="margin-left:35px; margin-right:35px;">
				  <div class="bar" style="width: {$load}%;"></div>
				</div>
				<a href="{$HOME}admin/" class="btn btn-primary btn-large" style="margin-bottom:30px;">{L key = "admin.install.tpl.adminpanel"}</a>
			{elseif $checkserver == true}	
				<div class="progress progress-striped active" style="margin-left:35px; margin-right:35px;">
				  <div class="bar" style="width: {$load}%;"></div>
				</div>			
				<table class="table table-striped margin-bottom">
					<tbody>
						<tr>	
							<td class="left-column-install">PHP {phpversion()}</td>
							<td class="right-column-install"><strong>
							{if $phpok}<span class="badge badge-success">OK</span>{else}<span class="badge badge-important">ERROR</span>{/if}
							</strong></td>
						</tr>					
					{foreach $extensions as $key => $ext}
						<tr>	
							<td class="left-column-install">{$key}</td>
							<td class="right-column-install"><span class="badge badge-{if $ext=='OK'}success{else}important{/if}">{$ext}</span></td>
						</tr>
					{/foreach}
					{if $chmodErrorCountFile>0}
						<tr>	
							<td class="left-column-install">{L key = "admin.install.tpl.cantsave"}</td>
							<td class="right-column-install"><span class="badge badge-important">{$chmodErrorCountFile}</span></td>
						</tr>		
						{if $chmodErrorCountFile<4}
							{foreach $chmodError.file as $file}	
							<tr>	
								<td class="left-column-install">{$file}</td>
								<td></td>
							</tr>						
							{/foreach}		
						{/if}
					{/if}	
					{if $chmodErrorCountDir>0}
						<tr>	
							<td class="left-column-install">{L key = "admin.install.tpl.cantsave"}</td>
							<td class="right-column-install"><span class="badge badge-important">{$chmodErrorCountDir}</span></td>
						</tr>		
						{if $chmodErrorCountDir<4}
							{foreach $chmodError.dir as $file}	
							<tr>	
								<td class="left-column-install">{$file}</td>
								<td></td>
							</tr>						
							{/foreach}		
						{/if}
					{/if}		
					</tbody>
				</table>
				

				<a href="{$HOME}admin/install/setAdministrator/" class="btn btn-primary btn-large" style="margin-bottom:30px;">{L key = "admin.install.tpl.continueinstall"}</a>
			{else}
				<a href="{$HOME}admin/install/checkServer/" class="btn btn-primary btn-large" style="margin-bottom:30px;">{L key = "admin.install.tpl.begininstall"}</a>
			{/if}	
		</div>
	</div>
