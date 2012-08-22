<?php /*windu.org admin controller*/
Class adminMainController extends adminAuthController
{	
	public function __construct(request $request, $plugins = array())
	{
		//Checking system instalation
		if (config::get('install')==0){
			router::redirect('admin-install');
		}		
		parent::__construct($request);
	}	
	function smartyGo()
	{
		parent::smartyGo();
		$this->smarty->template_dir = array(__SITE_PATH . '/app/plugins/admin/templates/',
											__SITE_PATH . '/app/plugins/admin/templates/mail/');
		$this->smarty->assign('usersDB',$this->usersDB);									
		$this->smarty->assign('loggedIn',$this->user);									
	}	
	public function pageDisplay($tpl)
	{
		$this->smarty->assign('page_content',$tpl.'.tpl');
		$this->smarty->display('main.tpl');
	}		
	public function index(){}
}
?>
