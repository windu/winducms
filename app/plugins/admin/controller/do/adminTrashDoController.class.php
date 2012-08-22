<?php /*windu.org admin controller*/
Class adminTrashDoController Extends adminAuthDoController{
	
	public function delete(){
		$pagesDB = new pagesDB();
		$pagesDB->deleteTreeItems($this->request->getVariable('id'),true);
		router::back($this->request,'tab3');;
	}	
	public function restore(){
		$pagesDB = new pagesDB();
		$pagesDB->restoreTreeItems($this->request->getVariable('id'));
		router::back($this->request,'tab3');
	}			
	public function emptyTrash() {
		$pagesDB = new pagesDB();
		$pagesDB->deleteTrashItems();
		router::back($this->request,'tab3');
	}
}
?>
