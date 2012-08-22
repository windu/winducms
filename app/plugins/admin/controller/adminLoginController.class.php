<?php /*windu.org admin controller*/
Class adminLoginController extends htmlController
{	
	function smartyGo()
	{
		parent::smartyGo();
		lang::set('admin');
		$this->smarty->template_dir = array(__SITE_PATH . '/app/plugins/admin/templates/');
	}
	public function __construct($request){
		if (config::get('install')==0){
			router::redirect('admin-install');
		}
		parent::__construct($request);
	}
	public function index()
	{	
		$usersDB = new usersDB();
		if($usersDB->authCheck('login')){
			router::redirect('admin');
			exit;
		}				
		
		$form = new form('login','loginSuccess',$_POST,'POST',null,null,lang::read('admin.login.controller.login'));
		$form->add('user', 'input-text',null,null,array("tooltip" => lang::read('admin.login.controller.autogener'),"class" => "input-medium","placeholder" => lang::read('admin.login.controller.username')));
		$form->addRule('user', 'required', null, lang::read('admin.login.controller.addusername'));
		
		$form->add('password', 'input-password',null,null,array("tooltip" => lang::read('admin.login.controller.autogener'),"class" => "input-medium","placeholder" => lang::read('admin.login.controller.password')));
		$form->addRule('password', 'required', null, lang::read('admin.login.controller.addpassword'));	

		$form->add('remember', 'input-checkbox',lang::read('admin.login.controller.rememberme'),true,array("chacked" => true,"placeholder" => lang::read('admin.login.controller.password')));
		
		$form->addButton('login',lang::read('admin.login.controller.login'),'btn btn-primary btn-large');
		$form->setHandler($this);
		$form->handle();
		 
		$this->smarty->assign('form',$form);	
		$this->pageDisplayHook('login.tpl','mainSimple.tpl');
	}

	public function loginSuccess($data) {
		$sessionDB = new sessionDB();
		$usersDB = new usersDB();
		
		//delete old entries
		$sessionDB->clean(generator::sqlDatetime());
		$data['user'] = generator::sqlInjesctionStringSecure($data['user']);
		
		if($usersDB->checkUserLogin($data['user'],md5($data['password']))){
			if ($data['remember']) {
				$expire = 259200; //3 days
			}else{
				$expire = 0; //1 hours
			}
			$usersDB->login($data['user'], $data['password'],$expire);
			log::write($data['user'],logDB::BUCKET_LOGIN_SUCCESS);
			router::redirect('admin');
		}
		$usersDB->logout();
		log::write($data['user'],logDB::BUCKET_LOGIN_ERROR);
		router::redirect('admin-login');
	}
	public function logout() {
		$usersDB = new usersDB();
		$usersDB->logout();
		router::redirect('admin-login');
	}
}
?>
