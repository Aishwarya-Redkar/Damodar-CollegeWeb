<?php
require("conn.inc.php");
?>
<html>
<head>
<script>
function validate1()
{
	
cour=document.form3.cour.selectedIndex;
sem=document.form3.sel.selectedIndex;
        if (sem==0)
		{
		alert("Select semester");
		document.form3.sel.focus();
		return false;
		}
		
	if (cour==0)
	{
	alert("Select Subject Name");
	document.form3.cour.focus();
	return false;
	}
		}
</script>
</head>
<center><h1>Marks as per Subject</h1></center>
<br><br><br><br><br><center><table border=1 bordercolor=white cellpadding=10 cellspacing=10><tr><td>
<form name="form3" method="POST" action="viewsubmarks.php" onSubmit="return validate1()"><br>

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
<?php
$query="SELECT * FROM courses";
$result=mysql_query($query) or die("Query Failed: ".mysql_error());
$i=0;
while($rows=mysql_fetch_array($result))
{
$coursee[$i]=$rows['c-name'];
$i++;
}
$total_elmt=count($coursee);

?>


Select the 'Subject':<select name="cour">
<option>Select</option>&nbsp;&nbsp;
<?php
for($j=0;$j<$total_elmt;$j++)
{
?><option><?php
echo $coursee[$j];
?></option><?php
}
?>
</select><br/><br>
<br>

<br />
<center><input type="submit" name="submit" value="view"/>&nbsp;&nbsp;<input type="reset" name="reset" value="Reset"/></center>
</form></td></tr></table></center>

</body>
</html>
<!DOCTYPE html>
<html>
<head></head>
<body background="bac.jpg" text="white">

</body></html>

