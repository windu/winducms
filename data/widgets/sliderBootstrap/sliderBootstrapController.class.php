<?php
Class sliderBootstrapController extends widgetMainController
{		
	public function run() {
		$imagesDB = new imagesDB();	
		return array("imagesDB" => $imagesDB);
	}
}
?>