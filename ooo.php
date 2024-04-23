 
<?php 

require("conn.inc.php");

//start the session
session_start();

//On login, when the session variable is not yet set

  //retrieve login information 
	$name=$_POST['myusername'];
	$pwd=$_POST['mypassword'];
	$user=$_POST["rbutton"];
	
	
	if ($user=="Student")
{
if (!isset($_SESSION['s-username'])){

$query = "SELECT * FROM `members` WHERE `s-username`='$name'  AND `password`='$pwd' AND `Register`='Yes' "; 

$result = mysql_query($query,  $connection) or die ("Error in query: ".mysql_error());


if (mysql_num_rows($result) > 0) { 

     // add username to session variable
		
		$_SESSION['s-username']=$_POST['myusername'];
		
		
}
else
{  //redirect user to login page
  echo "Invalid login";
  include ("mainlogin.html");
  exit();
}
}
include("studentframe.html");
exit();



}
else if($user=="Faculty")
{
if ( !isset($_SESSION['username'])){
$query = "SELECT * FROM `faculty` WHERE `username`='$name'  AND `password`='$pwd'  AND `Register`='Yes'"; 

$result = mysql_query($query,  $connection) or die ("Error in query: ".mysql_error());


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
}
include("facultyframeset.html");
exit();
}
else if($user=="Admin")
{
if ( !isset($_SESSION['a-username'])){
$query = "SELECT * FROM `admin` WHERE `a-username`='$name'  AND `a-password`='$pwd'; "; 

$result = mysql_query($query,  $connection) or die ("Error in query: ".mysql_error());


if (mysql_num_rows($result) > 0) { 

     // add username to session variable
		$_SESSION['a-username']=$_POST['myusername'];
}
else 
{  //redirect user to login page
  echo "Invalid login";
  include ("mainlogin.html");
  exit();
}
}
include("adminpage.html");
exit();

}





//mysql_free_result($result); 
mysql_close($connection);


?>
