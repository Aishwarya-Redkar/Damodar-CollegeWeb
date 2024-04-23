<?php
require("conn.inc.php");
if(isset($_POST['submit']))
{
$roll=$_POST['roll'];
$subname=$_POST['cour'];
$sem=$_POST['sel'];


$query="SELECT `course id` FROM courses where `c-name`='$subname'";
$result=mysql_query($query) or die("Query Failed: ".mysql_error());


if(mysql_num_rows($result)>0)
{

while($row=mysql_fetch_array($result))
{
$code=$row['course id'];


}
}



$query1 = "SELECT * FROM `answers` WHERE `roll id`='$roll' and `course id`='$code'";
$query2 = "SELECT * FROM `members` WHERE `roll id`='$roll'";
$result2 = mysql_query($query2,  $connection) or die ("Error in query: ".mysql_error());
$result1 = mysql_query($query1,  $connection) or die ("Error in query: ".mysql_error());


if (mysql_num_rows($result1) <= 0) { 

     echo "This Subject & Roll no. dosen't exists in database";
	 include("updatemarksheet.php");
      exit();
  
}
else if (mysql_num_rows($result2) <= 0) { 
echo "This Roll no doesnot exist in Students Table, Make entry of this student in Students table";
	 include("updatemarksheet.php");

  exit();
}
  
 else
 {




















$query="select * from answers where `roll id`='$roll' and `course id`='$code'";



$result=mysql_query($query,$connection) or die("error in query:".$query1."".mysql_error());
if(mysql_num_rows($result)>0)
{
while($record=mysql_fetch_array($result))
{
$course=$record['course id'];
$roll=$record['roll id'];
$isa1=$record['ISA 1'];
$isa2=$record['ISA 2'];
$ass1=$record['Assignment 1'];
$ass2=$record['Assignment 2'];
$ese=$record['ESE'];
$sem=$record['se-id'];
$year=$record['Year'];
$attmpt=$record['no_of_attempts'];
$total=$record['Total'];
$grade=$record['Grade'];
$cname=$record['c-name'];


}
}
}}
?>
<html>
<head>
<script>
function validate1()
{
	
is1=document.form1.isa1.value;
is2=document.form1.isa2.value;
as1=document.form1.ass1.value;
as2=document.form1.ass2.value;
esa=document.form1.ese.value;
Year=document.form1.year.value;
Attempts=document.form1.attempts.value;


	 if (isNaN(is1)) {
                alert("Invalid isa1 marks");
					document.form1.isa1.focus();
					return false;
          }
		  else if((is1<0)||(is1>15)) 
		   {
                alert("Enter correct isa1 marks");
					document.form1.isa1.focus();
					return false;
		 }
	
	 if (isNaN(is2)) {
                alert("Invalid isa2 marks");
					document.form1.isa2.focus();
					return false;
          }
		  else if((is2<0)||(is2>15)) 
		   {
                alert("Enter correct isa2 marks");
					document.form1.isa2.focus();
					return false;
		 }
	
	
	 if (isNaN(as1)) {
                alert("Invalid ass1 marks");
					document.form1.ass1.focus();
					return false;
          }
		  else if((as1<0)||(as1>10)) 
		   {
                alert("Enter correct ass1 marks");
					document.form1.ass1.focus();
					return false;
		 }
	
	

	if (isNaN(as2)) {
                alert("Invalid ass2 marks");
					document.form1.ass2.focus();
					return false;
          }
		  else if((as2<0)||(as2>10)) 
		   {
                alert("Enter correct ass2 marks");
					document.form1.ass2.focus();
					return false;
		 }

 if (isNaN(esa)) {
                alert("Invalid ese marks");
					document.form1.ese.focus();
					return false;
          }
		  else if((esa<0)||(esa>50)) 
		   {
                alert("Enter correct ese marks");
					document.form1.ese.focus();
					return false;
		 }

if (Year=="")
	{
	alert("Enter year");
	document.form1.year.focus();
	return false;
	}

		  else if((Year==0)||(Year<0)) 
		   {
                alert("Enter correct year");
					document.form1.year.focus();
					return false;
		 }
	if(Attempts=="")
	{
	alert("Enter  Attempts");
					document.form1.attempts.focus();
					return false;
					}
					
else if (isNaN(Attempts))
 {
                alert("Invalid Attempts marks");
					document.form1.attempts.focus();
					return false;
          }
					
		else if(Attempts<0) 
		   {
                alert("Enter correct attempts");
					document.form1.attempts.focus();
					return false;
		 }
	}



</script>
</head>



<body background="bac.jpg" text="white">
<center><h1>Update Student's Details Marks</h1></center>
<br><br><br><br><br><center><table border=1 bordercolor=white cellpadding=10 cellspacing=10><tr><td>
<form method="post" action="updatefinalmarks.php" name="form1" onSubmit="return validate1()">

Course Code:-&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="coursecode" value="<?php echo $course; ?>" readonly><br /><br>
Course Name:-&nbsp;&nbsp;&nbsp;<input type="text" name="coursename" value="<?php echo $cname; ?>" readonly><br /><br>
Semester:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sem" value="<?php echo $sem; ?>"readonly><br /><br />
Roll no:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="roll" value="<?php echo $roll; ?>" readonly><br /><br>
ISA 1:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="isa1" value="<?php echo $isa1; ?>"><br /><br>
ISA 2:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="isa2" value="<?php echo $isa2; ?>"><br />
<br>
Assignment 1:-&nbsp;&nbsp;<input type="text" name="ass1" value="<?php echo $ass1; ?>"><br /><br>
Assignment 2:-&nbsp;&nbsp;<input type="text" name="ass2" value="<?php echo $ass2; ?>"><br /><br>
ESA:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="esa" value="<?php echo $ese; ?>"><br /><br>

Year:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="year" value="<?php echo $year; ?>"><br /><br>
No. of Attempts:<input type="text" name="attempts" value="<?php echo $attmpt; ?>"><br />






<br />
<center><input type="submit" name="submit" value="update" />&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" /></center>
</form></td></tr></table></center>





</body></html>

