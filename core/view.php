<?php 
namespace Core;
defined("APPPATH") OR die("Access denied");
class View{
	protected static $data;
	const VIEWS_PATH = "../App/Views/";
	const EXTENSION_TEMPLATES = "php";
	public static function render($template,$layout=NULL){
		if(!file_exists(self::VIEWS_PATH . $template . "." . self::EXTENSION_TEMPLATES))
        {
            throw new \Exception("Error: El archivo " . self::VIEWS_PATH . $template . "." . self::EXTENSION_TEMPLATES . " no existe", 1);
        }
        ob_start();
        extract(self::$data);
        include(self::VIEWS_PATH . $template . "." . self::EXTENSION_TEMPLATES);
        $str = ob_get_contents();
        ob_end_clean();
        if(!$layout){
            include(self::VIEWS_PATH.'layouts/application.php');
        }
        else{
           include(self::VIEWS_PATH.'layouts/'.$layout.'.php');
        }
        unset($_SESSION['flash']);
        unset($_SESSION['error']);

	}

	public static function set($name, $value)
    {
        self::$data[$name] = $value;
    }

}

 ?>