<?php 
namespace App\Controllers\Backend;
use \Core\View;
class homeController{
	public function index(){
		View::set('title','Backend');
		View::render('/backend/home/index','backend');
	}
}

?>