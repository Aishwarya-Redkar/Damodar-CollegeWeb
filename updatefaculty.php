<?php

require("conn.inc.php");


$query="SELECT * FROM faculty";

$result=mysql_query($query) or die("Query Failed: ".mysql_error());

$i=0;

while($rows=mysql_fetch_array($result))

{
$name[$i]=$rows['name'];
$i++;
}
$total_elmt=count($name);
?>
<html>
<head>
<script>
function validate1()
{
	sem=document.updatesem.nm.selectedIndex;

	if (sem==0)
		{
		alert("Select semester");
		document.updatesem.nm.focus();
		return false;
		}
}
</script>
</head>

<center><font face="algerian" size=20>Update Faculty Details</font></center><br>
<br><br><br><br><br>
<center><table border=1 bordercolor=white cellspacing=10 cellpadding=10><tr><td>
<form action="updatefaculty1.php" method="POST" name="updatesem" onSubmit="return validate1()" >
<br>
Select 'Faculty name':<select name="nm">
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
<center><input type="submit" name="submit" value="update"/>&nbsp;&nbsp;<input type="reset" name="reset" value="Reset"/></center>
</form></td></tr></table></center>

<!DOCTYPE html>
<html>
<head></head>
<body background="bac.jpg" text="white">

</body></html>
