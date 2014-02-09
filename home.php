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

	<div id="content" style="width:100%; height:50%;">
	
		<div style="float:left;">
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

		<div style="float:left;">
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
					echo '<img src="'.$files[$i].'"border = "0" style="border-color:#6666FF; width:150px;magin=10px;"/>';
					#echo '<a name="'.$i.'" href="#'.$i.'"><img src="'.$files[$i].'"/></a>';
					# esto imprime el nombre echo substr($files[$i], strlen($folder),strpos($files[$i],'.')-strlen($folder));
					echo '</td>';
					$row++;
					
				}
				echo "</table>";
			?>
		</div>
	</div>

<div id="footer" style="background-color:#6666FF;clear:both; color:white;">
<br>
	Santiago Vasco T - Ingenieria de Sistemas - Universidad EAFIT - 2014 
<br><br>
</div>

</div>


</center>
</body>
</html> 
	 