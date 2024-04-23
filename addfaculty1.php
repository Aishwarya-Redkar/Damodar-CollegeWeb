<?php

$id=$_POST["id"];
$name=$_POST["name"];
$gen=$_POST["gender"];




$email=$_POST["email"];

$qualification=$_POST["qual"];

$username=$_POST["user"];
$password=$_POST["pass"];


require("conn.inc.php");





$query9 = "SELECT * FROM `faculty` WHERE `f-id`='$id'"; 

$result9 = mysql_query($query9,  $connection) or die ("Error in query: ".mysql_error());


if (mysql_num_rows($result9) > 0) { 

     echo "Faculty id already exists in database";
	 include("add_faculty.php");

  exit();
}
else
{ 
  
 









$query="insert into `faculty`(`f-id`,`name`,`gender`,`email`,`qualification`,`username`,`password`)VALUES('$id','$name','$gen','$email','$qualification','$username','$password')";

$result=mysql_query($query,$connection)
or die("Error in query:".$query." ".mysql_error());



echo "New record inserted with ID in 'Faculty Details table' ";


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
<body background="bac.jpg" text="white">

</body></html>
