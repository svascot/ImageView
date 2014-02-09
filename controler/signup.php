<?php


$name = $_POST['name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$user = $_POST['usr_name'];
$pass = $_POST['usr_pass'];
$pass2 = $_POST['usr_pass2'];




include "connection.php";

session_start();

if($name != null and $lastname != null and $email != null and $pass != null){
	if(strcmp(pass, pass2)){

		$insert = mysql_query("insert into user values ('".$name."','".$lastname."','".$email."','".$user."')",$connection);
		$insert = mysql_query("insert into login values ('".$user."','".$pass."')",$connection);
		
		
		$_SESSION['session_user'] = $user;
		header('Location: ../home.html');


	}else{
		//$_SESSION['message'] = "Invalid password";
		
	}
}else{
	//$_SESSION['message'] = "Llene todos los campos";
}


?>