<?php 

session_start();
if (isset($_SESSION["manager"])) {
    header("location: index.php"); 
    exit();
}
?>
<?php 
// Connect to the MySQL database  
    include "../db.php"; 
// Parse the log in form if the user has filled it out and pressed "Log In"
if(isset($_GET['error']))
$error = $_GET['error'];
else
$error = "";
if (isset($_POST["username"]) && isset($_POST["password"])) {
	
	$error = "";
	$manager = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["username"]); // filter everything but numbers and letters
    $password =md5( preg_replace('#[^A-Za-z0-9]#i', '', $_POST["password"])); // filter everything but numbers and letters
	if($manager	 == "") {
		$error .= "Enter Username.<br>";
	}
	if($_POST["password"] == "") {
		$error .= "Enter Password.<br>";
	}
	if($error != "") {
		header('location: admin_login.php?error='.$error);
		exit;
	}else {
		$sql = "SELECT id FROM admin WHERE username='$manager' AND password='".$password."' LIMIT 1"; // query the person
		 
	   // ------- MAKE SURE PERSON EXISTS IN DATABASE ---------
		if ($result=mysqli_query($con,$sql))
		{
			$existCount =mysqli_num_rows($result);
		}else {
			$existCount =0;
		}
		if ($existCount == 1) { // evaluate the count
			 while($row = mysqli_fetch_array($result)){ 
				 $id = $row["id"];
			 }
			 $_SESSION["id"] = $id;
			 $_SESSION["manager"] = $manager;
			 $_SESSION["password"] = $password;
			 header("location: index.php");
			 exit();
		} else {
		
			$error = 'That information is incorrect, try again.';
			header('location: admin_login.php?error='.$error);
			exit;
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Log In </title>
</head>

<body>
<div align="center" id="mainWrapper">
  <div id="pageContent"><br />
    <div align="left" style="margin-left:24px;">
      <h2>Please Log In To see records</h2>
      <form id="form1" name="form1" method="post" action="admin_login.php">
        User Name:<br />
          <input name="username" type="text" id="username" size="40" />
        <br /><br />
        Password:<br />
       <input name="password" type="password" id="password" size="40" />
       <br />
       <br />
	   <span style='color:red;'><?php echo $error; ?></span>
       <br />
       
         <input type="submit" name="button" id="button" value="Log In" />
       
      </form>
      <p>&nbsp; </p>
    </div>
    <br />
  <br />
  <br />
  </div>
</div>
</body>
</html>