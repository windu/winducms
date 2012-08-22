<?php /*windu.org admin controller*/
Class adminMainConfigController extends adminMainController 
{	
	public function __construct(request $request, $plugins = array())
	{
		parent::__construct($request);
	}	
	public function editConfig($tab = '#tab4') {
		
		$configDB = new configDB();
		if($this->request->getVariable('id')!=null){
			$id = $this->request->getVariable('id');
		}elseif ($this->request->getVariable('theme')!=null){
			$id = $this->request->getVariable('theme');
		}
		$conf = $configDB->fetchRow("id = {$id}");
		$bucket = $conf->bucket;

		$form = new form("formEditConfig",'editConfigSuccess',$_POST,'POST','form-horizontal',$tab);

		$form->add('value', 'input-text',lang::read('admin.mainconfig.controller.value'),$conf->value);
		$form->addRule('value', 'required', null, lang::read('admin.mainconfig.controller.addvalue'));

		$form->add('bucket', 'input-hidden',null,$bucket);
		
		$form->addButton('submit',lang::read('form.button.title.save'));
		$form->setHandler($this);
		$form->handle();

		$this->smarty->assign("formConfig",$form);		
	}	
	public function editConfigSuccess($data) {
		$configDB = new configDB();
		if($this->request->getVariable('id')!=null){
			$id = $this->request->getVariable('id');
		}elseif ($this->request->getVariable('theme')!=null){
			$id = $this->request->getVariable('theme');
		}		
		$configDB->updateRow($data,"id = {$id}");
		router::reload();
	}
}
?>
