<?php include("config.php")?>
<?php 

if (isset($_POST['guardar_registro'])){
    $nombre_apellido = $_POST['nombres'];
    $email = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    $edad = $_POST['edad'];
    $domicilio = $_POST['domicilio'];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
}

    $query = "INSERT INTO cliente(nombre_apellido,email,telefono,sexo,edad,domicilio,usuario,clave) VALUES ('$nombre_apellido','$email','$telefono','$sexo','$edad','$domicilio','$usuario','$clave')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Fallo en el query. Existe un problema en la base de datos.");
    }
    else{
        ?>
        <script>alert("Registro Guardado");</script>
        <?php 
        
    }

    //si quisiera redireccionar a index directamente:
    ?>
    <script>
    window.location = "index.php";
    </script>
