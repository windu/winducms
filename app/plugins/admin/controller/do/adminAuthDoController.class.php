<?php /*windu.org admin controller*/
Class adminAuthDoController extends controller
{	
	public function __construct(request $request, $plugins = array())
	{
		$usersDB = new usersDB();
		if(!$usersDB->authCheck(get_class($this))){
			router::redirect('admin-login');
			exit;
		}
		$this->user = $usersDB->getLoggetIn();
		parent::__construct($request);
	}	
}
?>
