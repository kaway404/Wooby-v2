<?php 
namespace App\Controllers;
class Controller{
	public function __construct(){
	}
	protected function require_auth(){
		if(!\App\Models\User::is_authenticated()){
			$this->msg->error('Inicie sesión para continuar','/sessions/new');
		}
	}

}

?>