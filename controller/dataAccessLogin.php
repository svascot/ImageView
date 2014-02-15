<?php

include '../controller/conexionLogin.php';
include '../Model/Login.php';

class dataAccessLogin {

    private $conector;
    public static $dataAccess;
    
    private function __construct() {
        $this->db = conexionLogin::instancia();
        $this->conector = $this->db->getConexion();
    }

    /**
     * Genera una instancia de la clase, siguiendo los parámetros de patrón de diseño Singleton
     * @return type dependenciaDao
     */
    public function instancia() {
        if (!isset(self::$dataAccess)) 
        {
            self::$dataAccess = new dataAccessLogin();
            return self::$dataAccess;
        } else {
            return self::$dataAccess;
        }
    }

    /**
     * Determina la posición en el arreglo de la consulta.
     * @param type $consulta
     * @return type Arreglo
     */
    public function fetch_array($consulta) {
        return mysql_fetch_array($consulta);
    }

     /**
     * Determina el número de filas resultantes en la consulta.
     * @param type $consulta
     * @return type Arreglo
     */
    public function num_rows($consulta) {
        return mysql_num_rows($consulta);
    }

     /**
     * Ejecuta la consulta en SQL.
     * @param type $consulta
     * @return type 
     */
    public function consulta($consulta) {
        $resultado = mysql_query($consulta, $this->conector);
        if (!$resultado) {
            echo 'MySQL Error: ' . mysql_error();
            exit;
        }
        return $resultado;
    }

     /**
     *Captura todas las consultas que se han realizado. 
     */
    public function getTotalConsultas() {
        return $this->total_consultas;
    }


    /**
     * 
     * realizando un Query que es enviado a la base de datos para que opere en ella.
     * @param type $password
     */
    public function login($user) {
     
        $consulta = $this->consulta("select * FROM login WHERE iduser = '".$user."'");
        if ($this->num_rows($consulta) > 0) {
             while ($resultados = $this->fetch_array($consulta)) {
                 $loginBean = new Login($resultados['iduser'],$resultados['password']);    
                 return $loginBean->getPassword();
             }
        } else {
                return "Wrong user.";
            die;
        }
      
    }

    public function newLogin($user,$pass) {
     
        $consulta = $this->consulta("insert into login values ('".$user."','".$pass."')");
             
    }



}

?>
