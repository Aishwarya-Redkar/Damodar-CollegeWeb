<?php
require("conn.inc.php");

?>
  <center> <h2><a href="updatefaculty.php">Click Here To Update</a></h2></center>
   <?php

$query1="SELECT * FROM `faculty` where `Register`='No'";
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

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
a:link {
	color: #FFF;
}
a:visited {
	color: #FFF;
}
a:hover {
	color: #300;
}
a:active {
	color: #FFF;
}
</style>
</head>
<body background="bac.jpg" text="white">

</body></html>


