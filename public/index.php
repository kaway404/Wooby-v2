<?php 
define("PROJECTPATH", dirname(__DIR__));
define("APPPATH", PROJECTPATH . '/app');
define("DEBUG",false);

require "../vendor/autoload.php";
use PHPRouter\RouteCollection;
use PHPRouter\Router;
use PHPRouter\Route;
use PHPRouter\Config;
$config = Config::loadFromFile(PROJECTPATH.'/config/routes.yaml');
$router = Router::parseConfig($config);
/*
require_once('../app/controllers/controller.php');
require_once('../app/controllers/homeController.php');
require_once('../app/controllers/sessionsController.php');
require_once('../app/models/User.php');
require_once('../core/view.php');
*/
if (!session_id()) @session_start();
function autoload_classes($class_name){
	$filename = PROJECTPATH . '/' . str_replace('\\', '/', $class_name) .'.php';
	if(is_file($filename))
	{
		include_once $filename;
	}
	else{
		echo str_replace('\\', '/', $class_name.'<br>');
		echo $filename;
	}
}
spl_autoload_register('autoload_classes');





ActiveRecord\Config::initialize(function($cfg)
{
	
	$cfg->set_model_directory(PROJECTPATH.'/App/Models');
	$cfg->set_connections(array(
	'development' => 'mysql://root:Silvereye1990@localhost/wooby;charset=utf8'));
});



if(DEBUG==false){
	try{
		$router->matchCurrentRequest();
	}
	catch(Exception $e){
		die($e->getMessage());
	}
}
else{
	$whoops = new \Whoops\Run;
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	$whoops->register();
	$router->matchCurrentRequest();
}


