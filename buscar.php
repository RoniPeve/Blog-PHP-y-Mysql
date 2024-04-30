<?php

require 'admin/config.php';
require 'funciones.php';

$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: error.php');

}
if($_SERVER['REQUEST_METHOD']=='GET' && !empty($_GET['busqueda'])){
    $busqueda = limpiar_datos($_GET['busqueda']);
    $statement = $conexion->prepare("SELECT * FROM articulos where titulo LIKE :busqueda or texto LIKE :busqueda");
    $statement->execute(array(
        ':busqueda'=>"%$busqueda%"
    ));

    $resultados = $statement->fetchAll();

    if(empty($resultados)){
        $titulo = "No se encontraron resultado";
    }else{
        $titulo="Resultados de la busqueda: $busqueda";
    }
}else{
    header('Location:' .RUTA . '/index.php');
}

require 'views/buscar.view.php';
?>
