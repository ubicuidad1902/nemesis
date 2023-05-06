<?php

if($TAMANO_DIRECCION == 1 && $DIRECCION[0] == 'turismo-religioso'){
    require_once "../views/turismo-religioso/turismo-religioso.view.php";
}else
{
    require_once "../views/errors/errors.view.php";
}