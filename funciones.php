<?php


function conexion($bd_config){
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=' .$bd_config['basedatos'],$bd_config['usuario'], $bd_config['pass']);
        return $conexion;
    } catch (PDOException $te) {
        return false;        //throw $th;
    }
    
}

function limpiar_datos($datos){
    $datos = stripslashes(trim($datos));
    $datos = htmlspecialchars($datos);
    return $datos;
}
function pagina_Actual(){
    return  isset($_GET['p']) ? (int)$_GET['p'] : 1;
}
function obtener_post($post_por_pagina, $conexion){
    $inicio = (pagina_Actual()>1) ? pagina_Actual() * $post_por_pagina- $post_por_pagina : 0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS  * FROM articulos LIMIT $inicio, $post_por_pagina");
    $sentencia->execute();
    return $sentencia->fetchAll();

}

//funcione de obtener id
function id_Articulo($id){
    return (int)limpiar_datos($id);
}

function obtener_post_por_id($conexion, $id){
    $resultado = $conexion->query("SELECT * FROM articulos where id=$id limit 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}  

function fecha($fecha){
    $timestamp = strtotime($fecha);
    $meses = ['Enero', 'Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Setiempre','Octubre','Noviembre','Diciembre' ];
    $dia = date('d', $timestamp);
    $mes = date('m', $timestamp)-1;
    $year = date('Y', $timestamp);

    $fecha = "$dia de " .$meses[$mes] . " del $year";

    return $fecha;
}

function numero_paginas($post_por_pagina,$conexion){
    $total_post = $conexion->prepare("SELECT FOUND_ROWS() as total");
    $total_post->execute();
    $total_post= $total_post->fetch()['total'];

    $numero_paginas = ceil($total_post / $post_por_pagina);
    return $numero_paginas;
}
?>