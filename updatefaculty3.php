<?php
require("conn.inc.php");
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$fname=$_POST['name'];
$gen=$_POST['gender'];
$email=$_POST['email'];
$qual=$_POST['qual'];
$username=$_POST['user'];
$password=$_POST['pass']; 
$reg=$_POST['register'];     


$query3="UPDATE faculty SET `name`='$fname', `gender`='$gen',`email`='$email',`qualification`='$qual', `username`='$username', `password`='$password',`Register`='$reg' WHERE `name`='$fname'";
$result2=mysql_query($query3,$connection) or die("error in query:".$query3."".mysql_error());
echo "Record Updated";
$query1="SELECT * FROM `faculty`";
$result1=mysql_query($query1,$connection) or die("error in query:".$query1."".mysql_error());

if(mysql_num_rows($result1)>0)
{
echo "<center>";
echo "<h1>";
echo "Faculty Detail's";
echo "</h1>";
echo "</center>";
echo"<center>";
echo"<table cellpadding=10 border=1 >";
echo"<tr>";
echo"<th>";
echo "Faculty id";
echo "</th>";
	echo"<th>";
echo "Name";
echo "</th>";
    echo"<th>";
echo "Gender";
echo "</th>";

        
		
		echo"<th>";
echo "Email id";
echo "</th>";
echo"<th>";
echo "Qualification";
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
	echo"<td>".$row['f-id']."</td>";
	echo"<td>".$row['name']."</td>";
        echo"<td>".$row['gender']."</td>";
		
       
       
		   echo"<td>".$row['email']."</td>";
		      
			  echo"<td>".$row['qualification']."</td>";
			   
			   echo"<td>".$row['username']."</td>";   
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
