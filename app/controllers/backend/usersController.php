<?php 
namespace App\Controllers\Backend;
use \Core\View;
use \App\Models\User;
class usersController{
	public function index(){
		View::set('title','Backend');
		View::set('users',User::all());
		View::render('/backend/users/index','backend');
	}

	public function show($id){
		$user=User::find($id);
		View::set('title',$user->username);
		View::set('user',$user);
		View::render('/backend/users/show');
	}
}

?>