<?php
	
	include ("../logic/conex.php");

	$consulta = "SELECT * FROM usuario";

	$registro = mysql_query($consulta,$dbx);
	
	$tabla = "";
	
	while($row = mysql_fetch_array($registro)){		

		$tabla.='{
				  "id":"'.$row['idUsuario'].'",
				  "nombres":"'.$row['Nombres'].'",
				  "apellidos":"'.$row['Apellidos'].'",
				  "fecha":"'.$row['fechaNacimiento'].'",
				  "pais":"'.$row['Pais'].'",
				  "ciudad":"'.$row['Ciudad'].'",
				  "referente":"'.$row['Referente'].'",
				  "email":"'.$row['Email'].'",
				  "password":"'.$row['Password'].'",
				  "estado":"'.$row['Estado'].'",				 
				  "tipo":"'.$row['Tipo'].'"
				},';		
	}	

	$tabla = substr($tabla,0, strlen($tabla) - 1);

	echo '{"data":['.$tabla.']}';	

?>