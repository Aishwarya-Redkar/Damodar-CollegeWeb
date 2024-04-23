<?php

$id=$_POST["id"];
$name=$_POST["name"];
$username=$_POST["username"];
$password=$_POST["password"];
require("conn.inc.php");







  
$query9 = "SELECT * FROM `admin` WHERE `a-id`='$id'"; 

$result9 = mysql_query($query9,  $connection) or die ("Error in query: ".mysql_error());


if (mysql_num_rows($result9) > 0) { 

     echo "This record exists in database";
	 include("addadmin.php");

  exit();
}
else
{ 
  
 










$query="insert into `admin`(`a-id`,`a-name`,`a-username`,`a-password`)VALUES('$id','$name','$username','$password')";

$result=mysql_query($query,$connection)
or die("Error in query:".$query." ".mysql_error());



echo "New record inserted with ID in 'Admin Details table' ";


$query1="SELECT * FROM `admin`";
$result1=mysql_query($query1,$connection) or die("error in query:".$query1."".mysql_error());

if(mysql_num_rows($result1)>0)
{
echo "<center>";
echo "<h1>";
echo "Admin Detail's";
echo "</h1>";
echo "</center>";
echo"<center>";
echo"<table cellpadding=10 border=1 >";
echo"<tr>";
echo"<th>";
echo "Admin ID";
echo "</th>";
	echo"<th>";
echo "Name";
echo "</th>";
   echo"<th>";
echo "Username";
echo "</th>";
		echo"<th>";
echo "Password";
echo "</th>";
		

while($row=mysql_fetch_array($result1))
{
	echo"<tr>";
	echo"<td>".$row['a-id']."</td>";
	echo"<td>".$row['a-name']."</td>";	
        echo"<td>".$row['a-username']."</td>";
        echo"<td>".$row['a-password']."</td>";
	echo"</tr>";
	}
echo"</table>";
echo"</center>";
}
else{
	echo"no rows found!";
	}
	}

mysql_close($connection);

?>
<!DOCTYPE html>
<html>
<head></head>
<body background="1_235702_1.jpg" text="white">

</body></html>
