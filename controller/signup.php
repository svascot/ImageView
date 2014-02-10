<?php

$name = $_POST['name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$user = $_POST['usr_name'];
$pass = $_POST['usr_pass'];
$pass2 = $_POST['usr_pass2'];

include "connection.php";
include "connectionUser.php";

session_start();

if($name != null and $lastname != null and $email != null and $pass != null){
	if(strcmp(pass, pass2)){
		$insert = mysql_query("insert into user values ('".$name."','".$lastname."','".$email."','".$user."')",$connectionUser);
		$insert = mysql_query("insert into login values ('".$user."','".$pass."')",$connectionLogin);
		$_SESSION['session_user'] = $user;
		header('Location: ../home.php');
	}else{
		$_SESSION['message'] = 'Invalid password';
		header('Location: ../signup.php');		
	}
}else{
	$_SESSION['message'] = 'Fill data';
	header('Location: ../signup.php');
}


?>