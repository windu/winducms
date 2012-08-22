<?php
//TODO optymalizacja
function smarty_function_W($params)
{
	$output = widgetLoader::loadWidgetByName($params);
 	return $output;
}
?>