<?php /*windu.org core*/
class pluginManager
{
	//zwraca arraya z lista plugonow
	public static function getList($plugins = null){
		if($plugins!=null){
			return $plugins;
		}
		return explode(',',PLUGINS);
	}
	//zwraca liste plikow ini z configow wszystkcih pluginow
	private static function getIniList($fileName,array $plugins = null) {
		$plugins = self::getList($plugins);
		foreach ($plugins as $plugin) {
		 	$file = PLUGIN_PATH.'/'.$plugin;
		 	$fileName = rtrim($fileName,'.ini');
		 	$path = $file.'/config/'.$fileName.'.ini';

		 	if (file_exists($path)){
		 		$configFilesPath[] = $path;
		 	}
		}	
		return $configFilesPath;
	}
	//zwracaliste config z danego typu plikow
	public static function getConfig($fileName,array $plugins = null){
		$config = new config($plugins);
		return $config->prepereIni(self::getIniList($fileName,$plugins));
	}
	//laduje pliki z config.php danego pluginu
	public static function loadMainConfigs() {
		foreach (self::getList() as $plugin) {
			$file = PLUGIN_PATH.'/'.$plugin;
			$path = $file.'/config/config.php';
		 	if (file_exists($path)){
		 		include $path;
		 	}			
		}
	}
}
?>
