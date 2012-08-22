<?php  /*windu.org image*/
class imageJsUpload extends image
{
    public function post($request) {
       	$info = image::saveIncomingImages($request->getVariable('bucket'),true);
        $json = json_encode($info);
		//error_log($json);
        echo $json;
    }

}
