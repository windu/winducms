{if notifyDB::count()>0}
<table class="table table-striped tablesort" style="opacity:0.40;filter: alpha(opacity=40); -moz-opacity: 0.4;">
<thead>
	<tr>
		<th>{L key = "admin.notify_closed.tpl.notificationinactive"}</th>
		<th>{L key = "admin.notify_closed.tpl.dateofadding"}</th>
		<th>{L key = "admin.notify_closed.tpl.priority"}</th>
		<th></th>
	</tr>
</thead>
<tbody>
  {foreach $notificationsClosed as $notify}
	<tr>
		<td>
			{$notify->content}
		</td>
		<td>{$notify->insertTime}</td>
		<td>{$notify->priority}</td>
		<td>
			<div class="buttons">
				<a href="{$HOME}admin/do/system/deleteNotify/{$notify->id}/"><i class="icon-remove icon-red">&nbsp;</i></a>
			</div>
		</td>
	</tr>
  {/foreach}   
  </tbody>
</table>
{/if}