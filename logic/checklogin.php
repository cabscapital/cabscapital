<?php
session_start(); 
?>
<?php
include ("db_connect.php");

$con=connect();

if ($con->connect_error) {
	die("La conexion falló: " . $con->connect_error);
}

$tbl_name = "usuario";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM $tbl_name WHERE Email = '$username'";

$result = $con->query($sql);

if ($result->num_rows > 0) {     
}
$row = $result->fetch_array(MYSQLI_ASSOC);
if (strcmp ($password , $row['Password'] ) == 0) { 

	$_SESSION['loggedin'] = true;
	$_SESSION['username'] =  $row['Nombres'] ;
	$_SESSION['start'] = time();
	$_SESSION['expire'] = $_SESSION['start'] + (30 * 60);

?>
	<script type="text/javascript">
		alert("Bienvenido <?php echo $row['Nombres'] ?>");
	</script>	
	<?php

		if ($row['Tipo'] == 'A') {
			$_SESSION['Admin'] = true;
		?>
			<script type="text/javascript">
				window.location.href = "../miembros/cp.php";
			</script>	
		<?php		
		} else if($row['Estado'] == 'Activo'){
		?>
			<script type="text/javascript">
				window.location.href = "../miembros/cursos/index.php";
			</script>	
		<?php
		} else{
			?>
			<script type="text/javascript">
				window.location.href = "../miembros/inactive.php";
			</script>	
		<?php
		}	

} else { 
?>
	<script type="text/javascript">
		alert("Usuario ó contraseña invalidos");		
		window.location.href = "../miembros/index.php";
	</script>
<?php
}
mysqli_close($con); 
?>