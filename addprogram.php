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



	
	if (Id=="")
	{
	alert("Enter program id");
	document.form1.id.focus();
	return false;
	}
	else if (isNaN(Id)) {
                alert("Invalid program id");
				document.form1.id.focus();
				return false;
          }
	
	
	if (na=="")
		{
		alert("Enter program  name");
		document.form1.name.focus();
		return false;
		}
		else
	
		if (!isNaN(na)) 
		{
		alert("Invalid program  name");
		document.form1.name.focus();
		return false;
		}
		
		if (EST=="")
		{
		alert("Enter date");
		document.form1.date.focus();
		return false;
		}
		
		
	}
	</script>	
</head>
<body background="bac.jpg" text="white">
<center><font face="algerian" size=20>Add Program</font></center><br>
<br><br><br><br><br>

<center><table border=1 bordercolor=white cellspacing=10 cellpadding=10><tr><td>
<form action="addprogram1.php" method="POST" name="form1" onSubmit="return valid()">

<br>
Program ID:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id" value=""><br><br>
Program Name:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" value=""><br><br>
Establishment Date:-<input type="text" name="date" value="">*format->eg:- 19th June 1992<br><br>



<br><br>
 <center><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="reset" name="reset" value="Reset"></center><br><br>
</form></td></tr></table></center>
</html>