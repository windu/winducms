<?php /*windu.org database*/

class mysqlDB
{
	private static $instance = NULL;

	public static function getInstance()
	{
		if (!self::$instance)
		{
			self::$instance = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASSWORD);
			self::$instance-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		return self::$instance;
	}
 
	private function __clone(){}
}

?>
