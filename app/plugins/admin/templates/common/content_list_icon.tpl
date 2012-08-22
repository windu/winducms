{if $type==pagesDB::TYPE_LANG_CATALOG}
	{assign var="icon" value="bank"}
{elseif $type==pagesDB::TYPE_CATALOG} 
	{assign var="icon" value="folder-horizontal"}
{elseif $type==pagesDB::TYPE_GALLERY} 
	{assign var="icon" value="photo-album-blue"}
{elseif $type==pagesDB::TYPE_NEWS_GROUP} 
	{assign var="icon" value="calendar-list"}
{elseif $type==pagesDB::TYPE_PAGE} 
	{assign var="icon" value="notebook"}
{elseif $type==pagesDB::TYPE_NEWS} 
	{assign var="icon" value="calendar-list"} 
{elseif $type==pagesDB::TYPE_URL} 
	{assign var="icon" value="document-globe"} 
{else}    
	{assign "icon" "document-medium"} 
{/if}
<i class="color-icons icons-{$icon} icon-margin"> </i> 