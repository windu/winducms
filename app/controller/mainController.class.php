<?php

Class mainController extends htmlController
{	
	function smartyGo()
	{
		parent::smartyGo();
		$this->smarty->template_dir = __SITE_PATH . '/app/templates/';
		$this->smarty->assign('HOME',HOME);
	}	

	public function pageDisplay($tpl)
	{
		$this->smarty->display('index.tpl');		
	}

	public function index(){}
}
?>
