<?php 
namespace App\Controllers;
use \Core\View;
class homeController{
	public function index(){

		View::set('title','Home');
		View::render('home/index');
	}
}

 ?>