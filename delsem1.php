<?php
require("conn.inc.php");
if(isset($_POST['submit']))
{
$sem=$_POST['sem'];




$query1="DELETE FROM semester WHERE `se-id`='$sem'";
$result1=mysql_query($query1) or die("Query Failed:".mysql_error());
echo "Successfully Deleted!";


$query1="SELECT * FROM `semester`";
$result1=mysql_query($query1,$connection) or die("error in query:".$query1."".mysql_error());

if(mysql_num_rows($result1)>0)
{
echo "<center>";
echo "<h1>";
echo "Semester Detail's";
echo "</h1>";
echo "</center>";
echo"<center>";
echo"<table cellpadding=10 border=1 >";
echo"<tr>";
echo"<th>";
echo "Semester id";
echo "</th>";
	echo"<th>";
echo "Semester Name";
echo "</th>";
    echo"<th>";
echo "Semester Duration";
echo "</th>";
echo"<th>";
echo "Total Fees";
echo "</th>";

        
		
		
while($row=mysql_fetch_array($result1))
{
	echo"<tr>";
	echo"<td>".$row['se-id']."</td>";
	echo"<td>".$row['se-name']."</td>";
        echo"<td>".$row['se-duration']."</td>";
		
       
       
		   echo"<td>".$row['Total fees']."</td>";
		      
			  
	echo"</tr>";
	}
echo"</table>";
echo"</center>";
}
else{
	echo"no rows found!";
	}}
mysql_close($connection);

?>
<!DOCTYPE html>
<html>
<head></head>
<body background="bac.jpg" text="white">

</body></html>
