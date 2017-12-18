<?php 
namespace App\Controllers;
use \Core\View;
class homeController extends Controller{
	public function index(){
		View::set('title','Home');
		View::render('home/index');
	}
}

 ?>