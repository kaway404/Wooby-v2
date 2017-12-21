<?php
namespace App\Models; 
use Respect\Validation\Validator as Validator;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class User extends \ActiveRecord\Model{
// Callbacks
	static $before_save=['set_confirmation_token'];
	static $after_create=['send_confirmation_email'];
// VALIDATION
	public function validate(){
		// Email no puede estar vacio
		if(!Validator::email()->validate($this->email)){
			$this->errors->add('email', "Não e valido");
		}
		// Email no puede estar duplicado
		if(static::exists(['conditions'=>['email = ?',$this->email]])){
			$this->errors->add('email',"ja existe");
		}
		// Username no puede estar duplicado
		if(static::exists(['conditions'=>['username = ?',$this->username]])){
			$this->errors->add('username',"ja existe");
		}

	}
	
	static function authenticate($email,$pass){
		if(isset($_SESSION['id'])){
			unset($_SESSION['id']);
		}
		$usuario=static::find_by_email($email);
		if(!$usuario){
			return false;
		}
		if(!$usuario->password==password_verify($pass)){
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

	public function set_confirmation_token(){
		$this->confirmation_token=md5($this->email.$this->username);
	}
	public function send_confirmation_email(){
		$mail = new PHPMailer(true); 
		try{
			$mail->SMTPDebug = 3;
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'luxrafacm@gmail.com';
			$mail->Password = 'Danapacmb0';
			$mail->SMTPSecure = 'tls';
			$mail->Port = 587;
			$mail->SMTPOptions = array(
				'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
				)
			);
			$mail->setFrom('luxrafacm@gmail.com', 'Equipe do wooby');
			$mail->addAddress($this->email);
			$mail->Subject = 'Confirme sua conta';
			$mail->Body= 
			'Olá usuário, tivemos uma solicitação de criação de conta em nossos servidores no nome de:
			Para confirmar sua conta, clique no link a baixo! <br>

			LINK';
			if($mail->send()){
				echo 'sent';
			}
			else{
				die();
			}
		}
		catch(\Exception $e){
			die($e->getMessage());

		}
	}
}
?>
