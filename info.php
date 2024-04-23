<?php

require("conn.inc.php");





$query1="SELECT * FROM `members`";
$result1=mysql_query($query1,$connection) or die("error in query:".$query1."".mysql_error());

if(mysql_num_rows($result1)>0)
{
echo"<table cellpadding=10 border=0>";
while($row=mysql_fetch_array($result1))
{
	echo"<tr>";
	echo"<td>".$row['s-name']."</td>";
	echo"<td>".$row['roll-id']."</td>";
	
	echo"<td>".$row['s-course']."</td>";
       	echo"</tr>";
	}
echo"</table>";
}
else{
	echo"no rows found!";
	}
mysql_close($connection);

?>
