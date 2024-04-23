<?php
require("conn.inc.php");
if(isset($_POST['submit']))
{
$name=$_POST['nm'];




$query1="DELETE FROM faculty WHERE `name`='$name'";
$result1=mysql_query($query1) or die("Query Failed:".mysql_error());
echo "Successfully Deleted!";


$query1="SELECT * FROM `faculty`";
$result1=mysql_query($query1,$connection) or die("error in query:".$query1."".mysql_error());

if(mysql_num_rows($result1)>0)
{
echo "<center>";
echo "<h1>";
echo "Faculty Detail's";
echo "</h1>";
echo "</center>";
echo"<center>";
echo"<table cellpadding=10 border=1 >";
echo"<tr>";
echo"<th>";
echo "Faculty id";
echo "</th>";
	echo"<th>";
echo "Name";
echo "</th>";
    echo"<th>";
echo "Gender";
echo "</th>";

        
		
		echo"<th>";
echo "Email id";
echo "</th>";
echo"<th>";
echo "Qualification";
echo "</th>";
echo"<th>";
echo "Username";
echo "</th>";
echo"<th>";
echo "Password";
echo "</th>";

while($row=mysql_fetch_array($result1))
{
	echo"<tr>";
	echo"<td>".$row['f-id']."</td>";
	echo"<td>".$row['name']."</td>";
        echo"<td>".$row['gender']."</td>";
		
       
       
		   echo"<td>".$row['email']."</td>";
		      
			  echo"<td>".$row['qualification']."</td>";
			   
			   echo"<td>".$row['username']."</td>";   
			   echo"<td>".$row['password']."</td>";   
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


