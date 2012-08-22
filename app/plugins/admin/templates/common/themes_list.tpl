{function name=treelist} 
 	{foreach $data->subdir as $tpl}
 		<tr>
		 	{if is_dir($tpl->path)}
			    <td>&nbsp;&nbsp;&nbsp;&nbsp;<i class="color-icons icons-folder-horizontal-open icon-margin"> </i>{$tpl->name}</td>
			    <td>
				    <div class="buttons">
				      	<a href="{$HOME}admin/themes/add/{$theme->name}/{$tpl->name}/"><i class="icon-plus-sign icon-green">&nbsp;</i></a>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
				    </div>
			    </td>						 	
	 			{treelist data=$tpl}
		 	{else}
			    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="color-icons icons-document-code icon-margin"> </i>{$tpl->name}</td>
			    <td>
				    <div class="buttons">
				      	{if $data->name!='img'}<a href="{$HOME}admin/themes/edit/{$theme->name}/{$data->name}/{$tpl->name}/"><i class="icon-pencil icon-blue">&nbsp;</i></a>
						{else}
						<a href="#tab4" rel="popoverconstantlist" title=' {$tpl->name}' data-content="<div class='pad'>{literal}{{$TEMPLATE_HOME}}/img/{$tpl->name}{/literal}</div>">	
							<i class="icon-question-sign icon-grey" >&nbsp;</i>
						</a>{/if}
				      	{if $usersDB->isDeveloper()}<a href="{$HOME}admin/do/themes/delete/{$theme->name}/{$data->name}/{$tpl->name}/"><i class="icon-remove-sign icon-red">&nbsp;</i></a>{/if}
				    </div>
			    </td>
			{/if}
	    </tr>
	{/foreach} 
{/function}

<table class="table table-striped">
  <tbody>
	{foreach $themes as $theme}
    <tr>
      <td>
      	<a href="{$HOME}admin/themes/show/{$theme->name}/">
      		<i class="color-icons icons-newspaper icon-margin"> </i>
			{$theme->name}
		</a>
      </td>
      <td>
	    <div class="buttons">
	    	<a href="{$HOME}admin/themes/editTheme/{$theme->name}/"><i class="icon-pencil icon-blue">&nbsp;</i></a>
	    	<a href="{$HOME}admin/do/themes/duplicateTemplate/{$theme->name}/"><i class="icon-random icon-green">&nbsp;</i></a>
			{if $theme->name == config::get(template)}
				&nbsp;<i class="icon-eye-open icon-blue">&nbsp;</i>&nbsp;
			{else}
				<a href="{$HOME}admin/do/themes/setTempleteActive/{$theme->name}/"><i class="icon-eye-close icon-grey">&nbsp;</i></a>
			{/if}	    
	      	{if $usersDB->isDeveloper() and $theme->name != config::get(template)}<a href="{$HOME}admin/do/themes/delete_template/{$theme->name}/"><i class="icon-remove-sign icon-red">&nbsp;</i></a>
			{else}
				&nbsp;<i class="icon-remove-sign icon-grey">&nbsp;</i>&nbsp;
			{/if}
	    </div>
      </td>
    </tr>
		{if $REQUEST->getVariable('theme')==$theme->name}
  			{treelist data=$theme}
		{/if}
	{/foreach}	  	
  </tbody>
</table>



