<?php 

session_start();
if (isset($_SESSION["manager"])) 
unset($_SESSION["manager"]);

session_destroy();
  header("location: admin_login.php");
?>
