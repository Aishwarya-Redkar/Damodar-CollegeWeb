<?php
require("conn.inc.php");
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$date=$_POST['date'];
                
                                                 

$query3="UPDATE programs SET `pro-name`='$name', `est_date`='$date' WHERE `pro-id`='$id'";
$result2=mysql_query($query3,$connection) or die("error in query:".$query3."".mysql_error());
echo "Record Updated";
$query1="SELECT * FROM `programs`";
$result1=mysql_query($query1,$connection) or die("error in query:".$query1."".mysql_error());

if(mysql_num_rows($result1)>0)
{
echo "<center>";
echo "<h1>";
echo "Program Detail's";
echo "</h1>";
echo "</center>";
echo"<center>";
echo"<table cellpadding=10 border=1 >";
echo"<tr>";
echo"<th>";
echo "Program id";
echo "</th>";
	echo"<th>";
echo "Program Name";
echo "</th>";
    echo"<th>";
echo "Establishment Date";
echo "</th>";

        
		
		
while($row=mysql_fetch_array($result1))
{
	echo"<tr>";
	echo"<td>".$row['pro-id']."</td>";
	echo"<td>".$row['pro-name']."</td>";
        echo"<td>".$row['est_date']."</td>";
		
       
       
		  
			  
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
