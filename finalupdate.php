<?php
require("conn.inc.php");
if(isset($_POST['submit']))
{
$roll=$_POST['rolln'];
$name=$_POST['name'];
$email=$_POST['email'];

$user=$_POST['user'];
$pass=$_POST['pass'];
$reg=$_POST['register'];
$query3="UPDATE members SET `s-name`='$name',`email-id`='$email',`s-username`='$user', `password`='$pass',`Register`='$reg'  WHERE `roll id`='$roll'";
$result2=mysql_query($query3,$connection) or die("error in query:".$query1."".mysql_error());
echo "Record Updated";

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
echo "Email";
echo "</th>";
        echo"<th>";
echo "Username";
echo "</th>";
		echo"<th>";
echo "Password";
echo "</th>";
	
		echo"<th>";
echo "Register";
echo "</th>";
		

while($row=mysql_fetch_array($result1))
{
	echo"<tr>";
	echo"<td>".$row['roll id']."</td>";
	echo"<td>".$row['s-name']."</td>";
        echo"<td>".$row['email-id']."</td>";
	
        echo"<td>".$row['s-username']."</td>";
        echo"<td>".$row['password']."</td>";
		echo"<td>".$row['Register']."</td>";
	echo"</tr>";
	}
echo"</table>";
echo"</center>";
}
else{
	echo"no rows found!";
	}
mysql_close($connection);

}
?>

<!DOCTYPE html>
<html>
<head></head>
<body background="bac.jpg" text="white">

</body></html>
