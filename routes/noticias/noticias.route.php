<?php

if($TAMANO_DIRECCION == 1 && $DIRECCION[0] == 'noticias'){
    require_once "../views/noticias/noticias.view.php";
}else
{
    require_once "../views/errors/errors.view.php";
}