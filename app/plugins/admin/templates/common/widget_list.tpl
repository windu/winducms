{function name=widgettreelist} 
 	{foreach $data->subdir as $tpl}
 		{if is_dir($tpl->path)}
	 		<tr>
			    <td style="padding-left:{$padding}px;"><i class="color-icons icons-folder-horizontal-open icon-margin"> </i>{$tpl->name}</td>
			    <td>
				    <div class="buttons">
				      	<a href="{$HOME}admin/themes/addWidget/{$theme->name}/{$tpl->name}/#tab3"><i class="icon-plus-sign icon-green">&nbsp;</i></a>
				    </div>
			    </td>
			    {assign padding $padding+25}
			    {assign subdir $tpl->name}
			    {widgettreelist data=$tpl}
			    {assign subdir ''}
			    {assign padding 25}
		    </tr>
		{else}
	 		<tr>
			    <td style="padding-left:{$padding}px;"><i class="color-icons icons-document-code icon-margin"> </i>{$tpl->name}</td>
			    <td>
				    <div class="buttons">
				      	<a href="{$HOME}admin/themes/editWidget/{$theme->name}/{if $subdir!=''}{$subdir}/{/if}{$tpl->name}/#tab3"><i class="icon-pencil icon-blue">&nbsp;</i></a>
				    	{if in_array($subdir,widgetsDB::$baseWidgetFolders) and $usersDB->isDeveloper()}
							<a href="{$HOME}admin/do/themes/deleteWidgetFile/{$theme->name}/{$subdir}/{$tpl->name}/#tab3"><i class="icon-remove-sign icon-red">&nbsp;</i></a>
				   		{/if}
				    </div>
			    </td>
		    </tr>		
	    {/if}
	{/foreach} 
{/function}

<table class="table table-striped">
  <tbody>
	{foreach $widgets as $theme}
    <tr>
      <td>
      	<a href="{$HOME}admin/themes/show/{$theme->name}/#tab3">
      		<i class="color-icons icons-rocket icon-margin"> </i>
			{$theme->name}
		</a>
      </td>
      <td>
	    <div class="buttons">
	      	{if $usersDB->isDeveloper()}<a href="{$HOME}admin/do/themes/delete_widget/{$theme->name}/"><i class="icon-remove-sign icon-red">&nbsp;</i></a>{/if}
			<a href="#tab3" onclick="togglepopover('{$theme->name}');">
				<i id="popover-id-{$theme->name}" class="icon-info-sign icon-grey cl-{$theme->name}" rel="popovercontentlist" title=' {$theme->name}' data-content="{include file='common/widget_info_popover.tpl' widget=$theme}">&nbsp;</i>
			</a>	   
	    </div>
      </td>
    </tr>
		{if $REQUEST->getVariable('theme')==$theme->name}
			{assign padding 25}
  			{widgettreelist data=$theme}
		{/if}
	{/foreach}	  	
  </tbody>
</table>



