<?php

if($TAMANO_DIRECCION == 1 && $DIRECCION[0] == 'clima'){
    require_once "../views/clima/clima.view.php";
}else
{
    require_once "../views/errors/errors.view.php";
}