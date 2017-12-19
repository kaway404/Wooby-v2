<?php 
namespace App\Controllers;
use \Core\View;
use \App\Models\User;
class usersController extends Controller{
	public function edit($id){
		$user=User::find($id);
		View::set('title','Atualizar usuario');
		View::render('users/edit');
	}

	public function update($id){
		$user=User::find($id);
		if($user->update_attributes($_POST['User'])){
			$this->msg->success('Dados atualizados com successo','/');
		}
		else{
			$this->msg->error('dados Inválidos');
		}
	}
}

 ?>