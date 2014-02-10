 <?php

session_start();

if($_SESSION['session_user']){
    if ($_FILES['archivo']["error"] > 0)
        {
            $_SESSION['message'] = 'Error: ' . $_FILES['archivo']['error'] . '<br>';
            header('Location: ../home.php');
        }else{

            //OJO! chmod o+rw upload <- con estoy le di los permisos a la carpeta par apoder subir archivos... :)
            move_uploaded_file($_FILES['archivo']['tmp_name'],'../upload/'.$_FILES['archivo']['name']);
            
       }
}else{
    $_SESSION['message'] = 'You most be loged.';
    header('Location: ../home.php');
}
?>