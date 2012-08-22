<?php /*windu.org core*/
class compress
{
	public static function zip($source, $destination)
	{
	    if (!extension_loaded('zip') || !file_exists($source)){throw new Exception('No ZIP extension Installed on yout Server!');}
	
	    $zip = new ZipArchive();
	    if (!$zip->open($destination, ZIPARCHIVE::CREATE)){throw new Exception('Can not create ZIP archive on destination path!');}
	
	    $source = str_replace('\\', '/', realpath($source));
	    
	    if (is_dir($source) === true and in_array($source,$exclude))
	    {
	        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);
	        foreach ($files as $file)
	        {
	        	if (stristr($file, '.svn') == FALSE) {
	        		$file = str_replace('\\', '/', realpath($file));
					
		            if (is_dir($file) === true)
		            {
		                $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
		            }
		            else if (is_file($file) === true)
		            {
		                $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
		            }
	        	}
	        }
	    }
	    else if (is_file($source) === true)
	    {
	       $zip->addFromString(basename($source), file_get_contents($source));
	    }
	    return $zip->close(); 
	}
}
?>
