<?php
include_once '../dbconfig.php';


if(isset($_POST['submit']))
{

	$doginfo = $_POST['doginfo'];
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

	$query = "INSERT INTO dogs_vag (dc_detail, dc_image) VALUES ('$doginfo', '{$image}')";
	

	 if ($connect->query($query) === TRUE) {

	        header("Location: ../camera_add_location.php?");
	    } else
	        echo "Error: " . $query . "<br>" . $connect->error;
}
if(isset($_POST['submit2'])){
	$lo1 = $_POST['lo1'];

  $lo2 = $_POST['lo2'];


  $q = "SELECT MAX(dc_id) as a FROM dogs_vag";
  $result1 = mysqli_query($connect, $q);
  $rows = mysqli_fetch_array($result1);
  $dog_id=$rows['a'];
  
  $qr = "UPDATE dogs_vag set dc_x = '$lo1', dc_y = '$lo2' WHERE dc_id = '$dog_id'" ;

if ($connect->query($qr) === TRUE) {

	        header("Location: ../index.php?");
	    } else
	        echo "Error: " . $query . "<br>" . $connect->error;


}

