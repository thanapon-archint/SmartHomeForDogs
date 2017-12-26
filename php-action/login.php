<?php
session_start();
include_once '../dbconfig.php';

$username = $_POST['username'];
$pass = $_POST['password'];

$query = "SELECT * FROM user WHERE username = '$username' and password = '$pass'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_array($result);
if (mysqli_num_rows($result)) {
    
    $_SESSION["username"] = $row['username'];
    header('Location: ../index.php');
} 
else{
	header('Location: ../login-form.php');
}

$connect->close();