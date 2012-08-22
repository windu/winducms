<?php /*windu.org core*/
	class config
	{
		private $plugins;
		public function __construct(array $plugins = null){
			if(is_array($plugins)){
				$this->plugins = $plugins;
			}else{
				$this->plugins = pluginManager::getList();
			}
		}
		//zbiera configi z pluginow i dokleja zmienne ustawiane w konfigach
		public function prepereConfig(array $files){
			$configContent = array();
			
			foreach ($this->plugins as $plugin) {
				$file = PLUGIN_PATH.'/'.$plugin;
				$configFilePath = $file.'/config/config.php';
					
				if (file_exists($configFilePath)){
					require_once $configFilePath;
				}
			}
			return $configArray;			
		}

		//przelatuje przez wszystkie pluginy i zbiera z nich wyznaczony plik ini przetwarza na arraya i skleja.
		public function prepereIni(array $filesList) {
			$configArray = array();
			//debugger::dprint($filesList);
			foreach ($filesList as $file) {
			 	if (file_exists($file)){
			 		$newConfigArray = parse_ini_file($file,true);
			 		$configArray = array_merge($configArray,$newConfigArray);
			 	}
			}				
			return $configArray;
		}

		//return config value
		public static function get($name) {
			$configDB = new configDB();
			return $configDB->fetchRow("name = '{$name}'")->value;
		}	
		public static function set($name,$value) {
			$configDB = new configDB();
			if($configDB->fetchRow("name = '{$name}'")!=null){
				$configDB->updateRow(array('value' => $value),"name = '{$name}'");
			}else{
				$configDB->insert(array('name' => $name,'value' => $value));
			}
		}				
	}
?>