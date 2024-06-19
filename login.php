<?php
session_start();
include ("conexion.php");

$usuario = $_REQUEST['usuario'];
$clave = $_REQUEST['clave'];

$sql = "SELECT * FROM cliente WHERE  
usuario = '$usuario' AND clave= '$clave'";
//die($sql);
$query=mysqli_query($mysqli,$sql);
$counter=mysqli_num_rows($query);
if ($counter==1){
  while ($reg=mysqli_fetch_array($query)){
	$_SESSION['usuario']=$reg['usuario'];
  //$_SESSION['tipo']=$reg['tipo_usuario'];
  $_SESSION['id']=$reg['id'];
  
}
	   print "<script>alert(\"Bienvenido.\");window.location='index-usuario.php';</script>";

} else {
    print "<script>alert(\"Usuario incorrecto.Intente de nuevo.\");window.location='index.php';</script>";
}

?>