<?php

class User  {

    public $Name;
    public $LastName;
    public $User;
    public $Email;

    public function __construct($Name, $LastName, $User, $Email) {
        $this->Name = $Name;
    	$this->LastName = $LastName;
    	$this->User = $User;
    	$this->Email = $Email;
    } 	 

    public function getName() {
        return $this->Name;
    }

    public function getLastName() {
        return $this->LastName;
    }

    public function getUser() {
        return $this->User;
    }
    public function getEmail() {
        return $this->Email;
    }

    public function setName($Name) {
        $this->Name = $Name;
    }

    public function setLastName($LastName) {
        $this->LastName = $Lastame;
    }

    public function setUser($User) {
        $this->User = $User;
    } 

    public function setEmail($Email) {
        $this->Email = $Email;
    } 
}

?>