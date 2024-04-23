<?php

session_start();
if (isset($_SESSION["manager"])) {
    header("location: studentpage.php"); 
    exit();
	

//$username=$_POST["myusername"];
//$password=$_POST["mypassword"];



require("conn.inc.php");

$myusername=$_POST["myusername"]; 
$mypassword=$_POST["mypassword"]; 
$username=""; // Mysql username 
$password=""; 
$radio=$_POST["rbbutton"]; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM members WHERE s-username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}

/*else if($radio=="Faculty")
{
sql="SELECT * FROM faculty WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($sql);
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 
header("location:login_success.php");
}
}
else if($radio=="Admin")
{
sql="SELECT * FROM admin WHERE a-username='$myusername' and a-password='$mypassword'";
$result=mysqli_query($sql);
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 
header("location:login_success.php");
}
}
else{
echo "Select User type";
}*/




/*
if (isset($_POST["myusername"]) && isset($_POST["mypassword"])) {
	
	$error = "";
	$manager = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["myusername"]); // filter everything but numbers and letters
    $password =md5( preg_replace('#[^A-Za-z0-9]#i', '', $_POST["mypassword"])); // filter everything but numbers and letters
	if($manager	 == "") {
		$error .= "Enter Username.<br>";
	}
	if($_POST["mypassword"] == "") {
		$error .= "Enter Password.<br>";
	}
	if($error != "") {
		header('location: checklogin.php?error='.$error);
		exit;
	}else {
		$sql = "SELECT id FROM members WHERE username='$manager' AND password='".$password."' LIMIT 1"; // query the person
		 
	   // ------- MAKE SURE PERSON EXISTS IN DATABASE ---------
		if ($result=mysqli_query($con,$sql))
		{
			$existCount =mysqli_num_rows($result);
		}else {
			$existCount =0;
		}
		if ($existCount == 1) { // evaluate the count
			 while($row = mysqli_fetch_array($result)){ 
				 $id = $row["id"];
			 }
			 $_SESSION["id"] = $id;
			 $_SESSION["manager"] = $manager;
			 $_SESSION["password"] = $password;
			 header("location: studentpage.php");
			 exit();
		} else {
		
			$error = 'That information is incorrect, try again.';
			header('location: checklogin.php?error='.$error);
			exit;
		}
	}
}
*/
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../loginstyle.css" rel="stylesheet" type="text/css" /><link href="loginstyle.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="loginbuttonstyle.css"></head>

<body class="loginstyle">
<span class="loginstyle">
<br><br><br>
<br><br><br>
<br><br><br>
</span>
<center><table width="429" height="365"  background="ubuntu_desktop_12_04-wallpaper-1366x768.jpg">
  <tr>
    <td width="313" height="194"><center>
      <p><font face="algerian" size=6>LOG IN</font></p></center>
      <p>&nbsp;</p>
       
      
      <form name="form1" method="post" action="checklogin.php">
        <label for="textfield"></label><center>Username:-
        <input type="text" name="myusername" id="myusername" /></center>
        <br><br>
       <center>Password:-
        <input type="password" name="mypassword" id="mypassword" /></center>
      <br><br><br><br>
   <center>   <input type="submit" name="submit" value="Login" action="checklogin.php"  class="button2"></center>
      
      </form></p>
      <p>&nbsp; </p>
<p>&nbsp;</p>
      <center>
        <br />
        <br />
    
    </center></td>
  </tr>
</table></center>
<span class="loginstyle"><br>
<br><br>
<br><br><br>
<br><br><br>



<center></center>
</span>
</body>
</html>

