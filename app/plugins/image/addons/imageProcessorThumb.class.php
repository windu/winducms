<?php
	
class imageProcessorThumb extends imageProcessor {
	
	public function process() {
	
		$size = $this->parameters[0];

		$imagedata = getimagesize($this->oryginalPath);
		$w = $imagedata[0];
		$h = $imagedata[1];
		
		
		$sShorter = 0;
		$sx = 0;
		$sy = 0;
		if ($w>=$h) {
			$sShorter = $h;
			$sx = ($w-$sShorter)/2;	
		} else {
			$sShorter = $w;
			$sy = ($h-$sShorter)/4;
		}
		
		$thumb = ImageCreateTrueColor($size, $size);
		
		imagecopyResampled ($thumb, $this->imageData, 0, 0, $sx+1, $sy+1, $size, $size, $sShorter-2, $sShorter-2);
		return $thumb;
	}
}

?>