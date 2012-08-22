{if $params.sort==''}{$params.sort='position ASC'}{/if}
{if $params.where==''}{$params.where="type != {pagesDB::TYPE_NEWS}"}{/if}

{function name=menuDroppyTree}
	{foreach $pages as $page}
		{if $data.pagesDB->hasChild($page->id)}
			<li>
				<a href="{if strlen($page->content)>3}{$HOME}{$page->urlKey}{else}#{/if}">{$page->name}</a>
				<ul>
				{menuDroppyTree pages=$data.pagesDB->getPagesByParent($page->id,$params.where,$params.sort,'*',null,null,true)}
				</ul>
			</li>
		{else}
			<li><a href="{$HOME}{$page->urlKey}">{$page->name}</a></li>
		{/if}
	{/foreach}
{/function}

<ul id="droppy">
{menuDroppyTree pages=$data.pagesDB->getPages($params.parent,$params.where,$params.sort,'*',null,null,true)}
</ul>
