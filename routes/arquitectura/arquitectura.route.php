<?php

if($TAMANO_DIRECCION == 1 && $DIRECCION[0] == 'arquitectura'){
    require_once "../views/arquitectura/arquitectura.view.php";
}else
{
    require_once "../views/errors/errors.view.php";
}