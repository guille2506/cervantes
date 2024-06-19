<?php include("config.php")?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="/css/master.css">
  </head>
  <body>

  <style>
    body {
  margin: 0;
  padding: 0;
  background: url(./img/login.png) no-repeat center top;
  background-size: cover;
  font-family: sans-serif;
  height: 200vh;
}

.login-box {
  width: 320px;
  height: 750px;
  background: #000;
  color: #fff;
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
  padding: 70px 30px;
}

.login-box .avatar {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  position: absolute;
  top: -50px;
  left: calc(50% - 50px);
}

.login-box h1 {
  margin: 0;
  padding: 0 0 20px;
  text-align: center;
  font-size: 22px;
}

.login-box label {
  margin: 0;
  padding: 0;
  font-weight: bold;
  display: block;
}

.login-box input {
  width: 100%;
  margin-bottom: 20px;
}

.login-box input[type="text"], .login-box input[type="password"] {
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 16px;
}

.login-box input[type="submit"] {
  border: none;
  outline: none;
  height: 40px;
  background: #b80f22;
  color: #fff;
  font-size: 18px;
  border-radius: 20px;
}

.login-box input[type="submit"]:hover {
  cursor: pointer;
  background: #ffc107;
  color: #000;
}

.login-box a {
  text-decoration: none;
  font-size: 12px;
  line-height: 20px;
  color: darkgrey;
}

.login-box a:hover {
  color: #fff;
}

  </style>
    <div class="login-box">
      <img src="img/TT.png" class="avatar" alt="Avatar Image">
      <h1>Crear Cuenta</h1>

      <form action="guardar.php" method="POST">
      <div class="form-group">
            <input type="text" name="nombres" clas="form-control" placeholder="Ingrese Nombre y apellido" autofocus>
            </div>

            <div class="form-group">
            <input type="text" name="correo" clas="form-control" placeholder="Ingrese correo">
            </div>

            <div class="form-group">
            <input type="text" name="telefono" clas="form-control" placeholder="Ingrese telefono">
            </div>
            <div class="form-group">
            <label for="select">Sexo</label>
                <select name="sexo" id="sexo">
                    <option value="">Selecionar Sexo</option>
                    <?php
                    $query = "SELECT * FROM sexo;";                   
                    $result_sexo = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result_sexo)){?>
                         <option value="<?php echo $row['id']?>"><?php echo $row['sexo']?></option>
                        <?php } ?>
                </select>
            </div>

            <div class="form-group">
            <input type="text" name="edad" clas="form-control" placeholder="Ingrese edad">
            </div>

            <div class="form-group">
            <input type="text" name="domicilio" clas="form-control" placeholder="Ingrese domicilio">
            </div>

            <div class="form-group">
            <input type="text" name="usuario" clas="form-control" placeholder="Ingrese nuevo usuario">
            </div>

            <div class="form-group">
            <input type="text" name="clave" clas="form-control" placeholder="Ingrese nueva clave">
            </div>

        <input type="submit" name="guardar_registro" value="Guardar Datos">
        </form>
        <a href="#">Perdiste tu contraseña?</a><br>
        <a href="#">No tienes una cuenta?</a>
      
    </div>
    
  </body>
</html>