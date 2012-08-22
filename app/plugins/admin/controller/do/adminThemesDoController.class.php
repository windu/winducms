<?php /*windu.org admin controller*/
Class adminThemesDoController Extends adminAuthDoController{
	
	public function delete(){
		$themesDB = new themesDB($this->request->getVariable('theme').'/'.$this->request->getVariable('tpldir'));
		$themesDB->delete($this->request->getVariable('tpl'));
		router::back($this->request);
	}		
	public function delete_template() {
		$themesDB = new themesDB($this->request->getVariable('theme'));
		$themesDB->deleteTemplate();

		router::redirect('admin-themes',array(),false,'tab1');
	}
	public function delete_widget() {
		$widgetsDB = new widgetsDB($this->request->getVariable('theme'));
		$widgetsDB->deleteWidget();
		router::redirect('admin-themes',array(),false,'tab3');
	}
	public function deleteWidgetFile() {
		$path = WIDGET_PATH.$this->request->getVariable('theme').'/'.$this->request->getVariable('tpldir').'/'.$this->request->getVariable('tpl');
		baseFile::delete($path);
		router::redirect('admin-themes',array('action'=>'show','theme' => $this->request->getVariable('theme')),false,'tab3');
	}
	public function setTempleteActive() {
		config::set('template', $this->request->getVariable('theme'));
		router::back($this->request,'tab1');
	}
	public function duplicateTemplate() {
		baseFile::copyDir(TEMPLATES_PATH.$this->request->getVariable('theme').'/', TEMPLATES_PATH.$this->request->getVariable('theme').'-copy/');
		router::back($this->request,'tab1');
	}
}
?>