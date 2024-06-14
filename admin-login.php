<?php
if (isset($_POST ["submit"])){

    $username = $_POST['user'];
    $password = $_POST['pass'];

    if($username == 'admin' && $password == "password"){
        header("Location: Billing.php");
    }
    else{
        echo "Username or Password is incorrect!";
    }

}


?>

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
  height: 100vh;
}

.login-box {
  width: 320px;
  height: 420px;
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
      <h1>Inicio de sesion</h1>
      <form>
        <label for="username">Nombre</label>
        <input type="text" placeholder="Enter Username">
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Enter Password">
        <input type="submit" value="Inicia sesion">
        <a href="#">Perdiste tu contraseña?</a><br>
        <a href="#">No tienes una cuenta?</a>
      </form>
    </div>
  </body>
</html>
