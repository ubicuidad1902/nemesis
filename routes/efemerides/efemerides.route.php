<?php

if($TAMANO_DIRECCION == 1 && $DIRECCION[0] == 'efemerides'){
    require_once "../views/efemerides/efemerides.view.php";
}else
{
    require_once "../views/errors/errors.view.php";
}