<?php
namespace App\Models; 
use Respect\Validation\Validator as Validator;

class User extends \ActiveRecord\Model{
// VALIDATION
	public function validate(){
		if(!Validator::email()->validate($this->email)){
			$this->errors->add('email', "Não e valido");
		}
	}

	static function authenticate($user,$pass){
		if(isset($_SESSION['id'])){
			unset($_SESSION['id']);
		}
		$usuario=static::find(array('conditions'=>array("usuario='".$user."' and clave='".$pass."'")));
		if(!$usuario){
			return false;
		}

		else{
			$_SESSION['id']=$usuario->id;
			$_SESSION['usuario']=$usuario->usuario;
			$_SESSION['autentica']=true;
			$_SESSION['date']=date('d-m-Y h:i:s', strtotime("+30 minutes"));
			$_SESSION['type']='User';
			return true;
		}
	}
}
?>
