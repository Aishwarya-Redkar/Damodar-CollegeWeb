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
function valid()
{
roll=document.marstud.roll.value;
Sel=document.marstud.sel.selectedIndex;
Course=document.marstud.cour.selectedIndex;

if(roll=="")
	{
	alert("Enter roll no");
	document.marstud.roll.focus();
	return false;
	}
	else if (isNaN(roll)) {
                alert("Invalid roll no");
				document.marstud.roll.focus();
	            return false;
				
				
          }
if(Sel==0)
{
	alert("Select Semester");
	document.marstud.sel.focus();
	return false;
}

if(Course==0)
{
	alert("Select Subject");
		document.marstud.cour.focus();
		return false;
}
}


</script>

</head>

<center><h1>Insert Students Marks</h1></center>
<br><br><br><br><br><center><table border=1 bordercolor=white cellpadding=10 cellspacing=10><tr><td>

<form method="POST" action="marksheet.php" name="marstud" onSubmit="return valid()">
<br>
Enter Roll No:<input type="text" name="roll" value=""><br><br><br>
Select the 'Semester':<select name="sel">
<option>Select </option>
<?php
for($j=0;$j<$total_elmt;$j++)
{
?><option><?php
echo $sem[$j];
?></option><?php
}

?>
</select><br><br><br>


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
<!DOCTYPE html>
<html>
<head>

</head>
<body background="bac.jpg" text="white">


</body></html>



