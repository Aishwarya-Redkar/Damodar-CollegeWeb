
<?php
require("conn.inc.php");
$subname=$_POST['cour'];
$sem=$_POST['sel'];
$roll=$_POST['roll'];

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


if (mysql_num_rows($result1) > 0) { 

     echo "This Subject & Roll no. already exists in database";
	 include("mar.php");
      exit();
  
}
else if (mysql_num_rows($result2) <= 0) { 
echo "This Roll no doesnot exist in Students Table, Make entry of this student in Students table";
	 include("mar.php");

  exit();
}
  
 else
 {














}
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
<center><h1>Insert Students Marks</h1></center>
<br><br><br><br><br><center><table border=1 bordercolor=white cellpadding=10 cellspacing=10><tr><td>

<form method="POST" action="insertmarks.php" name="form1" onSubmit="return validate1()" >

<input type="hidden" name="coursename" value="<?php echo $subname; ?>">
<input type="hidden" name="roll" value="<?php echo $roll ?>">
<input type="hidden" name="semname" value="<?php echo $sem; ?>">




<input type="hidden" name="code" value="<?php echo $code; ?>">




ISA 1:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="isa1" value="">&nbsp;&nbsp;&nbsp;&nbsp;
ISA 2:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="isa2" value=""><br><br><br>
Assignment 1:-<input type="text" name="ass1" value="">&nbsp;&nbsp;&nbsp;
Assignment 2:-<input type="text" name="ass2" value=""><br><br><br>
ESA:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ese" value="">&nbsp;&nbsp;&nbsp;&nbsp;

Year:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="year" value="">&nbsp;<font color=black>eg:-"OCT2014" or "MAR2014"(write year properly)</font><br><br>
<br><center>No of Attempts:-<input type="text" name="attempts" value=""></center>


<br><br>
<center><input name="submit" type="submit" value="Insert Marks"></center><br>


</form></td></tr></table></center>
<!DOCTYPE html>
<html>
<head>

</head>
<body background="bac.jpg" text="white">


</body></html>


                                                                                                        
