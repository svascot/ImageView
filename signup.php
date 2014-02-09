<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>

<body style="font-family: arial;">
<center>
<div id="container" style="width:100%">

<div id="header" style="background-color:#6666FF;">
	<br>
	<h1 style="margin-bottom:0; color: white;"> IMAGESVIEW </h1>
	<br>
</div>

	<div id="content" style="background-color:#EEEEEE; margin-left:auto; margin-right:auto; width:100%; height:50%;">
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

	<br><br>

	
	</div>

<div id="footer" style="background-color:#6666FF;clear:both;color:white;">
<br>
	Santiago Vasco T - Ingenieria de Sistemas - Universidad EAFIT - 2014 
<br><br>
</div>

</div>


</center>
</body>
</html> 