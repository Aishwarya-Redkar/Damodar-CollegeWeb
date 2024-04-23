<?php
require("conn.inc.php");


$username=$_POST["myusername"];
$pass=$_POST["mypassword"];
$user=$_POST["rbbutton"];
?>
<input type="hidden" name="username" value="<?php $username; ?>">
<input type="hidden" name="password" value="<?php $pass; ?>">
<?php
if ($user=="Student")
{
?>
<form method="post" action="ooo.php">
<input type="hidden" name="username" value="<?php $username; ?>">
<input type="hidden" name="password" value="<?php $pass; ?>">
<input type="autosubmit" name="submit" value="submit">
<?php
include("ooo.php");
exit();
}
else if($user=="Faculty")
{
include("fac.php");
exit();
}
else if($user=="Admin")
{
include("adm.html");
exit();
}
else
{
echo "Select the type of user you want to log in";
include("mainlogin.html");
exit();
}
?>




<!DOCTYPE html>
<html>
<head></head>
<body background="1_235702_1.jpg" text="white">

</body></html>
