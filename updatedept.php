<?php

require("conn.inc.php");



$dname=$_POST['dp'];


$query1="select * from department where `dept_name`='$dname'";



$result1=mysql_query($query1,$connection) or die("error in query:".$query1."".mysql_error());
if(mysql_num_rows($result1)>0)
{
while($record=mysql_fetch_array($result1))
{
$id=$record['dept id'];
$dpname=$record['dept_name'];
$est=$record['est_date'];
$hod=$record['hod'];
}
}
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
</head>

<center><h1>Update Department Details</h1></center>
<br><br><br><br><br><center><table border=1 bordercolor=white cellpadding=10 cellspacing=10><tr><td>
<form method="post" action="updatefac.php" name="form1" onSubmit="return valid()">

Department id:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="id" value="<?php echo $id; ?>"readonly><br><br>
Department Name:-<input type="text" name="name" value="<?php echo $dpname; ?>"><br><br>
Establishment Date:<input type="text" name="date" value="<?php echo $est; ?>">*format->16th June 19920<br><br>


H.O.D.:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="hod" value="<?php echo $hod; ?>"><br><br>



<br />
<center><input type="submit" name="submit" value="update" /></center>
</form></td></tr></table></center>

</body>
</html>
<!DOCTYPE html>
<html>
<head></head>
<body background="bac.jpg" text="white">

</body></html>

