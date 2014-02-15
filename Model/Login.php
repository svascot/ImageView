<?php
class Login {
    
    private $user;
    private $password;
    
    public function __construct($user, $password) {
      $this->user = $user;
      $this->password=$password;
    }   
    public function getUser() {
        return $this->user;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function setPassword($password) {
        $this->password = $password;
    }


}

?>