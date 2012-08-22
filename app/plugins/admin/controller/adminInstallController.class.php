<?php /*windu.org admin controller*/
Class adminInstallController extends htmlController
{	
	private $extensionsRequired = array('curl','pdo_sqlite');
	function smartyGo()
	{
		parent::smartyGo();
		$this->smarty->template_dir = array(__SITE_PATH . '/app/plugins/admin/templates/');
	}
	public function __construct($request){
		if (config::get('install')!=0){
			exit;
		}
		lang::set('admin');
		parent::__construct($request);
	}
	public function index()
	{	
		$this->smarty->assign('title',lang::read('admin.install.controller.welcome'));	
		$this->pageDisplayHook('install.tpl','mainSimple.tpl');
	}
	
	public function checkServer() {
		foreach ($this->extensionsRequired as $extension) {
			if (!extension_loaded($extension)){
				$extensions[$extension] = 'Error';
			}else{
				$extensions[$extension] = 'OK';
			}
		}
		
		$chmodError = baseFile::checkCHMOD(__SITE_PATH);
		$chmodErrorCountFile = count($chmodError['file']);
		$chmodErrorCountDir = count($chmodError['dir']);
		
		$phpverpom = explode('.',phpversion());
		if ($phpverpom[0]>=5 and $phpverpom[1]>=2){$phpok = true;}else{$phpok = false;}

		$this->smarty->assign('fileError',$chmodErrorCountFile);	
		$this->smarty->assign('dirError',$chmodErrorCountDir);
		$this->smarty->assign('chmodError',$chmodError);
		$this->smarty->assign('extensions',$extensions);
		$this->smarty->assign('phpok',$phpok);
		
		$this->smarty->assign('checkserver',true);
		$this->smarty->assign('load','30');		
		$this->smarty->assign('title',lang::read('admin.install.controller.testing'));	
		$this->pageDisplayHook('install.tpl','mainSimple.tpl');		
	}

	public function setAdministrator() {
		$usersDB = new usersDB();
		
		$form = new form('adduser','setAdministratorSuccess',$_POST,'POST',null,null,lang::read('admin.install.controller.login'));
		$form->add('email', 'input-text',null,null,array("tooltip" => lang::read('admin.login.controller.autogener'),"class" => "input-medium","placeholder" => lang::read('admin.login.controller.username')));
		$form->addRule('email', 'required', null, lang::read('admin.users.controller.giveemail'));	
		$form->addRule('email', 'email', null, lang::read('admin.users.controller.givecorrectemail'));	
		$form->addRule('email', 'unique', array('table'=>$usersDB), lang::read('admin.users.controller.emailtaken'));

		$form->add('password', 'input-password',null,null,array("tooltip" => lang::read('admin.users.controller.autogener'),"class" => "input-medium","placeholder" => lang::read('admin.users.controller.password')));
		$form->addRule('password', 'string', array(6,50),lang::read('admin.users.controller.toshortpass'));	
		$form->addRule('password', 'same','passwordCompare',lang::read('admin.users.controller.diffpasswords'));
		$form->add('passwordCompare', 'input-password',null,null,array("class" => "input-medium","placeholder" => lang::read('admin.users.controller.repeatpassword')));
		
		$form->addButton('adduser',lang::read('admin.install.controller.next'),'btn btn-primary btn-large');
		$form->setHandler($this);
		$form->handle();
		 
		$this->smarty->assign('form',$form);	
		$this->smarty->assign('load','70');	
		$this->smarty->assign('title',lang::read('admin.install.controller.setadmin'));	
		$this->pageDisplayHook('install.tpl','mainSimple.tpl');
		
		$this->smarty->assign('userSystem',$userSystemForm);			
		
	}	
	public function setAdministratorSuccess($data) {
		unset($data['passwordCompare']);
		$data['type'] = 9;
		$usersDB = new usersDB();
		$user = $usersDB->add($data);
		$this->smarty->assign('data',$data);	
		mail::send($data['email'], lang::read('admin.users.controller.youruserdata'), $this->smarty->fetch('mail/mailRegisterUser.tpl'));
		router::redirect('admin-install-action',array("action" => "finish"));
	}	
	public function finish() {
		$configDB = new configDB();
		config::set('install', 1);
			
		$this->smarty->assign('load','100');	
		$this->smarty->assign('title',lang::read('admin.install.controller.installend'));	
		$this->smarty->assign('finish',true);	
		$this->pageDisplayHook('install.tpl','mainSimple.tpl');
	}
}
?>
