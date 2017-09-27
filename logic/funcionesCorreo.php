<?php 
include 'controladorCorreo.php';
include 'db_connect.php';
require 'PHPMailer/PHPMailerAutoload.php';
require 'constantes.php';
class NewEmailService {
	
	function __constructor(){
		parent::__construct();
	}

	public function sendMail($informacionCorreo){

		$mail = new PHPMailer();
		/**   Configuracion de PHPMailer   **/
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = 'smtp.gmail.com';
		$mail->Username = ''; //correo desde el cual se enviara la información
		$mail->Password = EMAIL_PASSWORD;
		//Seguir el link con la cuenta indicada
		//https://www.google.com/settings/security/lesssecureapps
		$mail->SMTPSecure = false;
		$mail->Port = 587;

		/*============================================================*/
		/**  Definicion del tiempo **/ 
		//date_default_timezone_set('America/Bogota');
		//$hoy = getdate();
		$asunto = "Cabs Capital";
		/*============================================================*/
		/** Configuracion del correo a Enviar*/
		$mail->setFrom('');// Remitente
		$mail->addAddress('');// Destinatario

		$mail->Subject = $asunto;
		$mail->Body =

		''.$informacionCorreo->getMessage().'" 

		Enviado por :.

		Nombre: '.$informacionCorreo->getName().'
		Correo: '.$informacionCorreo->getEmail().'

		Este mensaje fue enviado desde Cabs Capital, porfavor no responder este mensaje.

		';
		/*============================================================*/

		/** Envio del Email **/ 
		if (!$mail->send()) {
			// echo "Error del PHPMailer...".$mail->ErrorInfo;
			return false;
		}else{
			return true;
			// echo "El correo se envio...";
		}
	}	
}

?>