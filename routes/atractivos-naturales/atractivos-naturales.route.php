<?php

if($TAMANO_DIRECCION == 1 && $DIRECCION[0] == 'atractivos-naturales'){
    require_once "../views/atractivos-naturales/atractivos-naturales.view.php";
}else
{
    require_once "../views/errors/errors.view.php";
}