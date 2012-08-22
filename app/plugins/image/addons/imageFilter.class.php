<?php
	
/**
 * Blurs image
 * @author Marten
 */
class imageFilter{

	public static function blur($imageData) {
		imagefilter($imageData, IMG_FILTER_SELECTIVE_BLUR);
		return $imageData;
	}
	public static function brighter($imageData) {
		imagefilter($imageData, IMG_FILTER_BRIGHTNESS, 30);
		return $imageData;
	}
	public static function grayscale($imageData) {
		imagefilter($imageData, IMG_FILTER_GRAYSCALE);
		return $imageData;
	}
	public static function bw($imageData) {
		imagefilter($imageData, IMG_FILTER_GRAYSCALE);
		return $imageData;
	}	
	public static function sepia($imageData) {
		imagefilter($imageData, IMG_FILTER_GRAYSCALE);
		imagefilter($imageData, IMG_FILTER_COLORIZE, 40, 40, 0);
	
		return $imageData;
	}	
	public static function contrast($imageData) {
		imagefilter($imageData, IMG_FILTER_BRIGHTNESS, 50);
		imagefilter($imageData, IMG_FILTER_CONTRAST,-30);
	
		return $imageData;
	}	
	public static function original($imageData) {
		return $imageData;
	}	
}

?>