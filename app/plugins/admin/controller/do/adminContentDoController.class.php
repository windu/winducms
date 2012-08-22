<?php /*windu.org admin controller*/
Class adminContentDoController Extends adminAuthDoController{

	public function saveFromJsList() {
		$data = $_POST['data'];
		$pagesDb = new pagesDB();
		
		foreach($data as $element){
			$position = $upPositionMem+1;
			$pagesDb->updateRow(array('parentId' => $element['parent'],'position' => $position),"id = {$element['id']}");
			$upPositionMem = $this->getPosition($element['id'],$pagesDb);
		}
	}

	public function saveFromJsListGallery() {
		$data = $_POST['data'];
		$imagesDb = new imagesDB();

		foreach($data as $element){
			$position = $upPositionMem+1;
			$imagesDb->updateRow(array('position' => $position),"id = {$element['id']}");
			$upPositionMem = $this->getPosition($element['id'],$imagesDb);
		}
	}	

	public function saveFromJsListNews() {
		$data = $_POST['data'];
		$pagesDb = new pagesDB();
		
		foreach($data as $element){
			$position = $upPositionMem+1;
			$pagesDb->updateRow(array('position' => $position),"id = {$element['id']}");
			$upPositionMem = $this->getPosition($element['id'],$pagesDb);
		}
	}	
	
	private function getPosition($id,$db) {
		if ($id==null) return 0;
		$row = $db->fetchRow("id={$id}");
		return $row->position;
	}
	
	public function delete(){
		$pagesDB = new pagesDB();
		$pagesDB->deleteTreeItems($this->request->getVariable('id'));
		router::back($this->request,'tab1');
	}	
	public function deleteLang(){
		$pagesDB = new pagesDB();
		$pagesDB->deleteTreeItems($this->request->getVariable('id'));
		router::back($this->request,'tab2');
	}			
	public function hide(){
		$pagesDB = new pagesDB();
		$pagesDB->set($this->request->getVariable('id'),'status',pagesDB::STATUS_HIDE);
		router::back($this->request,'tab1');
	}
	public function activate(){
		$pagesDB = new pagesDB();
		$pagesDB->set($this->request->getVariable('id'),'status',pagesDB::STATUS_ACTIVE);
		router::back($this->request,'tab1');
	}	
	public function deleteImage() {
		image::deleteImageById($this->request->getVariable('id'));
		router::back($this->request,'tab1');
	}
	public function deleteMainImage(){
		image::deleteImageByBucket($this->request->getVariable('id'));
		router::back($this->request,'tab1');
	}
	//show treelist element
	public function showTreelist() {
		$openIdArray = unserialize(cookie::readCookie('contentOpenId'));
		if(isset($openIdArray[$this->request->getVariable('id')])){
			unset($openIdArray[$this->request->getVariable('id')]);
		}else{
			$openIdArray[$this->request->getVariable('id')] = 1;
		}
		
		cookie::setCookie('contentOpenId',serialize($openIdArray),0);
		router::back($this->request,'tab1');
	}	
	//hide treelist element
	public function hideTreelistAll() {
		cookie::setCookie('contentOpenId',null,0);
		router::back($this->request,'tab1');
	}				
	
}
?>
