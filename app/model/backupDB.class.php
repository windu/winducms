<?php /*windu.org model*/
class backupDB
{
	public static $backupFolder = 'data/backups/';
	public static $dumpsFolder = 'data/dumps/';
	
	function __construct(){
		$this->backupPath = __SITE_PATH.'/'.self::$backupFolder;
		$this->dumpsPath = __SITE_PATH.'/'.self::$dumpsFolder;
		$this->backupDataPath = __SITE_PATH.'/data/';
	}	
	public function backupAll(){
		$exclude = array('backups','dumps');
		baseFile::copyDir($this->backupDataPath, $this->backupPath.date("Y-m-d-His",time()), $exclude);
	}
	//TODO przywracanie backupa
	public function restoreAll(){
		
	}	
	public function delete($fileName){
		return baseFile::delete($this->backupPath.$fileName);
	}

}
?>
