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
}

 ?>