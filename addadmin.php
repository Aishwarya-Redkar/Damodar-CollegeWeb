<html>
<head>
<script>
function validate1()
{
	
id=document.form1.id.value;
na=document.form1.name.value;
user=document.form1.username.value;
pass=document.form1.password.value;


	
	if (id=="")
	{
	alert("Enter admin id");
	document.form1.id.focus();
	return false;
	}
	else if (isNaN(id)) {
                alert("Invalid admin id");
				return false;
          }
	
	
	if (na=="")
		{
		alert("Enter name");
		document.form1.name.focus();
		return false;
		}
		else
	
		if (!isNaN(na)) 
		{
		alert("Invalid name");
		document.form1.name.focus();
		return false;
		}
		
		
		
		
		var ichars=user;

		var at=ichars.indexOf("_");
		var dot=ichars.lastIndexOf(".");
		if (user=="")
	
			{
				alert("Enter username");
				document.form1.username.focus();
				return false;
					 }    
		
		
		else if (at<1)
	
    {
	alert ("underscore is must for username");
		document.form1.username.focus();
		return false;
    
        }
    
		
		
		
		
		var ichars=pass;

		var at=ichars.indexOf("@");
		var dot=ichars.lastIndexOf(".");
		if (pass=="")
	
			{
				alert("Enter password");
				document.form1.password.focus();
				return false;
					 }    
		
		
		else if (at<1)
	
    {
	alert ("@ is must for password");
		document.form1.password.focus();
		return false;
    
        }
		
		
 
		
	}



</script>

</head>


<body background="1_235702_1.jpg" text="white">
<center><font face="algerian" size=20>Add Admin Details</font></center><br>
<br><br><br><br><br>
<center><table border=1 bordercolor=white cellspacing=10 cellpadding=10><tr><td>
<form action="admin2.php" method="POST" name="form1" onSubmit="return validate1()">

<br>
Admin id:-&nbsp;&nbsp;<input type="text" name="id" value="" maxlength="8"><br><br>
Name:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" name="name" value="">&nbsp;* Last Name First<br><br>
Username:-&nbsp;<input type="text" name="username" value=""> &nbsp;* Username should contain underscore<br><br>
Password:-&nbsp; <input type="password" name="password" value="">&nbsp;* Password should contain "@" symbol

<br><br><br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="reset" name="reset" value="Reset"><br><br>
</form></td></tr></table></center>
</html>