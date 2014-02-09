 <?php

session_start();

echo $_SESSION['session_user']; 

if($_SESSION['session_user']){
    if ($_FILES['archivo']["error"] > 0)
        {
            echo "Error: " . $_FILES['archivo']['error'] . "<br>";
        }else{

            //OJO! chmod o+rw upload <- con estoy le di los permisos a la carpeta par apoder subir archivos... :)
            move_uploaded_file($_FILES['archivo']['tmp_name'],'../upload/'.$_FILES['archivo']['name']);
            
       }
}else{
    echo "inicie session";
}
?>