<?php 
namespace App\Controllers;
use \Core\View;
use \App\Models\User as User;

class registrationsController extends Controller{
	public function new(){
		View::set('title','Cadastro de Usuario');
		View::render('registrations/new');
	}

	public function create(){
		print_r($_POST);
		die();
		if($user->save()){
			$this->msg->success('Cadastro realizado com sucesso!','/');
		}
		else{
			$this->msg->error('Cadastro Falhido','/');

		}
	}

	public function send_password_link(){

	}

	public function confirm(){

	}


}

 ?>