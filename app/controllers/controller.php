<?php 
namespace App\Controllers;
class Controller{
	public function __construct(){
		$this->msg=new \Plasticbrain\FlashMessages\FlashMessages();
	}
	protected function require_authentication(){
		if(!\App\Models\User::is_authenticated()){
			$this->msg->error('Inicie sesión para continuar','/sessions/new');
		}
	}

}

?>