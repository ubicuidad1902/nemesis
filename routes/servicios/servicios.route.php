<?php

if($TAMANO_DIRECCION == 1 && $DIRECCION[0] == 'servicios'){
    require_once "../views/servicios/servicios.view.php";
}else
{
    require_once "../views/errors/errors.view.php";
}