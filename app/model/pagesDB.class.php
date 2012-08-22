<?php /*windu.org model*/
class pagesDB extends traceDB
{
	const STATUS_DELETE = 0;
	const STATUS_ACTIVE = 1;
	const STATUS_HIDE = 2;
	
	const PARENTID_NOPARENT = -1;
	const PARENTID_LANGUAGE = 0;
	
	const TYPE_PAGE = 1;
	const TYPE_NEWS = 2;
	const TYPE_URL = 3;
	
	const TYPE_LANG_CATALOG = 10;
	const TYPE_CATALOG = 11;
	const TYPE_GALLERY = 12;
	const TYPE_NEWS_GROUP = 13;
	
	public $types = array(
		 self::TYPE_PAGE => "Strona",
		 self::TYPE_CATALOG => "Grupa",
		 self::TYPE_GALLERY => "Galeria",
		 self::TYPE_NEWS_GROUP => "Aktualnosci",
		 self::TYPE_URL => "Link"
	);
	public function getPageByUrlKeySmart($urlKey = null) {
		if($urlKey!=null){
			$page = $this->getPageByUrlKey($urlKey);
		}else{
			//TODO ma wybierac z danego jezyka a nie pierwszy jezyk
			$type = self::TYPE_LANG_CATALOG;
			$page = $this->fetchRow("type=$type AND status = ".self::STATUS_ACTIVE);
		}	
		return $page;
	}

	public function getPageByUrlKey($urlKey = null) {
		$page = $this->fetchRow("urlKey = '{$urlKey}' AND status = ".pagesDB::STATUS_ACTIVE);
		return $page;
	}
	public function getPagesByParent($parentId=0,$where=null,$sort='position ASC',$what='*',$limit = null,$group=null,$status=false){
		if ($where!=null){$where = " AND ".$where;}
		if ($status==true){$where = " AND status = ".self::STATUS_ACTIVE.$where;}
		
		$pages = $this->select("parentId = {$parentId} $where",$sort,$what,$limit,$group)->fetchAll(PDO::FETCH_CLASS);
		return $pages;
	}
	
	//return pages by language
	public function getPages($parentId=0,$where=null,$sort='position ASC',$what='*',$limit = null,$group=null,$status=false){
		if (cookie::readCookie('lang')==null and $parentId==0) {
			$defLang = $this->fetchRow("parentId = 0",$sort);
			$parentId = $defLang->id;
		}elseif($parentId==0){
			$parentId = cookie::readCookie('lang');
		}
		return $this->getPagesByParent($parentId,$where,$sort,$what,$limit,$group,$status);
	}
	public function getNews($parentId,$limit=null,$where=null) {
		if ($limit==null){$limit = config::get('newsCount');}
		return $this->getPagesByParent($parentId,"status = ".self::STATUS_ACTIVE,'date DESC','*',$limit);
	}
	public function hasChild($id){
		if ($this->fetchCount("parentId = $id")>0){return TRUE;}else{return FALSE;}
	}	
	public function hasOpenChild($openedPage,$menuParentId) {

		if ($openedPage->parentId == 0 or $openedPage->parentId == $menuParentId) {
			return TRUE;
		}
		elseif($this->hasChild($openedPage->id)){
			$parentId = $openedPage->parentId;
			while ($parentId != 0) {
				$page = $this->fetchRow("parentId = {$parentId}");
				$parentId = $page->parentId;
				$openIdsRoute[] = $page->id;
			}
			if (in_array($openedPage->id, $openIdsRoute)) {
				return TRUE;
			}
		}
		return FALSE;
	}	
	public function insert(array $data = array())
	{
		$data['status'] = 1;
		$data['position'] = 999999;
		$data['urlKey'] = generator::urlKey($data['name'],$this);
		$data['views'] = 0;
		if ($data['type'] == self::TYPE_GALLERY){
			$data['content']='{{W name=galleryFancybox images=$imagesDB->getByBucket($page->id)}}';
		}elseif ($data['type'] == self::TYPE_NEWS_GROUP){
			$data['content']='{{W name=newsNormal news=$pagesDB->getNews($page->id)}}';
		}else{
			$data['content']=' ';
		}
		if ($data['tpl'] == ''){$data['tpl']='main/basic.tpl';}
		parent::insert($data);
	}
	public function updatePage($column, $where = null)
	{
		if($column['urlKey']==null){
			$column['urlKey'] = generator::urlKey($column['name'],$this);
		}elseif(generator::prepereUrlKey($this->fetchRow($where)->name)==$this->fetchRow($where)->urlKey and $this->fetchRow($where)->name != $column['name'] and $column['urlKey'] == $this->fetchRow($where)->urlKey){
			$column['urlKey'] = generator::urlKey($column['name'],$this);
		}elseif($column['urlKey']!=$this->fetchRow($where)->urlKey){
			$column['urlKey'] = generator::urlKey($column['urlKey'],$this);
		}
		parent::updateRow($column, $where);
	}	
	public function addLang($data) {
		$data = array_merge($data,array('parentId'=>0,'type'=>self::TYPE_LANG_CATALOG));

		$langName = strtolower($data['name']);
		baseFile::createDir(LANGUAGES_PATH.$langName.'/');
		foreach (lang::$langFiles as $file){
			baseFile::saveFile(LANGUAGES_PATH.$langName.'/'.$file, file_get_contents(LANGUAGES_PATH.LANG.'/'.$file));
		}
		$page = $this->insert($data);
	}
	public function deleteTreeItems($id,$finalDelte = false) {
		$page = $this->fetchRow("id={$id}");
		if($finalDelte==true){
			$this->delete($id);
			image::deleteImage("bucket = '{$page->id}' or bucket = 'main-{$page->id}'");
		}else{
			$this->set($id,'status',self::STATUS_DELETE);
		}
		$dependentItems = $this->fetchAll("parentId = {$page->id}");
		foreach ($dependentItems as $item){
			$this->deleteTreeItems($item->id,$finalDelte);
		}
	}
	public function deleteTrashItems(){
		$idS = $this->fetchAll('status = '.self::STATUS_DELETE,null,'id');
		foreach ($idS as $id){
			$idString .= $id->id.',';
		}
		$idString = rtrim($idString,',');
		image::deleteImage("bucket in({$idString})");
		
		return $this->deleteRows('status = '.self::STATUS_DELETE);
	}
	public function restoreTreeItems($id){
		$page = $this->fetchRow("id={$id}");

		$this->set($id,'status',self::STATUS_ACTIVE);
		//debugger::dprint($this->fetchCount("id={$page->parentId}")); exit;
		if($page->type == self::TYPE_LANG_CATALOG){
			$this->set($id,'parentId',self::PARENTID_LANGUAGE);	
		}
		elseif($this->fetchCount("id={$page->parentId} and status!=0")==0){
			$this->set($id,'parentId',self::PARENTID_NOPARENT);	
		}
		$dependentItems = $this->fetchAll("parentId = {$page->id}");
		if($dependentItems!=null)
		{
			foreach ($dependentItems as $item){
				$this->restoreTreeItems($item->id);
			}
		}

	}
	
	//TODO - ustawianie metatagow poprawnie jak puste
	public function meta($page) {
		$meta = new stdClass();
		if ($page->title != null) {
			$meta->title = $page->title;
		}else{
			$meta->title = $page->name;
		}
		
		if ($page->description != null) {
			$meta->description = $page->description;
		}else{
			$meta->description = $page->name;
		}
		
		if ($page->keywords != null) {
			$meta->keywords = $page->keywords;
		}else{
			$meta->keywords = $page->name;
		}

		return $meta;					
	}
	public function addView($id){
		$page = $this->fetchRow("id={$id}");
		$this->updateRow(array("views"=>$page->views + 1),"id={$id}");
	}
	public function checkParentsOpen($clickedIdArray,$page){
		if ($clickedIdArray[$page->id]==1) {
			return TRUE;
		}else{
			if (is_array($clickedIdArray)) {
				foreach ($clickedIdArray as $key => $value){
					$actualPage = $this->fetchRow("id = {$key}");
					while ($actualPage != null) {
						$actualPage = $this->fetchRow("id = {$actualPage->parentId}");
						if($page->id == $actualPage->id){
							return TRUE;
						}
					}
				}
			}
		}
		return FALSE;
	}
	public static function getMainImageEkey($pageId) {
		$imagesDB = new imagesDB();
		$image = $imagesDB->getFirstByBucket('main-'.$pageId);
		if (is_object($image)) {
			return $image->ekey;
		}else{
			return null;
		}
	}

}
?>
