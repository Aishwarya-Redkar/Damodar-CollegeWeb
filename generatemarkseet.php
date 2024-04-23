<?php
require("conn.inc.php");
?>

<html>
<head>
<script>
function validate1()
{
	
Roll=document.form3.roll.value;
sem=document.form3.sel.selectedIndex;



	
	if (Roll=="")
	{
	alert("Enter roll no");
	document.form3.roll.focus();
	return false;
	}
	else if (isNaN(Roll)) {
                alert("Invalid roll no");
				document.form3.roll.focus();
				return false;
          }
	
	
	if (sem==0)
		{
		alert("Select semester");
		document.form3.sel.focus();
		return false;
		}}
</script>
</head>

<center><h1>View Marksheet</h1></center>
<br><br><br><br><br><center><table border=1 bordercolor=white cellpadding=10 cellspacing=10><tr><td>
<form name="form3" method="POST" action="displaymarksheet.php" onSubmit="return validate1()"><br>
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

<br />
<center><input type="submit" name="submit" value="create"/>&nbsp;&nbsp;<input type="reset" name="reset" value="reset"/></center>
</form></td></tr></table></center>

</body>
</html>
<!DOCTYPE html>
<html>
<head></head>
<body background="bac.jpg" text="white">

</body></html>

