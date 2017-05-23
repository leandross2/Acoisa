
<?php
require 'system/autoload.php';
require 'system/template.php';
require 'system/controller.php';
require 'system/helpers.php';
require 'defines.php';
//$page = new Page($_SERVER['REQUEST_URI']);

//print_r($page);


$routes = new Routes($_SERVER['REQUEST_URI']);


if(file_exists('controllers/' . $routes->uri[1] . '.php')){
	
	$control = $routes->uri[1] ;
	$method  = $routes->uri[2] ;

	$controller = new $control;
	//var_dump($control, $metodo);
	
	if(method_exists($controller, $method)){

		$controller->$method();
	}
	else{
		redirect404();
	}
}
else{
	redirect404();
}	
