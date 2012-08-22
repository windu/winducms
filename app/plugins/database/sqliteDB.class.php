<?php /*windu.org database*/

class sqliteDB
{
	private static $instance = NULL;

	public static function getInstance()
	{
		if (!self::$instance)
		{
			self::$instance = new PDO('sqlite:'.FILE_DB_PATH.FILE_DB_FILE);
			self::$instance-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		return self::$instance;
	}
     
	private function __clone(){}
}

?>
