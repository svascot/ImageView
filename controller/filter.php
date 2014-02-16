<?php 
//inicio.

$tag = $_POST['tag'];

include 'businessLogic.php';

$businessLogic = new businessLogic();

$businessLogic->imageFilter($tag);

?>