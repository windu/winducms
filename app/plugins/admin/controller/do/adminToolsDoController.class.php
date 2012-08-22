<?php /*windu.org admin controller*/
Class adminToolsDoController Extends adminAuthDoController{

	public function sendMailing(){
		$backupBD = new backupDB();
		$backupBD->backupAll();
		router::back($this->request,'tab2');
	}	
	public function showTab() {
		router::back($this->request,'tab'.$this->request->getVariable('id'));
	}
}
?>
