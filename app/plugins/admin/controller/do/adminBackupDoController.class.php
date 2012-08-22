<?php /*windu.org admin controller*/
Class adminBackupDoController Extends adminAuthDoController{

	public function backup(){
		$backupBD = new backupDB();
		$backupBD->backupAll();
		router::back($this->request,'tab7');
	}	
	public function delete(){
		$backupDB = new backupDB();
		$backupDB->delete($this->request->getVariable('id'));
		router::back($this->request,'tab7');
	}	
	public function restore() {
		$backupDB = new backupDB();
		$backupDB->restoreAll();
		router::back($this->request,'tab7');
	}

	
}
?>
