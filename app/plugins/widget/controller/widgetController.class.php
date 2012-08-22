<?php
Class widgetController extends htmlController
{	
	public function smartyGo()
	{
		parent::smartyGo();
		$this->smarty->template_dir = WIDGET_PATH.$this->request->getVariable('name').'/';
	}	
	public function index() {
		$data = widgetLoader::loadWidgetDataByName($this->request->getVariable('name'), $this->request);
		$this->smarty->assign('data',$data);
		$this->pageDisplay($this->request->getVariable('name').'View.tpl');
	}
}
?>
