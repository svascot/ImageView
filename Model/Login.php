<?php
/**
 * Objeto tipo Turno que contiene un Entero Numero
 */
class Login {
    
    public $user;
    public $password;
    
    public function __construct($user, $password) {
      $this->user = $user;
      $this->password=$password;
    }   
}

?>