<table class="table table-striped tablesort">
	<thead>
	<tr>
		<th>{L key="admin.users.controller.username"}</th>
		<th>{L key="admin.users.ctpl.authorization"}</th>
		<th></th>
	</tr>
	</thead>
  <tbody> 
  {foreach $usersSystem as $user}
	<tr>
		<td><i class="color-icons icons-user-black icon-margin">&nbsp;</i>{$user->username}</td>
		<td>{$userTypesArray[$user->type]}</td>
		<td>
			<div class="buttons">
				<a href="{$HOME}admin/users/editUserSystem/{$user->id}/#tab1"><i class="icon-pencil icon-blue">&nbsp;</i></a>
				{if $loggedIn->email!=$user->email}<a href="{$HOME}admin/do/users/deleteSystemUser/{$user->id}/#tab1"><i class="icon-remove-sign icon-red">&nbsp;</i></a>{else}&nbsp;<i class="icon-remove-sign icon-grey">&nbsp;</i>&nbsp;{/if}
			</div>
		</td>
	</tr>
  {/foreach}   
  </tbody>
</table>