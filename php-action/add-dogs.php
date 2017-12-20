<?php
session_start();
include_once '../dbconfig.php';

$cu_id = 1;


if(isset($_POST['submit']))
{
	$dogname = $_POST['dogname'];
	$doginfo = $_POST['doginfo'];
	$dogtype = $_POST['dogtype'];
	$adress = $_POST['adress'];
	echo $dogname;
	echo $doginfo;
	echo $dogtype;
	echo $adress;
	$query = "INSERT INTO dogs (dog_name, dog_info, dog_type, cu_id, dog_address) VALUES ('$dogname', '$doginfo', '$dogtype', '$cu_id', '$adress')";

	 if ($connect->query($query) === TRUE) {
	        header("Location: ../dog_list.php?");
	    } else
	        echo "Error: " . $query . "<br>" . $connect->error;

	

	
}

