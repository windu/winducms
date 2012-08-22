<?php /*windu.org core*/
class resourceManager
{
	public static function loadCSS(array $plugins = null){
		return self::loadResource('css',$plugins);
	}
	public static function loadJS(array $plugins = null){
		return self::loadResource('js',$plugins);
	}

	private static function loadResource($type,array $plugins = null) {
		$pluginsResource = pluginManager::getConfig($type,$plugins);

		foreach ($pluginsResource as $resource){
			$resourcePath = PLUGIN_PATH.$resource;
			if (file_exists($resourcePath)){
				$resourceList[] = $resourcePath;
			}
		}
		return $resourceList;
	}
}
?>
