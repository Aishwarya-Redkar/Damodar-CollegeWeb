<?php
require("conn.inc.php");
if(isset($_POST['submit']))
{
$sem=$_POST['sel'];
$roll=$_POST['roll'];



$query9 = "SELECT * FROM `answers` WHERE `roll id`='$roll' and `se-id`='$sem'"; 

$result9 = mysql_query($query9,  $connection) or die ("Error in query: ".mysql_error());


if (mysql_num_rows($result9) <= 0) { 

     echo "This record dosen't exist in database";
	 include("internalmarks.php");

  exit();
}
else
{ 
  
 










echo "<center>";

echo "<h1>";
echo "Internal Marks";
echo "</h1>";
echo "</center>";



$query3="select `s-name` from members where `roll id`='$roll'";
$result3=mysql_query($query3) or die("Query Failed: ".mysql_error());
if(mysql_num_rows($result3)>0)
{

while($rows=mysql_fetch_array($result3))
{
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<b>";
echo "Name of Student:- ";
echo "</b>";
echo $rows['s-name'];
echo "<br>";
echo "<br>";

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<b>";
echo "Semester:-  ";
echo "</b>";
echo $sem;
echo "<br>";
echo "<br>";
}}








$query="select `course id`,`c-name`,`ISA 1`,`ISA 2`,`Assignment 1`,`Assignment 2` from answers where `roll id`='$roll' and `se-id`='$sem'";
$result=mysql_query($query,$connection) or die("error in query:".$query1."".mysql_error());

if(mysql_num_rows($result)>0)
{

echo"<center>";
echo"<table cellpadding=10 border=1 >";
echo"<tr>";
echo"<th>";
echo "Course Code";
echo "</th>";
	echo"<th>";
echo "Course Name";
echo "</th>";
    echo"<th>";
echo "ISA 1";
echo "</th>";
 echo"<th>";
echo "ISA 2";
echo "</th>";
 echo"<th>";
echo "Assignment 1";
echo "</th>";
 echo"<th>";
echo "Assignment 2";
echo "</th>";
                                                 

while($row=mysql_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['course id']."</td>";
	echo"<td>".$row['c-name']."</td>";
        echo"<td>".$row['ISA 1']."</td>";
		echo"<td>".$row['ISA 2']."</td>";
		echo"<td>".$row['Assignment 1']."</td>";
		echo"<td>".$row['Assignment 2']."</td>";
		
	echo"</tr>";
	
	
	}
echo"</table>";
echo"</center>";
}
else{
	echo"no rows found!";
	}
	}}

?>
<!DOCTYPE html>
<html>
<head></head>
<body background="bac.jpg" text="white">

</body></html>

