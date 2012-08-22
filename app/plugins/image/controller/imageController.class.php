<?php /*windu.org image controller*/
Class imageController extends controller
{	
	public function index(){
	
		if ($this->request->getVariable('transform')!=null){$transform = $this->request->getVariable('transform');}else{$transform = 'natural';}
		if ($this->request->getVariable('filters')!=null){$filters = $this->request->getVariable('filters');}else{$filters = 'original';}

		$image = image::getByEkey($this->request->getVariable('ekey'),
		$this->request->getVariable('width'),
		$this->request->getVariable('height'),
		$transform,
		$filters);
		
		$type = $image->type;
		$imagePath=__SITE_PATH.'/'.$image->fullThumbPath;

		$image = fopen($imagePath,'rb');
		header('Content-Type: image/'.$type);
		fpassthru($image);
		fclose($image);
	}
}
?>
