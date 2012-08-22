<table class="table table-striped">
  <tbody>
  {foreach $langs as $lang}
	<tr>
		<td>
			{include file='common/content_list_icon.tpl' type=$lang->type}
			<a href="">{$lang->name}</a>
		</td>
		<td>
			<div class="buttons">
				<a href="{$HOME}admin/do/content/deleteLang/{$lang->id}/"><i class="icon-remove-sign icon-red">&nbsp;</i></a>
			</div>
		</td>
	</tr>
	{foreach baseFile::getFilesList("{$languagePath}{$lang->name}/") as $file}
	<tr>
		<td style="padding-left:25px;">
			<i class="color-icons icons-document-list icon-margin"> </i>
			<a href="">{$file->name}</a>
		</td>
		<td>
			<div class="buttons">
				<a href="{$HOME}admin/content/editLang/{$lang->name}/{$file->name}/#tab2"><i class="icon-pencil icon-blue">&nbsp;</i></a>
			</div>
		</td>
	</tr>	
	{/foreach}
  {/foreach}   
  </tbody>
</table>




