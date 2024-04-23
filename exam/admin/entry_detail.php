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
//ERROR reporting
error_reporting(E_ALL);
ini_set('display_errors','1');
?>
<?php 

if(isset($_GET['id']) && $_GET['id'] != "") {
$records = "";
$sql = "SELECT * FROM entrance where id=".$_GET['id'];
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
		$records .= "<tr>
						<td>First Name: </td><td>".$row['fname']."</td>
						<tr>
						<td>Middle Name: </td><td>".$row['mname']."</td>
						</tr>
						<tr>
						<td>Last Name: </td><td>".$row['lname']."</td>
						</tr>
						<tr>
						<td>Address 1: </td><td>".$row['address1']."</td>
						</tr>
						<tr>
						<td>Address 2: </td><td>".$row['address2']."</td>
						</tr>
						<tr>
						<td>Country: </td><td>".$row['country']."</td>
						</tr>
						<tr>
						<td>State: </td><td>".$row['state']."</td>
						</tr>
						<tr>
						<td>City: </td><td>".$row['city']."</td>
						</tr>
						<tr>
						<td>Taluka: </td><td>".$row['taluka']."</td>
						</tr>
						<tr>
						<td>Pincode: </td><td>".$row['pin']."</td>
						</tr>
						<tr>
						<td>Telephone No.: </td><td>".$row['tel']."</td>
						</tr>
						<tr>
						<td>E-mail: </td><td>".$row['email']."</td>
						</tr>";
		
		$sr++;
	}
} else {
	$records = "<tr><td colspan='9'>No Records Found.</td></tr>";
}
}else {
	header('location: index.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>Personal Information</h2>
<table border="1" cellpadding="10">
<?php echo $records; ?>
</table>
<br>
<a href="records.php">Go Back.</a>
</body>
</html>