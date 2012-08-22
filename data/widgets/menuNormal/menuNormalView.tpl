{if $params.sort==''}{$params.sort='position ASC'}{/if}
{if $params.where==''}{$params.where="type != {pagesDB::TYPE_NEWS}"}{/if}

{function name=menuNormalTree}
	{foreach $pages as $page}
		{if $data.pagesDB->hasChild($page->parentId)}
			<li>
				<a href="{$HOME}{$page->urlKey}">{$page->name}</a>
				<ul>
				{if $params.closed != true}
					{menuNormalTree pages=$data.pagesDB->getPagesByParent($page->id,$params.where,$params.sort,'*',null,null,true)}
				{/if}
				</ul>
			</li>
		{else}
			<li><a href="{$HOME}{$page->urlKey}">{$page->name}</a></li>
		{/if}
	{/foreach}
{/function}

<ul class="{$params.class}">
{menuNormalTree pages=$data.pagesDB->getPages($params.parent,$params.where,$params.sort,'*',null,null,true)}
</ul>
