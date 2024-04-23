<?php
require("conn.inc.php");
if(isset($_POST['submit']))
{
$sem=$_POST['sel'];
$rolln=$_POST['roll'];



$query2 = "SELECT * FROM `marksheet` WHERE `roll no`='$rolln'";
$result2 = mysql_query($query2,  $connection) or die ("Error in query: ".mysql_error());



if (mysql_num_rows($result2) <= 0) { 

     echo "Roll no dosen't exist in database";
	 include("deletepercentage.php");
      exit();
  
}

 else
 {














}




$query1="DELETE FROM marksheet WHERE `roll no`='$rolln' and `se-id`='$sem'";
$result1=mysql_query($query1) or die("Query Failed:".mysql_error());
echo "Successfully Deleted!";


$query7="select `marksheet id`,`roll no`,`Total`,`Percentage`,`Grade` from marksheet";
$result7=mysql_query($query7,$connection)
or die("Error in query:".$query7." ".mysql_error());
if(mysql_num_rows($result7)>0)
{
echo "<center>";
echo "<h1>";
echo "Student's Percentage & Grade";
echo "</h1>";
echo "</center>";
echo"<center>";
echo"<table cellpadding=10 border=1 >";
echo"<tr>";
echo"<th>";
echo "Marksheet id";
echo "</th>";
	echo"<th>";
echo "Roll no";
echo "</th>";
    echo"<th>";
echo "Total";
echo "</th>";
echo"<th>";
echo "Percentage";
echo "</th>";
        echo"<th>";
echo "Grade";
echo "</th>";
		

while($row=mysql_fetch_array($result7))
{
	echo"<tr>";
	echo"<td>".$row['marksheet id']."</td>";
	echo"<td>".$row['roll no']."</td>";
        echo"<td>".$row['Total']."</td>";
		echo"<td>".$row['Percentage']."</td>";
        echo"<td>".$row['Grade']."</td>";
        
	echo"</tr>";
	}
echo"</table>";
echo"</center>";
}
else{
	echo"no rows found!";
	}
}
?>
<!DOCTYPE html>
<html>
<head></head>
<body background="bac.jpg" text="white">

</body></html>


