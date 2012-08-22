<?php /*windu.org widget*/
Class widgetLoader
{	
	private static function smartyGo($widgetName)
	{
		require_once( __SITE_PATH . '/app/plugins/html/smarty/SmartyBC.class.php'); 
		
		$smarty = new SmartyBC();
		$smarty->template_dir = WIDGET_PATH . $widgetName .'/';
		$smarty->compile_dir  = __SITE_PATH . '/cache/templates_c/';
		$smarty->cache_dir    = __SITE_PATH . '/cache/cache/';
		$smarty->plugins_dir  = array(__SITE_PATH . '/app/plugins/html/smarty/plugins/',
											__SITE_PATH . '/app/plugins/html/smartyPlugins/',
											__SITE_PATH . '/data/functions/');

		$smarty->assign('HOME',HOME);
		return $smarty;
	}			
	public static function loadWidgetByName($params) {
		$widgetName = $params['name'];
		$request = $params['request'];
		
		$data = self::loadWidgetDataByName($params);
		$smarty = self::smartyGo($widgetName);
		$smarty->assign('data',$data);
		$smarty->assign('params',$params);
		$output = $smarty->fetch($widgetName.'View.tpl');

		if (is_dir(WIDGET_PATH.$widgetName.'/css/')) {
			$fileList = baseFile::getFilesList(WIDGET_PATH.$widgetName.'/css/','css');
			if(is_array($fileList)){
				foreach ($fileList as $file){
					$cssPath = HOME.str_replace(__SITE_PATH.'/', '', $file->path);
					$output .= "<script type='text/javascript'>InsertCss('{$cssPath}');</script>";
				}		
			}		
		}
		if (is_dir(WIDGET_PATH.$widgetName.'/js/')) {
			$fileList = baseFile::getFilesList(WIDGET_PATH.$widgetName.'/js/','js');
			if(is_array($fileList)){
				foreach ($fileList as $file){
					$jsPath = HOME.str_replace(__SITE_PATH.'/', '', $file->path);
					$output .= "<script type='text/javascript' src='".$jsPath."'></script>";
				}		
			}	
		}		
		
		return $output;
	}
	public static function loadWidgetDataByName($params) {
		$widgetName = $params['name'];
		$request = $params['request'];	

		require_once WIDGET_PATH.$widgetName.'/'.$widgetName.'Controller.class.php';
		$controllerClassName = $widgetName.'Controller';
		
		$controller = new $controllerClassName($request);
		$data = $controller->run($params);
		
		return $data;
	}	
}
?>