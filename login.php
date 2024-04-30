<?php
session_start();
require 'admin/config.php';
require 'funciones.php';

$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: error.php');

}
if(isset($_SESSION['usuario'])){
    header('Location: admin/');
}
$errores = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    $statement = $conexion->prepare('SELECT * FROM usuarios where usuario = :usuario AND pass = :pass');
    $statement->execute(array(
        ':usuario'=>$usuario,
        ':pass'=>$password
    ));

    $resultado = $statement->fetch();
    if($resultado!==false){
        $_SESSION['usuario']=$usuario;
        header('Location: admin/');
    }else{
        $errores .='<li>Datos incorrectos</li>';
    }
}
require 'views/login.view.php';
?>
