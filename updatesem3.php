<?php

require("conn.inc.php");



$sem=$_POST['sem'];


$query1="select * from semester where `se-id`='$sem'";



$result1=mysql_query($query1,$connection) or die("error in query:".$query1."".mysql_error());
if(mysql_num_rows($result1)>0)
{
while($record=mysql_fetch_array($result1))
{
$id=$record['se-id'];
$name=$record['se-name'];
$dur=$record['se-duration'];
$tfees=$record['Total fees'];
}
}
?>
<html>
<head>
<script>
function validate1()
{
	

SN=document.updsem.name.value;
SD=document.updsem.dur.value;
total=document.updsem.fees.value;
	
if (SN=="")
		{
		alert("Enter Semester name");
		document.updsem.name.focus();
		return false;
		}
		else
	//if (addstudentrecordsform.name.value.match(/^[a-zA-Z]+$/) && addstudentrecordsform.name.value !="")
		if (!isNaN(SN)) 
		{
		alert("Invalid Semester name");
		document.updsem.name.focus();
		return false;
		}
		
	if(SD=="")
		{
			alert("Enter Semester Duration");
				document.updsem.dur.focus();
				return false;
		}
		
		
		if(total=="")
		{
			alert("Enter Semester total fees");
				document.updsem.fees.focus();
				return false;
		}
		else if (isNaN(total)) {
                alert("Invalid total fees,Enter integer value");
					document.updsem.fees.focus();
					return false;
          }
		 else if(total=="0"){
                alert("Enter correct semester fee");
					document.updsem.fees.focus();
					return false;
		 }
		}
</script>

</head>
<center><h1>Update Semester Details</h1></center>
<br><br><br><br><br><center><table border=1 bordercolor=white cellpadding=10 cellspacing=10><tr><td>
<form method="post" action="updatesemester.php" name="updsem" onSubmit="return validate1()">

Semester id:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id" value="<?php echo $id; ?>"readonly><br><br>
Semester Name:-&nbsp;&nbsp;<input type="text" name="name" value="<?php echo $name; ?>"><br><br>
Semester Duration:<input type="text" name="dur" value="<?php echo $dur; ?>">*format-> eg:-5 months or 6 months<br><br>


Total fees:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fees" value="<?php echo $tfees; ?>"><br><br>



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

