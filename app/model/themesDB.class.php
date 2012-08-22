<?php /*windu.org model*/
class themesDB
{
	public static $baseTpl = array(
	'main/error404.tpl',
	'main/main.tpl',
	'views/simple_page.tpl',
	'views/main_page.tpl',
	'js/main.js',
	'css/main.css');
	
	public static $baseFolders = array(
	'common',
	'main',
	'views',
	'mail',
	'js',
	'css',
	'img');

	public static $baseViewsFolders = array(
	'views');
	
	public static $basicTpl = 'simple_page.tpl';
	
	function __construct($templateName = null)
	{
		if($templateName == null)
		{
			$configDB = new configDB();
			$themeConfig = $configDB->getByName('template');
			$templateName = $themeConfig->name;
		}	
		$this->templatePath = TEMPLATES_PATH.$templateName.'/';
	}	
	//Creating template with default files and catalogs
	public static function create($templateName){
		$templateName = generator::cleanFileName($templateName);
		if(!is_dir(TEMPLATES_PATH.$templateName)){
			baseFile::createDir(TEMPLATES_PATH.$templateName);
			foreach (self::$baseFolders as $folder){
				baseFile::createDir(TEMPLATES_PATH.$templateName.'/'.$folder);
				echo TEMPLATES_PATH.$templateName.'/'.$folder;
			}
			foreach (self::$baseTpl as $tpl){
				baseFile::saveFile(TEMPLATES_PATH.$templateName.'/'.$tpl, '');
			}			
			return true;
		}
		return false;
	}
	//Add tpl file
	public function add($fileName) {
		$fileName = generator::cleanFileName($fileName);
		return baseFile::saveFile($this->templatePath.$fileName.'.tpl', '');
	}
	public function delete($fileName) {
		return baseFile::delete($this->templatePath.$fileName);
	}
	public function deleteTemplate() {
		return baseFile::delete($this->templatePath);
	}
	public function save($fileName, $data) {
		return baseFile::saveFile($this->templatePath.$fileName, $data);
	}
	public function read($fileName) {
		return baseFile::readFile($this->templatePath.$fileName);
	}	
	public function rename($newname) {
		$namePom = str_replace(TEMPLATES_PATH, '', $this->templatePath);
		if(is_dir(TEMPLATES_PATH.$newname.'/')){return false;}
		if(config::get('template') == $newname){
			config::set('template', $newname);
		}
		return baseFile::rename($this->templatePath, TEMPLATES_PATH.$newname.'/');
	}	
	public static function getViewsArray($themeName = null){
		if($themeName == null)
		{
			$configDB = new configDB();
			$themeConfig = $configDB->getByName('template');
			$themeName = $themeConfig->value;
		}
				
		$views = baseFile::getFilesList(__SITE_PATH . '/data/themes/'.$themeName.'/','tpl',true);
		$viewsArray[self::$basicTpl]=rtrim(self::$basicTpl,'.tpl');
		foreach(self::$baseViewsFolders as $folder){
			foreach($views[$folder]->subdir as $view){
				$viewsArray[$view->name]=rtrim($view->name,'.tpl');
			}			
		}
		return $viewsArray;
	}
	//Return array of resources inside type folder
	public static function getAllResources($type){
		$template = config::get('template');
		$folder = __SITE_PATH.'/data/themes/'.$template.'/'.$type.'/';
		$files = baseFile::getFilesList($folder,$type);	
		
		foreach ($files as $file){
			$finalArr[] = str_replace(__SITE_PATH.'/', HOME, $file->path);
		}

		return $finalArr;
	}
}
?>
