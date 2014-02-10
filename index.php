<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	 <title>ImageView!</title>
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

	<div id="content" style=" width:100%;">

		<div style="float:left; width:33%">

			<h1 style="color:#006699; ">Sign In</h1>
			<table>	
				<form action="/controler/login.php" method="post">
		
				<tr>
				<td><label>Username</label></td> <td><input type="text" name="usr_name"></td> 
				</tr>
	
				<tr>
				<td><label>Password</label></td><td> <input type="password" name="usr_pass"> </td>
				</tr>
	

				<tr>
				<td></td><td><input type="submit" value="Sign in"></td>
				</tr>
		
				</form> 
			</table>
				<?php session_start(); echo $_SESSION['message'];?>
			<br>
			
		</div>
		<div style="float:left;height:100%;width:33%;">	
		<br><br>			
			<a href="home.php" style="text-decoration:none;">
				<h1 style="color:#006699; ">Go to View Pictures Now!</h1>
		 	</a>	
		</div>

		<div style="float:left;height:100%;width:33%">	
			<br><br>		
			<a href="signup.php" style="text-decoration:none;">
				<h1 style="color:#006699; ">Sign Up to upload <br>your Pictures!</h1>
		 	</a>	
		</div>

	</div>

	<div id="footer" style="background-color:#006699;clear:both;color:white;">
		<br><br>
		Santiago Vasco T - Ingenieria de Sistemas - Universidad EAFIT - 2014 
		<br><br><br>
	</div>

</div>


</center>
</body>
</html> 