<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	 <title>ImageView! - Home</title>
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

	<div id="content" style="width:100%;">
	
		<div style="float:left;width:300px;">
		<?php
		session_start();
		if ($_SESSION['session_user']) {
			echo '	<a href="/controller/kill.php" style="text-decoration:none;">
						<h5 style="color:#006699; ">Log Out!</h5>
		 			</a>
					<h3 style="color:#006699;text-decoration:none;"> 
						Hello '.$_SESSION['session_user_name'] .' do you wanna upload something? 
					</h3>';
		}else{

			echo '	<a href="index.php" style="text-decoration:none;">
						<h3 style="color:#006699; ">Sign in here!</h3>
		 			</a>';
			echo $_SESSION['messageUpload'];
		}
		?>	
			<table>	

				<form action="/controller/upload.php" method="post" enctype="multipart/form-data">
				<tr>
    	  			<td>Write a tag for this pic.</td>
    	  		</tr>
    	  		<tr>
     				<td><input name="tag" type="text" value="" /></td>
    	  		</tr>
				<tr>
					<td><input name="archivo" type="file" size="35" /> </td>
     			</tr>
     			<tr>
     				<td><input name="enviar" type="submit" value="Upload" /></td>
    	  		</tr>
    	  			<input name="action" type="hidden" value="" />    
 	   			</form>
 	   		</table>	
		</div>

		<div style="float:left; width:600px; ">

		<a href="/controller/showAll.php" style="text-decoration:none;">
						<h3 style="color:#006699; ">Show All!</h3> </a>
			<?php
				$folder = 'upload/';
				$filetype = '*.*';
				if ($_SESSION['filter'] == 'true') {
					$files = $_SESSION['images'];
				}else{
					$files = glob($folder.$filetype);
				}

					echo '<table>';
					$row = 0; #number of rows
				
					for($i=0; $i<count($files);$i++){
						
						if($row==5){
							echo '<tr>';
							$row=0;
						}
						echo '<td>';
						echo '<a href="'.$files[$i].'"/><img src="'.$files[$i].'"border = "0" style="border-color:#006699; width:150px;"/></a>';
						# esto imprime el nombre 
						# echo substr($files[$i], strlen($folder),strpos($files[$i],'.')-strlen($folder));
						echo '</td>';
						$row++;
				}
				echo "</table>";
			?>
		</div>

		<div style="float:right;">
			
			<h3 style="color:#006699;text-decoration:none;"> 
				Images filter
			</h3>

			<table>	

				<form action="/controller/filter.php" method="post" enctype="multipart/form-data">
				<tr>
     				<td><input name="tag" type="text" value="" /></td>
    	  		</tr>
				<tr>
     				<td><input name="filtrar" type="submit" value="Go!" /></td>
    	  		</tr> 
 	   			</form>
 	   		</table>	

		</div>

	</div>

	<div id="footer" style="background-color:#006699;clear:both; color:white;">
		<br><br>
			Santiago Vasco T - Ingenieria de Sistemas - Universidad EAFIT - 2014 
		<br><br><br>
	</div>

</div>


</center>
</body>
</html> 
	 