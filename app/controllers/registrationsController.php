<?php 
namespace App\Controllers;
use \Core\View;
use \App\Models\User;
class registrationsController extends Controller{
	public function new(){
		View::set('title','Cadastro de Usuario');
		View::render('registrations/new');
	}

	public function create(){
		$user=new User($_POST['User']);
		if($user->save()){
			$this->msg->success('Cadastro realizado com sucesso!','/');
		}
		else{
			$this->msg->error('Cadastro Falhido','/');

		}
	}
}

 ?>