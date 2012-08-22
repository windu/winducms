<?php /*windu.org front controller*/
Class frontDoController Extends controller{
	public function setLanguage() {
		$langId = $this->request->getVariable('id');
		if (is_numeric($langId)) {
			$pagesDB = new pagesDB();
			if($pagesDB->fetchCount("id=$langId")==1){
				cookie::setCookie('lang',$langId,1209600);
			}
		}
		router::redirect('front');
	}		
}
?>
