<?php
session_start();
echo "You are logged out ";

//destroy session
session_destroy();

//redirect to login page
include ("mainlogin.html");
exit();

?>

