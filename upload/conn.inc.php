<?php 
$server ="localhost";
$user="root";
$pass="";
$database = "bcaeconnect";

$connection = mysql_connect($server, $user, $pass) or die ('Could not connect: '.mysql_error());

mysql_select_db($database,$connection);  
?>
