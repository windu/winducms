<?php
Class sliderNivoController
{		
	public function run() {
		$imagesDB = new imagesDB();	
		return array("imagesDB" => $imagesDB);
	}
}
?>