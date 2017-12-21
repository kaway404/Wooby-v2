<?php 
namespace App\Controllers;
use \Core\View;
use \App\Models\User as User;
class sessionsController{
	public function create(){
		if(User::authenticate($_POST['email'],$_POST['senha'])){
			echo 'true';
		}
		else{
			echo 'false';
		}
	}

	public function destroy(){
		unset($_SESSION['id'],$_SESSION['usuario'],$_SESSION['date'],$_SESSION['type']);
		$_SESSION['autentica']=false;
	}

	public function recover(){
		View::set('title',"Recuperar Senha");
		View::render('sessions/recover');
	}

	public function send_password_token(){
		$user=User::find_by_email($_POST['email']);
		/* Template de html faltando aqui */
	}
}

 ?>