<?php

require("conn.inc.php");
?>
<html>

<body background="bac.jpg" text="white">
<center><font face="algerian" size=20>Add Semester</font></center><br>
<br><br><br><br><br>
<center><table border=1 bordercolor=white cellspacing=10 cellpadding=10><tr><td>
<form action="addsem1.php" method="POST" name="sem" onSubmit="return validate1()">

<br>
Semester ID:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id" value=""><br><br>
Semester Name:-&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" value=""><br><br>
Semester Duration:-<input type="text" name="dur" value="">*format-> eg:-5 months or 6 months<br><br>


Total Fees:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fees" value=""><br><br>





<br><br>
<html>
<head>
<script>
function validate1()
{
	
SEID=document.sem.id.value;
SN=document.sem.name.value;
SD=document.sem.dur.value;
total=document.sem.fees.value;



	
	if (SEID=="")
	{
	alert("Enter Semester ID");
	document.sem.id.focus();
	return false;
	}
	else if (isNaN(SEID)) {
                alert("Invalid Semester code");
					document.sem.id.focus();
					return false;
          }
	
	
	if (SN=="")
		{
		alert("Enter Semester name");
		document.sem.name.focus();
		return false;
		}
		else
	//if (addstudentrecordsform.name.value.match(/^[a-zA-Z]+$/) && addstudentrecordsform.name.value !="")
		if (!isNaN(SN)) 
		{
		alert("Invalid Semester name");
		document.sem.name.focus();
		return false;
		}
		
	if(SD=="")
		{
			alert("Enter Semester Duration");
				document.sem.dur.focus();
				return false;
		}
		
		
		if(total=="")
		{
			alert("Enter Semester total fees");
				document.sem.fees.focus();
				return false;
		}
		else if (isNaN(total)) {
                alert("Invalid total fees,Enter integer value");
					document.sem.fees.focus();
					return false;
          }
		   else if((total==0)||(total<0)) 
		   {
                alert("Enter correct semester fee");
					document.sem.fees.focus();
					return false;
		 }
		}
</script>

</head>
 <center><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="reset" name="reset" value="Reset"></center><br><br>
</form></td></tr></table></center>
</html>