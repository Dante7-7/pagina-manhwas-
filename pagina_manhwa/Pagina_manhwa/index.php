<?php 
require'usuario.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Diseño_Reg_Ini.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<!--luces del fondo-->
<div name="fondo de inicio">
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
</div>



<div class="login-page">
  <div class="form">
    <form class="login-form" method="post">
        <h1>Bienvenido Lector</h1>
    <img class="img1" src="img/imagen1.png" heigth="149px" width="150px;">
      <input type="text" placeholder="<?php echo (isset($error['correo'])) ?$error['correo']:"Email"; ?>" name="correo" id="correo"/>
      <input type="password" placeholder="<?php echo (isset($error['contraseña'])) ?$error['contraseña']:"Contraseña"; ?>" name="contraseña" id="contraseña" />
      <button name="action" value="iniciar">Iniciar</button>
      <p class="message">¿No registrado? <a href="Registro.php">Crea una cuenta</a></p>
    </form>
  </div>
</div>

</body>
</html>