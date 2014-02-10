<?php

$connectionUser = mysql_connect("localhost","root","qhaWPR76") or die ("connection failed");

$db = mysql_select_db("imageview_user",$connectionUser) or die ("Incorrect data base");


?>