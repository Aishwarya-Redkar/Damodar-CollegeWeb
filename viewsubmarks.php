<?php
require("conn.inc.php");

$sem=$_POST['sel'];
$cou=$_POST['cour'];







$query="SELECT `course id` FROM courses where `c-name`='$cou'";
$result=mysql_query($query) or die("Query Failed: ".mysql_error());


if(mysql_num_rows($result)>0)
{

while($row=mysql_fetch_array($result))
{
$code=$row['course id'];


}
}



$query1 = "SELECT * FROM `answers` WHERE `se-id`='$sem' and `course id`='$code'";

$result1 = mysql_query($query1,  $connection) or die ("Error in query: ".mysql_error());


if (mysql_num_rows($result1) <= 0) { 

     echo "This Record doesnt exist";
	 include("viewsubjectmarks.php");
      exit();
  
}

 else
 {

























echo "<center>";
echo "<h1>";
echo "View Subject Marks";
echo "</h1>";
echo "<center>";
$query="select `roll id`,`ISA 1`,`ISA 2`,`Assignment 1`,`Assignment 2`,`ESE` from answers where `course id`='$code' and `se-id`='$sem'";
$result=mysql_query($query,$connection) or die("error in query:".$query1."".mysql_error());

echo "<center>";
echo "Couse Name:-";
echo $cou;
echo "</center>";
echo "<br>";
if(mysql_num_rows($result)>0)
{

echo"<center>";
echo"<table cellpadding=10 border=1 >";
echo"<tr>";
echo"<th>";
echo "Roll No";
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
echo"<th>";
echo "ESA";
echo "</th>";
                                                 

while($row=mysql_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['roll id']."</td>";
	   echo"<td>".$row['ISA 1']."</td>";
		echo"<td>".$row['ISA 2']."</td>";
		echo"<td>".$row['Assignment 1']."</td>";
		echo"<td>".$row['Assignment 2']."</td>";
		echo"<td>".$row['ESE']."</td>";
		
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

