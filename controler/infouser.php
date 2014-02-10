<?php

	include "connection.php";
	session_start();
	echo "1";
	$iduser = $_SESSION['session_user'];


	echo "2";
	$info = mysql_query("select * FROM user WHERE iduser = '".$iduser."'",$connection);
	echo "3";
	$row = mysql_fetch_array($info);
	echo "4";
	$_SESSION['session_user_name']= $row['name'];
	$_SESSION['session_user_last']= $row['last_name'];
	$_SESSION['session_user_email']= $row['email'];
	echo "5";

	header('Location: ../home.php');

?>