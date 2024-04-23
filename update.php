<?php
require("conn.inc.php");
?>
<html>
<head>
<script>
function vali()
{
	
var Roll=document.updateDetails.roll.value;
if (Roll=="")
	{
	alert("Enter roll no");
	document.updateDetails.roll.focus();
	return false;
	}
	else if (isNaN(Roll)) {
                alert("Invalid roll no");
				document.updateDetails.roll.focus();
				return false;
          }
		  
}


</script>
</head>

<body background="bac.jpg" text="white">



<center><font face="algerian" size="15">Update Student's Details</font></center>
<br><br><br><br><br><center><table border=1 bordercolor=white cellpadding=10 cellspacing=10><tr><td>

<form method="POST" action="updateform.php" name="updateDetails" onSubmit="return vali()">

Enter Roll No:-<input type="text" name="roll" value=""><br><br>

<center><input name="submit" type="submit" value="Update">&nbsp;&nbsp;<input name="reset" type="reset" value="Reset"></center><br>

<center><p><a href="admin_page.php"><font color=white>View Records</font></a></p></center>

</form></td></tr></table></center>

</body></html>


                                                                                                        
