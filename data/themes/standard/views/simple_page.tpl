<div class="container">
	<div class="row">
		<div class="span4">
            <img src="{{$TEMPLATE_HOME}}/img/logo.png">
		</div>
        <div class="span8">
			{{W name=languageSelectBox}}
        </div>
	</div>
	<div class="row">
        <div class="span12">
        	{{W name=menuDroppy}}
        </div>
	</div>    
    {{*W name=sliderNivo bucket=297 count=7 width=1200 height=300 type=smart filter=original*}}
    {{W name=sliderNivo images=$imagesDB->fetchAll(null,'createTime DESC','*',5) count=7 width=1000 height=300 type=smart filter=original}}
<div class="row">
<div class="span12">
	
</div>
</div>
	<div class="row">
		<div class="span3">
			<h2>Menu Normalne</h2>
            {{W name=menuNormal}}
		</div>
		<div class="span6">
			<h2>{{$page->name}}</h2>
			{{eval var=$page->content}}
		</div>
		<div class="span3">
			{{L key="front.form.send"}}
		</div>
          
	</div>

	<hr>
	<footer>
		<p>© Windu 2.0</p>
	</footer>
</div>
