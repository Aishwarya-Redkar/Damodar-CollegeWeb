<?php

require("conn.inc.php");

session_start();
$user=$_SESSION['username'];
if ($user)
{








?>
<html>
<head>
<script>
function validation1()
{
old=document.form1.oldpassword.value;
New=document.form1.newpassword.value;
rese=document.form1.repeatnewpassword.value;

var ichars=old;
	var at=ichars.indexOf("@");
		
		if (old=="")
	
			{
				alert("Enter old password");
				document.form1.oldpassword.focus();
				return false;
					 }    
		
		
		else if (at<0)
	
    {
	alert ("@ symbol is must for old password");
		document.form1.oldpassword.focus();
		return false;
    }

	var ichars=New;
	var at=ichars.indexOf("@");
		
		if (New=="")
	
			{
				alert("Enter new password");
				document.form1.newpassword.focus();
				return false;
					 }    
		
		
		else if (at<0)
	
    {
	alert ("@ symbol is must for new password");
		document.form1.newpassword.focus();
		return false;
    }
	else if(New.length < 4)
	{alert("new password is too short ");
	document.form1.newpassword.focus();
	return false;
	}
	
	else if(New.length > 15)
	{alert("new password is too long");
	document.form1.newpassword.focus();
	return false;
	}

var ichars=rese;
	var at=ichars.indexOf("@");
		
		if (rese=="")
	
			{
				alert("Re-type password");
				document.form1.repeatnewpassword.focus();
				return false;
					 }    
		
		
		else if (at<0)
	
    {
	alert ("@ symbol is must for retype password");
		document.form1.repeatnewpassword.focus();
		return false;
    }
	else if(rese.length < 4)
	{alert("retype password is too short ");
	document.form1.repeatnewpassword.focus();
	return false;
	}
	
	else if(rese.length > 15)
	{alert("retype password is too long");
	document.form1.repeatnewpassword.focus();
	return false;
	}
}
</script>


</head>
<body background="bac.jpg" text="white">
<center><font face="algerian" size=20>Change Password</font></center><br>
<br><br><br><br><br>
<center><table border=1 bordercolor=white cellspacing=10 cellpadding=10><tr><td>
<br>
<form action='changepassword3.php' method='post' name="form1" onSubmit="return validation1()">
Old Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="oldpassword"><p>
New Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="newpassword"><br><br>
Confirm Password:&nbsp;<input type="password" name="repeatnewpassword"><p><br>
<input type="hidden" name="username" value="<?php echo $user; ?>">




<center><input type="submit" name="submit" value="Change Password"></center>
</form>

</td>
</tr>
</table></center>


</body>
</html>
<?php
}
else
die("You must be logged in to change your password");

?>