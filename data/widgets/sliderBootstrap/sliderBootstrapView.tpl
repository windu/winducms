{if $params.bucket!=''}
	{assign images $data.imagesDB->getByBucket($params.bucket,'position ASC','*',$params.count)}
{elseif $params.images!=''}
	{assign images $params.images}
{/if}
<div id="sliderBootstrap" class="carousel slide">
	<div class="carousel-inner">
	{foreach $images as $img name=foo}
		<div class="{if $smarty.foreach.foo.first}active {/if}item">
			<img src="{$HOME}image/{$img->ekey}/{$params.width}/{$params.height}/{$params.type}/{$params.filter}/" title='{$img->name|truncate:25}'>
			{if $img->description != null}
			<div class="carousel-caption">
				<h4>{$img->name}</h4>
				<p>{$img->description}</p>
			</div>	
			{/if}		
		</div>	
	{/foreach}
	</div>	
	<a class="carousel-control left" href="#sliderBootstrap" data-slide="prev">&lsaquo;</a>
	<a class="carousel-control right" href="#sliderBootstrap" data-slide="next">&rsaquo;</a>	
</div> 