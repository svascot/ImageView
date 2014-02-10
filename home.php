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
	
		<div style="float:left;width:200px;">
		<br>
		<?php
		session_start();
		if ($_SESSION['session_user']) {
			echo 'Hello 	'.$_SESSION['session_user'];
		}else{
			echo $_SESSION['message'];
		}
		?>
		<br><br>
			<table>	

				<form action="/controler/upload.php" method="post" enctype="multipart/form-data">
				<tr>
					<td><input name="archivo" type="file" size="70" /> </td>
     			</tr>
     			<tr>
     				<td><input name="enviar" type="submit" value="Upload" /></td>
    	  		</tr>
    	  			<input name="action" type="hidden" value="upload" />    
 	   			</form>
 	   		</table>	
		</div>

		<div style="float:left; width:80%;">
			<?php
				$folder = 'upload/';
				$filetype = '*.*';
				$files = glob($folder.$filetype);
				echo '<table>';
				$row = 0; #number of rows
				for($i=0; $i<count($files);$i++){
				#for($i=0; $i<3;$i++){
					if($row==5){
						echo '<tr>';
						$row=0;
					}
					echo '<td>';
					echo '<img src="'.$files[$i].'"border = "0" style="border-color:#006699; width:100px;"/>';
					#echo '<a name="'.$i.'" href="#'.$i.'"><img src="'.$files[$i].'"/></a>';
					# esto imprime el nombre echo substr($files[$i], strlen($folder),strpos($files[$i],'.')-strlen($folder));
					echo '</td>';
					$row++;
					
				}
				echo "</table>";
			?>
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
	 