<?php
session_start();
include_once '../dbconfig.php';

$email = $_POST['email'];
$pass = $_POST['password'];

$query = "SELECT * FROM customer WHERE email = '$email' and password = '$pass'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_array($result);
if (mysqli_num_rows($result) > 0 && $row['isapproved']=='1') {
    
    $_SESSION["cu_id"] = $row['cu_id'];
    $_SESSION["name"] = $row['name'];
    $_SESSION["email"] = $row['email'];
    echo "login success";
} elseif ($row['isapproved']=='0') {
	# code...
	 echo "Error:1";
}
else{
    echo "Error:2";
}

$connect->close();