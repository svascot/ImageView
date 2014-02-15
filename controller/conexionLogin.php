<?php

class conexionLogin {

    public static $connection;
    public  $conexion;
    
    /**
     * Establece la conexión con la Base de Datos
     */
    private function __construct() {
        $this->conexion = (mysql_connect("localhost", "root", "qhaWPR76")) or die(mysql_error());
        mysql_select_db("imageview_login", $this->conexion) or die(mysql_error());
    }
    
    // Retorna la Conexion.
    public function  getConexion(){
        return $this->conexion;
    }
    
    /**
     * Genera una instancia de la clase, siguiendo los parámetros de patrón de diseño Singleton
     * @return type connection
     */
    public static function instancia() {
        if (!isset(self::$connection)) {
            self::$connection = new conexionLogin();
            return self::$connection;
        } else {
            return self::$connection;
        }
    }



  

}

?>