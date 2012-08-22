{if $params.width==''}{$params.width = config::get(imgGalleryWidth)}{/if}
{if $params.height==''}{$params.height = config::get(imgGalleryHeight)}{/if}
{if $params.fit==''}{$params.fit = config::get(imgGalleryFit)}{/if}

{foreach $params.images as $image}
	<a href="{$HOME}image/{$image->ekey}/1600/1600/fit/#.{$image->type}" rel="lightbox_group">
		<img src="{$HOME}image/{$image->ekey}/{$params.width}/{$params.height}/{$params.fit}/">
	</a>
{/foreach}