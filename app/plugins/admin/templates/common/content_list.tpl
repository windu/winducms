{function name=treelist} 
  {foreach $data as $entry} 
    {if $entry->type>=pagesDB::TYPE_LANG_CATALOG}
    	<li id="item-id-{$entry->id}" class="{if $entry->type==pagesDB::TYPE_GALLERY or $entry->type==pagesDB::TYPE_NEWS_GROUP}no-nest{/if} {if $entry->id == $id}active{/if}">
	    	<div>
				 {include file='common/content_list_icon.tpl' type=$entry->type}
				 {if $entry->type==pagesDB::TYPE_LANG_CATALOG or $entry->type==pagesDB::TYPE_CATALOG}
				 	<a href="{$HOME}admin/do/content/showTreelist/{$entry->id}/">{$entry->name|truncate:30}</a>
				 {else}
				 	{$entry->name|truncate:30}
				 {/if}
				 <div class="buttons">
					 {if $entry->type==pagesDB::TYPE_GALLERY}
						<a href="{$HOME}admin/content/gallery/{$entry->id}/"><i class="icon-plus-sign icon-green">&nbsp;</i></a>
					 {elseif $entry->type==pagesDB::TYPE_NEWS_GROUP}
						<a href="{$HOME}admin/content/news/{$entry->id}/"><i class="icon-plus-sign icon-green">&nbsp;</i></a>
					 {else}					 
					 	<a href="{$HOME}admin/content/add/{$entry->id}/"><i class="icon-plus-sign icon-green">&nbsp;</i></a>
					 {/if}				 
					<a href="{$HOME}admin/content/edit/{$entry->id}/"><i class="icon-pencil icon-blue">&nbsp;</i></a> 
					{if $entry->status == 1}
						<a href="{$HOME}admin/do/content/hide/{$entry->id}/"><i class="icon-eye-open icon-grey">&nbsp;</i></a>
					{else}
						<a href="{$HOME}admin/do/content/activate/{$entry->id}/"><i class="icon-eye-close icon-red">&nbsp;</i></a>
					{/if}				
					<a href="{$HOME}admin/do/content/delete/{$entry->id}/"><i class="icon-remove-sign icon-red">&nbsp;</i></a>
					<a href="#tab1" onclick="togglepopover({$entry->id});">
						<i id="popover-id-{$entry->id}" class="icon-info-sign icon-grey cl-{$entry->id}" rel="popovercontentlist" title=' {$entry->name}' data-content="{include file='common/content_info_popover.tpl' page=$entry}">&nbsp;</i>
					</a>
				</div>
			</div>
			{if cookie::readCookie(showAllOn)}
				<ul style="padding-left:20px;">{treelist data=$pagesDB->getPagesByParent($entry->id,"status !=0")}</ul>
		    {else}
				{if $pagesDB->checkParentsOpen(unserialize(cookie::readCookie('contentOpenId')),$entry)}
		    	<ul style="padding-left:20px;">{treelist data=$pagesDB->getPagesByParent($entry->id,"status !=0")}</ul>
		    	{/if}		    	
		    {/if}

    	</li>
	{else}
		<li id="item-id-{$entry->id}" class="no-nest {if $entry->id == $id}active{/if}">
			<div>
				{include file='common/content_list_icon.tpl' type=$entry->type}{$entry->name|truncate:30}
				<div class="buttons">
					 {if $entry->type==pagesDB::TYPE_URL}
					 	<a href="{$HOME}admin/content/editUrl/{$entry->id}/"><i class="icon-pencil icon-blue">&nbsp;</i></a> 
					 {else}
					 	<a href="{$HOME}admin/content/edit/{$entry->id}/"><i class="icon-pencil icon-blue">&nbsp;</i></a> 
					 {/if}
					 
					{if $entry->status == 1}
						<a href="{$HOME}admin/do/content/hide/{$entry->id}/"><i class="icon-eye-open icon-grey">&nbsp;</i></a>
					{else}
						<a href="{$HOME}admin/do/content/activate/{$entry->id}/"><i class="icon-eye-close icon-red">&nbsp;</i></a>
					{/if}
					<a href="{$HOME}admin/do/content/delete/{$entry->id}/"><i class="icon-remove-sign icon-red">&nbsp;</i></a>
					<a href="#tab1" onclick="togglepopover({$entry->id});">
						<i id="popover-id-{$entry->id}" class="icon-info-sign icon-grey cl-{$entry->id}" rel="popovercontentlist" title=' {$entry->name}' data-content="{include file='common/content_info_popover.tpl' page=$entry}">&nbsp;</i>
					</a>				
				</div>
			</div>
		</li> 
	{/if} 
  {/foreach} 
{/function}


<ul class="sortable {if cookie::readCookie(sortableOn)}sortable-cursor{/if} list-bg" {if cookie::readCookie(sortableOn)}id="sortableTreeList"{/if}>
{treelist data=$pagesDB->getPagesByParent(0,"status !=0")}
{treelist data=$pagesDB->getPagesByParent(-1,"status !=0")}
</ul>  