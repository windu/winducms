<?php /*windu.org admin controller*/
Class adminSystemDoController Extends adminAuthDoController{
	public function clean(){
		$logDB = new logDB();
		$logDB->clean(strtotime('now - '.$this->request->getVariable('id').' days')); 
		router::back($this->request,'tab2');
	}	
	public function clearAllCache() {
		cache::clearAll();
		router::back($this->request,'tab2');
	}
	public function clearBucketCache(){
		cache::clearBucket($this->request->getVariable('id'));
		router::back($this->request,'tab2');
	}	
	public function closeNotify() {
		$notifyDB = new notifyDB();
		$notifyDB->close($this->request->getVariable('id'));
		router::back($this->request,'tab6');
	}	
	public function deleteNotify() {
		$notifyDB = new notifyDB();
		$notifyDB->delete($this->request->getVariable('id'));
		router::back($this->request,'tab6');
	}	
}
?>