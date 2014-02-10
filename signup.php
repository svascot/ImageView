<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	 <title>ImageView! - signup</title>
</head>

<body style="font-family: arial;">
<center>
<div id="container" style="width:100%">

	<div id="header" style="background-color:#006699;">
		<br>
		<h1 style="margin-bottom:0; color: white; font-size:55px;"> IMAGESVIEW </h1>
		<br>
		<br>
	</div>

	<div id="content" style="margin-left:auto; margin-right:auto; width:100%;">
	<br><br>
		Create your account to upload your Picts!
		<br><br>
	<table>	
	<form action="/controler/signup.php" method="post">
	
	<tr>
	<td><label>Name</label></td> <td><input type="text" name="name"></td> 
	</tr>

	<tr>
	<td><label>Last Name</label></td> <td><input type="text" name="last_name"></td> 
	</tr>

	<tr>
	<td><label>Email</label></td> <td><input type="text" name="email"></td> 
	</tr>

	<tr>
	<td><label>Username</label></td> <td><input type="text" name="usr_name"></td> 
	</tr>

	<tr>
	<td><label>Password</label></td><td> <input type="password" name="usr_pass"> </td>
	</tr>

	<tr>
	<td><label>Repeat Pass</label></td><td> <input type="password" name="usr_pass2"> </td>
	</tr>

	<tr>
	<td></td><td><input type="submit" value="Sign Up"></td>
	</tr>
	
	</form> 
	</table>
	</div>
	<br>
	<div>
		<?php session_start(); echo $_SESSION['message'];?>		
	</div>
	<br><br>

<div id="footer" style="background-color:#006699;clear:both;color:white;">
<br><br>
	Santiago Vasco T - Ingenieria de Sistemas - Universidad EAFIT - 2014 
<br><br><br>
</div>

</div>


</center>
</body>
</html> 