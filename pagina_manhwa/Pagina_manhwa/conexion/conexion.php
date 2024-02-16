<?php 
$servidor="mysql:dbname=pagina_m;host=127.0.0.1";
$usuario='root';
$clave='Cache_ton@2505';

try {
    $pdo=new PDO($servidor, $usuario, $clave, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));
    echo "Conexion exitosa a la bd si esta 100%";
} catch (PDOException $e) {
    echo "Conexion fallida: " . $e->getMessage() ;
}



?>