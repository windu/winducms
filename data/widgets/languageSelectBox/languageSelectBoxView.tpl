<ul class="{$params.class}">	
    {foreach $data.pagesDB->getPagesByParent('0',null,'position ASC','*',null,null,true) as $lang}
		<li><a href="{$HOME}do/setLanguage/{$lang->id}/">{$lang->name}</a></li>
	{/foreach}
</ul>