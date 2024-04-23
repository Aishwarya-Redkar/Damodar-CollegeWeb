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
<center><h1>Generate Percentage</h1></center>
<br><br><br><br><br><center><table border=1 bordercolor=white cellpadding=10 cellspacing=10><tr><td>
<form name="form3" method="POST" action="genper.php" onSubmit="return validate1()"><br>

<center><b><u>IMPORTANT</u></b></center>
Before Calculating Percentage for each student, Please check if records of all subjects is being <br>
entered(i.e there should'nt be zero) or else wrong percentage would be generated<br><br>

<center><a href="internalmarks.php" target="_blank">Plz click here to view Marks for confirmation</a></center><br><br>
<center>Enter Roll No:-<input type="text" name="roll" value=""></center><br><br>
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




<center>Select the 'Semester':<select name="sel">
<option>Select</option>
<?php
for($j=0;$j<$total_elmt;$j++)
{
?><option><?php
echo $sem[$j];
?></option><?php
}

?>
</select></center><br/><br><br>

<br />

<center><input type="submit" name="submit" value="Calculate" title="Click here to calculate percentage of a particular Roll no"/>&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset"></center>
</form></td></tr></table></center>

</body>
</html>
<!DOCTYPE html>
<html>
<head></head>
<body background="bac.jpg" text="white">

</body></html>

