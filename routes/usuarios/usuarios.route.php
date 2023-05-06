<?php

if($TAMANO_DIRECCION == 1 && $DIRECCION[0] == 'tradiciones'){
    require_once "../views/tradiciones/tradiciones.view.php";
}else
{
    require_once "../views/errors/errors.view.php";
}