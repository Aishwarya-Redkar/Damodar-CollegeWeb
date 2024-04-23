<html>
<body>
<?php

$roll=$_POST['roll'];

require("conn.inc.php");



$query1 = "SELECT * FROM `members` WHERE `roll id`='$roll'"; 

$result1 = mysql_query($query1,  $connection) or die ("Error in query: ".mysql_error());


if (mysql_num_rows($result1) > 0) { 

$query1="select * from members where `roll id`='$roll'";
$result1=mysql_query($query1,$connection) or die("error in query:".$query1."".mysql_error());
if(mysql_num_rows($result1)>0)
{
while($record=mysql_fetch_array($result1))
{
$roll=$record['roll id'];
$name=$record['s-name'];
$email=$record['email-id'];

$user=$record['s-username'];
$pass=$record['password'];
$reg=$record['Register'];

}
}
}
else{
 echo "Roll no does not exist in database";
	 include("update.php");

  exit();
}
?>
<script>
function validate1()
{
	
roll=document.addstudentrecordsform.rolln.value;
na=document.addstudentrecordsform.name.value;
Email_stud=document.addstudentrecordsform.email.value;
user=document.addstudentrecordsform.user.value;
pass1=document.addstudentrecordsform.pass.value;
REG=document.addstudentrecordsform.register.value;

	
	if (roll=="")
	{
	alert("Enter roll no");
	document.addstudentrecordsform.rolln.focus();
	return false;
	}
	else if (isNaN(roll)) {
                alert("Invalid roll no");
				return false;
          }
	
	
	if (na=="")
		{
		alert("Enter name");
		document.addstudentrecordsform.name.focus();
		return false;
		}
		else
	//if (addstudentrecordsform.name.value.match(/^[a-zA-Z]+$/) && addstudentrecordsform.name.value !="")
		if (!isNaN(na)) 
		{
		alert("Invalid name");
		document.addstudentrecordsform.name.focus();
		return false;
		}
		
		
		var mail=Email_stud;
			
		    var at=mail.indexOf("@");
		    var dot=mail.lastIndexOf(".");
				
		if(Email_stud=="")
		{
			alert("Enter Email");
				document.addstudentrecordsform.email.focus();
				return false;
		}
		else 
		
			if(at<1 || dot<at+2 || dot+2>=mail.length)
			  {
			 alert("Not a valid Email Address");
			document.addstudentrecordsform.email.focus();
						return false;
			 }
		
		
		
		var ichars=user;

		var at=ichars.indexOf("_");
		var dot=ichars.lastIndexOf(".");
		if (user=="")
	
			{
				alert("Enter username");
				document.addstudentrecordsform.user.focus();
				return false;
					 }    
		
		
		else if (at<1)
	
    {
	alert ("underscore is must for username");
		document.addstudentrecordsform.user.focus();
		return false;
    
        }
    
	var ichars=pass1;
	var at=ichars.indexOf("@");
		
		if (pass1=="")
	
			{
				alert("Enter password");
				document.addstudentrecordsform.pass.focus();
				return false;
					 }    
		
		
		else if (at<0)
	
    {
	alert ("@ symbol is must for password");
		document.addstudentrecordsform.pass.focus();
		return false;
    
	}
		
		else if(pass1.length < 4)
	{alert("password is too short ");
	document.addstudentrecordsform.pass.focus();
	return false;
	}
	
	else if(pass1.length > 15)
	{alert("password is too long");
	document.addstudentrecordsform.pass.focus();
	return false;
	}	
		
		if(REG=="")
		{
			alert("Confirm registration");
				document.addstudentrecordsform.register.focus();
			return false;
		}
		
		else if((REG=="yes")||(REG=="no")||(REG=="YES")||(REG=="NO") ||(REG=="yEs")||(REG=="yeS")||(REG=="YeS")||(REG=="YEs")||(REG=="yES"))
	{	
		alert("Invalid registration,First letter should be capital and rest all should be small");
				document.addstudentrecordsform.register.focus();
			return false;
			}
			
			else if((REG!="Yes")&&(REG!="No"))
		{
			alert("Invalid registration,Enter Yes or No");
				document.addstudentrecordsform.register.focus();
			return false;
			}
}


</script>
</head>
<body background="bac.jpg" text="white">
<center><font face="algerian" size="15">Update Student's Details Form</font></center>
<br><br><br><br><br><center><table border=1 bordercolor=white cellpadding=10 cellspacing=10><tr><td>
<form method="post" action="finalupdate.php" name="addstudentrecordsform" onSubmit="return validate1()">

Roll No:-&nbsp;&nbsp;<input type="text" name="rolln" value="<?php echo $roll; ?>" readonly><br /><br>
Name:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" value="<?php echo $name; ?>"><br /><br>
Email:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" value="<?php echo $email; ?>"><br /><br />

Username:-<input type="text" name="user" value="<?php echo $user; ?>"> &nbsp; &nbsp;* Username should contain underscore <br /><br>
Password:-<input type="text" name="pass" value="<?php echo $pass; ?>"><br /><br>
Register:-&nbsp;&nbsp;<input type="text" name="register" value="<?php echo $reg; ?>">&nbsp; &nbsp;* Yes / No<br /><br />
<br />
<center><input type="submit" name="submit" value="update"/></center>
</form></td></tr></table></center>






</body></html>

