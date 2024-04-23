<?php

$roll=$_POST["roll_no"];
$name=$_POST["name"];
$course=$_POST["sel"];

$div=$_POST["div"];
$username=$_POST["username"];
$password=$_POST["password"];
require("conn.inc.php");



$query="insert into `members`(`roll-id`,`s-name`,`s-course`,`Division`,`s-username`,`password`)VALUES('$roll','$name','$course','$div','$username','$password')";

$result=mysql_query($query,$connection)
or die("Error in query:".$query." ".mysql_error());



echo "New record inserted with ID in 'Student's Details table' ";


$query1="SELECT * FROM `members`";
$result1=mysql_query($query1,$connection) or die("error in query:".$query1."".mysql_error());

if(mysql_num_rows($result1)>0)
{
echo "<center>";
echo "<h1>";
echo "Student's Detail's";
echo "</h1>";
echo "</center>";
echo"<center>";
echo"<table cellpadding=10 border=1 >";
echo"<tr>";
echo"<th>";
echo "Roll No";
echo "</th>";
	echo"<th>";
echo "Name";
echo "</th>";
    echo"<th>";
echo "Class";
echo "</th>";
echo"<th>";
echo "Division";
echo "</th>";
        echo"<th>";
echo "Username";
echo "</th>";
		echo"<th>";
echo "Password";
echo "</th>";
		echo"</th>";

while($row=mysql_fetch_array($result1))
{
	echo"<tr>";
	echo"<td>".$row['roll-id']."</td>";
	echo"<td>".$row['s-name']."</td>";
        echo"<td>".$row['s-course']."</td>";
		echo"<td>".$row['Division']."</td>";
        echo"<td>".$row['s-username']."</td>";
        echo"<td>".$row['password']."</td>";
	echo"</tr>";
	}
echo"</table>";
echo"</center>";
}
else{
	echo"no rows found!";
	}
mysql_close($connection);

?>
<!DOCTYPE html>
<html>
<head></head>
<body background="1_235702_1.jpg" text="white">

</body></html>