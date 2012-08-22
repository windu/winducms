<?php /*windu.org core*/

class lang
{
	private static $lang;
	public static $langFiles = array('admin.txt','front.txt');
	
	public static function set($bucket)
	{
		$lang = cookie::readCookie('lang');
		
		if ($lang!='' and is_dir(__SITE_PATH . '/data/languages/' . $lang . '/'))
		{
			define('LANG', $lang);
		}
		else
		{
			define('LANG', config::get('language'));
		}
		$session = new sessionDB();
		define('LANG_BUCKET', $bucket);
		
		if (!cache::isCached(LANG.$bucket.'langContent')) {
			cache::write(LANG.$bucket.'langContent', self::prepere($bucket),'lang');
		}

	}
	public static function read($key)
	{
		$key = trim($key,' ');
		$data = cache::read(LANG.LANG_BUCKET.'langContent');
		if (isset($data[$key]))return $data[$key];
		//if (isset($data[$key]))return '';
		else return '?????? '.$key.' ??????';
		
		return 'No language file!';		
	}
	private static function prepere($bucket) {
		$data = parse_ini_file(__SITE_PATH . '/data/languages/' . LANG . '/'.$bucket.'.txt',true);
		return $data;
	}	
}

?>
