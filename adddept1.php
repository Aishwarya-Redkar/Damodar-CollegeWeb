<?php

$id=$_POST["id"];
$name=$_POST["name"];
$date=$_POST["date"];




$hod=$_POST["hod"];




require("conn.inc.php");


$query1 = "SELECT * FROM `department` WHERE `dept id`='$id'"; 

$result1 = mysql_query($query1,  $connection) or die ("Error in query: ".mysql_error());


if (mysql_num_rows($result1) > 0) { 

     echo "This record already exists in database";
	 include("adddept.php");

  exit();
}
else
{ 
  
 














$query="insert into `department`(`dept id`,`dept_name`,`est_date`,`hod`)VALUES('$id','$name','$date','$hod')";

$result=mysql_query($query,$connection)
or die("Error in query:".$query." ".mysql_error());



echo "New record inserted with ID in 'Faculty Details table' ";


$query1="SELECT * FROM `department`";
$result1=mysql_query($query1,$connection) or die("error in query:".$query1."".mysql_error());

if(mysql_num_rows($result1)>0)
{
echo "<center>";
echo "<h1>";
echo "Department Detail's";
echo "</h1>";
echo "</center>";
echo"<center>";
echo"<table cellpadding=10 border=1 >";
echo"<tr>";
echo"<th>";
echo "Department id";
echo "</th>";
	echo"<th>";
echo "Department Name";
echo "</th>";
    echo"<th>";
echo "Establishment Date";
echo "</th>";
echo"<th>";
echo "H.O.D";
echo "</th>";

        
		
		
while($row=mysql_fetch_array($result1))
{
	echo"<tr>";
	echo"<td>".$row['dept id']."</td>";
	echo"<td>".$row['dept_name']."</td>";
        echo"<td>".$row['est_date']."</td>";
		
       
       
		   echo"<td>".$row['hod']."</td>";
		      
			  
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
