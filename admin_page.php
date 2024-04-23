<?php


require("conn.inc.php");





$query1="SELECT * FROM `members`";
$result1=mysql_query($query1,$connection) or die("error in query:".$query1."".mysql_error());

if(mysql_num_rows($result1)>0)
{
echo "<center>";
echo "<h1>";
echo "Student's Detail's";
echo "</h1>";
echo "</center>";
echo "<br>";
echo "<br>";
echo"<table cellpadding=10 border=1 align=center>";
echo"<tr>";
echo"<th>";
echo "Roll No";
echo "</th>";
	echo"<th>";
echo "Name";
echo "</th>";
    echo"<th>";
echo "Email";
echo "</th>";

        echo"<th>";
echo "Username";
echo "</th>";
		echo"<th>";
echo "Password";
echo "</th>";
echo"<th>";
echo "Register";
echo "</th>";
		echo"</tr>";
while($row=mysql_fetch_array($result1))
{
	echo"<tr>";
	echo"<td>".$row['roll id']."</td>";
	echo"<td>".$row['s-name']."</td>";
    echo"<td>".$row['email-id']."</td>";  
	   
        echo"<td>".$row['s-username']."</td>";
		echo"<td>".$row['password']."</td>";
		echo"<td>".$row['Register']."</td>";
       
	echo"</tr>";
	}
echo"</table>";
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

