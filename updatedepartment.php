<?php

require("conn.inc.php");


$query="SELECT * FROM department";

$result=mysql_query($query) or die("Query Failed: ".mysql_error());

$i=0;

while($rows=mysql_fetch_array($result))

{
$name[$i]=$rows['dept_name'];
$i++;
}
$total_elmt=count($name);
?>
<html>
<head>
<script>
function valid()
{
program=document.form1.dp.selectedIndex;
if (program===0)
		{
		alert("Select Department");
		document.form1.dp.focus();
		return false;
		}}
</script>
</head>


<center><font face="algerian" size=20>Update Department Details</font></center><br>
<br><br><br><br><br>
<center><table border=1 bordercolor=white cellspacing=10 cellpadding=10><tr><td>
<form action="updatedept.php" method="POST" name="form1" onSubmit="return valid()">
<br>
Select 'Department name':<select name="dp">
<option>Select</option>
<?php
for($j=0;$j<$total_elmt;$j++)
{
?><option><?php
echo $name[$j];
?></option><?php
}

?>
</select><br/><br><br>
<br />
<center><input type="submit" name="submit" value="update" /></center>
</form></td></tr></table></center>

<!DOCTYPE html>
<html>
<head></head>
<body background="bac.jpg" text="white">

</body></html>
