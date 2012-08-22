<?php /*windu.org core*/
class router {
	
	private static $routingTable = array();
	private static $instance;
	
	public static function instance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new router();
        }
        return self::$instance;
    }
        
	public function __construct() {
		$routingConfig = pluginManager::getConfig('router');

		foreach($routingConfig as $pattern => $parameters) {
			$routeIndex = $parameters['name'];
			
			router::$routingTable[$routeIndex]['pattern'] = $pattern;
			router::$routingTable[$routeIndex]['parameters'] = $parameters;

			preg_match_all("/\#([a-zA-Z]+)/", $pattern, $matches);

			router::$routingTable[$routeIndex]['variableName'] = $matches[1];

			$pattern = preg_quote($pattern,'/');
			$pattern = str_replace($matches[0], "([^\/]+)", $pattern);

			router::$routingTable[$routeIndex]['regexp'] = "/^".$pattern."$/";
			$routeIndex++;
		}
	}

	private function getRouting($path) {
		foreach(router::$routingTable as $route) {
			if (preg_match($route['regexp'],$path,$matches)) {
				$routing['route'] = $route;

				array_shift($matches);
				$variables = array();
				
				foreach($matches as $key => $value) {
					$variables[$route['variableName'][$key]] = $value;
				}
				
				$routing['variables'] = $variables;
				return $routing;
			}
		}
	}
	
	public static function route($target, $variables = array(), $anchor = null) {
		
		$extesion = "";
		if (is_array($target)){
			$extesion = ".".$target[1];
			$target=$target[0];
		}
		if (strpos($target,"/") === false){
			$route = router::$routingTable[$target];
			$keys = array_keys($variables);
			array_walk($keys, "prependHash");
			preg_match_all("/\#([a-zA-Z]+)/", $route['pattern'], $routeVars);
			$routePath = str_replace($keys, array_values($variables), $route['pattern']).$extesion;
			$variables = array_diff_key($variables, array_flip($routeVars[1]));
			$variablesUrl = null;
			if($variables!=null){
				$variablesUrl = "?".http_build_query($variables);
			}
			$route = rtrim(HOME,'/').$routePath.$variablesUrl;
		} else {
			$route = $target;
			if (count($variables) > 0) $route.="?".http_build_query($variables);
		}
		
		if ($anchor != null) $anchor = "#".$anchor;
		return html_entity_decode($route).$anchor;
	}

	public static function unique() {
		return md5("" . mt_rand(0,PHP_INT_MAX-1) . "A" . microtime(true));
	}
	
	public static function loadUrl($target, array $query = array(), $permanent = false) {
		$route = self::route($target, $query);
		echo "<script language='javascript'>document.location.href='".$route."'</script>";
		exit;
	}
	
	public static function loadParent($target, array $query = array(), $permanent = false) {
		$route = self::route($target, $query);
		echo "<script language='javascript'>parent.location.href='".$route."'</script>";
		exit;
	}	
	
	public static function redirect($target, array $query = array(), $permanent = false, $anchor = null) {		
		$route = self::route($target, $query, $anchor);

		if ($permanent) header("HTTP/1.1 301 Moved Permanently");
		header("Location: ".$route);
		exit;
	}
	public static function back($request,$anchor = null) {
		if ($anchor!=null) {
			$anchor = '#'.$anchor;
		}
		self::redirect($request->server('HTTP_REFERER').$anchor);		
	}
	public static function reload($message = 'admin.message.success') {
		if ($_POST!=null){
			self::redirect(__BASE.$_SERVER['REDIRECT_URL']."?m={$message}");
		}
	}
	public static function selfLink($anchor = null){
		if ($anchor!=null) {
			$anchor = '#'.$anchor;
		}
		return __BASE.$_SERVER['REDIRECT_URL'].$anchor;
	}
	public function callController(request $request) {

		$routing = $this->getRouting($request->path());
		
		$request->setRouting($routing);
	
		$controllerClassName = self::getController($request);

		$controller = new $controllerClassName($request);
		$action = self::getAction($request,$controller);
		
		$controller->$action();
	}

	public static function getController(request $request) {
		$className =  $request->controllerClass();
		if ($className==null) {
			$className='error404Controller';
		}
		return $className;
	}	
	public static function getAction(request $request,$controller) {
		
		if (method_exists($controller, $request->getVariable('action'))){
			return $request->getVariable('action');
		}
		return 'index';
	}
}
function prependHash(&$value, $key) {
	$value = "#".$value;
}
?>
