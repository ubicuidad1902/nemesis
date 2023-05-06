<?php

if($TAMANO_DIRECCION == 1 && $DIRECCION[0] == 'eventos'){
    require_once "../views/eventos/eventos.view.php";
}else
{
    require_once "../views/errors/errors.view.php";
}