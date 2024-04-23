<?php 

//include database connection information
require("conn.inc.php");

//start the session
session_start();

//On login, when the session variable is not yet set
if ( !isset($_SESSION['username'])){
  //retrieve login information 
	$name=$_POST['myusername'];
	$pwd=$_POST['mypassword'];

// check user information with database
$query = "SELECT * FROM `members` WHERE `username`='$name'  AND `password`='$pwd'; "; 

$result = mysql_query($query,  $connection) or die ("Error in query: ".mysql_error());

//if user exists, a row will be returned 
if (mysql_num_rows($result) > 0) { 

     // add username to session variable
		$_SESSION['username']=$_POST['myusername'];
}
else
{  //redirect user to login page
  echo "Invalid login";
  include ("mainlogin.html");
  exit();
}
} //outer if – on first login


//include the HTML for header 
//show today's date and the name of 
//the logged in user from session variable
//this code is repeated on every page


include("header.html");

echo "<font color=white>Today's Date: ".Date("d-M-Y") 					."<br/><br/></font>";

echo "Welcome <font color=red>".$_SESSION['s-name']."</font>";
// free result set memory 
mysql_free_result($result); 
mysql_close($connection);
include("footer.html");

?>
<!DOCTYPE html>
<html>
<head></head>
<body background="background11.jpg">

</body></html>