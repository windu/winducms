<ul class="sortable list-bg {if cookie::readCookie(sortableOn)}sortable-cursor{/if}" {if cookie::readCookie(sortableOn)}id="sortableTreeListNews"{/if}>
{foreach $newsAll as $news}
	{assign 'img' $imagesDB->getFirstByBucket($news->id)}
	<li id="item-id-{$news->id}" class="gallery-image-box no-nest {cycle values='odd,even'}">
		<div>
			{if is_object($img)}
			<img style="margin-top:-8px; margin-bottom:-4px;" src="{$HOME}image/{$img->ekey}/30/22/smart/" rel="popoverimageslist" title='{$img->name|truncate:25}' data-content="<img style='height:200px; width:300px;'src='{$HOME}image/{$img->ekey}/300/200/smart/'>">
			{/if}
			
			{$news->name}
			{$news->date}
			<div class="buttons">
				<a href="{$HOME}admin/content/editNews/{$news->id}/"><i class="icon-pencil icon-blue">&nbsp;</i></a>
				<a href="{$HOME}admin/do/content/delete/{$news->id}/{$REQUEST->getVariable('id')}/"><i class="icon-remove-sign icon-red">&nbsp;</i></a>
			</div>
		</div>
	</li>
{/foreach}	  	
</ul>

 