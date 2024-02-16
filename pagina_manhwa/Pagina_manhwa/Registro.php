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
        <form method="POST" class="regis" >
            <H1>Registrate</H1>
            <img src="img/imagen1.png" heigth="120px" width="120px;">
            <input type="text" placeholder="<?php echo (isset($error['correo'])) ?$error['correo']:"Email"; ?>" name="correo" id="" value="<?php echo $correo ?>" />
            <input type="text" placeholder="<?php echo (isset($error['n_usuario'])) ?$error['n_usuario']:"Nombre de Usuario"; ?>" name="n_usuario" value="<?php echo $N_Usuario?>" />
            <input type="password" placeholder="<?php echo (isset($error['contraseña'])) ?$error['contraseña']:"Contraseña"; ?>"name="contraseña"value="<?php echo $contraseña ?>" />
            <button name="action" value="guardar">crear</button>
            <p class="message">¿Ya registrado?<a href="index.php"> Iniciar sesión</a></p>
        </form>
    </div>
</div>


</body>
</html>