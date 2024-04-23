<?php
require("conn.inc.php");

if(isset($_POST['submit'])!=""){
  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  $course=$_POST['cour'];
  $sid=$_POST['sel'];
  move_uploaded_file($temp,"files/".$name);
$insert=mysql_query("insert into `resources`(`title`,`file path`,`course id`,`se-id`)values('$name','$link','$course','$sid')");
if($insert){
header("location:index.php");
}
else{
die(mysql_error());
}
}
?>
<html>
<head>
<title>Upload notes</title>
</head>
<style>
body{ font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;}
a{color:#666;}
#table{margin:0 auto;background:#333;box-shadow: 5px 5px 5px #888888;border-radius:10px;color:#CCC;padding:10px;}
#table1{margin:0 auto;}
</style>
<body>

<h3><p align="center">Files Upload  And  Download</p></h3>	
<form enctype="multipart/form-data" action="" name="form" method="post">
<table border="0" cellspacing="0" cellpadding="5" id="table">
<tr>
<th >Choose Files</th>
<td><label for="photo"></label>
<input type="file" name="photo" id="photo"/></td>
</tr>
<tr>

<td>
<?php
$query="SELECT * FROM semester";

$result=mysql_query($query) or die("Query Failed: ".mysql_error());

$i=0;

while($rows=mysql_fetch_array($result))

{
$sem[$i]=$rows['se-id'];
$i++;
}
$total_elmt=count($sem);
?>
<br>
Select the 'Semester':<select name="sel">
<option>Select </option>
<?php
for($j=0;$j<$total_elmt;$j++)
{
?><option><?php
echo $sem[$j];
?></option><?php
}

?>
</select><br><br><br>

</td>

</tr>
<tr>
<td>
<?php
$query="SELECT * FROM courses";
$result=mysql_query($query) or die("Query Failed: ".mysql_error());
$i=0;
while($rows=mysql_fetch_array($result))
{
$coursee[$i]=$rows['c-name'];
$i++;
}
$total_elmt=count($coursee);

?>


Select the 'Subject':<select name="cour">
<option>Select</option>&nbsp;&nbsp;
<?php
for($j=0;$j<$total_elmt;$j++)
{
?><option><?php
echo $coursee[$j];
?></option><?php
}
?>
</select><br/><br>



</td>

</tr>
<tr>
<th colspan="2" scope="row"><input type="submit" name="submit" id="submit" value="Submit" /></th>
</tr>
</table>
</form>
<br />
<br />
<table border="1" align="center" id="table1" cellpadding="0" cellspacing="0">
<tr><td align="center">Click to Download</td></tr>
<?php
$select=mysql_query("select * from resources order by `res id` desc");
while($row1=mysql_fetch_array($select)){
	$name=$row1['title'];
?>
<tr>
<td width="300">
<img src="tick.png" width="14" height="14"><a href="download.php?filename=<?php echo $name;?>"><?php echo $name ;?></a>
</td>

</tr>
<?php }?>
</table>
</body>
</html>

