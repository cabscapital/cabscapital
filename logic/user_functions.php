<?php
include 'user_controller.php';
include 'db_connect.php';

class User{

	function __constructor()
	{
		parent::__construct();
    }

    function insert($user2)
    {	
    	$user = $user2;

    	$id = $user->getIdUser();
	    $nombres = $user->getNombres();
	    $apellidos = $user->getApellidos();
	    $fecha = $user->getFechaNacimiento();
	    $pais =	$user->getPais();
		$ciudad = $user->getCiudad();
	    $referente = $user->getReferente();
	    $email = $user->getEmail();
	    $password = $user->getPassword();
	    $estado = $user->getEstado();
	    $tipo = $user->getTipo();

    	$con=connect(); 

    	if ($con->connect_error) {
      		die("La conexion falló: " . $conexion->connect_error);
    	}

    	$tbl_name = "usuario";

    	$sql = "INSERT INTO $tbl_name VALUES (
	    	'$id',
	    	'$nombres',
	    	'$apellidos',
	    	'$fecha',
	    	'$pais',
	    	'$ciudad',
	    	'$referente',
	    	'$email',
	    	'$password',
	    	'$estado',
	    	'$tipo')";

    	$result = $con->query($sql);

		if ($result == true) {
    		return true;
		} else {
    		return false;
		}

		$con->close();
	}

	function updateActivate($mail){
		$Email = $mail;

		$con=connect(); 

    	if ($con->connect_error) {
      		die("La conexion falló: " . $conexion->connect_error);
    	}

    	$tbl_name = "usuario";

		$sql1 = "SELECT * FROM $tbl_name WHERE Email='$Email'";
    	$result1 = $con->query($sql1);    	

    	if ($result1->num_rows > 0) {
    		$sql = "UPDATE $tbl_name SET Estado='Activo' WHERE Email='$Email'";
	    	$result = $con->query($sql);
    		if ($result == true) {
    			return true;
			} else {
    			return false;
			}
    	} else {
    		return false;
    	}
		$con->close();
	}

	function updateDeactivate($mail){
		$Email = $mail;

		$con=connect(); 

    	if ($con->connect_error) {
      		die("La conexion falló: " . $conexion->connect_error);
    	}

    	$tbl_name = "usuario";

    	$sql1 = "SELECT * FROM $tbl_name WHERE Email='$Email'";
    	$result1 = $con->query($sql1);

		if ($result1->num_rows > 0) {	    	

	    	$sql = "UPDATE $tbl_name SET Estado='Inactivo' WHERE Email='$Email'";

	    	$result = $con->query($sql);

			if ($result == true) {
	    		return true;
			} else {
	    		return false;
			}
		}else{
			return false;
		}
		
		$con->close();
	}

	function updatePassword($Email_ , $newPassword){
		$Email = $Email_;
		$password = $newPassword;

		$con=connect(); 

    	if ($con->connect_error) {
      		die("La conexion falló: " . $conexion->connect_error);
    	}

    	$tbl_name = "usuario";

    	$sql1 = "SELECT * FROM $tbl_name WHERE Email='$Email'";
    	$result1 = $con->query($sql1);

		if ($result1->num_rows > 0) {	    	

	    	$sql = "UPDATE $tbl_name SET Password = '$password' WHERE Email='$Email'";

	    	$result = $con->query($sql);

			if ($result) {
	    		return true;
			} else {
	    		return false;
			}
		}else{
			return false;
		}		
		$con->close();
	}
}

?>