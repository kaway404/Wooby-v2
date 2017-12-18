<?php 
namespace App\Controllers;
class Controller{
	public function __construct(){

		$this->msg=new \Plasticbrain\FlashMessages\FlashMessages();
		$this->month=(int) (isset($_GET['month'])? $_GET['month'] : date('m')) ;
		$this->year=(int) (isset($_GET['year'])? $_GET['year'] : date('Y'));
	}
	protected function require_auth(){
		if(!\App\Models\User::is_authenticated()){
			$this->msg->error('Inicie sesión para continuar','/sessions/new');
		}
	}

}

?>