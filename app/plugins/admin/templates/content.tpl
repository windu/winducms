  	<div class="tabbable">
	  <ul class="nav nav-tabs" id="myTab">
	    <li><a href="#tab1" data-toggle="tab"><i class="color-icons icons-clipboard-list icon-margin"> </i>{L key = "admin.content.tpl.pages"}</a></li>
	    <li><a href="#tab2" data-toggle="tab"><i class="color-icons icons-direction icon-margin"> </i>{L key = "admin.content.tpl.languages"}</a></li>
	    <li><a href="#tab3" data-toggle="tab"><i class="color-icons icons-popcorn icon-margin"> </i>{L key = "admin.content.tpl.trash"}</a></li>
	    <li><a href="#tab4" data-toggle="tab"><i class="color-icons icons-gear icon-margin"> </i>{L key = "admin.content.tpl.settings"}</a></li>
	  </ul>
	  <div class="tab-content">
	    <div class="tab-pane" id="tab1">
			<div class="row-fluid">
			  <div class="span4 box">
			  	<h5>{L key = "admin.content.common.tpl.pageslist"}
				  	<div class="buttons">
				  		<a href="{$HOME}admin/mainDo/toogleCookie/sortableOn/tab1/" class="btn btn-small {if cookie::readCookie(sortableOn)}btn-success{/if}">{L key = "admin.content.tpl.sort"}</a>
				  		<a href="{$HOME}admin/mainDo/toogleCookie/showAllOn/tab1/" class="btn btn-small {if cookie::readCookie(showAllOn)}btn-success{/if}">{L key = "admin.content.tpl.showall"}</a>
				  		<a href="{$HOME}admin/do/content/hideTreelistAll/" class="btn btn-small">-</a>
				  	</div>
			  	</h5>
				{include file='common/content_list.tpl'}
			  </div>
			  	{if $contentType == 'form'}
				  	<div class="span8">
				  		{include file='common/alert.tpl'}
				  		<div class="box">
					  		<h5>{L key = "admin.content.tpl.functions"}</h5>
					  		{$form->toHtml()}
				  		</div>
				  	</div>
			  	{elseif $contentType == 'gallery'}
				  	<div class="span8">
				  		{include file='common/alert.tpl'}
				  		<div class="box" style="margin-bottom:20px;">
					  		<h5>{L key = "admin.content.common.tpl.addimages"}</h5>
					  		{include file='common/images_multiuploader.tpl'}
					  	</div>	
					  	<div class="box" style="margin-bottom:20px;">
				  			<h5>{L key = "admin.content.common.tpl.imagelistingalery"}
							  	<div class="buttons">
							  		<a href="{$HOME}admin/mainDo/toogleCookie/sortableOn/tab1/" class="btn btn-small {if cookie::readCookie(sortableOn)}btn-success{/if}">{L key = "admin.content.tpl.sort"}</a>
							  	</div>				  			
				  			</h5>
				  			{include file='common/images_list.tpl'}	
				  		</div>
				  	</div>
				{elseif $contentType == 'image'}
				  	<div class="span8">
				  		{include file='common/alert.tpl'}
				  		<div class="box" style="margin-bottom:20px;">
					  		<h5>{L key = "admin.content.tpl.editimages"}</h5>
					  		<img src='{$HOME}image/{$image->ekey}/250/180/smart/' class="margin">
					  	</div>	
				  		<div class="box">
					  		<h5>{L key = "admin.content.tpl.description"}</h5>
					  		{$form->toHtml()}
					  	</div>	
				  	</div>	
				{elseif $contentType == 'news'}
				  	<div class="span8">
				  		{include file='common/alert.tpl'}
				  		<div class="box" style="margin-bottom:20px;">
					  		<h5>{L key = "admin.content.tpl.addnews"}</h5>
					  		{$form->toHtml()}
					  	</div>	
				  		<div class="box">
					  		<h5>{L key = "admin.content.tpl.newslist"}</h5>
					  		{include file='common/news_list.tpl'}	
					  	</div>	
				  	</div>	
			  	{else}
			  		<div class="span8">
			  			{include file='common/alert.tpl'}
				  		<div class="box">
			  				<h5>{L key = "admin.content.common.tpl.help"}</h5>
			  				<div class="pad">
			  				{include file='common/content_help.tpl'}
			  				</div>
			  			</div>	
			  		</div>
			  	{/if}
			</div>     	
	    </div>
	    <div class="tab-pane" id="tab2">
			<div class="row-fluid">
			  <div class="span4 box">
			  	<h5>{L key = "admin.content.common.tpl.languages"}</h5>
				{include file='common/lang_list.tpl'}	
			  </div>
			  <div class="span8 box">
			  	<h5>{L key = "admin.content.tpl.addlanguage"}</h5>
				{$formLang->toHtml()}
			  </div>
			</div> 	      		
	    </div>
	    <div class="tab-pane" id="tab3">
			<div class="row-fluid">
			  <div class="span4 box">
			  	<h5>
					{L key = "admin.content.common.tpl.trashcontent"}
				  	<div class="buttons">
				  		<a href="{$HOME}admin/do/trash/emptyTrash/" class="btn btn-small btn-danger">{L key = "admin.content.tpl.emptytrash"}</a>
				  	</div>					
			  	</h5>
				{include file='common/trash_list.tpl'}	
			  </div>
			  <div class="span8 box">
			  	<div class="pad">
					pomoc czy cos takiego
				</div>
			  </div>
			</div> 	      		
	    </div>
	    <div class="tab-pane" id="tab4">
			<div class="row-fluid">
			  <div class="span8 box">
				{include file='common/config_list.tpl' list=$configList class='content' tab='#tab4'}
			  </div>
			  <div class="span4 box">
			  {if is_object($formConfig)}
			  	<h5>{L key = "admin.content.tpl.edit"}</h5>
				{$formConfig->toHtml()}
			  {else}
			  	<h5>{L key = "admin.content.tpl.help"}</h5>
			  	<div class="pad">
			  		jakis tekst pomocy 	
			  	</div>
			  {/if}	
			  </div>
			</div> 	      		
	    </div>	    	    
	  </div>
	</div>


{*<img src="http://localhost/windu2/image/vdyjnamqkznz/332/306/smart/sepia_contrast/">	*}