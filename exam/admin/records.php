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
<?php 

$records = "";
$sql = "SELECT * FROM entrance ORDER BY date_added DESC";
if ($result=mysqli_query($con,$sql))
{
// Return the number of rows in result set
$count =mysqli_num_rows($result);
}else {
$count =0;
}
if ($count > 0) {
	$sr=1;
	while($row = mysqli_fetch_array($result)){ 
		$records .= "<tr><td>".$sr."</td><td><a href='entry_detail.php?id=".$row["id"]."'>".$row["fname"]."  </a></td><td>".$row["mname"]." </td><td>".$row["lname"]."</td><td>".$row["date_added"]."</td></tr>";
		
		$sr++;
	}
} else {
	$records = "<tr><td colspan='9'>No Records Found.</td></tr>";
}

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>Personal Information</h2>
<table border="1" cellspacing="0" cellpadding="5" >
<tr>
	<th>Sr No.</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Date Added</th>
</tr>
<?php echo $records; ?>
</table>
<br>
<a href="index.php">Go Back.</a>
</body>
</html>