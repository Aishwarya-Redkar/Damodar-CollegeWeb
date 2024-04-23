<?php
require("conn.inc.php");


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


<html>
<head>
<script>
function validcourse()
{
Selc=document.form1.sel.selectedIndex;
Course1=document.form1.cour.selectedIndex;

if(Selc==0)
{
	alert("Select Semester");
	document.form1.sel.focus();
	return false;
}

if(Course1==0)
{
	alert("Select Subject");
		document.form1.cour.focus();
		return false;
}



}
</script>

</head>
<body background="bac.jpg" text="white">
<center><h1>Update Course Details</h1></center>
<br><br><br><br><br><center><table border=1 bordercolor=white cellpadding=10 cellspacing=10><tr><td>
<form name="form1" method="POST" action="updatecourse1.php" onSubmit="return validcourse()">
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
<center><input name="submit" type="submit" value="Next">&nbsp;&nbsp;<input name="reset" type="reset" value="Reset"></center><br>
</form></td></tr></table></center>




</body></html>


