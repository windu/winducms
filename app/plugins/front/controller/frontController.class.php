<?php /*windu.org front controller*/
Class frontController Extends frontMainController {

	public function index()
	{
		$pagesDB = new pagesDB();
		$imagesDB = new imagesDB();
		
		$statisticDB = new statisticDB();
		
		$urlKey = generator::clean($this->request->getVariable('urlKey'));

		$page = $pagesDB->getPageByUrlKeySmart($urlKey);
		if ($page==null){
			log::write($urlKey,logDB::BUCKET_404);
			$this->pageDisplay('error404.tpl'); exit;
		}
				
		//Add page view
		$pageViewsArray = json_decode(cookie::readCookie('visited'),true);
		
		if($pageViewsArray==null){
			$statisticDB->addView();
		}		
		if($pageViewsArray[$page->urlKey]!=1){
			$pagesDB->addView($page->id);
			$pageViewsArray[$page->urlKey]=1;
			cookie::setCookie('visited',json_encode($pageViewsArray),43200);
		}
		
		//Url redirect
		if ($page->type == pagesDB::TYPE_URL) {
			router::redirect($page->content);
		}
		
		if(!$this->smarty->templateExists($page->tpl)){
		    $pageTpl = themesDB::$basicTpl;
		}else{
			$pageTpl = $page->tpl;
		}
		
		$this->smarty->assign('meta',$pagesDB->meta($page));
		$this->smarty->assign('page',$page);
		$this->smarty->assign('pageTpl',$pageTpl);
		$this->smarty->assign('pagesDB',$pagesDB);
		$this->smarty->assign('imagesDB',$imagesDB);
		
		$this->pageDisplay('main.tpl');
	}
}

?>
