<?php
function Conexion_pozos(){
	include("../logic/db_config.php");
	
    $db=mysql_connect(DB_SERVER,DB_USER,DB_PASSWORD) or die("No se conecto al servidor");
            mysql_select_db(DB_DATABASE,$db) or die ("No se conecto a la base de datos");
            return $db;
}
$dbx=Conexion_pozos();
?>