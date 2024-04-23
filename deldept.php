<?php
require("conn.inc.php");
if(isset($_POST['submit']))
{
$dpname=$_POST['dp'];




$query1="DELETE FROM department WHERE `dept_name`='$dpname'";
$result1=mysql_query($query1) or die("Query Failed:".mysql_error());
echo "Successfully Deleted!";


$query1="SELECT * FROM `department`";
$result1=mysql_query($query1,$connection) or die("error in query:".$query1."".mysql_error());

if(mysql_num_rows($result1)>0)
{
echo "<center>";
echo "<h1>";
echo "Department Detail's";
echo "</h1>";
echo "</center>";
echo"<center>";
echo"<table cellpadding=10 border=1 >";
echo"<tr>";
echo"<th>";
echo "Department id";
echo "</th>";
	echo"<th>";
echo "Department Name";
echo "</th>";
    echo"<th>";
echo "Establishment Date";
echo "</th>";
echo"<th>";
echo "H.O.D";
echo "</th>";

        
		
		
while($row=mysql_fetch_array($result1))
{
	echo"<tr>";
	echo"<td>".$row['dept id']."</td>";
	echo"<td>".$row['dept_name']."</td>";
        echo"<td>".$row['est_date']."</td>";
		
       
       
		   echo"<td>".$row['hod']."</td>";
		      
			  
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
<body background="1_235702_1.jpg" text="white">

</body></html>


