<?php

$id=$_POST["id"];
$name=$_POST["name"];
$duration=$_POST["dur"];




$fees=$_POST["fees"];




require("conn.inc.php");




$query9 = "SELECT * FROM `semester` WHERE `se-id`='$id'"; 

$result9 = mysql_query($query9,  $connection) or die ("Error in query: ".mysql_error());


if (mysql_num_rows($result9) > 0) { 

     echo "This record already exists in database";
	 include("addsem.php");

  exit();
}
else
{ 
  
 










$query="insert into `semester`(`se-id`,`se-name`,`se-duration`,`Total fees`)VALUES('$id','$name','$duration','$fees')";

$result=mysql_query($query,$connection)
or die("Error in query:".$query." ".mysql_error());



echo "New record inserted with ID in 'Semester Details table' ";


$query1="SELECT * FROM `semester`";
$result1=mysql_query($query1,$connection) or die("error in query:".$query1."".mysql_error());

if(mysql_num_rows($result1)>0)
{
echo "<center>";
echo "<h1>";
echo "Semester Detail's";
echo "</h1>";
echo "</center>";
echo"<center>";
echo"<table cellpadding=10 border=1 >";
echo"<tr>";
echo"<th>";
echo "Semester id";
echo "</th>";
	echo"<th>";
echo "Semester Name";
echo "</th>";
    echo"<th>";
echo "Semester Duration";
echo "</th>";
echo"<th>";
echo "Total Fees";
echo "</th>";

        
		
		
while($row=mysql_fetch_array($result1))
{
	echo"<tr>";
	echo"<td>".$row['se-id']."</td>";
	echo"<td>".$row['se-name']."</td>";
        echo"<td>".$row['se-duration']."</td>";
		
       
       
		   echo"<td>".$row['Total fees']."</td>";
		      
			  
	echo"</tr>";
	}
echo"</table>";
echo"</center>";
}
else{
	echo"no rows found!";
	}}
mysql_close($connection);

?>
<!DOCTYPE html>
<html>
<head></head>
<body background="bac.jpg" text="white">

</body></html>
