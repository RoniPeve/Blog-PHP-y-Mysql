<?php

session_start();
require 'config.php';
require '../funciones.php';

$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: ../error.php');

}
//comprobar sesion
if(empty($_SESSION['usuario'])){
    header('Location: ../login.php');
}
$id = limpiar_datos($_GET['id']);
if(!$id){
    header('Location: '.RUTA . '/admin');
}
$statement = $conexion->prepare("DELETE from articulos where id=:id");
$statement->execute(array(
    ':id'=>$id
));
header('Location: '.RUTA . '/admin');


require '../views/admin_index.view.php';

?>