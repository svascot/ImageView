<?php

include '../controller/conexionUser.php';
include '../Model/User.php';

class dataAccessUser {

    private $conector;
    public static $dataAccess;
    
    private function __construct() {
        $this->db = conexionUser::instancia();
        $this->conector = $this->db->getConexion();
    }

    /**
     * Genera una instancia de la clase, siguiendo los parámetros de patrón de diseño Singleton
     * @return type dependenciaDao
     */
    public function instancia() {
        if (!isset(self::$dataAccess)) 
        {
            self::$dataAccess = new dataAccessUser();
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


   public function UserInfo($user) {

        $consulta = $this->consulta("select * FROM user WHERE iduser = '".$user."'");
        if ($this->num_rows($consulta) > 0) {
             while ($resultados = $this->fetch_array($consulta)) {
                 $userBean = new User($resultados['name'],$resultados['last_name'],$resultados['email'],$resultados['iduser']);    
                 return $userBean;
             }
        } else {
                return "Wrong user.";
            die;
        }
      
    }

    public function newUser($name,$lastname, $email, $user) {
     
        $consulta = $this->consulta("insert into user values ('".$name."','".$lastname."','".$email."','".$user."')");
             
    }

    public function Image($name,$user,$tag) {
     
        $consulta = $this->consulta("insert into images (name,user,tag) values ('".$name."','".$user."','".$tag."')");
             
    }

}

?>
