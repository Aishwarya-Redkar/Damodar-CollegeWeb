<?php
require("conn.inc.php");


?>
<center><h1>Update Percentage & Grade Details</h1></center>
<br><br><br><br><br><center><table border=1 bordercolor=white cellpadding=10 cellspacing=10><tr><td>
<form name="form1" method="POST" action="">
Enter Roll No:-<input type="text" name="roll" value=""><br><br>
<?php
$query="SELECT * FROM semester";

$result=mysql_query($query) or die("Query Failed: ".mysql_error());

$i=0;

while($rows=mysql_fetch_array($result))

{
$sem[$i]=$rows['se-id'];
$i++;
}
$total_elmt=count($sem);
?>



<br>
Select the 'Semester':<select name="sel">
<option>Select</option>
<?php
for($j=0;$j<$total_elmt;$j++)
{
?><option><?php
echo $sem[$j];
?></option><?php
}

?>
</select><br/><br><br>
<center><input type="submit" name="submit" value="update" /></center>
</form></td></tr></table></center>

<!DOCTYPE html>
<html>
<head></head>
<body background="1_235702_1.jpg" text="white">

</body></html>