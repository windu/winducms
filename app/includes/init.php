<?php
 require_once './app/core/pluginManager.class.php';
 require_once './app/core/debugger.class.php';
 function prepereAutoloadCatalogs() {
	$catalogs[] = '/app/core/';
	$catalogs[] = '/app/model/';
	$catalogs[] = '/app/controller/';
	$catalogs[] = '/app/controller/do/';
	
	$plugins = pluginManager::getList();
	
	foreach ($plugins as $plugin) {
	 	$file = PLUGIN_PATH.'/'.$plugin;
	 	if (is_dir('./'.$file.'/')){$catalogs[] =  '/'.$file.'/';}
	 	if (is_dir('./'.$file.'/controller'))$catalogs[] = '/'.$file.'/controller/';
	 	if (is_dir('./'.$file.'/controller/do'))$catalogs[] = '/'.$file.'/controller/do/';
	 	if (is_dir('./'.$file.'/model'))$catalogs[] =  '/'.$file.'/model/';
	 	if (is_dir('./'.$file.'/addons'))$catalogs[] =  '/'.$file.'/addons/';
	}
	return $catalogs;
 }
 $catalogsAutoload = prepereAutoloadCatalogs();
 
 /*** auto load model classes ***/
 spl_autoload_register('autoload');
 function autoload($class_name)
 {
    $filename = $class_name . '.class.php';
	global $catalogsAutoload;
	
	foreach ($catalogsAutoload as $catalog)
 	{
 		$file = __SITE_PATH . $catalog . $filename;
 		if (file_exists($file)){break;} 		
 	}
    if (file_exists($file)==false){return false;}
 	else{require_once ($file);}
 }

 //Dir on serwer
 define('SUBDIR', str_replace('front.php', '', $_SERVER['PHP_SELF']));
 define('HOME', __BASE.SUBDIR); 
 
 pluginManager::loadMainConfigs(); //load config.php files from plugins
 
 //Call controller
 $request = new requestHttp($_SERVER, $_GET, $_POST);

 $renderedResponse = router::instance()->callController($request);
 
?>
