<?php 
//inicio.


$user = $_POST['usr_name'];
$pass = $_POST['usr_pass'];



include "connection.php";
	session_start();
	$login = mysql_query("select * FROM login WHERE iduser = '".$user."'",$connectionLogin);
	$row = mysql_fetch_array($login);

	$userbd = $row['iduser'];
	$passbd = $row['password'];

if($user != null and $pass != null){
	if($user == $userbd){ 
		if($pass == $passbd){
					
			$_SESSION['session_user'] = $userbd;
			header('Location: infouser.php');

		}else{
			$_SESSION['message'] = 'Invalid password!';
			header('Location: ../index.php');
		}
	}else{
		$_SESSION['message'] = 'Invalid User?';
		header('Location: ../index.php');
	}
}else{
	$_SESSION['message'] = '...and the User ans Pass??';
	header('Location: ../index.php');

}
?>