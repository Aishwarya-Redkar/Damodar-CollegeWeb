<html>
<body>
<?php

$roll=$_POST['roll'];
$sem=$_POST['semname'];
$course=$_POST['code'];
$coname=$_POST['coursename'];                                     
$isa1=$_POST['isa1'];
$isa2=$_POST['isa2'];
$ass1=$_POST['ass1'];
$ass2=$_POST['ass2'];
$ese=$_POST['ese'];
$year=$_POST['year'];
$attempts=$_POST['attempts'];
//$total=$_POST['total'];
                                                                           
require("conn.inc.php");

$sum=0;
$sum=$isa1+$isa2+$ass1+$ass2+$ese;




$query2="select `max_marks` from courses where `course id`='$course'";
$result2=mysql_query($query2) or die("Query Failed: ".mysql_error());
$i=0;
$total1=0;

while($rows=mysql_fetch_array($result2))
{
$total1=$rows['max_marks'];

$i++;
}

$per=0;
$per=($sum/$total1)*100;
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




$query="insert into `answers`(`course id`,`roll id`,`ISA 1`,`ISA 2`,`Assignment 1`,`Assignment 2`,`ESE`,`se-id`,`Year`,`no_of_attempts`,`Total`,`c-name`,`Grade`)VALUES('$course','$roll','$isa1','$isa2','$ass1','$ass2','$ese','$sem','$year','$attempts','$sum','$coname','$grade')";

$result=mysql_query($query,$connection)
or die("Error in query:".$query." ".mysql_error());



echo "New record inserted with ID in 'Marks table' ";


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
mysql_close($connection);

?>
<!DOCTYPE html>
<html>
<head></head>
<body background="bac.jpg" text="white">

</body></html>


