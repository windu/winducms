<?php /*windu.org admin controller*/
Class adminToolsController Extends adminMainConfigController{
	public function __construct($request){
		parent::__construct($request);
		$configDB = new configDB();
		$config = $configDB->getByGroup(configDB::CONFIG_BUCKET_TOOLS);	
		$this->smarty->assign('configList',$config);	
	
		
	}
	public function index()
	{			
		$this->pageDisplay('tools');
	}

	
	
	public function addMailingTemplate() {
		$form = new form('add','addMailingTemplateSuccess',$_POST,'POST','form-horizontal','#tab2');
		$form->add('name', 'input-text',lang::read('admin.content.controller.elementname'));
		$form->addRule('name', 'required', null,lang::read('admin.content.controller.giveelementname'));
		
		$form->add('content', 'textareaCKEditor','',null,array('editorType'=>'basic'));

		$form->setHandler($this);
		$form->handle();		
		
		$this->smarty->assign('form',$form);
		$this->smarty->assign('Dodaj szablon mailingu',$title);
		
		$this->pageDisplay('tools');
	}	
	public function addMailingTemplateSuccess($data) {
		$mailingTemplatesDB = new mailingtemplatesDB(); 
		$mailingTemplatesDB->add($data);
		router::reload();
	}
	
	public function editMailingTemplate() {
		$mailingTemplatesDB = new mailingtemplatesDB(); 
		$template = $mailingTemplatesDB->fetchRow("id={$this->request->getVariable('id')}");
		
		$form = new form('add','editMailingTemplateSuccess',$_POST,'POST','form-horizontal','#tab2');
		$form->add('name', 'input-text',lang::read('admin.content.controller.elementname'),$template->name);
		$form->addRule('name', 'required', null,lang::read('admin.content.controller.giveelementname'));
		
		$form->add('content', 'textareaCKEditor','',$template->name,array('editorType'=>'basic'));

		$form->setHandler($this);
		$form->handle();		
		
		$this->smarty->assign('form',$form);
		$this->smarty->assign(lang::read('admin.tools.controller.editmailing'),$title);
	
		$this->pageDisplay('tools');
	}	
	public function editMailingTemplateSuccess($data) {
		$mailingTemplatesDB = new mailingtemplatesDB(); 
		$mailingTemplatesDB->updateRow($data, "id={$this->request->getVariable('id')}");
		router::reload();
	}

	
	
	
	public function addMailingContact() {
		$form = new form('add','addMailingContactSuccess',$_POST,'POST','form-horizontal','#tab2');
		$form->add('name', 'input-text',lang::read('admin.content.controller.elementname'));
		$form->addRule('name', 'required', null,lang::read('admin.content.controller.giveelementname'));
		
		$form->add('email', 'input-text',lang::read('admin.users.controller.email'),null,array());
		$form->addRule('email', 'required', null, lang::read('admin.users.controller.giveemail'));	
		$form->addRule('email', 'email', null, lang::read('admin.users.controller.givecorrectemail'));	
		$form->addRule('email', 'unique', array('table'=>$usersDB), lang::read('admin.users.controller.emailtaken'));

		$form->setHandler($this);
		$form->handle();		
		
		$this->smarty->assign('form',$form);
		$this->smarty->assign(lang::read('admin.tools.controller.addcontact'),$title);
		
		$this->pageDisplay('tools');
	}	
	public function addMailingContactSuccess($data) {
		$contactDB = new contactDB(); 
		$contactDB->add($data);
		router::reload();
	}	

	public function editMailingContact() {
		$contactDB = new contactDB(); 
		$contact = $contactDB->fetchRow("id={$this->request->getVariable('id')}");
		
		$form = new form('add','addMailingContactSuccess',$_POST,'POST','form-horizontal','#tab2');
		$form->add('name', 'input-text',lang::read('admin.content.controller.elementname'),$contact->name);
		$form->addRule('name', 'required', null,lang::read('admin.content.controller.giveelementname'));
		
		$form->add('email', 'input-text',lang::read('admin.users.controller.email'),$contact->email,array());
		$form->addRule('email', 'required', null, lang::read('admin.users.controller.giveemail'));	
		$form->addRule('email', 'email', null, lang::read('admin.users.controller.givecorrectemail'));	
		$form->addRule('email', 'unique', array('table'=>$usersDB), lang::read('admin.users.controller.emailtaken'));

		$form->setHandler($this);
		$form->handle();		
		
		$this->smarty->assign('form',$form);
		$this->smarty->assign(lang::read('admin.tools.controller.editcontact'),$title);
		
		$this->pageDisplay('tools');
	}	
	public function editMailingContactSuccess($data) {
		$contactDB = new contactDB(); 
		$contactDB->updateRow($data,"id={$this->request->getVariable('id')}");
		router::reload();
	}	
	
	
	
	
	public function addMailing() {
		$this->pageDisplay('tools');
	}	
	public function addMailingSuccess() {
		$mailingsDB = new mailingsDB(); 
		$mailingsDB->add($data);
		router::reload();
	}	
}
?>
