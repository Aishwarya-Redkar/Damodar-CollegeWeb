<?php
require("conn.inc.php");
if(isset($_POST['submit']))
{
$sem=$_POST['sel'];
$subname=$_POST['cour'];



$query="SELECT `course id` FROM courses where `c-name`='$subname'";
$result=mysql_query($query) or die("Query Failed: ".mysql_error());


if(mysql_num_rows($result)>0)
{

while($row=mysql_fetch_array($result))
{
$code=$row['course id'];


}
}


$query9 = "SELECT * FROM `courses` WHERE `course id`='$code' and `se-id`='$sem'"; 

$result9 = mysql_query($query9,  $connection) or die ("Error in query: ".mysql_error());


if (mysql_num_rows($result9) <= 0) { 

     echo "This record dosen't exists in database";
	 include("updatecourse.php");

  exit();
}
else
{ 
  
 







}
}
?>
<?php

$query1="select * from courses where `course id`='$code'";



$result1=mysql_query($query1,$connection) or die("error in query:".$query1."".mysql_error());
if(mysql_num_rows($result1)>0)
{
while($record=mysql_fetch_array($result1))
{
$courseid=$record['course id'];
$sm=$record['se-id'];
$cname=$record['c-name'];
$ctype=$record['c-type'];
$max=$record['max_marks'];
$ccredit=$record['course credit'];



}
}
?>
<html>
<head>
<script>
function valid()
{
Ccode=document.form3.coursecode.value;
sem=document.form3.semes.value;
Cn=document.form3.cname.value;
ct=document.form3.ctype.value;
mm=document.form3.max.value;
cc=document.form3.ccredit.value;

if (Ccode=="")
	{
	alert("Enter course code");
	document.form3.coursecode.focus();
	return false;
	}
	
	
	
	if (Cn=="")
		{
		alert("Enter course name");
		document.form3.cname.focus();
		return false;
		}
	else if (!isNaN(Cn)) {
                alert("Invalid Course name");
				document.form3.cname.focus();
				return false;
				}
	if(ct=="")
	{
		alert("Enter course type");
		document.form3.ctype.focus();
		return false;
	}
	
	else if (!isNaN(ct)) {
                alert("Invalid Course type");
				document.form3.ctype.focus();
				return false;
				}
	if (mm=="")
		{
		alert("Enter maxmum marks");
		document.form3.max.focus();
		return false;
		}
		else if (isNaN(mm)) {
                alert("Invalid maximum marks entered");
				document.form3.max.focus();
				return false;
          }
	
	
	if (cc=="")
		{
		alert("Enter course credit");
		document.form3.ccredit.focus();
		return false;
		}
	else if (isNaN(cc)) {
                alert("Invalid course credit entered");
				document.form3.ccredit.focus();
				return false;
          }
	
	
	
	}
</script>
</head>
<center><h1>Update Course Details Marks</h1></center>
<br><br><br><br><br><center><table border=1 bordercolor=white cellpadding=10 cellspacing=10><tr><td>
<form method="post" action="updatecourse2.php" name="form3" onSubmit="return valid()">

Course Code:-&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="coursecode" value="<?php echo $courseid ?>" readonly><br /><br>
Semester:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="semes" value="<?php echo $sm ?>" readonly><br /><br>
Course Name:-&nbsp;&nbsp;&nbsp;<input type="text" name="cname" value="<?php echo $cname ?>"><br /><br />
Course Type:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ctype" value="<?php echo $ctype ?>" ><br /><br>
Max marks:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="max" value="<?php echo $max ?>"><br /><br>
Course Credit:-&nbsp;&nbsp;&nbsp;<input type="text" name="ccredit" value="<?php echo $ccredit ?>"><br />
<br>





<br />
<center><input type="submit" name="submit" value="update"/></center>
</form></td></tr></table></center>

</body>
</html>
<!DOCTYPE html>
<html>
<head></head>
<body background="bac.jpg" text="white">

</body></html>

