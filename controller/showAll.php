 <?php
session_start();
$_SESSION['filter'] = 'false';
header('Location: ../home.php');

?>