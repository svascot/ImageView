 <?php

$tag = $_POST['tag'];
include 'businessLogic.php';

$businessLogic = new businessLogic();

$businessLogic->Upload($tag);

?>