<table class="table table-striped tablesort">
	<thead>
	<tr>
		<th>{L key="admin.users.controller.username"}</th>
		<th>{L key="admin.users.ctpl.authorization"}</th>
		<th></th>
	</tr>
	</thead>
  <tbody>
  {foreach $usersPage as $user}
	<tr>
		<td><i class="color-icons icons-user-yellow icon-margin">&nbsp;</i>{$user->username}</td>
		<td>{$userTypesArray[$user->type]}</td>
		<td>
			<div class="buttons">
				<a href="{$HOME}admin/users/editUserPage/{$user->id}/#tab2"><i class="icon-pencil icon-blue">&nbsp;</i></a>
				<a href="{$HOME}admin/do/users/deletePageUser/{$user->id}/#tab2"><i class="icon-remove-sign icon-red">&nbsp;</i></a>
			</div>
		</td>
	</tr>
  {/foreach}   
  </tbody>
</table>