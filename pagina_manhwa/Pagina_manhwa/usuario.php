<?php 
    $correo=(isset($_POST["correo"]))?$_POST["correo"]:"";
    $N_Usuario=(isset($_POST["n_usuario"]))?$_POST["n_usuario"] : "";
    $contraseña=(isset($_POST["contraseña"]))?$_POST["contraseña"] : "";
    $hash_clave = password_hash($contraseña, PASSWORD_DEFAULT, ['cost'=> 10]);

    $action =(isset($_POST['action']))?$_POST["action"] : "";

    $error = array();
    
    include ('conexion/conexion.php');

    switch ($action) {
        case 'guardar':

            if($correo == ""){
                $error['correo'] = "Escribe un Email";
            } 
            if($N_Usuario == ""){
                $error['n_usuario'] = "Escribe un Usuario";
            } 
            if($contraseña == ""){
                $error['contraseña'] = "Escribe una Contraseña";
            } 
            if(count($error) > 0){
   
                break;
            }

       
            $sql = $pdo->prepare("INSERT INTO usuarios (correo, usuario, contraseña) VALUES (?,?,?)");

            $sql->execute([$correo,$N_Usuario,$hash_clave]);

            if ($sql) {
                echo "Datos guardados correctamente";
            } else {
                echo "Error al guardar datos: " . implode(" ", $sql->errorInfo());
            }

            break;
            case 'iniciar':
                if($correo == ""){
                    $error['correo'] = "Escribe el Email";
                }
                if($contraseña == ""){
                    $error['contraseña'] = "Escribe la Contraseña";
                }
                if(count($error) > 0){
                    break;
                } 
                $sentencia = $pdo -> prepare ("SELECT correo,usuario, contraseña FROM usuarios WHERE correo = ?");
                $sentencia->execute([$correo]);
                $verificacion = $sentencia -> fetch();
                $contraseña_hasheada = $verificacion['contraseña'];
                $n_user=$verificacion['usuario'];

                session_start();
                $_SESSION["usuario"]= $N_Usuario;
                $_SESSION["correo"]= $correo;

                if ($verificacion&& password_verify($contraseña,$contraseña_hasheada)){
                    header("Location:principal.php");
                }else {
                    header("location:index.php");
                }     
                break;
                
                };

                /*session_start();
                $correo=$_SESSION['correo'];
                $senten=$pdo->prepare("SELECT * FROM usuarios WHERE correo=?");
                $senten->execute([$correo]);
                $usuarios = $senten -> fetch(PDO::FETCH_LAZY);

                if ($usuarios){
                    $correo=$usuarios['correo'];
                    $name=$usuarios['usuario'];
                    $clave=$usuarios['contraseña'];
                }  else {
                    print"  no se encontro nada ";
                }*/         
?>