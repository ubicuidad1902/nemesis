<?php

session_start();
date_default_timezone_set('America/Mexico_City');
require_once "../app/controller.php";

use App\Config\{Config};/* Instancio el espacio de trabajo de Config */


$CONFIG =new Config();/* instancio un nuevo objeto */
$RUTA = $CONFIG->RUTA();
/* Obtenemos la carpeta en donde está el proyecto */
$ruta = str_replace($CONFIG->obtener_Ruta(), "", $_SERVER['REQUEST_URI']);
$uri_solicitud = explode("?", $ruta)[0]; /* separamos los elementos en $_GET */
$USUARIO_SISTEMA = isset($_SESSION[$CONFIG->obtener_Nombre_Sesion()]) ?
$_SESSION[$CONFIG->obtener_Nombre_Sesion()] : false ;

$DIRECCION = isset($uri_solicitud) ? explode('/', $uri_solicitud) : false;
if($DIRECCION){
    $direccion_Array = []; /* Un arreglo se inicializa igualando a corchetes */
    foreach($DIRECCION as $key =>$valor){
        if($DIRECCION[$key] !='')/* comprobar que la llave no esté vacía */$direccion_Array[ ]= $DIR[$key];
    }
    $DIRECCION = $direccion_Array;/* para hacer una copia de lo que sí tenía información */
}

$TAMANO_DIRECCION = ($DIRECCION?  sizeof($DIRECCION): 0 );
if(!$DIRECCION){
    require_once "../views/index/index.view.php";
}
else {
    require_once "../views/errors/errors.view.php";
}