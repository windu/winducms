<?php /*windu.org admin controller*/
Class adminUsersController Extends adminMainConfigController {
	public function __construct($request){
		parent::__construct($request);
		$userDB = new usersDB();
		$usersSystem = $userDB->getByBucket(usertypesDB::BUCKET_SYSTEM);
		$this->smarty->assign('usersSystem',$usersSystem);
		
		$usersPage = $userDB->getByBucket(usertypesDB::BUCKET_PAGE);
		$this->smarty->assign('usersPage',$usersPage);		
		
		$userTypesDB = new usertypesDB();
		$userTypes = $userTypesDB->fetchAll();
		$this->smarty->assign('userTypes',$userTypes);
		
		$configDB = new configDB();
		$config = $configDB->getByGroup(configDB::CONFIG_BUCKET_USERS);	
		$this->smarty->assign('configList',$config);
				
		$usersDB = new usersDB();
		$userTypesDB = new usertypesDB();
		$userTypesSystemArray = $userTypesDB->getByBucket(usertypesDB::BUCKET_SYSTEM,null,false,false,true);
		$userTypesPageArray = $userTypesDB->getByBucket(usertypesDB::BUCKET_PAGE,null,false,false,true);

		$userTypesArray = $userTypesDB->getArray();
		$this->smarty->assign('userTypesArray',$userTypesArray);			
		
		//////////////////////////////////////
		//user system form////////////////////	
		//////////////////////////////////////
		$userSystemForm = new form('addUserSystem','addUserSystemSuccess',$_POST,'POST','form-horizontal','#tab1');
		
		$userSystemForm->add('type', 'select',lang::read('admin.users.controller.usertype'),null,array('option' => $userTypesSystemArray,"tooltip" => lang::read('admin.users.controller.permits')));
		$userSystemForm->add('email', 'input-text',lang::read('admin.users.controller.email'),null,array());
		$userSystemForm->addRule('email', 'required', null, lang::read('admin.users.controller.giveemail'));	
		$userSystemForm->addRule('email', 'email', null, lang::read('admin.users.controller.givecorrectemail'));	
		$userSystemForm->addRule('email', 'unique', array('table'=>$usersDB), lang::read('admin.users.controller.emailtaken'));
		
		$userSystemForm->add('password', 'input-password',lang::read('admin.users.controller.password'),null,array("tooltip" => lang::read('admin.users.controller.autogener'),"class" => "input-medium"));
		//$userSystemForm->addRule('password', 'required', null, "Podaj hasło!");	
		$userSystemForm->addRule('password', 'string', array(6,50),lang::read('admin.users.controller.toshortpass'));	
		$userSystemForm->addRule('password', 'same','passwordCompare',lang::read('admin.users.controller.diffpasswords'));
		$userSystemForm->add('passwordCompare', 'input-password',lang::read('admin.users.controller.repeatpassword'),null,array("class" => "input-medium"));
		//$userSystemForm->addRule('passwordCompare', 'required', null, "Podaj powtórzone hasło!");	
		
		$userSystemForm->add('username', 'input-text',lang::read('admin.users.controller.username'),null,array("tooltip" => lang::read('admin.users.controller.shownname'),"placeholder" => lang::read('admin.users.controller.kowal'),"class" => "input-medium"));
		$userSystemForm->add('name', 'input-text',lang::read('admin.users.controller.name'),null,array("placeholder" => lang::read('admin.users.controller.jan'),"class" => "input-medium"));
		$userSystemForm->add('surname', 'input-text',lang::read('admin.users.controller.surname'),null,array("placeholder" => lang::read('admin.users.controller.kowalski'),"class" => "input-medium"));

		$userSystemForm->addButton('submit',lang::read('form.button.title.add'));
		
		$userSystemForm->setHandler($this);
		$userSystemForm->handle();
		
		$this->smarty->assign('userSystem',$userSystemForm);	
		
		//////////////////////////////////////
		//user page form//////////////////////
		//////////////////////////////////////
		$userPageForm = new form('addUserPage','addUserPageSuccess',$_POST,'POST','form-horizontal','#tab2');
		$userPageForm->add('type', 'select',lang::read('admin.users.controller.usertype'),null,array('option' => $userTypesPageArray,"tooltip" => lang::read('admin.users.controller.permits')));
		$userPageForm->add('email', 'input-text',lang::read('admin.users.controller.email'),null,array());
		$userPageForm->addRule('email', 'required', null, lang::read('admin.users.controller.giveemail'));	
		$userPageForm->addRule('email', 'email', null, lang::read('admin.users.controller.givecorrectmail'));	
		$userPageForm->addRule('email', 'unique', array('table'=>$usersDB), lang::read('admin.users.controller.emailtaken'));
		
		$userPageForm->add('password', 'input-password',lang::read('admin.users.controller.password'),null,array("tooltip" => lang::read('admin.users.controller.autogener'),"class" => "input-medium"));
		//$userPageForm->addRule('password', 'required', null, "Podaj hasło!");	
		$userPageForm->addRule('password', 'string', array(6,50),lang::read('admin.users.controller.toshortpass'));	
		$userPageForm->addRule('password', 'same','passwordCompare',lang::read('admin.users.controller.diffpasswords'));
		$userPageForm->add('passwordCompare', 'input-password',lang::read('admin.users.controller.repeatpassword'),null,array("class" => "input-medium"));
		//$userPageForm->addRule('passwordCompare', 'required', null, "Podaj powtórzone hasło!");	
		
		$userPageForm->add('username', 'input-text',lang::read('admin.users.controller.username'),null,array("tooltip" => lang::read('admin.users.controller.shownname'),"placeholder" => lang::read('admin.users.controller.kowal'),"class" => "input-medium"));
		$userPageForm->add('name', 'input-text',lang::read('admin.users.controller.name'),null,array("placeholder" => lang::read('admin.users.controller.jan'),"class" => "input-medium"));
		$userPageForm->add('surname', 'input-text',lang::read('admin.users.controller.surname'),null,array("placeholder" => lang::read('admin.users.controller.kowalski'),"class" => "input-medium"));
		
		$userPageForm->addButton('submit',lang::read('form.button.title.add'));	
		
		$userPageForm->setHandler($this);
		$userPageForm->handle();
		$this->smarty->assign('userPage',$userPageForm);	
				
		//////////////////////////////////////
		//user type form//////////////////////
		//////////////////////////////////////
		$userType = new form('addUserType','addUserTypeSuccess',$_POST,'POST','form-horizontal','#tab3');
		$userType->add('name', 'input-text',lang::read('admin.users.controller.nametype'));
		$userType->addRule('name', 'required', null, lang::read('admin.users.controller.addname'));
		
		$userType->add('bucket', 'select',lang::read('admin.users.controller.powersfor'),null,array('option' => $userTypesDB->bucket,"tooltip" => lang::read('admin.users.controller.powerssetting')));
		$userType->add('extends', 'select',lang::read('admin.users.controller.extension'),null,array('option' => $userTypesDB->getArray(),"tooltip" => lang::read('admin.users.controller.powersextension')));
		
		$userType->add('regexp', 'input-text',lang::read('admin.users.controller.expressionregular'),null,array("tooltip" => lang::read('admin.users.controller.addformula')));
		$userType->addRule('regexp', 'required', null, lang::read('admin.users.controller.addregularformula'));
		
		$userType->addButton('submit',lang::read('form.button.title.add'));		
		
		$userType->setHandler($this);
		$userType->handle();		
		$this->smarty->assign('userType',$userType);		

	}
	public function index()
	{		
		$this->pageDisplay('users');
	}
	public function addUserSystemSuccess($data) {
		unset($data['passwordCompare']);
		$usersDB = new usersDB();
		$user = $usersDB->add($data);
		
		$this->smarty->assign('data',$data);	
		mail::send($data['email'], lang::read('admin.users.controller.youruserdata'), $this->smarty->fetch('mail/mailRegisterUser.tpl'));
		router::reload();
	}	
	public function addUserPageSuccess($data) {
		unset($data['passwordCompare']);
		$usersDB = new usersDB();
		$user = $usersDB->add($data);
		mail::send($user['email'], lang::read('admin.users.controller.youruserdata'), $this->smarty->fetch('mail/mailRegisterUser.tpl'));
		router::reload();
	}	
	public function addUserTypeSuccess($data) {
		$userTypesDB = new usertypesDB();
		$userTypesDB->add($data);
		router::reload();
	}	
	public function editUserType() {
		//user type form//////////////////////
		
		$userTypesDB = new usertypesDB();
		$type = $userTypesDB->fetchRow("id={$this->request->getVariable('id')}");	
			
		$userType = new form('editUserType','editUserTypeSuccess',$_POST,'POST','form-horizontal','#tab3');
		$userType->add('name', 'input-text',lang::read('admin.users.controller.nametype'),$type->name);
		$userType->addRule('name', 'required', null, lang::read('admin.users.controller.addname'));
		
		$userType->add('bucket', 'select',lang::read('admin.users.controller.powersfor'),$type->bucket,array('option' => $userTypesDB->bucket,"tooltip" => lang::read('admin.users.controller.powerssetting')));
		$userType->add('extends', 'select',lang::read('admin.users.controller.extension'),$type->extends,array('option' => $userTypesDB->getArray(),"tooltip" => lang::read('admin.users.controller.powerextension')));
		
		$userType->add('regexp', 'input-text',lang::read('admin.users.controller.expressionregular'),$type->regexp,array("tooltip" => lang::read('admin.users.controller.addformula')));
		$userType->addRule('regexp', 'required', null, lang::read('admin.users.controller.addregularformula'));
		
		$userType->addButton('submit',lang::read('form.button.title.save'));
		$userType->addButton('cancel',lang::read('form.button.title.cancel'),'btn btn-margin-left',HOME.'admin/users/#tab3');
				
		$userType->setHandler($this);
		$userType->handle();			
			
		$this->smarty->assign('userType',$userType);	
		$this->pageDisplay('users');
	}
	public function editUserTypeSuccess($data) {
		$userTypesDB = new usertypesDB();
		$userTypesDB->updateRow($data,"id={$this->request->getVariable('id')}");
		router::reload();
	}		
	public function editUserSystem() {
		$usersDB = new usersDB();
		$user = $usersDB->fetchRow("id={$this->request->getVariable('id')}");		
		
		$userTypesDB = new usertypesDB();
		$userTypesSystemArray = $userTypesDB->getByBucket(usertypesDB::BUCKET_SYSTEM,null,false,false,true);	
		
		$userSystemForm = new form('editUserSystem','editUserSuccess',$_POST,'POST','form-horizontal','#tab1');
		
		$userSystemForm->add('type', 'select',lang::read('admin.users.controller.usertype'),$user->type,array('option' => $userTypesSystemArray,"tooltip" => lang::read('admin.users.controller.permits')));
		
		$userSystemForm->add('password', 'input-password',lang::read('admin.users.controller.password'),null,array("tooltip" => lang::read('admin.users.controller.empty'),"class" => "input-medium"));
		//$userSystemForm->addRule('password', 'required', null, "Podaj hasło!");	
		$userSystemForm->addRule('password', 'string', array(6,50),lang::read('admin.users.controller.toshortpass'));	
		$userSystemForm->addRule('password', 'same','passwordCompare',lang::read('admin.users.controller.diffpasswords'));
		$userSystemForm->add('passwordCompare', 'input-password',lang::read('admin.users.controller.repeatpassword'),null,array("class" => "input-medium"));
		//$userSystemForm->addRule('passwordCompare', 'required', null, "Podaj powtórzone hasło!");	
		
		$userSystemForm->add('username', 'input-text', lang::read('admin.users.controller.username'),$user->username,array("tooltip" => lang::read('admin.users.controller.shownname'),"placeholder" => lang::read('admin.users.controller.kowal'),"class" => "input-medium"));
		$userSystemForm->add('name', 'input-text',lang::read('admin.users.controller.name'),$user->name,array("placeholder" => lang::read('admin.users.controller.jan'),"class" => "input-medium"));
		$userSystemForm->add('surname', 'input-text',lang::read('admin.users.controller.surname'),$user->surname,array("placeholder" => lang::read('admin.users.controller.kowalski'),"class" => "input-medium"));

		$userSystemForm->addButton('submit',lang::read('form.button.title.save'));
		$userSystemForm->addButton('cancel',lang::read('form.button.title.cancel'),'btn btn-margin-left',HOME.'admin/users/#tab1');
		
		$userSystemForm->setHandler($this);
		$userSystemForm->handle();
		$this->smarty->assign('userSystem',$userSystemForm);	
		$this->pageDisplay('users');
	}	

		
	public function editUserPage() {
		$usersDB = new usersDB();
		$user = $usersDB->fetchRow("id={$this->request->getVariable('id')}");				

		$userTypesDB = new usertypesDB();
		$userTypesPageArray = $userTypesDB->getByBucket(usertypesDB::BUCKET_PAGE,null,false,false,true);			
		
		$userPageForm = new form('addUserPage','editUserSuccess',$_POST,'POST','form-horizontal','#tab2');
		$userPageForm->add('type', 'select',lang::read('admin.users.controller.usertype'),$user->type,array('option' => $userTypesPageArray,"tooltip" => lang::read('admin.users.controller.permits')));
		
		$userPageForm->add('password', 'input-password',lang::read('admin.users.controller.password'),null,array("tooltip" => lang::read('admin.users.controller.autogener'),"class" => "input-medium"));
		//$userPageForm->addRule('password', 'required', null, "Podaj hasło!");	
		$userPageForm->addRule('password', 'string', array(6,50),lang::read('admin.users.controller.toshortpass'));	
		$userPageForm->addRule('password', 'same','passwordCompare',lang::read('admin.users.controller.diffpasswords'));
		$userPageForm->add('passwordCompare', 'input-password',lang::read('admin.users.controller.repeatpassword'),null,array("class" => "input-medium"));
		//$userPageForm->addRule('passwordCompare', 'required', null, "Podaj powtórzone hasło!");	
		
		$userPageForm->add('username', 'input-text',lang::read('admin.users.controller.username'),$user->username,array("tooltip" => lang::read('admin.users.controller.shownname'),"placeholder" => "Kowal","class" => "input-medium"));
		$userPageForm->add('name', 'input-text',lang::read('admin.users.controller.name'),$user->name,array("placeholder" => lang::read('admin.users.controller.jan'),"class" => "input-medium"));
		$userPageForm->add('surname', 'input-text',lang::read('admin.users.controller.surname'),$user->surname,array("placeholder" => lang::read('admin.users.controller.kowalski'),"class" => "input-medium"));

		$userPageForm->addButton('submit',lang::read('form.button.title.save'));
		$userPageForm->addButton('cancel',lang::read('form.button.title.cancel'),'btn btn-margin-left',HOME.'admin/users/#tab2');		
		
		$userPageForm->setHandler($this);
		$userPageForm->handle();
		$this->smarty->assign('userPage',$userPageForm);	
		$this->pageDisplay('users');
	}		
	public function editUserSuccess($data) {
		unset($data['passwordCompare']);
		if ($data['password']==null){
			unset($data['password']);
		}
		$usersDB = new usersDB();
		$usersDB->updateRow($data,"id={$this->request->getVariable('id')}");
		router::reload();
	}
	public function editConfig() {
		parent::editConfig('#tab4');
		$this->pageDisplay('users');
	}	

}
?>
