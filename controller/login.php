<?php 
//inicio.

$user = $_POST['usr_name'];
$pass = $_POST['usr_pass'];

include 'businessLogic.php';

$businessLogic = new businessLogic();

$businessLogic->LoginUser($user,$pass);

?>