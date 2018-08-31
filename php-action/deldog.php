<?php
include_once '../dbconfig.php';


$id = $_GET['id'];
$query = "DELETE FROM dogs WHERE dog_id='$id'";

if ($connect->query($query) === TRUE) {

	        header("Location: ../dog_list.php?");
	    } else
	        echo "Error: " . $query . "<br>" . $connect->error;


?>