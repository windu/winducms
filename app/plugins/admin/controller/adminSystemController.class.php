<?php /*windu.org admin controller*/
Class adminSystemController Extends adminMainConfigController{
	public function __construct($request){
		parent::__construct($request);
		$configDB = new configDB();
		$config = $configDB->getByGroup(configDB::CONFIG_BUCKET_SYSTEM);	
		$this->smarty->assign('configList',$config);		
		
		$statisticDB = new statisticDB();
		$statistics = $statisticDB->fetchAll(null, 'id ASC', '*', 365);
		$this->smarty->assign('statistics',$statistics);		
		
		$logDB = new logDB();
		$this->smarty->assign('logDB',$logDB);
		
		$this->smarty->assign('dataFolders',baseFile::getFilesList(__SITE_PATH.'/data/','dir'));	
		$this->smarty->assign('cacheDirSize',round(baseFile::getSize(__SITE_PATH.'/cache/')/1048576,2));		
		
		$notifyDB = new notifyDB();
		$notifications = $notifyDB->fetchAll('closed = 0','priority DESC,insertTime DESC');
		$notificationsClosed = $notifyDB->fetchAll('closed = 1','priority DESC,insertTime DESC');
		$this->smarty->assign('notifications',$notifications);
		$this->smarty->assign('notificationsClosed',$notificationsClosed);
		$this->smarty->assign('backups',baseFile::getFilesList(__SITE_PATH . '/data/backups/','dir',false));
		//$logggg = $logDB->fetchCountGroup('data',"bucket = 1",null,'*', 10);
		//debugger::dprint($logggg); exit;
	}
	public function index()
	{			
		$this->pageDisplay('system');
	}
	public function editConfig() {
		parent::editConfig('#tab4');
		$this->pageDisplay('system');
	}		
}
?>
