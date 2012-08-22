{if notifyDB::count()>0}
<table class="table table-striped tablesort">
<thead>
	<tr>
		<th>{L key = "admin.notify_list.tpl.notification"}</th>
		<th>{L key = "admin.notify_list.tpl.dateofading"}</th>
		<th>{L key = "admin.notify_list.tpl.priority"}</th>
		<th></th>
	</tr>
</thead>
<tbody>
  {foreach $notifications as $notify}
	<tr>
		<td>
			{$notify->content}
		</td>
		<td>{$notify->insertTime}</td>
		<td>{$notify->priority}</td>
		<td>
			<div class="buttons">
				<a href="{$HOME}admin/do/system/closeNotify/{$notify->id}/"><i class="icon-remove icon-red">&nbsp;</i></a>
			</div>
		</td>
	</tr>
  {/foreach}   
  </tbody>
</table>
{/if}