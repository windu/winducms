<?php /*windu.org admin controller*/
Class adminConfigController Extends adminMainController{
	public function __construct($request){
		parent::__construct($request);
	
		$configDB = new configDB();
		$buckets = $configDB->fetchGroup('bucket','bucket!=99');
		//debugger::dprint($buckets); exit;
		
		foreach ($buckets as $key => $value) {
			$form = null;
			$form = new form("form{$key}",'addSuccess',$_POST,'POST','form-horizontal',"#tab{$key}");
			$form->add('name', 'input-text',lang::read('admin.config.controller.name'));
			$form->addRule('name', 'required', null, lang::read('admin.config.controller.givename'));
			$form->add('value', 'input-text',lang::read('admin.config.controller.value'));
			$form->addRule('value', 'required', null, lang::read('admin.config.controller.addvalue'));		
			$form->add('shortDescription', 'input-text',lang::read('admin.config.controller.shortdescription'));
			$form->addRule('shortDescription', 'required', null, lang::read('admin.config.controller.adddescription'));	
			$form->add('description', 'textarea',lang::read('admin.config.controller.description'));
			$form->addRule('description', 'required', null, lang::read('admin.config.controller.adddescription'));				

			$form->add('bucket', 'input-hidden',null,$key);
			
			$form->addButton('submit',lang::read('form.button.title.add'));	
			$form->setHandler($this);
			$form->handle();
			
			$this->formArr[$key] = $form;
		}
		$this->smarty->assign("forms",$this->formArr);	
		$this->smarty->assign('buckets',$buckets);
		$this->smarty->assign('configDB',$configDB);
	}
	public function addSuccess($data) {
		$configDB = new configDB();
		$configDB->add($data);
		router::reload();
	}
	public function edit() {
		$configDB = new configDB();
		$conf = $configDB->fetchRow("id = {$this->request->getVariable('id')}");
		$bucket = $conf->bucket;

		$form = new form("formEdit{$bucket}",'editSuccess',$_POST,'POST','form-horizontal',"#tab{$bucket}");
		if($this->usersDB->isDeveloper()){
			$form->add('name', 'input-text',lang::read('admin.config.controller.name'),$conf->name);
			$form->addRule('name', 'required', null, lang::read('admin.config.controller.givename'));			
		}
		$form->add('value', 'input-text',lang::read('admin.config.controller.value'),$conf->value);
		$form->addRule('value', 'required', null, lang::read('admin.config.controller.addvalue'));
		if($this->usersDB->isDeveloper()){	
			$form->add('shortDescription', 'input-text',lang::read('admin.config.controller.shortdescription'),$conf->shortDescription);
			$form->addRule('shortDescription', 'required', null, lang::read('admin.config.controller.adddescription'));				
			$form->add('description', 'textarea', lang::read('admin.config.controller.description'),$conf->description);
			$form->addRule('description', 'required', null, lang::read('admin.config.controller.adddescription'));	
		}
		$form->add('bucket', 'input-hidden',null,$bucket);
		$form->addButton('submit',lang::read('form.button.title.save'));	
		$form->addButton('cancel',lang::read('form.button.title.cancel'),'btn btn-margin-left',HOME.'admin/config/#tab'.$bucket);
		$form->setHandler($this);
		$form->handle();

		$this->formArr[$bucket] = $form;
		$this->smarty->assign("forms",$this->formArr);
		$this->pageDisplay('config');
	}
	public function editSuccess($data) {
		$configDB = new configDB();
		$configDB->updateRow($data,"id = {$this->request->getVariable('id')}");
		router::reload();
	}	
	public function index()
	{			
		$this->pageDisplay('config');
	}
}
?>
