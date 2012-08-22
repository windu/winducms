<?php /*windu.org core*/
class log
{
    public static function write($data,$bucket = 0)
    {
		$logDB = new logDB();
		$logDB->add($bucket, array("data" => $data));
    }  
}
?>
