<table class="table table-striped">
  <tbody>
  {foreach $deletedPages as $page}
	<tr>
		<td>{include file='common/content_list_icon.tpl' type=$page->type}{$page->name}</td>
		<td>
			<div class="buttons">
				<a href="{$HOME}admin/do/trash/restore/{$page->id}/"><i class="icon-share icon-blue">&nbsp;</i></a>
				<a href="{$HOME}admin/do/trash/delete/{$page->id}/"><i class="icon-remove-sign icon-red">&nbsp;</i></a>
				<i id="popover-id-{$page->id}" class="icon-info-sign icon-grey cl-{$page->id}" rel="popoverconstantlist" title=' {$page->name}' data-content="{include file='common/trash_info_popover.tpl' page=$page}">&nbsp;</i>
			</div>
		</td>
	</tr>
  {/foreach}   
  </tbody>
</table>