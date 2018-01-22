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
	$image = addslashes(file_get_contents($_FILES['images']['tmp_name']));
	$image =  base64_encode($image);
	echo $dogname;
	echo $doginfo;
	echo $dogtype;
	echo $adress;
	$query = "INSERT INTO dogs (dog_name, dog_info, dog_type, cu_id, dog_address, dog_image) VALUES ('$dogname', '$doginfo', '$dogtype', '$cu_id', '$adress', '$image')";

	 if ($connect->query($query) === TRUE) {
	        header("Location: ../dog_add_location.php?");
	    } else
	        echo "Error: " . $query . "<br>" . $connect->error;

	

	
}

