<?php

$name = $_POST['name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$user = $_POST['usr_name'];
$pass = $_POST['usr_pass'];
$pass2 = $_POST['usr_pass2'];

include 'businessLogic.php';

$businessLogic = new businessLogic();

$businessLogic->SignUp($name, $lastname, $email, $user, $pass, $pass2);

?>