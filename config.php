<?php

$mysql_host = "localhost"; 
$mysql_user = "root"; 
$mysql_pass = ""; 
$mysql_dbname = "kratos_gym"; 

$conn = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_dbname);
    if (!$conn){
        echo "Error: No se pudo conectar a MySQL.";
        echo "error: " . mysqli_connect_error();
        exit;
    }


?>
