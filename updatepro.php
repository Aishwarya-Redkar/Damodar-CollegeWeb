<?php

require("conn.inc.php");


$query="SELECT * FROM programs";

$result=mysql_query($query) or die("Query Failed: ".mysql_error());

$i=0;

while($rows=mysql_fetch_array($result))

{
$name[$i]=$rows['pro-name'];
$i++;
}
$total_elmt=count($name);
?>
<html>
<head>
<script>
function valid()
{
program=document.pro1.pro.selectedIndex;
if (program===0)
		{
		alert("Select Program");
		document.pro1.pro.focus();
		return false;
		}}
</script>
</head>


<center><font face="algerian" size=20>Update Program Details</font></center><br>
<br><br><br><br><br>
<center><table border=1 bordercolor=white cellspacing=10 cellpadding=10><tr><td>
<form action="updatepro1.php" name="pro1" method="POST" onSubmit="return valid()">
<br>
Select 'Program Name':<select name="pro">
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
