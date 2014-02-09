<?php 
//inicio.


$user = $_POST['usr_name'];
$pass = $_POST['usr_pass'];



include "connection.php";

	$login = mysql_query("select * FROM login WHERE iduser = '".$user."'",$connection);
	$row = mysql_fetch_array($login);

	$userbd = $row['iduser'];
	$passbd = $row['password'];

if($user != null and $pass != null){
	if($user == $userbd){ 
		if($pass == $passbd){
			
			session_start();
			$_SESSION['session_user'] = $userbd;
			$_SESSION['session_pass'] = $passbd;
			header('Location: ../home.html');

		}else{
			header('Location: ../index.html');
		}
	}else{
		header('Location: ../index.html');
	}
}else{
	header('Location: ../index.html');
}
?>