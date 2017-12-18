<?php 
namespace App\Controllers;
use \Core\View;
class sessionsController{
	public function create(){
		if(User::authenticate($_POST['email'],$_POST['senha'])){
			echo 'true';
		}
		else{
			echo 'false';
		}
	}
}

 ?>