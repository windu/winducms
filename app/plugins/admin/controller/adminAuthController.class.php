 <?php /*windu.org admin controller*/
Class adminAuthController extends htmlController
{	
	public function __construct(request $request, $plugins = array())
	{
		$this->usersDB = new usersDB();
		if(!$this->usersDB->authCheck(get_class($this))){
			router::redirect('admin-login');
			exit;
		}
		$this->user = $this->usersDB->getLoggetIn();
		lang::set('admin');
		parent::__construct($request);
	}	
	public function index(){}
}
?>
