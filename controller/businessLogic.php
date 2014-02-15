<?php

include 'dataAccessLogin.php';
include 'dataAccessUser.php';

session_start();

class businessLogic {

   
  function LoginUser ($user,$pass){  
      $daoLogin = dataAccessLogin::instancia();    
      $bdPass = $daoLogin->login($user);

      if ($bdPass == 'Wrong user.') {
        $_SESSION['message'] = 'Invalid user!';
        header('Location: ../index.php');
      }

      if($bdPass == $pass){

        $_SESSION['session_user'] = $user;
        $_SESSION['message'] = '';
       
        $daoUser = dataAccessUser::instancia();  
        $bdUser = $daoUser->UserInfo($user);

        $_SESSION['session_user_name']= $bdUser->getName();

        header('Location: ../home.php');

      }else{
        $_SESSION['message'] = 'Invalid password!';
        header('Location: ../index.php');
      }
  }

    function SignUp($name, $lastname, $email, $user, $pass, $pass2){
      if($pass != $pass2){
        $_SESSION['message'] = 'Invalid password!';
        header('Location: ../signup.php');
      }else{

        $daoLogin = dataAccessLogin::instancia();    
        $daoLogin->newLogin($user,$pass);

        $daoUser = dataAccessUser::instancia();  
        $daoUser->newUser($name,$lastname, $email, $user);

        $_SESSION['session_user'] = $user;
        $_SESSION['session_user_name']= $name;
        header('Location: ../home.php');
      }

    }


  function Upload(){
    if($_SESSION['session_user']){
      if ($_FILES['archivo']["error"] > 0)
          {
              $_SESSION['messageUpload'] = 'Error: ' . $_FILES['archivo']['error'] . '<br>';
              header('Location: ../home.php');
          }else{

              //OJO! chmod o+rw upload <- con estoy le di los permisos a la carpeta par apoder subir archivos... :)
              move_uploaded_file($_FILES['archivo']['tmp_name'],'../upload/'.$_FILES['archivo']['name']);

              $_SESSION['messageUpload']='success';
              header('Location: ../home.php');         
          }
    }else{
        $_SESSION['messageUpload'] = 'You most be loged.';
        header('Location: ../home.php');
    }
  }

  function KillSession(){
    session_destroy();
    header('Location: ../home.php');
  }
}

?>
