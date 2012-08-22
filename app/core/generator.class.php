<?php /*windu.org core*/
class generator
{
    public static function sqlDatetime($timestemp = null)
	{
		if(is_null($timestemp)){$timestemp = strtotime('now');}
	    $time = date('Y-m-d H:i:s',$timestemp);
	    return $time; 
	}
	public static function sqlDate($timestemp = null) {
		if(is_null($timestemp)){$timestemp = strtotime('now');}
	    $time = date('Y-m-d',$timestemp);
	    return $time; 
	}
	public static function ip()
	{
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])){$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];} 
		else {$ip = $_SERVER['REMOTE_ADDR'];} 
		return $ip; 
	}		
	public static function randomCode($length=8,$level=3)
	{
	   list($usec, $sec) = explode(' ', microtime());
	   srand((float) $sec + ((float) $usec * 100000));
	
	   $validchars[1] = "0123456789";
	   $validchars[2] = "abcdfghjkmnpqrstvwxyz";
	   $validchars[3] = "0123456789abcdfghjkmnpqrstvwxyz";
	   $validchars[4] = "0123456789abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	   $validchars[5] = "0123456789_!@#$%&*()-=+/abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_!@#$%&*()-=+/";
	
	   $code  = "";
	   $counter = 0;
	
	   while ($counter < $length)
	   {
	     $actChar = substr($validchars[$level], rand(0, strlen($validchars[$level])-1), 1);
	     $code .= $actChar;
	     $counter++;
	   }
	   return $code;	
	}
	public static function ekey($table,$colum = 'ekey',$length=12,$level=2){
		$db = new $table();
		$ekey = null;
	
		while ($db->fetchCount("{$colum}='{$ekey}'") != null and $ekey == null) {
			$ekey = self::randomCode($length,$level);
		}
		return $ekey;
	}

	public static function urlKey($baseString,$table,$colum = 'urlKey',$length=50){
		$db = new $table();

		$urlKeyWork = self::prepereUrlKey($baseString);
		$counter = 0;
	
		while ($db->fetchRow("{$colum} = '{$urlKeyWork}'") != null) {
			$addonLenght = 1;
			$counter = $counter+1;
			
			if($counter>=12){
				$addonLenght=$addonLenght+1;
				$counter=0;
			}
			$urlKeyWork =$urlKeyWork.'-'.self::randomCode($addonLenght,1);
		}

		return $urlKeyWork;
	}	
	public static function prepereUrlKey($baseString){
		$urlKey = self::clean($baseString);
		$urlKey = strtolower($urlKey);
		
		if ($urlKey==null) {
			$urlKey=self::randomCode(12,2);
		}
		$urlKeyWork = str_replace(' ', '-', $urlKey);
		return $urlKeyWork;
	}
	public static function replaceChars($data) {
		$needles = array("ó", "ą", "ę", "ś", "ć", "ń", "ż", "ź", "ł", "Ó", "Ą", "Ę", "Ś", "Ć", "Ń", "Ź", "Ż", "Ł");
		$replace = array("o", "a", "e", "s", "c", "n", "z", "z", "l", "O", "A", "E", "S", "C", "N", "Z", "Z", "L");
		$data = str_replace($needles,$replace,$data);
		return $data;
	}	
	public static function clean($data) {
		$data = self::replaceChars($data);
		$data =  preg_replace("/([^a-zA-Z0-9\ \,\.\@\_\+\^\-])/i","", $data);
		return trim($data," ,;");
	}
	public static function cleanFileName($data) {
		$data = self::replaceChars($data);
		$data = str_replace(' ', '_', $data);
		$data =  preg_replace("/([^a-zA-Z0-9\.\_\-])/i","", $data);
		$data = strtolower($data);
		return trim($data," ,;");
	}
	public static function cleanClassName($data) {
		$data = self::replaceChars($data);
		$data =  preg_replace("/([^a-zA-Z0-9])/i","", $data);
		return trim($data," ,;");
	}

	public static function prepereGet($value) {
		$value = self::clean($value);
		return $value;
	}	
	public static function sqlInjesctionStringSecure($value) {
		$value = addslashes($value); 
		return $value;
	}	
}
?>
