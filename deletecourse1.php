<?php
require("conn.inc.php");
if(isset($_POST['submit']))
{
$sem=$_POST['sel'];
$subname=$_POST['cour'];


$query="SELECT `course id` FROM courses where `c-name`='$subname'";
$result=mysql_query($query) or die("Query Failed: ".mysql_error());


if(mysql_num_rows($result)>0)
{

while($row=mysql_fetch_array($result))
{
$code=$row['course id'];


}
}


$query1 = "SELECT * FROM `courses` WHERE `course id`='$code' and `se-id`='$sem'"; 

$result1 = mysql_query($query1,  $connection) or die ("Error in query: ".mysql_error());


if (mysql_num_rows($result1) <= 0) { 

     echo "This record dosen't exists in database";
	 include("deletecourse.php");

  exit();
}
else
{ 
  
 









$query1="DELETE FROM courses WHERE `course id`='$code'";
$result1=mysql_query($query1) or die("Query Failed:".mysql_error());
echo "Successfully Deleted!";
}

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


