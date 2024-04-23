<?php
require("conn.inc.php");
if(isset($_POST['submit']))
{
$ccode=$_POST['coursecode'];
$cname=$_POST['cname'];
$sem=$_POST['semes'];
$ctype=$_POST['ctype'];
$maxm=$_POST['max'];
$credit=$_POST['ccredit'];

$query3="UPDATE courses SET `c-name`='$cname', `se-id`='$sem',`c-type`='$ctype',`max_marks`='$maxm', `course credit`='$credit'  WHERE `course id`='$ccode'";
$result2=mysql_query($query3,$connection) or die("error in query:".$query3."".mysql_error());
echo "Record Updated";
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
}}
else{
	echo"no rows found!";
	}
mysql_close($connection);

?>
<!DOCTYPE html>
<html>
<head></head>
<body background="bac.jpg" text="white">

</body></html>
