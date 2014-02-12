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
}

?>