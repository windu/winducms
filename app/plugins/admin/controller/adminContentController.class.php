<?php /*windu.org admin controller*/
Class adminContentController Extends adminMainConfigController{
	public function __construct($request){
		parent::__construct($request);

		$pagesDB = new pagesDB();
		$imagesDB = new imagesDB();
		$deletedPages = $pagesDB->fetchAll("status=0",'position ASC','*');
		$langs = $pagesDB->fetchAll("type=".pagesDB::TYPE_LANG_CATALOG." and status !=".pagesDB::STATUS_DELETE,'id ASC','*');
			
		$formLang = new form('addLang','addLangSuccess',$_POST,'POST','form-horizontal','#tab2');
		$formLang->add('name', 'input-text',lang::read('admin.content.controller.newlangname'));
		$formLang->addRule('name', 'required', null,lang::read('admin.content.controller.giveelementname'));
		$formLang->addButton('submit',lang::read('form.button.title.add'));
		$formLang->setHandler($this);
		$formLang->handle();
		
		$configDB = new configDB();
		$config = $configDB->getByGroup(configDB::CONFIG_BUCKET_CONTENT);	
		$this->smarty->assign('configList',$config);
		
		$this->smarty->assign('languagePath',LANGUAGES_PATH);
		$this->smarty->assign('config',$langs);
		$this->smarty->assign('langs',$langs);
		$this->smarty->assign('deletedPages',$deletedPages);
		$this->smarty->assign('pagesDB',$pagesDB);	
		$this->smarty->assign('imagesDB',$imagesDB);	
		$this->smarty->assign('formLang',$formLang);	
		$this->smarty->assign('id',$this->request->getVariable('id'));
	}
	public function index()
	{	
		$this->pageDisplay('content');
	}

	public function add() {
		$pagesDB = new pagesDB();
		$page = $pagesDB->fetchRow("id={$this->request->getVariable('id')}");
		
		$form = new form('add','addSuccess',$_POST,'POST','form-horizontal','#tab1');
		$form->add('name', 'input-text',lang::read('admin.content.controller.elementname'));
		$form->add('type', 'select',lang::read('admin.content.controller.elementtype'), cookie::readCookie('lastContentAdd'), array("option"=>$pagesDB->types));

		$form->addRule('name', 'required', null,lang::read('admin.content.controller.giveelementname'));

		$form->setHandler($this);
		$form->handle();
		$this->smarty->assign('contentType','form'); 
		$this->smarty->assign('form',$form);	
		$this->pageDisplay('content');
	}
	public function addSuccess($data) {
		$pagesDB = new pagesDB();
		$data = array_merge($data,array('parentId'=>$this->request->getVariable('id')));
		$page = $pagesDB->insert($data);
		cookie::setCookie('lastContentAdd',$data['type']);
		router::reload();
	}		
	public function addLangSuccess($data) {
		$pagesDB = new pagesDB();
		$pagesDB->addLang($data);
		router::reload();
	}		
	public function edit() {
		$pagesDB = new pagesDB();
		$page = $pagesDB->fetchRow("id={$this->request->getVariable('id')}");
		
		$form = new form('edit','editSuccess',$_POST,'POST','form-horizontal no-margin','#tab1');
		
		$form->add('content', 'textareaCKEditor','',$page->content,array('editorType'=>'basic'));
		$form->add('name', 'input-text', lang::read('admin.content.controller.elementname'),$page->name);
		$form->addRule('name', 'required', null,lang::read('admin.content.controller.giveelementname'));		
		$form->add('urlKey', 'input-text',lang::read('admin.content.controller.linkname'),$page->urlKey);
		$form->addRule('urlKey', 'unique', array('table'=>$pagesDB,'where'=>"id!={$this->request->getVariable('id')}"),lang::read('admin.content.controller.adresstaken'));
		$form->add('title', 'input-text','Title',$page->title,array("tooltip" => lang::read('admin.content.controller.sitetitle')));
		$form->add('description', 'input-text','Description',$page->description,array("class" => "span8","tooltip" => lang::read('admin.content.controller.descriptioninsection')));
		$form->add('keywords', 'input-text','Keywords',$page->keywords,array("class" => "span8","tooltip" => lang::read('admin.content.controller.keywords')));
		$form->add('tags', 'input-text','Tagi',$page->tags,array("class" => "span8","tooltip" => lang::read('admin.content.controller.sitetags')));	
		
		$imagesDB = new imagesDB();
		$mainImage = $imagesDB->getFirstByBucket('main-'.$this->request->getVariable('id'));
		if(is_object($mainImage)){
			$form->add('HTML',"
			<div class='control-group'>
				<label class='control-label'>
					<a href='".HOME."admin/do/content/deleteMainImage/main-{$this->request->getVariable('id')}/'><i class='icon-remove-sign icon-red'>&nbsp;</i></a>
				</label>
				<div class='controls'>
					<img src='".HOME."image/{$mainImage->ekey}/200/150/smart/'>
				</div>
			</div>");
		}
		
		$form->add('image', 'input-file',lang::read('admin.content.controller.image'),null,array("class" => "span8","tooltip" => lang::read('admin.content.controller.imagedescription')));	
		$form->add('tpl', 'select','Template',$page->tpl,array('option' => themesDB::getViewsArray(),"tooltip" => lang::read('admin.content.controller.chosentemplate')));
		
		$form->setHandler($this);
		$form->handle();
		
		$this->smarty->assign('contentType','form');  
		$this->smarty->assign('form',$form);		
		$this->pageDisplay('content');
	}
	public function editSuccess($data) {
		$pagesDB = new pagesDB();
		$page = $pagesDB->updatePage($data,"id={$this->request->getVariable('id')}");

		if ($_FILES['image']['error']==0) {
			image::deleteImageByBucket('main-'.$this->request->getVariable('id'));
		}
		image::saveIncomingImages('main-'.$this->request->getVariable('id'));
		
		router::reload();
	}
	public function editUrl() {
		$pagesDB = new pagesDB();
		$page = $pagesDB->fetchRow("id={$this->request->getVariable('id')}");
		
		$form = new form('edit','editUrlSuccess',$_POST,'POST','form-horizontal no-margin','#tab1');
		
		$form->add('content', 'input-text',lang::read('admin.content.controller.url'),$page->content,array('editorType'=>'basic'));
		$form->addRule('content', 'required', null,lang::read('admin.content.controller.giveelementname'));	
		$form->add('name', 'input-text', lang::read('admin.content.controller.elementname'),$page->name);
		$form->addRule('name', 'required', null,lang::read('admin.content.controller.giveelementname'));
					
		$form->setHandler($this);
		$form->handle();
		
		$this->smarty->assign('contentType','form');  
		$this->smarty->assign('form',$form);		
		$this->pageDisplay('content');
	}
	public function editUrlSuccess($data) {
		$pagesDB = new pagesDB();
		$page = $pagesDB->updatePage($data,"id={$this->request->getVariable('id')}");
		router::reload();
	}
	public function editLang() {
		$pagesDB = new pagesDB();
		$lang = $pagesDB->fetchRow();
		$formLang = new form('editLang','editLangSuccess',$_POST,'POST','form-horizontal','#tab2');
		$formLang->add('content', 'textareaCodeMirrorEditor',null,file_get_contents(LANGUAGES_PATH.$this->request->getVariable('id').'/'.$this->request->getVariable('secoundId')));
		
		$formLang->addButton('submit',lang::read('form.button.title.save'));
		$formLang->addButton('cancel',lang::read('form.button.title.cancel'),'btn btn-margin-left',HOME.'admin/content/#tab2');
		$formLang->setHandler($this);
		$formLang->handle();	
		
		$this->smarty->assign('formLang',$formLang);	
		$this->pageDisplay('content');
	}	
	public function editLangSuccess($data) {
		baseFile::saveFile(LANGUAGES_PATH.$this->request->getVariable('id').'/'.$this->request->getVariable('secoundId'), $data['content']);
		cache::clearBucket('lang');
		router::reload();
	}	
	public function editImage() {
		$imagesDB = new imagesDB();
		$image = $imagesDB->fetchRow("id={$this->request->getVariable('id')}");
		$form = new form('edit','editImageSuccess',$_POST,'POST','form-horizontal','#tab1');

		$form->add('name', 'input-text',lang::read('admin.content.controller.name'),$image->name);
		$form->addRule('name', 'required', null,lang::read('admin.content.controller.giveelementname'));		
		$form->add('description', 'textarea',lang::read('admin.content.controller.description'),$image->description);
	
		$form->setHandler($this);
		$form->handle(); 
		 
		$this->smarty->assign('contentType','image');  
		$this->smarty->assign('form',$form);
		$this->smarty->assign('image',$image);		
		$this->pageDisplay('content');
	}	
	public function editImageSuccess($data) {
		$imagesDB = new imagesDB();
		$image = $imagesDB->updateRow($data,"id={$this->request->getVariable('id')}");
		router::reload();
	}	

	public function gallery() {
		$imagesDB = new imagesDB();
		$images = $imagesDB->getByBucket($this->request->getVariable('id'));
		
		$this->smarty->assign('contentType','gallery'); 
		$this->smarty->assign('images',$images);	
		$this->pageDisplay('content');
	}	
	public function news() {
		$pagesDB = new pagesDB();
		$news = $pagesDB->fetchAll("parentId = {$this->request->getVariable('id')} and status = ".pagesDB::STATUS_ACTIVE,'position ASC');
		
		$form = new form('addnews','addNewsSuccess',$_POST,'POST','form-horizontal no-margin','#tab1');
		
		$form->add('content', 'textareaCKEditor','',$page->content,array('editorType'=>'basic'));
		$form->add('name', 'input-text', lang::read('admin.content.controller.newstitle'),$page->name);
		$form->addRule('name', 'required', null,lang::read('admin.content.controller.giveelementname'));

		$form->add('image', 'input-file',lang::read('admin.content.controller.image'),null,array("class" => "span8","tooltip" => lang::read('admin.content.controller.imagedescription')));	
		$form->add('tags', 'input-text',lang::read('admin.content.controller.tags'),null,array("class" => "span8","tooltip" => lang::read('admin.content.controller.sitetags')));		
		$form->add('date', 'inputDataPicker',lang::read('admin.content.controller.date'),strtotime('now'),array("tooltip" => lang::read('admin.content.controller.datedescription')));
		$form->add('tpl', 'select',lang::read('admin.content.controller.template'),$page->tpl,array('option' => themesDB::getViewsArray(),"tooltip" => lang::read('admin.content.controller.chosentemplate')));

		$form->setHandler($this);
		$form->handle();
		$form->addButton('login',lang::read('admin.content.controller.addnews'),'btn btn-primary margin-right');
		$this->smarty->assign('form',$form);
		
		$this->smarty->assign('newsAll',$news); 
		$this->smarty->assign('contentType','news'); 
		$this->pageDisplay('content');
	}
	public function editNews() {
		$pagesDB = new pagesDB();
		$page = $pagesDB->fetchRow("id={$this->request->getVariable('id')}");
		
		$news = $pagesDB->fetchAll("parentId = {$page->parentId} and status = ".pagesDB::STATUS_ACTIVE,'position ASC');
		
		$form = new form('editnews','editNewsSuccess',$_POST,'POST','form-horizontal no-margin','#tab1');
		
		$form->add('content', 'textareaCKEditor','',$page->content,array('editorType'=>'basic'));
		$form->add('name', 'input-text', lang::read('admin.content.controller.newstitle'),$page->name);
		$form->addRule('name', 'required', null,lang::read('admin.content.controller.giveelementname'));
		
		$imagesDB = new imagesDB();
		$mainImage = $imagesDB->getFirstByBucket('main-'.$this->request->getVariable('id'));
		if(is_object($mainImage)){
			$form->add('HTML',"
			<div class='control-group'>
				<label class='control-label'>
					<a href='".HOME."admin/do/content/deleteMainImage/main-{$this->request->getVariable('id')}/'><i class='icon-remove-sign icon-red'>&nbsp;</i></a>
				</label>
				<div class='controls'>
					<img src='".HOME."image/{$mainImage->ekey}/200/150/smart/'>
				</div>
			</div>");
		}
		$form->add('image', 'input-file',lang::read('admin.content.controller.image'),null,array("class" => "span8","tooltip" => lang::read('admin.content.controller.imagedescription')));	
		$form->add('tags', 'input-text',lang::read('admin.content.controller.tags'),$page->tags,array("class" => "span8","tooltip" => lang::read('admin.content.controller.sitetags')));
		$form->add('date', 'inputDataPicker',lang::read('admin.content.controller.date'),$page->date,array("tooltip" => lang::read('admin.content.controller.datedescription')));
		$form->add('tpl', 'select',lang::read('admin.content.controller.template'),$page->tpl,array('option' => themesDB::getViewsArray(),"tooltip" => lang::read('admin.content.controller.chosentemplate')));

		$form->setHandler($this);
		$form->handle();
		$form->addButton('login',lang::read('admin.content.controller.addnews'),'btn btn-primary margin-right');
		$this->smarty->assign('form',$form);
		
		$this->smarty->assign('newsAll',$news); 
		$this->smarty->assign('contentType','news'); 
		$this->pageDisplay('content');
	}		
	public function addNewsSuccess($data) {
		$pagesDB = new pagesDB();
		$data = array_merge($data,array('parentId'=>$this->request->getVariable('id'),'type' => pagesDB::TYPE_NEWS));
		$pagesDB->insert($data);
		$news = $pagesDB->fetchRow("parentId = {$this->request->getVariable('id')}",'updateTime DESC'); 
		
		image::deleteImageByBucket('main-'.$news->id);
		image::saveIncomingImages('main-'.$news->id);
		
		router::reload();
	}	
	public function editNewsSuccess($data) {
		$pagesDB = new pagesDB();
		$page = $pagesDB->updatePage($data,"id={$this->request->getVariable('id')}");		
		
		if ($_FILES['image']['error']==0) {
			image::deleteImageByBucket('main-'.$this->request->getVariable('id'));
		}		
		image::saveIncomingImages('main-'.$this->request->getVariable('id'));
		
		router::reload();
	}		
	public function editConfig() {
		parent::editConfig('#tab4');
		$this->pageDisplay('content');
	}
		
}
?>
