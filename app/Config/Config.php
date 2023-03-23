<?php

namespace App\Config;

class Config{

    private $BD_Conectar;
    private $CONEXION;
    private $NOMBRE_SISTEMA;
    public  $key_Captcha_Public = "";/* una para llave pública y otra llave privada */
    public  $key_Captcha_Private = "";

    function _construct()

    {
        $this->BD_Conectar = array(
            'host' =>  'localhost',
            'database' => 'nemesis', 
            'username' => 'user_db_nemesis',
            'password' => 'user_db_nemesis'
        );
            $this->key_Captcha_Public = "";
        $this->key_Captcha_Private = "";
        $this->NOMBRE_SISTEMA = "nemesis";
       
    }

    public function obtener_Ruta(){
        return 'nemesis/';
    }

    public function obtener_Nombre_Sesion()    {
        return $this->NOMBRE_SISTEMA;
    }
    
    public function obtener_BD_Conexion(){
        return $this->BD_Conectar;
    }
    public function establecer_BD_Conexion($conectar){
        $this->BD_Conectar = $conectar;
    }
    public function obtener_Conexion($BD_Credenciales = false){
        $bd_Conectar = $this->obtener_BD_Conexion();
        $BD_Credenciales = ($BD_Credenciales)? $BD_Credenciales : $bd_Conectar['database'];
        $conexion=new \mysqli(
            $bd_Conectar['host'],
            $bd_Conectar['username'],
            $bd_Conectar['password'],
            $BD_Credenciales
        );
        $conexion ->set_charset('utf8');
        $this->CONEXION = $conexion;
        return $this->CONEXION;
    }  

    public function establecer_Conexion($conectar){
/* para ejecutar lo que se pidió en la anterior */
        $this->CONEXION = $conectar;
    }

    public function RUTA(){
        $ruta = $_SERVER['HTTP_HOST']; /* ejecuta una función directa en php y 
        me devuelve cómo se llama mi página */
        $ruta = $_SERVER['HTTP_HOST'];
        return 'http://'.$ruta.'/'.$this->obtener_Ruta();/* Regreso el 
        nombre de mi sitio localhost y nemesis */
    }

}