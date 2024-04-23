<?php
require("conn.inc.php");


$user=$_POST['username'];
$oldpassword=$_POST['oldpassword'];
$newpassword=$_POST['newpassword'];
$repeatnewpassword=$_POST['repeatnewpassword'];

if($newpassword==$repeatnewpassword)
{

$query ="select * from `members` where `s-username`='$user' and `password`='$oldpassword'"; 
$result=mysql_query($query,$connection) or die("error in query:".$query."".mysql_error());

if(mysql_num_rows($result)>0)
{
$query1="UPDATE `members` SET `password`='$newpassword' WHERE `s-username`='$user'";

$result1=mysql_query($query1,$connection)
or die("Error in query:".$query1." ".mysql_error());



echo "Your Password has been changed";
include("changepassword.php");
exit();
}
else{
echo "Incorrect old password";
include("changepassword.php");
exit();
}
}
else{
echo "New passwords are not matching.Retype it.";
include("changepassword.php");
exit();
}

?>