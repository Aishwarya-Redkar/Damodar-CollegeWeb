<?php 

session_start();
if (!isset($_SESSION["manager"])) {
    header("location: admin_login.php"); 
    exit();
}
include "../db.php";
// Be sure to check that this manager SESSION value is in fact in the database
$managerID = preg_replace('#[^0-9]#i', '', $_SESSION["id"]); // filter everything but numbers and letters
$manager = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["manager"]); // filter everything but numbers and letters
$password = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["password"]); // filter everything but numbers and letters
// Run mySQL query to be sure that this person is an admin and that their password session var equals the database information
// Connect to the MySQL database  

$sql = "SELECT * FROM admin WHERE id='$managerID' AND username='$manager' AND password='$password' LIMIT 1"; // query the person

// ------- MAKE SURE PERSON EXISTS IN DATABASE ---------
if ($result=mysqli_query($con,$sql))
	{
		$existCount =mysqli_num_rows($result);
	}else {
		$existCount =0;
	}
if ($existCount == 0) { // evaluate the count
	 echo "Your login session data is not on record in the database.";
     exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Area</title>
</head>

<body>
<div align="center" id="mainWrapper">
<div id="pageContent">
<p><a href="admin_logout.php">Logout</a></p>
<br />
    <div align="left" style="margin-left:25px">
      <h3>Welcome Admin </h3>
     
<p><a href="records.php">View Entrance Exam Entries</a></p>
</div>
</body>
</html>