<?php
	//SQLite Database
	define('FILE_DB_PATH', __SITE_PATH.'/data/database/');
	define('FILE_DB_FILE', 'database.sqlite');

	//MySQL Database
	define('DB_HOST', '94.75.66.24');
	define('DB_NAME', 'windu');
	define('DB_USER', 'czajnik');
	define('DB_PASSWORD', 'adam20');	
	
	//Update serwer
	define('UPDATE_PATH', 'http://www.windu.org/update/');	
	
	//Plugins path
	define('PLUGIN_PATH', 'app/plugins');
	
	//User Widget path
	define('WIDGET_PATH', __SITE_PATH.'/data/widgets/');	
	
	//Template
	define('TEMPLATES_PATH',__SITE_PATH . '/data/themes/');
	
	//User Widget path
	define('LANGUAGES_PATH', __SITE_PATH.'/data/languages/');	
	
	//Incoming Files
	define('FILES_DIR', 'data/files/');

	//Plugins oddzielone przecinkiem
	define('PLUGINS', 'admin,database,front,html,image,mail,widget');
?>