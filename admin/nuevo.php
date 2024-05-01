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
if($_SERVER['REQUEST_METHOD']=='POST'){
    $titulo = limpiar_datos($_POST['titulo']);
    $extracto = limpiar_datos($_POST['extracto']);
    $texto = limpiar_datos($_POST['texto']);
    $thumb = $_FILES['thumb']['tmp_name'];
    $archivo_subido='../' .$blog_config['carpeta_imagenes'] .$_FILES['thumb']['name'];
    move_uploaded_file($thumb,$archivo_subido);
    $statement = $conexion->prepare('INSERT INTO articulos (titulo,extracto,texto,thumb)
    values (:titulo, :extracto, :texto, :thumb)');

    $statement->execute(array(
        ':titulo'=> $titulo,
        ':extracto'=>$extracto,
        ':texto'=>$texto,
        ':thumb'=>$_FILES['thumb']['name']
    ));

    header('Location: '. RUTA . '/admin');
}
require '../views/nuevo.view.php';

?>