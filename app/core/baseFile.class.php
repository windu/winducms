<?php /*windu.org core*/
class baseFile
{
	protected static function save($file)
	{
		$mainPath = FILES_DIR;
		$type = explode('/',$file['type']);	
		
		$nazwa = '';
		$katalog = '';
		$dest = '';
		
		while (file_exists($dest) or $nazwa=='' or $katalog=='')
		{
			$nazwa = generator::randomCode(6,2);
			$katalog = generator::randomCode(1,2);
			
			if (!is_dir("{$mainPath}{$type[0]}/$katalog"))
			{
				$oldumask = umask(0);
				if (!is_dir("{$mainPath}{$type[0]}"))
				{
					mkdir("{$mainPath}{$type[0]}", 0777);
				}
				mkdir("{$mainPath}{$type[0]}/$katalog", 0777);
				umask($oldumask);					
			}
			$dest = "{$mainPath}{$type[0]}/{$katalog}/{$nazwa}.{$type[1]}";
		}
		if(move_uploaded_file($file['tmp_name'],$dest))
		{
			$data['path']=$type[0].'/'.$katalog;
			$data['fileName']=$nazwa.'.'.$type[1];
			return $data;			
		}
		else
		{
			return false;
		}

	}
	public static function readFile($path)
	{
		$data = file_get_contents($path);
		return $data;
	}
	public static function saveFile($path,$data)
	{
		return file_put_contents($path, $data);
	}
	public static function createDir($path) {
		if(is_dir($path)) return false;
		mkdir($path, 0777);
		return true;
	}
	//delete files or if is dir delete dir
	public static function delete($path)
	{
		if(is_dir($path)){
			return baseFile::deleteDir($path);
		}elseif(file_exists($path)){
			unlink($path);
			return true;
		}
		return false;
	}
	public static function deleteDir($dir)
	{
	    $dirPath=$dir;
	    $dirDP = opendir( $dirPath ); 
    
        while( $element = readdir( $dirDP ))
        { 
             if ($element!='.' and $element!='..')
             { 
                 if ( is_file( $dirPath . "/" . $element ))
                 { 
                     unlink( $dirPath . "/" . $element ); 
                 }
                 else if (is_dir($dirPath . "/" . $element))
                 {
                 	self::deleteDir($dirPath . "/" . $element);
                 }
             } 
        } 
        closedir($dirDP); 
        rmdir( $dirPath ); 		
	}
	public static function prepereFileVariable($filess){
		foreach ($filess as $files){
			if(is_array($files['name'])){
				foreach ($files as $key => $filesLine){
					$filesFin[$key] = $filesLine[0];
				}
				$fin[] = $filesFin;
			}else{
				$fin[] = $files;
			}
		}
		return $fin;
	}
	public static function getFilesList($dir,$fileType = null,$subFolders = false,$sort = null){
		if($handle = opendir($dir))
		{ $k=0;
			while (false !== ($file = readdir($handle)))
			{
				if ($file != "." && $file != ".." && $file != ".svn")
				{
					$fName = $file; $file = $dir.$file;
					if (is_dir($file) and ($subFolders==true))
					{
						$files[$fName]->name=$fName;
						$files[$fName]->path=$file;
						$files[$fName]->subdir=self::getFilesList($files[$fName]->path.'/',$fileType,true);
					}
					elseif ((is_file($file)) and ($file!=''))
					{
						if (self::isFileType($fileType, $fName))
						{
							$files[$fName]->name=$fName;
							$files[$fName]->path=$file;
						}
					}
					elseif ($fileType=='dir'){
						$files[$fName]->name=$fName;
						$files[$fName]->path=$file;						
					}
				}
			}
		}
		closedir($handle);
		return $files;
	}
	public static function isFileType($fileType,$fName)
	{
		if($fileType!=null)
		{
			$isType = false;
			if(is_array($fileType))
			{
				foreach ($fileType as $type)
				{
					if(stristr(strtolower($fName),'.'.strtolower($type))){$isType = true;}
				}
			}
			else
			{
				if(stristr(strtolower($fName),'.'.strtolower($fileType))){$isType = true;}								
			}
			return $isType;
		}
		else
		{
			return true;
		}
		return false;
	}
	public static function getSize($path)
	{
		if (!is_dir($path))
		return filesize($path);
		$size = 0;
		foreach (scandir($path) as $file)
		{
			if ($file=='.' or $file=='..')
			continue;
			$size+=self::getsize($path.'/'.$file);
		}
		return $size;
	}	
	public static function uploadTo($destinationDir,$file)
	{
		if (file_exists($destinationDir.$file["name"])){unlink($destinationDir.$file["name"]);}
	    move_uploaded_file($file["tmp_name"],$destinationDir.$file["name"]);
	}
	public static function copyDir($src,$dst,$exclude = array()) {
		$dir = opendir($src); 
		@mkdir($dst); 

		while(false !== ( $file = readdir($dir)) ) { 
			if (( $file != '.' ) && ( $file != '..' ) && ( $file != '.svn' ) && (!in_array($file,$exclude))) { 
				if ( is_dir($src.'/'.$file.'/')) { 
					self::copyDir($src.'/'.$file.'/', $dst.'/'.$file.'/', $exclude); 
				} 
				else {  
					copy($src . '/' . $file,$dst . '/' . $file); 
				} 
			} 
		}
		closedir($dir); 
	}
	public static function getExternalFileContent($url) {
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_URL, $url); 
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}
	public static function checkCHMOD($path,$exclude = array()) {
		$dir = opendir($path); 

		while(false !== ( $file = readdir($dir)) ) { 
			if (( $file != '.' ) && ( $file != '..' ) && ( $file != '.svn' ) && (!in_array($file,$exclude))) { 
				if ( is_dir($path.'/'.$file.'/')) { 
					if (!@is_writable($path.'/'.$file) and !@is_readable($path.'/'.$file)) {
						$error['file'][] = $path.'/'.$file;
					}
					self::checkCHMOD($path.'/'.$file,$exclude); 
				} 
				else {  
					if (!@is_writable($path.'/'.$file) and !@is_readable($path.'/'.$file)) {
						$error['dir'][] = $path.'/'.$file;
					}					
				} 
			} 
		}
		closedir($dir); 
		return $error;
	}	
	public static function rename($oldname,$newname) {
		return rename($oldname, $newname);
	}
}

?>