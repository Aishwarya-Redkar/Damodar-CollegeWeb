<?php

require("conn.inc.php");
?>

<html>
<head>
<script>
function valid()
{
	
Id=document.form1.id.value;
na=document.form1.name.value;
EST=document.form1.date.value;
HOD=document.form1.hod.value;


	
	if (Id=="")
	{
	alert("Enter department id");
	document.form1.id.focus();
	return false;
	}
	else if (isNaN(Id)) {
                alert("Invalid department id");
				document.form1.id.focus();
				return false;
          }
	
	
	if (na=="")
		{
		alert("Enter department  name");
		document.form1.name.focus();
		return false;
		}
		else
	
		if (!isNaN(na)) 
		{
		alert("Invalid department  name");
		document.form1.name.focus();
		return false;
		}
		
		if (EST=="")
		{
		alert("Enter date");
		document.form1.date.focus();
		return false;
		}
		
		if (HOD=="")
		{
		alert("Enter H.O.D");
		document.form1.hod.focus();
		return false;
		}
		else
	
		if (!isNaN(HOD)) 
		{
		alert("Invalid H.O.D");
		document.form1.hod.focus();
		return false;
		}
		
		
	}
	</script>	
<body background="bac.jpg" text="white">
<center><font face="algerian" size=20>Add Department</font></center><br>
<br><br><br><br><br>
<center><table border=1 bordercolor=white cellspacing=10 cellpadding=10><tr><td>
<form action="adddept1.php" method="POST" name="form1" onSubmit="return valid()">

<br>
Department id:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="id" value=""><br><br>
Department Name:-&nbsp;<input type="text" name="name" value=""><br><br>
Establishment Date:&nbsp;<input type="text" name="date" value="">* format->19th June 1992<br><br>


H.O.D.:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="hod" value=""><br><br>





<br><br>
 <center><input type="submit" name="submit" value="Submit" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="reset" name="reset" value="Reset"></center><br><br>
</form></td></tr></table></center>
</html>