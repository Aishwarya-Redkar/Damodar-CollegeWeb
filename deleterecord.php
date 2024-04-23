<?php

require("conn.inc.php");


?>
<html>
<head>
<script>
function valid()
{
	
Roll=document.delrec.roll.value;
if (Roll=="")
	{
	alert("Enter roll no");
	document.delrec.roll.focus();
	return false;
	}
	else if (isNaN(Roll)) {
                alert("Invalid roll no");
					document.delrec.roll.focus();
					return false;
          }
	
}

</script>
</head>
<center><h1>Delete Student's Record</h1></center>
<br><br><br><br><br><br><br><br><br><center><table border=1 bordercolor=white cellpadding=10 cellspacing=10><tr><td><form method="POST" action="deleterecord.php" name="delrec" onSubmit="return valid()">
Enter 'Roll No' to Delete Record:<input type="text" name="roll" value="">
<br><br>
<center><input name="submit" type="submit" value="Delete">&nbsp;&nbsp;<input name="reset" type="reset" value="Reset"></center><br>

<center><p><a href="admin_page.php"><font color="white">View Records</font></a></p></center>
</form></td></tr></table></center>
<?php   



    
  
 





IF(isset($_POST['submit']))  
{                                                                                                          
$del=$_POST['roll'];
$query1 = "SELECT * FROM `members` WHERE `roll id`='$del'"; 

$result1 = mysql_query($query1,  $connection) or die ("Error in query: ".mysql_error());


if (mysql_num_rows($result1) > 0) { 


$query="DELETE FROM members WHERE `roll id`='$del'";
$result=mysql_query($query) or die("Query Failed:".mysql_error());
echo "Successfully Deleted!";
}
else{

 echo "Roll no doesnt exists in database";


  
}}

?>
<!DOCTYPE html>
<html>
<head></head>
<body background="bac.jpg" text="white">

</body></html>
