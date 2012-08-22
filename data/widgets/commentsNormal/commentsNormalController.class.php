<?php
Class commentsNormalController extends widgetMainController
{		
	public function run() {
		$data = "Example Content";	
		return array("content" => $data);
	}
}
?>