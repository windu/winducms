<?php /*windu.org html controller*/
Class htmlController extends controller{
	public function smartyGo()
	{
		require_once( __SITE_PATH . '/app/plugins/html/smarty/SmartyBC.class.php'); 
		
		$this->smarty = new SmartyBC();
		$this->smarty->template_dir = __SITE_PATH . '/app/plugins/themes/'.config::get('template').'/';
		$this->smarty->compile_dir  = __SITE_PATH . '/cache/templates_c/';
		$this->smarty->cache_dir    = __SITE_PATH . '/cache/cache/';
		$this->smarty->plugins_dir  = array(__SITE_PATH . '/app/plugins/html/smarty/plugins/',
											__SITE_PATH . '/app/plugins/html/smartyPlugins/',
											__SITE_PATH . '/data/functions/');

		$this->smarty->assign('HOME',HOME);
	}	
	public function __construct(request $request, $plugins = array())
	{
		parent::__construct($request);
		
		$request->setVariable('CSS', resourceManager::loadCSS($plugins));
		$request->setVariable('JS', resourceManager::loadJS($plugins));		

		$this->smartyGo();
		$this->smarty->assign('REQUEST',$request);
	}
	public function pageDisplay($tpl)
	{
		$this->smarty->display($tpl);
	}	
	public function pageDisplayHook($tpl,$mainTpl,$hook = 'page') {
		$this->smarty->assign($hook,$tpl);
		$this->smarty->display($mainTpl);
	}	
}
?>
