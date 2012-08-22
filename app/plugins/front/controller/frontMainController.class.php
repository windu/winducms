<?php /*windu.org front controller*/

Class frontMainController extends htmlController
{	
	public function __construct(request $request)
	{
		//Checking system instalation
		if (config::get('install')==0){
			router::redirect('admin-install');
		}		
		$plugins = explode(',', FRONT_PLUGINS);
		lang::set('front');
		parent::__construct($request,$plugins);
	}
	function smartyGo()
	{
		parent::smartyGo();
		$template = config::get('template');
		$this->smarty->template_dir = array(__SITE_PATH . '/data/themes/'.$template.'/main/',
											__SITE_PATH . '/data/themes/'.$template.'/common/',
											__SITE_PATH . '/data/themes/'.$template.'/custom/',
											__SITE_PATH . '/data/themes/'.$template.'/mail/',
											__SITE_PATH . '/data/themes/'.$template.'/views/');	
		$this->smarty->left_delimiter = "{{";
		$this->smarty->right_delimiter = "}}";
		$this->smarty->assign('TEMPLATE_HOME',HOME.'data/themes/'.$template);
		
	}	
	public function index(){}
}
?>
