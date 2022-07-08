<?php
$conexion = null;
$servidor = 'localhost'; // servidor local 
$bd='registro'; // base de datos
$user = 'root'; // usuario de MySQL
$pass = 'root'; // contraseña de MySQL
try{
    $conexion =new PDO('mysql:hoste='.servidor.';dbname='.$bd, $user, $pass);
}catch (PDOException $e){
    echo "Error de conexion!";
    exit;
}
return $conexion;
?>




