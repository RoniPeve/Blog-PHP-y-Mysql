<?php

require 'admin/config.php';
require 'funciones.php';

$conexion = conexion($bd_config);
$id_articulo = id_Articulo($_GET['id']);
if(!$conexion){
    header('Location: error.php');

}

if(empty($id_articulo)){
    header('Location: index.php');

}
$post = obtener_post_por_id($conexion,$id_articulo);
if(!$post){
    header('Location: index.php');

}
$post = $post[0];


require 'views/single.view.php';

?>