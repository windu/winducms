<table class="table table-striped">
  <tbody>
	{foreach $backups as $backup}
    <tr>
      <td>
      	<i class="color-icons icons-databases icon-margin"> </i>
		{$backup->name}
      </td>
      <td>
	    <div class="buttons">
	   		{if $usersDB->isDeveloper()}<a href="{$HOME}admin/do/backup/restore/{$backup->name}/"><i class="icon-share icon-blue">&nbsp;</i></a>{/if}
	      	{if $usersDB->isDeveloper()}<a href="{$HOME}admin/do/backup/delete/{$backup->name}/"><i class="icon-remove-sign icon-red">&nbsp;</i></a>{/if}
	    </div>
      </td>
    </tr>

	{/foreach}	  	
  </tbody>
</table>



