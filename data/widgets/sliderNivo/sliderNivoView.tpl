{if $params.bucket!=''}
	{assign images $data.imagesDB->getByBucket($params.bucket,'position ASC','*',$params.count)}
{elseif $params.images!=''}
	{assign images $params.images}
{/if}
<div class="slider-wrapper theme-default"> 
	<div id="sliderNivo" class="nivoSlider">
	{foreach  $images as $img}
		<img src="{$HOME}image/{$img->ekey}/{$params.width}/{$params.height}/{$params.type}/{$params.filter}/" title='{$img->description|truncate:200}'>
	{/foreach}
	</div>
</div>