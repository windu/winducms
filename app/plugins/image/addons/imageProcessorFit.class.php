<?php

class imageProcessorFit extends imageProcessor {
	
	public function process() {
	
		$dw = $this->width;
		$dh = $this->height;

		$imagedata = getimagesize($this->oryginalPath);

		$w = $imagedata[0];
		$h = $imagedata[1];

		$wr = $dw/$w;
		$hr = $dh/$h;

		$ratio = $wr<$hr ? $wr : $hr;

		$thumb = ImageCreateTrueColor($w*$ratio, $h*$ratio);
		
		imagecopyResampled($thumb, $this->imageData, 0, 0, 1, 1, $ratio*$w, $ratio*$h, $w-2, $h-2);

		return $thumb;
	}
}

?>