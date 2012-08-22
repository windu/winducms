<table class="table table-striped tablesort">
	<thead>
	<tr>
		<th>{L key = "admin.users.common.tpl.typesofauth"}</th>
		<th>{L key="admin.users.common.tpl.extension"}</th>
		<th>{L key="admin.users.common.tpl.regexp"}</th>
		<th></th>
	</tr>
	</thead>
  <tbody>
  {foreach $userTypes as $userType}
	<tr>
		<td><i class="color-icons icons-safe--arrow"> </i> {$userType->name}</td>
		<td>{$userTypesArray[$userType->extends]}</td>
		<td>{$userType->regexp}</td>
		<td>
			<div class="buttons">
				<a href="{$HOME}admin/users/editUserType/{$userType->id}/#tab3"><i class="icon-pencil icon-blue">&nbsp;</i></a>
				<a href="{$HOME}admin/do/users/deleteUserType/{$userType->id}/"><i class="icon-remove-sign icon-red">&nbsp;</i></a>
			</div>
		</td>		
	</tr>
  {/foreach}   
  </tbody>
</table>