<?php 
define("PROJECTPATH", dirname(__DIR__));
define("APPPATH", PROJECTPATH . '/app');
define("DEBUG", true);
require "../vendor/autoload.php";
require_once('../app/controllers/homeController.php');
require_once('../core/view.php');
use PHPRouter\RouteCollection;
use PHPRouter\Router;
use PHPRouter\Route;
use PHPRouter\Config;
if (!session_id()) @session_start();

$config = Config::loadFromFile(PROJECTPATH.'/config/routes.yaml');
$router = Router::parseConfig($config);

/*
ActiveRecord\Config::initialize(function($cfg)
{
	$config=json_decode(file_get_contents('../config/settings.json'));
	$cfg->set_model_directory(PROJECTPATH.'/App/Models');
	$cfg->set_connections(array(
	'development' => 'mysql://'.$config->bd_user.':'.$config->bd_pass.'@'.$config->bd_host.'/biometric;charset=utf8'));
});
*/


if(DEBUG==false){
	try{
		$router->matchCurrentRequest();
	}
	catch(Exception $e){
		echo 'Se ha producido un error en la aplicación';
	}
}
else{
	$whoops = new \Whoops\Run;
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	$whoops->register();
	$router->matchCurrentRequest();
}


