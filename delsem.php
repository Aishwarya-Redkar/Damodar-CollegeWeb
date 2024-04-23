<?php

require("conn.inc.php");


$query="SELECT * FROM semester";

$result=mysql_query($query) or die("Query Failed: ".mysql_error());

$i=0;

while($rows=mysql_fetch_array($result))

{
$name[$i]=$rows['se-id'];
$i++;
}
$total_elmt=count($name);
?>
<html>
<head>
<script>
function valid()
{
sem=document.del.sem.selectedIndex;
if (sem==0)

		{
		alert("Select semester");
		document.del.sem.focus();
		return false;
		}}
        </script>
        </head>
<center><font face="algerian" size=20>Delete Semester Details</font></center><br>
<br><br><br><br><br>
<center><table border=1 bordercolor=white cellspacing=10 cellpadding=10><tr><td>
<form action="delsem1.php" method="POST" name="del" onSubmit="return valid()">
<br>
Select 'Semester':<select name="sem">
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
<center><input type="submit" name="submit" value="Delete"/>&nbsp;&nbsp;<input type="reset" name="reset" value="Reset"/></center>
</form></td></tr></table></center>

<!DOCTYPE html>
<html>
<head></head>
<body background="bac.jpg" text="white">

</body></html>
