<?php

namespace App\Models;

use App\Config\Config;

class Templates
{
    /* variables globales públicas */
    public $TITULO;
    public $DESCRIPCION;
    public $PALABRAS_CLAVE;
    public $RUTA;
    public $NOMBRE_SISTEMA;
    public $DIRECCION = "";
    public $URL_ICONO = "";
    public $URL_IMAGEN = "";

    /* para poner comentarios */
    var $keyCaptcha_public = "";

    /* Librerías y archivos agregados extras */
    var $bootstrap = true;
    var $recaptcha = false;
    var $sweetAlert = true;
    var $cropper = false;

    function _construct()
    {
        /* Instancia de configuración */
        $CONFIGURACION = new Config();
        $this->RUTA = $CONFIGURACION->RUTA();
        $this->NOMBRE_SISTEMA = "Viva San Miguel el Alto";
        $this->TITULO = $this->NOMBRE_SISTEMA . " | Jalisco";
        $this->DESCRIPCION = "Sitio para desplegar la belleza de la ciudad de cantera rosa";
        $this->PALABRAS_CLAVE = "Página de turismo de San Miguel el Alto";
        $this->URL_ICONO = "";
        $this->URL_IMAGEN = "";
        $this->keyCaptcha_public = $CONFIGURACION->keyCaptcha_public;
        /* es lo que aparece cuando te buscan en google */
        /* La función del servidor ya quedó lista */
    }

    function header()
    {
        $estructura_header =
            /* Se establece de manera predeterminada la configuración
     para la página que visita el usuario.
     
     Se establece los metadatos para el posicionamiento en Google*/
            '<!DOCTYPE html>' .
            '<html lang="es">' .
            '<head>' .
            '<meta charset="UTF-8">' .
            '<meta http-equiv="X-UA-Compatible" content="IE=edge">' ./* Habilita la escalabilidad para ajustarse a cualquier tipo de pantalla con navegador de Microsoft */
            '<title>' . $this->TITULO . '</title>' .
            '<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable:no" name="viewport">' . /* que el contenido sea de un ancho total del dispositivo, scale en 1 es para que tome 
    toda la pantalla.  User - scalable es para que el usuario no pueda modificar los 2
    parámetros anteriores y el name viewport es una propiedad de css*/
            '<meta http-equiv= "Cache-control" content="no-cache">' .
            '<meta http-equiv="Pragma" content="no cache">' . /* esto es para el manejo de imágenes */
            '<meta http-equiv="Expires" content="0">' .
            '<meta name="keywords" content="' . $this->PALABRAS_CLAVE . '">' .
            '<meta name="description" content="' . $this->DESCRIPCION . '">' .
            '<meta name="robots" content="all">' .
            '<meta name="author" content="WEBMASTER - Ing. Rafael Muñoz Pérez">' .
            '<!-- Open Graph protocol -->' .
            '<meta property="og:title" content="' . $this->DESCRIPCION . '" />' .
            '<meta property="og:site_name" content="' . $this->TITULO . '" />' .
            '<meta property="og:type" content="website" />' .
            '<meta property="og:url" content="' . $this->RUTA . '" />' .
            '<meta property="og:image" content="' . $this->URL_IMAGEN . '" />' .
            '<meta property="og:image:type" content="image/png" />' .
            '<meta property="og:image:width" content="200" />' .
            '<meta property="og:image:height" content="200" />' .
            '<meta property="og:description" content="' . $this->PALABRAS_CLAVE . '" />' .
            '<meta name="twitter:title" content="' . $this->TITULO . '" />' .
            '<meta name="twitter:image" content="' . $this->URL_IMAGEN . '" />' .
            '<meta name="twitter:url" content="' . $this->RUTA . '" />' .
            '<meta name="twitter:card" content="" />' .
            '<link rel="stylesheet" href="' . $this->RUTA . 'Library/bootstrap/css/bootstrap.min.css">' .

            '</head>';
        echo $estructura_header;
    }

    function scripts()
    {
        $script_Cuerpo = '<script> let RUTA = "' . $this->RUTA . '"</script>';/* dentro de java esta una variable ruta que contiene
        la variable ruta de la direccion del directorio público */


        $script_Cuerpo .= '<script src=""></script>';
        $script_Cuerpo .= '<script src="'.$this->RUTA.'Library/jquery/jquery.js"></script>';
        $script_Cuerpo .= '<script src="'.$this->RUTA.'Library/popper/popper.min.js"></script>';
        $script_Cuerpo .= '<script src="'.$this->RUTA. 'Library/bootstrap/js/bootstrap.min.js">';
        echo $script_Cuerpo;
    }
}
