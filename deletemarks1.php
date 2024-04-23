<?php

require("conn.inc.php");
if(isset($_POST['submit']))
{
$roll=$_POST['roll'];
$subname=$_POST['cour'];
$sem=$_POST['sel'];


$query="SELECT `course id` FROM courses where `c-name`='$subname'";
$result=mysql_query($query) or die("Query Failed: ".mysql_error());


if(mysql_num_rows($result)>0)
{

while($row=mysql_fetch_array($result))
{
$code=$row['course id'];


}
}

$query1 = "SELECT * FROM `answers` WHERE `roll id`='$roll' and `course id`='$code'";


$result1 = mysql_query($query1,  $connection) or die ("Error in query: ".mysql_error());


if (mysql_num_rows($result1) <= 0) { 

     echo "This Subject & Roll no. dosen't exist in database";
	 include("deletemarks.php");
      exit();
  
}

  
 else
 {














}



$query1="DELETE FROM answers WHERE `roll id`='$roll' and `course id`='$code'";
$result1=mysql_query($query1) or die("Query Failed:".mysql_error());
echo "Successfully Deleted!";
}




$query1="SELECT * FROM `answers`";
$result1=mysql_query($query1,$connection) or die("error in query:".$query1."".mysql_error());

if(mysql_num_rows($result1)>0)
{
echo "<center>";
echo "<h1>";
echo "Student's Marks";
echo "</h1>";
echo "</center>";
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
echo "Semester";
echo "</th>";
		
	echo"<th>";
echo "Roll id";
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
		echo"</th>";
		echo"<th>";
echo "ESA";
echo "</th>";
		echo"<th>";
echo "Total";
echo "</th>";
echo"<th>";
echo "Grade";
echo "</th>";
		echo"<th>";
echo "Year";
echo "</th>";
		
		echo"<th>";
echo "no_of_attempts";
echo "</th>";
				
while($row=mysql_fetch_array($result1))
{
	echo"<tr>";
	echo"<td>".$row['course id']."</td>";
	echo"<td>".$row['c-name']."</td>";
	echo"<td>".$row['se-id']."</td>";
	echo"<td>".$row['roll id']."</td>";                      
        echo"<td>".$row['ISA 1']."</td>";                                    
		echo"<td>".$row['ISA 2']."</td>";
        echo"<td>".$row['Assignment 1']."</td>";
        echo"<td>".$row['Assignment 2']."</td>";
		echo"<td>".$row['ESE']."</td>";
		
		echo"<td>".$row['Total']."</td>";
		echo"<td>".$row['Grade']."</td>";
		echo"<td>".$row['Year']."</td>";
		echo"<td>".$row['no_of_attempts']."</td>";
		
	echo"</tr>";
	}
echo"</table>";
echo"</center>";
}
else{
	echo"no rows found!";
	}


?>

<!DOCTYPE html>
<html>
<head></head>
<body background="bac.jpg" text="white">

</body></html>


