<?php   
require("conn.inc.php");



IF(isset($_POST['submit']))  
{  


$name=$_POST['name'];
$class1=$_POST['class1'];
$div=$_POST['div'];
$username=$_POST['user'];
$pass=$_POST['pass'];


$query3=mysql_query("update members set s-name='$name', s-course='$class1', Division='$div', s-username='$username', password='$pass'  where `roll id`='$roll'");

}
$query1=mysql_query("select * from members where `roll id`='$roll'");
while($record=mysql_fetch_array($mydata))
{
$roll=$record['roll id'];
$name=$record['s-name'];
$class=$record['s-course'];
$div=$record['Division'];
$user=$record['s-username'];
$pass=$record['password'];


}
?>
<form method="post" action="updateform.php">
Roll No:-<input type="text" name="rolln" value="<?php echo $roll ?>" /><br />
Name:-<input type="text" name="name" value="<?php echo $name ?>" /><br />
Class:-<input type="text" name="class1" value="<?php echo $class ?>" /><br /><br />
Division:-<input type="text" name="div" value="<?php echo $div ?>" /><br />
Username:-<input type="text" name="user" value="<?php echo $user ?>" /><br />
Password:<input type="password" name="pass" value="<?php echo $query2['password']; ?>" /><br />
<br />
<input type="submit" name="submit" value="update" />
</form>
</body>
</html>                                                                                                       


