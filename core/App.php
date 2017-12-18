<?php 
namespace Core;
use Core\Routes;
defined("APPPATH") OR die("Access denied");

/**
* Es la instancia de la aplicacion, es invocada cada vez que se procesa una peticion
*/
class App{
	private $controller;
	private $method = 'index';
	private $_params = [];
	const NAMESPACE_CONTROLLERS = "\App\Controllers\\";
	/**
	* En el constructor cargo la ruta, transformo la url y manejo el request del usuario
	*/
	public function __construct(){
		$this->_controller = $url['controller'];
		$fullClass = self::NAMESPACE_CONTROLLERS.$this->_controller;
		$this->_controller = new $fullClass;
		if(isset($url['action'])){
			$this->_method = $url['action'];
			if(method_exists($this->_controller, $url['action'])){
				unset($url['action']);
			}
			else
			{
				throw new \Exception("Error Processing Method {$this->_method}", 1);
			}
			$this->_params = $url['params'];
			
		}
	}
	/**
	* Esta funcion no estoy seguro de si se use
	*/
	public function parseUrl()
	{
		if(isset($_GET["url"]))
		{
			return explode("/", filter_var(rtrim($_GET["url"], "/"), FILTER_SANITIZE_URL));
		}
	}
	/**
	* Llama al controlador/vista solicitado, pasando los parametros correspondientes desde aqui manejo las excepciones
	*/
	public function render(){
		call_user_func_array([$this->_controller, $this->_method], $this->_params);
	}
	/**
	* Controlador
	*/
	public function getController(){
		return $this->_controller;
	}
	/**
	* Vista
	*/
	public function getMethod(){
		return $this->_method;
	}
			/**
	* Parametros
	*/

	public function getParams(){
		return $this->_params;
	}
}

?>