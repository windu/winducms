<?php /*windu.org model*/
class usersDB extends traceDB
{
	public function add($data)
	{
		$pass = $data['password'];
		$data['active'] = 1;
		if ($data['username']==null) {
			$username = explode('@',$data['email']);
			$data['username'] = $username[0];
		}
		if ($pass==null){
			$pass = generator::randomCode(8,2);
		}
		$returnData = $data;
		$data['password'] = md5($pass); 
		$this->insert($data);
		return $returnData;
	}
	public function updateRow($data,$where) {
		if($data['password']!=null){
			$data['password'] = md5($data['password']);	
		}
    	parent::updateRow($data, $where);
	}
	//Sprawdza czy user jest zalogowany
	public function authCheck($className){
		$sessionDB = new sessionDB();
		$usersDB = new usersDB();
		$emailKey = cookie::readCookie('login');
		$passKey = cookie::readCookie('pass');
		
		$email = $sessionDB->get($emailKey);
		$password = $sessionDB->get($passKey);	

		if($this->checkUserLogin($email, $password)){ 
			$user = $usersDB->fetchRow("email = '{$email}'");
			if ($this->promissionCheck($user,$className)){
				return true;
			}
		}
		
		return false;
	}	
	//Sprawdza uprawnienia zalogowanego usera
	public static function permissionCheck($className) {
		$userDB = new usersDB();
		$user = $userDB->getLoggetIn();
		if ($userDB->promissionCheck($user,$className)){
			return true;
		}
		return false;
	}
	//Zwraca zalgoowanego usera
	public function getLoggetIn() {
		$sessionDB = new sessionDB();
		$emailKey = cookie::readCookie('login');
		$email = $sessionDB->get($emailKey);
		return $this->fetchRow("email='{$email}'");
	}
	//sprawdzanie uprawnien do danego kontrolera
	public function promissionCheck($user,$className) {
		$usertypesDB = new usertypesDB(); 
		if($usertypesDB->havePromission($user,$className)){
			return true;
		}
		return false;
	}
	
	//Sprawdza czy user podal porpawne haslo i nazwe usera
	public function checkUserLogin($email,$password)
	{
		$user = $this->fetchRow("email = '{$email}' and password = '{$password}'");
		
		if ($user!=null){
			return true;
		}else{
			return false;
		}
	}
	public function login($email,$password,$expire = 0) {
		$sessionDB = new sessionDB();
		if($expire == 0){
			$sessionExpire = 86400;
		} else {
			$sessionExpire = $expire;
		}
		$emailKey = $sessionDB->set($email, $sessionExpire);
		$passKey = $sessionDB->set(md5($password), $sessionExpire);
		
		cookie::setCookie('login',$emailKey,$expire);
		cookie::setCookie('pass',$passKey,$expire);
	}
	public function toggleDeveloperMode(){
		$user = $this->getLoggetIn();
		if (cookie::readCookie('developerMode')==$user->email) {
			cookie::removeCookie('developerMode');
		}else{
			cookie::setCookie('developerMode',$user->email,0);
		}
	}
	public function isDeveloper() {
		$user = $this->getLoggetIn();
		if (cookie::readCookie('developerMode')==$user->email) {
			return true;
		}
		return false;
	}
	public function logout(){
		cookie::removeCookie('login');
		cookie::removeCookie('pass');
	}
	//TODO - aktywacja usera
	public function activate($id) {
		;
	}
	//TODO - deaktywacja usera
	public function deActivate($id) {
		;
	}	
	//TODO - kasowanie usera dorobic powiazania wszytskie, na przyklad co 
	public function deleteUser($id) {
		$this->deleteRows("id = '{$id}'");
	}
	public function getByBucket($bucketId){
		$userTypesDB = new usertypesDB();
		$userTypes = $userTypesDB->getByBucket($bucketId,null,true,true);
		if ($userTypes!=null) {
			$users = $this->fetchAll("type in({$userTypes})");
		}
		return $users;
	}
}
?>