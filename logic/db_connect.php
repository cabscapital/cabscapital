<?php

function connect() {
    
    require_once __DIR__ . '/db_config.php';


    $con = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD,DB_DATABASE);


    return $con;
}

?>