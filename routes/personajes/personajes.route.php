<?php

if($TAMANO_DIRECCION == 1 && $DIRECCION[0] == 'personajes'){
    require_once "../views/personajes/personajes.view.php";
}else
{
    require_once "../views/errors/errors.view.php";
}