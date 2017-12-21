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
		$user->password=password_hash($user->password,PASSWORD_DEFAULT);
		if($user->save()){
			$this->msg->success('Cadastro realizado com sucesso, verifique seu email para confirmar sua conta','/');
		}
		else{
			$errors=$user->errors->full_messages();
			$this->msg->error(implode('<br>',$errors),'/');
		}
	}

	public function send_password_link(){

	}

	public function confirm($id,$token){
		$user=User::find($id);
		if($user->confirmation_token===$token){
			$user->confirmed=1;
			$user->save();
			$this->msg->success('Sua conta foi confirmada com sucesso','/');
		}
		else{
			$this->msg->error('Confirmaçao inválida','/');
		}
	}


}

 ?>