<?php /*windu.org admin controller*/
Class adminUsersDoController Extends adminAuthDoController{
	public function deleteSystemUser(){
		$usersDB = new usersDB();
		$usersDB->deleteUser($this->request->getVariable('id'));
		router::back($this->request,'tab1');
	}		
	public function deletePageUser(){
		$usersDB = new usersDB();
		$usersDB->deleteUser($this->request->getVariable('id'));
		router::back($this->request,'tab2');
	}		
	public function deleteUserType(){
		$usersTypeDB = new usertypesDB();
		$usersTypeDB->deleteUserType($this->request->getVariable('id'));
		router::back($this->request,'tab3');
	}	
}
?>
