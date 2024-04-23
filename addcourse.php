<?php

$code=$_POST["ccode"];
$sem=$_POST["sel"];
$cname=$_POST["coursename"];

$ctype=$_POST["coursetype"];
$max=$_POST["maxmarks"];
$ccredit=$_POST["ccredit"];
require("conn.inc.php");



$query1 = "SELECT * FROM `courses` WHERE `course id`='$code'"; 

$result1 = mysql_query($query1,  $connection) or die ("Error in query: ".mysql_error());


if (mysql_num_rows($result1) > 0) { 

     echo "This record already exists in database";
	 include("insertcourse.php");

  exit();
}
else
{ 
  
 








$query="insert into `courses`(`course id`,`se-id`,`c-name`,`c-type`,`max_marks`,`course credit`)VALUES('$code','$sem','$cname','$ctype','$max','$ccredit')";

$result=mysql_query($query,$connection)
or die("Error in query:".$query." ".mysql_error());



echo "New record inserted with ID in 'Student's Details table' ";


$query1="SELECT * FROM `courses`";
$result1=mysql_query($query1,$connection) or die("error in query:".$query1."".mysql_error());

if(mysql_num_rows($result1)>0)
{
echo "<center>";
echo "<h1>";
echo "Course Detail's";
echo "</h1>";
echo "</center>";
echo"<center>";
echo"<table cellpadding=10 border=1 >";
echo"<tr>";
echo"<th>";
echo "Course Code";
echo "</th>";
	echo"<th>";
echo "Semester";
echo "</th>";
    echo"<th>";
echo "Course Name";
echo "</th>";
echo"<th>";
echo "Course Type";
echo "</th>";
        echo"<th>";
echo "Maximum Marks";
echo "</th>";
		echo"<th>";
echo "Course Credits";
echo "</th>";
		echo"</th>";

while($row=mysql_fetch_array($result1))
{
	echo"<tr>";
	echo"<td>".$row['course id']."</td>";
	echo"<td>".$row['se-id']."</td>";
        echo"<td>".$row['c-name']."</td>";
		echo"<td>".$row['c-type']."</td>";
        echo"<td>".$row['max_marks']."</td>";
        echo"<td>".$row['course credit']."</td>";
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
