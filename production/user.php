<?php
//user.php
//=================== validatePassword
function validatePassword($userId,$password)
{
$con=mysqli_connect("localhost","dashboard2025","testdashboard","dashboard");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql= "SELECT * FROM user where username = '".$username ."' and password ='".$password."'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result); //check how many matching record - should be 1 if correct
if($count == 1){
	return true;//username and password is valid
}
else
	{
	return false; //invalid password
	}
}

function getUserType($userId)
{
$con=mysqli_connect("localhost","web2024","web2024","assettrackingdb4");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql= "SELECT * FROM user where userId = '".$userId ."'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result); //check how many matching record - should be 1 if correct
if($count == 1){
	$row = mysqli_fetch_assoc($result);
	$userType=$row['userType'];
	return $userType;
	}
 }

?>