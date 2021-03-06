<?php
	
class imageProcessorFixed extends imageProcessor {
	
	public function process() {
	
		if ($this->width!=0){
			$dim = 'w';
			$size = $this->width;
		}else{
			$dim = 'h';
			$size = $this->height;
		}

		$imagedata = getimagesize($this->oryginalPath);
		$w = $imagedata[0];
		$h = $imagedata[1];

		$ratio = $dim=="w"?$size/$w:$size/$h;
		
		$thumb = ImageCreateTrueColor($ratio*$w, $ratio*$h);
		
		imagecopyResampled ($thumb, $this->imageData, 0, 0, 1, 1, $ratio*$w, $ratio*$h, $w-2, $h-2);

		return $thumb;
	}
}

?>