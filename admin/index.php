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
$posts = obtener_post($blog_config['post_por_pagina'],$conexion);


require '../views/admin_index.view.php';

?>