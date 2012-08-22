<?php /*windu.org model*/
class widgetsDB
{
	public static $baseWidgetFolders = array(
	'css',
	'js',
	'img',
	'doc');
	
	public static $baseWidgetFiles = array(
	'View.tpl',
	'Controller.class.php'
	);	
	
	public static $commonWidgetFiles = array(
	'css/main.css',
	'js/main.js',
	'doc/readme.txt',
	'doc/smallhelp.txt');	
		
	function __construct($widgetName)
	{
		$this->widgetPath = WIDGET_PATH.$widgetName.'/';
	}	
	
	//Creating widget with default files
	public static function create($widgetName){
		$widgetName = generator::cleanClassName($widgetName);
		if(!is_dir(WIDGET_PATH.$widgetName)){
			baseFile::createDir(WIDGET_PATH.$widgetName);
			
			//create subdirs
			foreach (self::$baseWidgetFolders as $dir){
				baseFile::createDir(WIDGET_PATH.$widgetName.'/'.$dir.'/');
			}			

			//create default files
			foreach (self::$commonWidgetFiles as $file){
				baseFile::saveFile(WIDGET_PATH.$widgetName.'/'.$file, '');
			}				
			
			//create default files
			foreach (self::getFilesArray($widgetName) as $file => $data){
				baseFile::saveFile(WIDGET_PATH.$widgetName.'/'.$widgetName.$file, $data);
			}	

			
			return true;
		}
		return false;
	}
	public function deleteWidget(){
		return baseFile::delete($this->widgetPath);
	}
	public function save($fileName, $data) {
		return baseFile::saveFile($this->widgetPath.$fileName, $data);
	}
	public function read($fileName) {
		return baseFile::readFile($this->widgetPath.$fileName);
	}
	public static function getWidgetArray(){
		$views = baseFile::getFilesList(WIDGET_PATH.'/','tpl',true);
		return $viewsArray;
	}
	public static function getFilesArray($className) {
		foreach (self::$baseWidgetFiles as $file){
			$pom = explode('.', $file);
			$methodName = 'example'.$pom[0];
			$array[$file] = self::$methodName($className);
		}	
		return $array;	
	}
	/////////////////////////////////////////////////
	//Example generators/////////////////////////////
	/////////////////////////////////////////////////
	private static function exampleView($className){
		$data = '<h3>Example of '.$className.' widget</h3>
<div>{{$data.content}}</div>';
		return $data;
	}	
	private static function exampleController($className){
		$data ='<?php /*windu.org model*/
Class '.$className.'Controller extends widgetMainController
{		
	public function run() {
		$data = "Example Content";	
		return array("content" => $data);
	}
}
?>';
		return $data;
	}	
	private static function exampleMain($className){
		$data = "$(document).ready(function(){
	alert('this is example of ".$className."');
});";
		return $data;
	}	
	private static function exampleStyle($className){
		$data = '.className{
	color:#000;
}';
		return $data;
	}	
				
}
?>
