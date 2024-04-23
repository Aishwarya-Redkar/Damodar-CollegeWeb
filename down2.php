<?php
require("conn.inc.php");

$sem=$_POST['sel'];
$course=$_POST['cour'];
?>
<body  background="bac.jpg" text="black">
<form action="" method="post" name="form1"><br><br><br>
<center><table border="1" align="center" id="table1" cellpadding="5" cellspacing="5" bgcolor="white" text="black">
<tr><td align="center">Click to Download</td></tr>
<?php
$query = "SELECT * FROM `resources` WHERE `course id`='$course' and `se-id`='$sem'"; 
$result=mysql_query($query,$connection) or die("error in query:".$query."".mysql_error());

if(mysql_num_rows($result)<=0)
{
echo "This subject's notes dosen't exist in database";
include("download1.php");
exit();
}
else{

while($row1=mysql_fetch_array($result)){
	$name=$row1['title'];
	?><tr>
<td width="300">
<a href="download.php?filename=<?php echo $name;?>"><?php echo $name ;?></a>
</td>
<?php
}
}
?>
</tr>

</table></center>
</form>

</body>
</html>

