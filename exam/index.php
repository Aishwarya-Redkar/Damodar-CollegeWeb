<?php
include('db.php');
if(isset($_GET['error']))
$error = $_GET['error'];
else
$error = "";

if(isset($_POST['submit'])) { 
	$error = "";
	$fname = mysqli_real_escape_string($con, $_POST['fname']);/*mysql_real_escape_string function is used to trim trailing and leading spaces from the string*/
	$mname = mysqli_real_escape_string($con, $_POST['mname']);
	$lname = mysqli_real_escape_string($con, $_POST['lname']);
	$address1 = mysqli_real_escape_string($con, $_POST['address1']);
	$address2 = mysqli_real_escape_string($con, $_POST['address2']);
	$country = mysqli_real_escape_string($con, $_POST['country']);
	$state = mysqli_real_escape_string($con, $_POST['state']);
	$city = mysqli_real_escape_string($con, $_POST['city']);
	$taluka = mysqli_real_escape_string($con, $_POST['taluka']);
	$pin = mysqli_real_escape_string($con, $_POST['pin']);
	$tel = mysqli_real_escape_string($con, $_POST['tel']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	
	if($fname == "") {
		$error .= "Enter First Name.<br>";
	}
	if($mname == "") {
		$error .= "Enter Middle Name.<br>";
	}
	if($lname == "") {
		$error .= "Enter Last Name.<br>";
	}
	if($address1 == "") {
		$error .= "Enter Address.<br>";
	}
	if($country == "") {
		$error .= "Enter Country.<br>";
	}
	if($state == "") {
		$error .= "Enter State.<br>";
	}
	if($city == "") {
		$error .= "Enter City.<br>";
	}
	if($taluka == "") {
		$error .= "Enter taluka.<br>";
	}
	if($pin == "") {
		$error .= "Enter Pin No.<br>";
	}
	if($tel == "") {
		$error .= "Enter Telephone No.<br>";
	}
	if($email == "") {
		$error .= "Enter Email.<br>";
	}
	if($error != "") {
		header('location: index.php?error='.$error);
		exit;
	} else {
		$sql = "INSERT INTO entrance (fname, mname, lname, address1, address2, country, state, city, taluka, pin, tel, email, date_added) 
        VALUES('".$fname."','".$mname."','".$lname."','".$address1."','".$address2."','".$country."','".$state."','".$city."','".$taluka."','".$pin."','".$tel."','".$email."',now())";
		
		if (!mysqli_query($con, $sql)) {
		  die('Error: ' . mysqli_error($con));
		}
		echo 'Record inserted successfully';
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
<script src="jquery.js"></script>
<script>
function validate() {
	var valid = true;
   
   	$('.error').html('');
	var fname   = $('#fname').val();
	var mname   = $('#mname').val();
	var lname   = $('#lname').val();
	var address   = $('#address1').val();
	var country   = $('#country').val();
	var state   = $('#state').val();
	var city   = $('#city').val();
	var taluka   = $('#taluka').val();
	var pin   = $('#pin').val();
	var tel   = $('#tel').val();
   	var email   = $('#email').val();
	
	if(fname == "")
   	{
   		$('.error1').html("Enter First Name");
   		valid = false;
   	}
	if(mname == "")
   	{
   		$('.error2').html("Enter Middle Name");
   		valid = false;
   	}
	if(lname == "")
   	{
   		$('.error3').html("Enter Last Name");
   		valid = false;
   	}
	if(address == "")
   	{
   		$('.error4').html("Enter Address");
   		valid = false;
   	}
	if(country == "")
   	{
   		$('.error5').html("Enter Country");
   		valid = false;
   	}
	if(state == "")
   	{
   		$('.error6').html("Enter State");
   		valid = false;
   	}
	if(city == "")
   	{
   		$('.error7').html("Enter City");
   		valid = false;
   	}
	if(taluka == "")
   	{
   		$('.error8').html("Enter Taluka");
   		valid = false;
   	}
	if(pin == ""){
		$('.error9').html("Enter Pin Number");
		valid = false;
	}
	
	if(isNaN(pin)){
		$('.error9').html("Enter valid Pin Number");
		valid = false;
	}
	if(tel == ""){
		$('.error10').html("Enter Telephone Number");
		valid = false;
	}
	
	if(isNaN(tel)){
		$('.error10').html("Enter valid Telephone Number");
		valid = false;
	}
	if(tel.length != 10){
		$('.error10').html("Enter valid Telephone Number");
		valid = false;
	}
   	var atpos=email.indexOf("@");
   	var dotpos=email.lastIndexOf(".");
   	if(email == "")
   	{
   		$('.error11').html("Enter Email");
   		valid = false;
   	}
   
   	else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
   	{
   		$('.error11').html("Not a valid e-mail address");
   		valid = false;
   	}
	
	if(valid == true){
		$('#myform').submit();
	}else {
		return valid;
	}

}
</script>
<style>
.error {
color:red;
}
</style>
</head>
<body>
<h2>Personal Information</h2>
<form action="index.php" method="post" id="myform" name="myform">
<table border="0" cellspacing="5">
<tr>
<td>First Name <span style='color:red;'>*</span>: </td><td><input type="text" name="fname" id="fname"></td><td><small class="error error1"></small></td>
</tr>
<tr>
<td>Middle Name <span style='color:red;'>*</span>: </td><td><input type="text" name="mname" id="mname"></td><td><small class="error error2"></small></td>
</tr>
<tr>
<td>Last Name <span style='color:red;'>*</span>: </td><td><input type="text" name="lname" id="lname"></td><td><small class="error error3"></small></td>
</tr>
<tr>
<td>Address 1 <span style='color:red;'>*</span>: </td><td><input type="text" name="address1" id="address1"></td><td><small class="error error4"></small></td>
</tr>
<tr>
<td>Address 2: </td><td><input type="text" name="address2" id="address2"></td><td></td>
</tr>
<tr>
<td>Country <span style='color:red;'>*</span>: </td><td><input type="text" name="country" id="country"></td><td><small class="error error5"></small></td>
</tr>
<tr>
<td>State <span style='color:red;'>*</span>: </td><td><input type="text" name="state" id="state"></td><td><small class="error error6"></small></td>
</tr>
<tr>
<td>City <span style='color:red;'>*</span>: </td><td><input type="text" name="city" id="city"></td><td><small class="error error7"></small></td>
</tr>
<tr>
<td>Taluka <span style='color:red;'>*</span>: </td><td><input type="text" name="taluka" id="taluka"></td><td><small class="error error8"></small></td>
</tr>
<tr>
<td>Pincode <span style='color:red;'>*</span>: </td><td><input type="text" name="pin" id="pin"></td><td><small class="error error9"></small></td>
</tr>
<tr>
<td>Telephone No. <span style='color:red;'>*</span>: </td><td><input type="text" name="tel" id="tel"></td><td><small class="error error10"></small></td>
</tr>
<tr>
<td>E-mail <span style='color:red;'>*</span>: </td><td><input type="email" name="email" id="email"></td><td><small class="error error11"></small></td>
</tr>
<tr>
<td></td><td><span style='color:red;'><?php echo $error; ?></span></td>
</tr>
<td></td><td><button name="submit" onclick="return validate();">Submit</button></td>
</tr>
</table>
</form>
<br>
</body>
</html>