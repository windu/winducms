<?php /*windu.org core*/
class cookie
{
	private static $subdir = SUBDIR;
	private static $cookies = array();
	private static $cookieName = null;
	private static $expire;

	public static function setCookie($name, $value = null, $expire = 3600)
	{
		if ($expire == 0){
			$time = null;
		}else{
			$time = time()+$expire;
		}
		setcookie($name, $value,$time,self::$subdir);
	}
	public static function removeCookie($name)
	{
		setcookie($name, null, time()-5,self::$subdir);
	}
	public static function readCookie($name)
	{
		$cookies = $_COOKIE;
		if (isset($cookies[$name]))
		{
			return $cookies[$name];
		}
		else return null;
	}
	public static function readAll()
	{
		$cookies = $_COOKIE;
		return $cookies;
	}
	public static function removeAll()
	{
		$cookiesAll = self::readAll();
		foreach ($cookiesAll as $key => $cookie)
		{
			self::removeCookie($key);	
		}
	}
}
?>
