<?php /*windu.org admin controller*/
Class adminUpdateController extends adminAuthController
{	
	private $updateFilesDlList = array(
		'app.zip',
		'data.zip',
		'database.sql'
	);
	
	function smartyGo()
	{
		parent::smartyGo();
		$this->smarty->template_dir = array(__SITE_PATH . '/app/plugins/admin/templates/');
	}
	public function __construct($request){

		parent::__construct($request);
	}
	public function index()
	{	
		if (adminUpdateController::checkForUpdate()) {
			$this->smarty->assign('load','0');
			$this->smarty->assign('step','downloadUpdate');	
			$this->smarty->assign('title',lang::read('admin.update.controller.downloadupdate'));
		}else{
			router::redirect('admin');
		}
		$this->pageDisplayHook('update.tpl','mainSimple.tpl');
	}
	public function downloadUpdate() {
		foreach($this->updateFilesDlList as $file){
			$newUpdate = baseFile::getExternalFileContent(UPDATE_PATH.$file);
			$newFilePath = __SITE_PATH.'/cache/update/'.$file;
			if (file_exists($newFilePath))unlink($newFilePath);
			$dlHandler = fopen($newFilePath, 'w');
			fwrite($dlHandler, $newUpdate);
			fclose($dlHandler);	
			if (!file_exists($newFilePath)){
				throw new Exception('Update error! Update file "'.$file.'" not downloaded!');
			}		
		}
		
		$this->smarty->assign('load',40);
		$this->smarty->assign('step','doUpdate');	
		$this->smarty->assign('title',lang::read('admin.update.controller.beginupdate'));	
		$this->pageDisplayHook('update.tpl','mainSimple.tpl');  
	}
		
	public function doUpdate(){	
		foreach($this->updateFilesDlList as $file){
			$filePath = __SITE_PATH.'/cache/update/'.$file;
			if (!file_exists($filePath)){
				throw new Exception('Update error! Update file "'.$file.'" not found!');
			}	
						
			if (baseFile::isFileType('zip',$file)) {
				
				$zipHandle = zip_open($filePath);
				
		        while ($zfile = zip_read($zipHandle))
		        {
					$thisFileName = zip_entry_name($zfile);
					$thisFileDir = dirname($thisFileName);
		
					if (!is_dir(__SITE_PATH.'/'.$thisFileDir )) mkdir (__SITE_PATH.'/'.$thisFileDir );
					if (substr($thisFileName,-1,1) == '/') continue;           
					        
					if ( !is_dir(__SITE_PATH.'/'.$thisFileName) ) {
						$contents = zip_entry_read($zfile, zip_entry_filesize($zfile));
						$contents = str_replace("\\r\\n", "\\n", $contents);
						$updateThis = '';
						$updateThis = fopen(__SITE_PATH.'/'.$thisFileName, 'w');
						fwrite($updateThis, $contents);
						fclose($updateThis);
						unset($contents);				
					}
		        }	
			}elseif (baseFile::isFileType('sql',$file)){
				$sql = file_get_contents($filePath);
				baseDB::executeSql($sql);
			}
		}
		$this->smarty->assign('load','80');
		$this->smarty->assign('step','finish');	
		$this->smarty->assign('title',lang::read('admin.update.controller.backtoadminpanel'));
		$this->pageDisplayHook('update.tpl','mainSimple.tpl');
	}	
	public function finish(){	
		router::redirect('admin');
	}

	public function prosessUpdate($dirObject) {
		foreach ($dirObject as $file){
			echo $file->path.'<br>';
			if (is_array($file->subdir)) {
				$this->prosessUpdate($file->subdir);
			}
		}
	}
	
	public static function checkForUpdate($cache = false) {
		
		$localRev = config::get('revision');
		
		if ($cache == true and cache::isCached('actualRevision')){
			$serverRev = cache::read('actualRevision');
			if ($serverRev > $localRev) {
				return true;
			}	
			return false;			
		}
		
		$time = generator::sqlDate();
		$ip = generator::ip();
		
		$serverRev = baseFile::getExternalFileContent(UPDATE_PATH.'rev/rev.php?u='.HOME.'&t='.$time.'&i='.$ip.'&r='.$localRev);
		cache::write('actualRevision', $serverRev, '');
		if ($serverRev > $localRev) {
			notifyDB::add(lang::read('admin.notify.update'), 5);
			return true;
		}			

		return false;
	}
	
}
?>
