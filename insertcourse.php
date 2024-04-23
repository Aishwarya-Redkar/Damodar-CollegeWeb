<?php
require("conn.inc.php");
?>
<html>
<head>
<script>
function valid()
{
Ccode=document.form2.ccode.value;
sem=document.form2.sel.selectedIndex;
Cn=document.form2.coursename.value;
ct=document.form2.coursetype.value;
mm=document.form2.maxmarks.value;
cc=document.form2.ccredit.value;

if (Ccode=="")
	{
	alert("Enter course code");
	document.form2.ccode.focus();
	return false;
	}
	
	if (sem==0)
		{
		alert("Select semester");
		document.form2.sel.focus();
		return false;
		}
		
	if (Cn=="")
		{
		alert("Enter course name");
		document.form2.coursename.focus();
		return false;
		}
	else if (!isNaN(Cn)) {
                alert("Invalid Course name");
				document.form2.coursename.focus()
				return false;
				}
	if(ct=="")
	{
		alert("Enter course type");
		document.form2.coursetype.focus();
		return false;
	}
	
	else if (!isNaN(ct)) {
                alert("Invalid Course type");
				document.form2.coursetype.focus();
				return false;
				}
	if (mm=="")
		{
		alert("Enter maxmum marks");
		document.form2.maxmarks.focus();
		return false;
		}
		else if (isNaN(mm)) {
                alert("Invalid maximum marks entered");
				document.form2.maxmarks.focus();
				return false;
          }
	
	
	if (cc=="")
		{
		alert("Enter course credit");
		document.form2.ccredit.focus();
		return false;
		}
	else if (isNaN(cc)) {
                alert("Invalid course credit entered");
				document.form2.ccredit.focus();
				return false;
          }
	
	
	
	}
</script>
</head>

<center><h1>Add Course Details</h1></center>
<br><br><br><br><br><center><table border=1 bordercolor=white cellpadding=10 cellspacing=10><tr><td>
<form name="form2" method="POST" action="addcourse.php" onSubmit="return valid()">
<br>Course Code:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ccode" value=""><br><br>

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
Select 'Semester':&nbsp;<select name="sel">
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


Course Name:-&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="coursename" value=""><br><br><br>
Course Type:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="coursetype" value=""><br><br><br>
Maximum Marks:-<input type="text" name="maxmarks" value=""><br><br><br>
Course Credit:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ccredit" value=""><br><br><br>

<br>
<center><input name="submit" type="submit" value="Next">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="reset" name="reset" value="Reset"></center><br><br></center><br>
</form></td></tr></table></center>
<!DOCTYPE html>
<html>
<head>

</head>
<body background="bac.jpg" text="white">


</body></html>





