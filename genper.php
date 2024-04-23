<?php
require("conn.inc.php");
if(isset($_POST['submit']))
{
$sem=$_POST['sel'];
$roll=$_POST['roll'];



$query1 = "SELECT * FROM `marksheet` WHERE `roll no`='$roll'";
$query2 = "SELECT * FROM `answers` WHERE `roll id`='$roll'";

$result2 = mysql_query($query2,  $connection) or die ("Error in query: ".mysql_error());
$result1 = mysql_query($query1,  $connection) or die ("Error in query: ".mysql_error());

if (mysql_num_rows($result1) > 0) { 

     echo "This particular roll no's percentage is already being generated";
	 include("calper.php");
      exit();
  
}
else if (mysql_num_rows($result2) <= 0) { 
echo "Can't generated percentage as this roll no. marks dosen't exist";
	 include("calper.php");

  exit();
}
  
 
	 else 
	 {
	 
  

 



















$query="select `Total` from answers where `se-id`='$sem' and `roll id`='$roll'";
$result=mysql_query($query) or die("Query Failed: ".mysql_error());
$i=0;
$total=0;

while($rows=mysql_fetch_array($result))
{
$coursee[$i]=$rows['Total'];
$total=$total+$coursee[$i];
$i++;
}

$query2="select `max_marks` from courses where `se-id`='$sem'";
$result2=mysql_query($query2) or die("Query Failed: ".mysql_error());
$i=0;
$total1=0;

while($rows=mysql_fetch_array($result2))
{
$max[$i]=$rows['max_marks'];
$total1=$total1+$max[$i];
$i++;
}

$per=0;
$per=($total/$total1)*100;
$grade=0;
if($per>=86)
{
	$grade='A';
}

else if($per<86&&$per>=71)
{
	$grade='B';
}
else if($per<71&&$per>=61)
{
	$grade='C';
}

else if($per<61&&$per>=40)
{
	$grade='D';
}
else 
{
	$grade='Fail';
}


$query1="insert into `marksheet`(`roll no`,`se-id`,`Total`,`Percentage`,`Grade`)VALUES('$roll','$sem','$total','$per','$grade')";

$result1=mysql_query($query1,$connection)
or die("Error in query:".$query1." ".mysql_error());

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
}
?>
<!DOCTYPE html>
<html>
<head></head>
<body background="bac.jpg" text="white">

</body></html>