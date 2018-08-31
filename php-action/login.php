<?php
session_start();
include_once '../dbconfig.php';

$username = $_POST['username'];
$pass = $_POST['password'];

	$query = "SELECT * FROM user WHERE username = '$username' and password = '$pass'";
	$result = mysqli_query($connect, $query);
	$row = mysqli_fetch_array($result);
	if (mysqli_num_rows($result)>0) {
	    
	    $_SESSION["username"] = $row['username'];
	    $_SESSION["cu_id"] = $row['cu_id'];
	  
      	echo '<script type="text/javascript">'; 
		echo 'alert("Login successfully");'; 
		echo 'window.location.href = "../index.php";';
		echo '</script>';
	    
	    	} 
	else{
		echo '<script type="text/javascript">'; 
		echo 'alert("Wrong Username or Password!!");'; 
		echo 'window.location.href = "../login-form.php";';
		echo '</script>';
			}



$connect->close();