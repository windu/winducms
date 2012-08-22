<?php /*windu.org core*/
class cache
{
	public static function read($name){
		$cacheDB = new cacheDB();
		$data = $cacheDB->fetchRow("name = '".md5($name)."'");
		
		if ($data->serialized == 1) {
			$data->data = unserialize($data->data);
		}
		return $data->data;
	}
	public static function write($name,$data,$bucket = 0){
		$cacheDB = new cacheDB();
		$serialized = 0;
		if (is_array($data)) {
			$data = serialize($data);
			$serialized = 1;
		}
		return $cacheDB->write(md5($name),$data,$bucket,$serialized);
	}
	public static function isCached($name) {
		$cacheDB = new cacheDB();
		$name = md5($name);
		if(is_object($cacheDB->fetchRow("name = '{$name}'"))){
			return true;
		}else{
			return false;
		}
	}
	public static function clearBucket($bucket) {
		$cacheDB = new cacheDB();
		$cacheDB->deleteRows("bucket='{$bucket}'");
	}
	public static function clearAll(){
		$cacheDB = new cacheDB();
		$cacheDB->deleteRows("id>=0");		
	}

}
?>
