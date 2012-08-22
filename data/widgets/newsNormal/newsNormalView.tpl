{if $params.count==''}{$params.count = config::get(newsCount)}{/if}
{if $params.length==''}{$params.length = config::get(newsLength)}{/if}
{if $params.width==''}{$params.width = config::get(newsWidth)}{/if}
{if $params.height==''}{$params.height = config::get(newsHeight)}{/if}
{if $params.span==''}{$params.span = config::get(newsSpan)}{/if}
{if $params.btncss==''}{$params.btncss = config::get(newsBtnCssClass)}{/if}
<ul class="thumbnails">
{foreach $params.news as $news}
  <li class="span{$params.span}">
  	{if pagesDB::getMainImageEkey($news->id)!=null}
      <a href="{$HOME}{$news->urlKey}"><img src="{$HOME}image/{pagesDB::getMainImageEkey($news->id)}/{$params.width}/{$params.height}/smart/"></a>
    {/if}
      <h4>{$news->name}</h4>
      <h6>{$news->date}</h6>
      <p>{$news->content|truncate:$params.length}</p>
      <a href="{$HOME}{$news->urlKey}" class="{$params.btncss}">więcej</a>
  </li>
{/foreach}
</ul>