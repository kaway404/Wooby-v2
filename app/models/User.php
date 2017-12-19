<?php
namespace App\Models; 
use Respect\Validation\Validator as Validator;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class User extends \ActiveRecord\Model{
// Callbacks
	static $before_create=['set_confirmation_token'];
	static $after_create=['send_confirmation_email'];
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
// PRIVATE
	public function set_confirmation_token(){
		$this->confirmation_token=md5($this->email.$this->username);
	}

	public function send_confirmation_email(){
		$mail = new PHPMailer(true); 
		try{

			$mail->SMTPDebug = 2;
			$mail->isSMTP();
			$mail->Host = 'smtp1.example.com;smtp2.example.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'user@example.com';
			$mail->Password = 'secret';
			$mail->SMTPSecure = 'tls';
			$mail->Port = 587;


			$mail->setFrom('wooby@wooby.com', 'Equipe do wooby');
			$mail->addAddress($this->email);
			$mail->Subject = 'Here is the subject';
			$mail->Body    = 'Confirmation token';
			$mail->send();

		}
		catch(Exception $e){
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		}

	}
}
?>
