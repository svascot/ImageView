<?php

	include "connectionUser.php";
	session_start();
	$iduser = $_SESSION['session_user'];
	$info = mysql_query("select * FROM user WHERE iduser = '".$iduser."'",$connectionUser);
	$row = mysql_fetch_array($info);
	$_SESSION['session_user_name']= $row['name'];
	$_SESSION['session_user_last']= $row['last_name'];
	$_SESSION['session_user_email']= $row['email'];
	header('Location: ../home.php');

?>