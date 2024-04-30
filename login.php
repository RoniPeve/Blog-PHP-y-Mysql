<?php

require 'admin/config.php';
require 'funciones.php';

$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: error.php');

}

require 'views/login.view.php';
?>
