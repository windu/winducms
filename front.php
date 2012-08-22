<?php /*windu.org by Adam Czajkowski*/
	ob_start();
	error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);
	/*** define the site path ***/
	define ('__SITE_PATH', realpath(dirname(__FILE__)));
	define ('__HOME', "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	define ('__BASE', "http://".$_SERVER['HTTP_HOST']);
	
	$pom = explode('/?', __HOME);
	define ('__HOME_NOGET', $pom[0]);
	
	try {
		include 'app/includes/config.php';
		include 'app/includes/init.php';
	}catch (Exception $e) {
		log::write($e->getMessage(),99);
	}
?>