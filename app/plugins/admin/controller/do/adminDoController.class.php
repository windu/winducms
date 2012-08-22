<?php /*windu.org admin controller*/
Class adminDoController Extends adminAuthDoController{
	
	public function toggleDeveloperMode(){
		$usersDB = new usersDB();
		$usersDB->toggleDeveloperMode();
		router::back($this->request);
	}	
	public function toogleCookie() {
		$cookie = cookie::readCookie($this->request->getVariable('id'));
		if($cookie != 1){
			cookie::setCookie($this->request->getVariable('id'),1);
		}else{
			cookie::setCookie($this->request->getVariable('id'),0);
		}
		
		router::back($this->request,$this->request->getVariable('anchor'));
	}
}
?>
