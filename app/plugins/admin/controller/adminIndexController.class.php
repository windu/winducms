<?php /*windu.org admin controller*/
Class adminIndexController Extends adminMainController {

	public function index()
	{
		$notifyDB = new notifyDB();
		$notifications = $notifyDB->fetchAll('closed = 0','priority DESC,insertTime DESC');
		$this->smarty->assign('notifications',$notifications);
				
		$this->pageDisplay('index');
	}
}

?>
