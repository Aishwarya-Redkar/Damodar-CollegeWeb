<?php

require("conn.inc.php");



$name=$_POST['nm'];


$query1="select * from faculty where `name`='$name'";



$result1=mysql_query($query1,$connection) or die("error in query:".$query1."".mysql_error());
if(mysql_num_rows($result1)>0)
{
while($record=mysql_fetch_array($result1))
{
$id=$record['f-id'];
$nm=$record['name'];
$gen=$record['gender'];
$email=$record['email'];
$qua=$record['qualification'];
$user=$record['username'];

$pass=$record['password'];
$reg=$record['Register'];

}
}

?>
<html>
<head>
<script>
function validate1()
{
	
F_id=document.updatefac.id.value;
na=document.updatefac.name.value;
gen=document.updatefac.gender.checked;
Email_Faclt=document.updatefac.email.value;
qu=document.updatefac.qual.value;
user1=document.updatefac.user.value;
pass1=document.updatefac.pass.value;
$gen=document.updatefac.gender.value;
REG=document.updatefac.register.value;
	if (F_id=="")
	{
	alert("Enter id");
	document.updatefac.id.focus();
	return false;
	}
	else if (isNaN(F_id)) {
                alert("Invalid id");
					document.updatefac.id.focus();
					return false;
          }
	
	
	if (na=="")
		{
		alert("Enter name");
		document.updatefac.name.focus();
		return false;
		}
		else
	//if (addstudentrecordsform.name.value.match(/^[a-zA-Z]+$/) && addstudentrecordsform.name.value !="")
		if (!isNaN(na)) 
		{
		alert("Invalid name");
		document.updatefac.name.focus();
		return false;
		}
		
		if($gen=="")
		{
		alert("select gender");
		document.updatefac.gender.focus();
		return false;
		}
		
				var mail=Email_Faclt;
			
		    var at=mail.indexOf("@");
		    var dot=mail.lastIndexOf(".");
				
		if(Email_Faclt=="")
		{
			alert("Enter Email");
				document.updatefac.email.focus();
				return false;
		}
		else 
		
			if(at<1 || dot<at+2 || dot+2>=mail.length)
			  {
			 alert("Not a valid Email Address");
			document.updatefac.email.focus();
						return false;
			 }
		
		
		
		if(qu=="")
		{
		alert("Enter Qualification");
        document.updatefac.qual.focus();
        return false;
		}
		else
		if (!isNaN(qu)) 
		{
		alert("Invalid qualification");
		document.updatefac.qual.focus();
		return false;
		}
		
		 
		var ichars=user1;

		var at=ichars.indexOf("_");
		var dot=ichars.lastIndexOf(".");
		if (user1=="")
	
			{
				alert("Enter username");
				document.updatefac.user.focus();
				return false;
					 }    
		
		
		else if (at<1)
	
    {
	alert ("underscore is must for username");
		document.updatefac.user.focus();
		return false;
    }
		
		var ichars=pass1;
	var at=ichars.indexOf("@");
		
		if (pass1=="")
	
			{
				alert("Enter password");
				document.updatefac.pass.focus();
				return false;
					 }    
		
		
		else if (at<0)
	
    {
	alert ("@ symbol is must for password");
		document.updatefac.pass.focus();
		return false;
    
	}
		
		else if(pass1.length < 4)
	{alert("password is too short ");
	document.updatefac.pass.focus();
	return false;
	}
	
	else if(pass1.length > 15)
	{alert("password is too long");
	document.updatefac.pass.focus();
	return false;
	}	
		
		if(REG=="")
		{
			alert("Confirm registration");
				document.updatefac.register.focus();
			return false;
		}
		
		else if((REG=="yes")||(REG=="no")||(REG=="YES")||(REG=="NO") ||(REG=="yEs")||(REG=="yeS")||(REG=="YeS")||(REG=="YEs")||(REG=="yES"))
	{	
		alert("Invalid registration,First letter should be capital and rest all should be small");
				document.updatefac.register.focus();
			return false;
			}
			
			else if((REG!="Yes")&&(REG!="No"))
		{
			alert("Invalid registration,Enter Yes or No");
				document.updatefac.register.focus();
			return false;
			}
}




</script>
</head>
<center><h1>Update Faculty Details</h1></center>
<br><br><br><br><br><center><table border=1 bordercolor=white cellpadding=10 cellspacing=10><tr><td>
<form method="post" action="updatefaculty3.php" name="updatefac" onSubmit="return validate1()">

Faculty id:-&nbsp;&nbsp;&nbsp; <input type="text" name="id" value="<?php echo $id; ?>"readonly><br><br>
Name:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" name="name" value="<?php echo $nm; ?>"><br><br>
Gender:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="gender" value="<?php echo $gen; ?>"><br><br>

Email id:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" value="<?php echo $email; ?>"><br><br>

Qualification:-<input type="text" name="qual" value="<?php echo $qua; ?>"><br><br>


Username:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="user" value="<?php echo $user; ?>"><br><br>
Password:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pass" value="<?php echo $pass; ?>"><br><br>
Register:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="register" value="<?php echo $reg; ?>"><br><br>






<br />
<center><input type="submit" name="submit" value="update"/></center>
</form></td></tr></table></center>



<body background="bac.jpg" text="white">

</body></html>

