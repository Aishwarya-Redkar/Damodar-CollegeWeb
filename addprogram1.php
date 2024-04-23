<?php

$id=$_POST["id"];
$name=$_POST["name"];
$date=$_POST["date"];

require("conn.inc.php");


$query9 = "SELECT * FROM `programs` WHERE `pro-id`='$id'"; 

$result9 = mysql_query($query9,  $connection) or die ("Error in query: ".mysql_error());


if (mysql_num_rows($result9) > 0) { 

     echo "This record already exists in database";
	 include("addprogram.php");

  exit();
}
else
{ 
  
 









$query="insert into `programs`(`pro-id`,`pro-name`,`est_date`)VALUES('$id','$name','$date')";

$result=mysql_query($query,$connection)
or die("Error in query:".$query." ".mysql_error());



echo "New record inserted with ID in 'Program Details table' ";


$query1="SELECT * FROM `programs`";
$result1=mysql_query($query1,$connection) or die("error in query:".$query1."".mysql_error());

if(mysql_num_rows($result1)>0)
{
echo "<center>";
echo "<h1>";
echo "Program Detail's";
echo "</h1>";
echo "</center>";
echo"<center>";
echo"<table cellpadding=10 border=1 >";
echo"<tr>";
echo"<th>";
echo "Program id";
echo "</th>";
	echo"<th>";
echo "Program Name";
echo "</th>";
    echo"<th>";
echo "Establishment Date";
echo "</th>";


        
		
		
while($row=mysql_fetch_array($result1))
{
	echo"<tr>";
	echo"<td>".$row['pro-id']."</td>";
	echo"<td>".$row['pro-name']."</td>";
        echo"<td>".$row['est_date']."</td>";
		
       
       
		  
			  
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
