<?php /*windu.org image*/

Class image extends imageBase
{		
	public static function get(stdClass $image,$width = 0,$height = 0,$processor = 'natural',$filter = 'original') {
		$img = $image;
		$img->fullPath = FILES_DIR.$img->path.'/'.$img->fileName;
		$img->fullThumbPath = strtolower(FILES_DIR.$img->path.'/thumbs/'.$width.'_'.$height.'_'.$processor.'_'.$filter.'_'.$img->fileName);
		
		if (!file_exists($img->fullThumbPath))
		{
			if (!is_dir(FILES_DIR.$img->path.'/thumbs/'))
			{
				$oldumask = umask(0);
				mkdir(FILES_DIR.$img->path.'/thumbs/', 0777);
				umask($oldumask);					
			}
			self::prepere($image,$img->fullThumbPath, $width, $height, $processor, $filter);
		}
		return $img;
	}
	public static function getByEkey($ekey,$width = 0,$height = 0,$processor = 'Original',$filter = 'original'){
		$imgDB = new imagesDB();
		$img = $imgDB->getByEkey($ekey);
		if (is_object($img)) {
			$image = self::get($img,$width,$height,$processor,$filter);
		}
		return $image;
	}
	public static function getById($id,$width = 0,$height = 0,$processor = 'natural',$filter = 'original'){
		$imgDB = new imagesDB();
		$img = $imgDB->fetchRow("id = {$id}");
		if (is_object($img)) {
			$image = self::get($img,$width,$height,$processor,$filter);
		}
		return $image;
	}
	
	//zwraca tablice z danymi obrazkow, sciezkami itd...
	public static function getAll($where,$width = 0,$height = 0,$processor = 'natural',$order = null,$limit = null)
	{
		$imgDB = new imagesDB();
		$images = $imgDB->fetchAll($where,$order,$what='*',$limit);
		$allImages = array();
		
		foreach ($images as $img)
		{
			$allImages[$img['id']] = self::get($img['id'], $width, $height, $processor = 'natural',$order = null);
		}
		return $allImages;
	}
	
	
	//zapisuje obrazki przychodzace z formularza, wszystkie ktore napotka
	public static function saveIncomingImages($bucket = 0,$returnObject = false)
	{
		$imgDB = new imagesDB();
		//przygotowywuje zmienna na wypadek multiuploadu
		
		$files = self::prepereFileVariable($_FILES);

		foreach ($files as $file)
		{	
			$data = self::saveImage($file);
			
			if ($data!=false)
			{
				$pomName = explode('.',$file['name']);
				$data['name'] = $pomName[0];
				$data['type'] = self::imgType($file['name']);
				$data['size'] = $file['size'];
				$data['bucket'] = $bucket;
				$data['ekey'] = $imgDB->insert($data);
			}
			if ($returnObject == true) {
				$data['url'] = HOME.FILES_DIR.$data['path'].'/'.$data['fileName'];
				$data = (object)$data;
			}
			$images[] = $data;
		}
		
		return $images;
	}
	
	//usuwanie wsyztkich tam gdzie spelniony jest warunek where w bazie danych
	public static function deleteImage($where)
	{
		$imgDB = new imagesDB();
		$images = $imgDB->fetchAll($where);
		foreach ($images as $img)
		{
			if(self::deleteImageFiles($img->path,$img->fileName))
			{
				$imgId = $img->id;
				$imgDB->deleteRows("id=$imgId");
			}		
		}
	}
	public static function deleteImageById($id) {
		self::deleteImage("id = {$id}");
	}
	public static function deleteImageByBucket($bucketId) {
		self::deleteImage("bucket = '{$bucketId}'");
	}	
	public static function prepere(stdClass $image,$fullThumbPath, $width, $height, $processor, $filters) {
		$processorName = 'imageProcessor'.ucfirst($processor);
		
		$processor = new $processorName($image, $width, $height);
		$imageThumbData = $processor->process();
		$filters = explode('_', $filters);
		foreach($filters as $filter){
			
			$imageThumbData = imageFilter::$filter($imageThumbData);
		}

		$write_image = 'image'.$image->type;
		$write_image($imageThumbData, $fullThumbPath);
		// Free up memory (imagedestroy does not delete files):
		imagedestroy($imageThumbData);	
	}
	private static function imgType($name)
	{
		if((substr($name, -4, 4) == '.jpg' || substr($name, -4, 4) == 'jpeg') or (substr($name, -4, 4) == '.JPG' || substr($name, -4, 4) == 'JPEG'))
		{
			return "jpeg";
		}
		else if((substr($name, -4, 4) == '.gif') or (substr($name, -4, 4) == '.GIF'))
		{
			return "gif";
		}
		else if((substr($name, -4, 4) == '.png') or (substr($name, -4, 4) == '.PNG'))
		{
			return "png";
		}
	}
}
?>