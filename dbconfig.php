<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shd";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($connect, "utf8");
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}