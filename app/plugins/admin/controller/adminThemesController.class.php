<?php /*windu.org admin controller*/
Class adminThemesController Extends adminMainConfigController{

	public function __construct(request $request)
	{
		parent::__construct($request);
		
		$configDB = new configDB();
		$config = $configDB->getByGroup(configDB::CONFIG_BUCKET_THEMES);	
		$this->smarty->assign('configList',$config);
		
		$this->smarty->assign('themes',baseFile::getFilesList(__SITE_PATH . '/data/themes/',null,true));
		$this->smarty->assign('widgets',baseFile::getFilesList(WIDGET_PATH,null,true));
		
		//add theme form
		$formAddTheme = new form('addTheme','addThemeSuccess',$_POST,'POST','form-horizontal','#tab1');
		$formAddTheme->add('name', 'input-text',lang::read('admin.themes.controller.templatename'));
		$formAddTheme->addRule('name', 'required', null, lang::read('admin.themes.controller.addelementname'));
		
		$formAddTheme->addButton('submit',lang::read('form.button.title.add'));
		$formAddTheme->setHandler($this);
		$formAddTheme->handle();
		 
		$this->smarty->assign('formTheme',$formAddTheme);	

		//add widget form
		$formAddWidget = new form('addWidget','addWidgetSuccess',$_POST,'POST','form-horizontal','#tab3');
		$formAddWidget->add('name', 'input-text',lang::read('admin.themes.controller.addvalue'));
		$formAddWidget->addRule('name', 'required', null, lang::read('admin.themes.controller.addelementname'));
		
		$formAddWidget->addButton('submit',lang::read('form.button.title.add'));	
		
		$formAddWidget->setHandler($this);
		$formAddWidget->handle();
		 
		$this->smarty->assign('formWidget',$formAddWidget);			
	}	
	public function index()
	{			
		$this->pageDisplay('themes');
	}
	public function addThemeSuccess($data) {
		themesDB::create($data['name']);
		router::reload();
	}	
	public function addWidgetSuccess($data) {
		widgetsDB::create($data['name']);
		router::reload();
	}	
	public function add() {		
		if($this->request->getVariable('tpl')=='img'){
			$form = new form('add','addImgSuccess',$_POST,'POST','form-horizontal','#tab1');
			$form->add('image', 'input-file',lang::read('admin.themes.controller.image'),null,array("class" => "span8","tooltip" => lang::read('admin.themes.controller.imagedescription')));	
			$form->addRule('image', 'fileType', array('jpg','png','gif','jpeg'), lang::read('admin.content.controller.wrongfiletype'));
			$form->addRule('image', 'fileSize', array(0,2000000), lang::read('admin.content.controller.filetolarge'));
		}elseif($this->request->getVariable('tpl')=='css'){
			$form = new form('add','addCssSuccess',$_POST,'POST','form-horizontal','#tab1');
			$form->add('css', 'input-file',lang::read('admin.themes.controller.css'),null,array("class" => "span8","tooltip" => lang::read('admin.themes.controller.cssdescription')));	
			$form->addRule('css', 'fileType', array('css'), lang::read('admin.content.controller.wrongfiletype'));
		}elseif($this->request->getVariable('tpl')=='js'){
			$form = new form('add','addJsSuccess',$_POST,'POST','form-horizontal','#tab1');
			$form->add('js', 'input-file',lang::read('admin.themes.controller.js'),null,array("class" => "span8","tooltip" => lang::read('admin.themes.controller.jsdescription')));	
			$form->addRule('js', 'fileType', array('js'), lang::read('admin.content.controller.wrongfiletype'));	
		}else{
			$form = new form('add','addSuccess',$_POST,'POST','form-horizontal','#tab1');
			$form->add('name', 'input-text',lang::read('admin.content.controller.tplfilename'));
			$form->addRule('name', 'required', null, lang::read('admin.content.controller.addelementname'));
		}
		
		$form->addButton('submit',lang::read('form.button.title.add'));	
		$form->addButton('cancel',lang::read('form.button.title.cancel'),'btn btn-margin-left',HOME.'admin/themes/show/'.$this->request->getVariable('theme').'/');	
		$form->setHandler($this);
		$form->handle();

		 
		$this->smarty->assign('formTheme',$form);	
		$this->pageDisplay('themes');
	}
	public function addWidget() {		
		if($this->request->getVariable('tpl')=='img'){
			$form = new form('add','addWidgetImgSuccess',$_POST,'POST','form-horizontal','#tab3');
			$form->add('image', 'input-file',lang::read('admin.themes.controller.image'),null,array("class" => "span8","tooltip" => lang::read('admin.themes.controller.imagedescription')));	
			$form->addRule('image', 'fileType', array('jpg','png','gif','jpeg'), lang::read('admin.content.controller.wrongfiletype'));
			$form->addRule('image', 'fileSize', array(0,2000000), lang::read('admin.content.controller.filetolarge'));
		}elseif($this->request->getVariable('tpl')=='css'){
			$form = new form('add','addWidgetCssSuccess',$_POST,'POST','form-horizontal','#tab3');
			$form->add('css', 'input-file',lang::read('admin.themes.controller.css'),null,array("class" => "span8","tooltip" => lang::read('admin.themes.controller.cssdescription')));	
			$form->addRule('css', 'fileType', array('css'), lang::read('admin.content.controller.wrongfiletype'));
		}elseif($this->request->getVariable('tpl')=='doc'){
			$form = new form('add','addWidgetTxtSuccess',$_POST,'POST','form-horizontal','#tab3');
			$form->add('txt', 'input-file',lang::read('admin.themes.controller.doc'),null,array("class" => "span8","tooltip" => lang::read('admin.themes.controller.docdescription')));	
			$form->addRule('txt', 'fileType', array('txt'), lang::read('admin.content.controller.wrongfiletype'));			
		}elseif($this->request->getVariable('tpl')=='js'){
			$form = new form('add','addWidgetJsSuccess',$_POST,'POST','form-horizontal','#tab3');
			$form->add('js', 'input-file',lang::read('admin.themes.controller.js'),null,array("class" => "span8","tooltip" => lang::read('admin.themes.controller.jsdescription')));	
			$form->addRule('js', 'fileType', array('js'), lang::read('admin.content.controller.wrongfiletype'));	
		}
		
		$form->addButton('submit',lang::read('form.button.title.add'));	
		$form->addButton('cancel',lang::read('form.button.title.cancel'),'btn btn-margin-left',HOME.'admin/themes/show/'.$this->request->getVariable('theme').'/#tab3');	
		
		$form->setHandler($this);
		$form->handle();

		 
		$this->smarty->assign('formWidget',$form);	
		$this->pageDisplay('themes');
	}
	public function addImgSuccess($data) {
		baseFile::uploadTo(TEMPLATES_PATH.$this->request->getVariable('theme').'/img/', $_FILES['image']);
		router::reload();
	}	
	public function addCssSuccess($data) {
		baseFile::uploadTo(TEMPLATES_PATH.$this->request->getVariable('theme').'/css/', $_FILES['css']);
		router::reload();
	}
	public function addJsSuccess($data) {
		baseFile::uploadTo(TEMPLATES_PATH.$this->request->getVariable('theme').'/js/', $_FILES['js']);
		router::reload();
	}
	public function addWidgetImgSuccess($data) {
		baseFile::uploadTo(WIDGET_PATH.$this->request->getVariable('theme').'/img/', $_FILES['image']);
		router::reload();
	}	
	public function addWidgetCssSuccess($data) {
		baseFile::uploadTo(WIDGET_PATH.$this->request->getVariable('theme').'/css/', $_FILES['css']);
		router::reload();
	}
	public function addWidgetTxtSuccess($data) {
		baseFile::uploadTo(WIDGET_PATH.$this->request->getVariable('theme').'/doc/', $_FILES['txt']);
		router::reload();
	}	
	public function addWidgetJsSuccess($data) {
		baseFile::uploadTo(WIDGET_PATH.$this->request->getVariable('theme').'/js/', $_FILES['js']);
		router::reload();
	}			
	public function addSuccess($data) {
		$themesDB = new themesDB($this->request->getVariable('theme').'/'.$this->request->getVariable('tpl'));
		$themesDB->add($data['name']);
		router::reload();
	}
		
	public function edit() {
		$themesDB = new themesDB($this->request->getVariable('theme'));
		$tpl = $themesDB->read($this->request->getVariable('tpldir').'/'.$this->request->getVariable('tpl'));

		$form = new form('edit','editSuccess',$_POST,'POST','no-margin','?m=admin.message.save#tab1');
		$form->add('content', 'textareaCodeMirrorEditor',null,$tpl);
		//$form->add('content', 'textarea','Treść',$tpl);
		
		$form->addButton('submit',lang::read('form.button.title.save'));	
		$form->addButton('cancel',lang::read('form.button.title.cancel'),'btn btn-margin-left',HOME.'admin/themes/show/'.$this->request->getVariable('theme').'/');	
		
		$form->setHandler($this); 
		$form->handle();
		 
		$this->smarty->assign('formTheme',$form);		
		$this->pageDisplay('themes');
	}	
	public function editSuccess($data) {
		$themesDB = new themesDB($this->request->getVariable('theme'));
		$themesDB->save($this->request->getVariable('tpldir').'/'.$this->request->getVariable('tpl'),$data['content']);
	}	
	public function editWidget() {
		$themesDB = new widgetsDB($this->request->getVariable('theme'));
		
		$tpl = $themesDB->read($this->request->getVariable('tpldir').'/'.$this->request->getVariable('tpl'));

		$form = new form('editWidget','editWidgetSuccess',$_POST,'POST','no-margin','?m=admin.message.save#tab3');
		$form->add('content', 'textareaCodeMirrorEditor',null,$tpl);
		//$form->add('content', 'textarea','Treść',$tpl);
		
		$form->addButton('submit',lang::read('form.button.title.save'));
		$form->addButton('cancel',lang::read('form.button.title.cancel'),'btn btn-margin-left',HOME.'admin/themes/show/'.$this->request->getVariable('theme').'/#tab3');	
		$form->setHandler($this);
		$form->handle();
		 
		$this->smarty->assign('formWidget',$form);		
		$this->pageDisplay('themes');
	}	
	public function editWidgetSuccess($data) {
		$widgetsDB = new widgetsDB($this->request->getVariable('theme'));
		$widgetsDB->save($this->request->getVariable('tpldir').'/'.$this->request->getVariable('tpl'),$data['content']);
		router::reload();
	}		
	public function editConfig() {
		parent::editConfig('#tab2');
		$this->pageDisplay('themes');
	}	

		
	public function editTheme() {
		$form = new form('editTheme','editThemeSuccess',$_POST,'POST','form-horizontal','?m=admin.message.save#tab1');
		$form->add('name', 'input-text',lang::read('admin.themes.controller.templatename'),$this->request->getVariable('theme'));
		$form->addRule('name', 'required', null, lang::read('admin.themes.controller.addelementname'));
		
		$form->addButton('submit',lang::read('form.button.title.save'));	
		$form->addButton('cancel',lang::read('form.button.title.cancel'),'btn btn-margin-left',HOME.'admin/themes/show/'.$this->request->getVariable('theme').'/');	
		
		$form->setHandler($this); 
		$form->handle();
		 
		$this->smarty->assign('formTheme',$form);		
		$this->pageDisplay('themes');
	}
	public function editThemeSuccess($data) {
		$themesDB = new themesDB($this->request->getVariable('theme'));
		$themesDB->rename($data['name']);
		router::reload();
	}				
}
?>
