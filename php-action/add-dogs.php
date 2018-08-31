<?php
session_start();
include_once '../dbconfig.php';

$cu_id = $_SESSION['cu_id'];


if(isset($_POST['submit']))
{
	$dogname = $_POST['dogname'];
	$doginfo = $_POST['doginfo'];
	$dogtype = $_POST['dogtype'];
	$adress = $_POST['adress'];
	$color = $_POST['color'];
	$age = $_POST['age'];
	
	//add image
	$q = "SELECT MAX(dog_id) as a  FROM dogs";
	$result1 = mysqli_query($connect, $q);
	$rows = mysqli_fetch_array($result1);
	$dog_id=$rows['a'];
	$dog_id=$dog_id+1;

	$doginfo = $_POST['doginfo'];
    $imagename = $_FILES['new_image']['name'];
	  $source = $_FILES['new_image']['tmp_name'];
	  $target = "../uploads/".$dog_id.$imagename;
	  move_uploaded_file($source, $target);

	  $imagepath = $dog_id.$imagename;

	  //This code below are for resizing the image and the file size
			$save = "../uploads/" . $imagepath; //This is the new file you saving
          $file = "../uploads/" . $imagepath; //This is the original file

          list($width, $height) = getimagesize($file); 
          $newheight = (400*$height)/$width;
          $tn = imagecreatetruecolor(400,$newheight);

          //$image = imagecreatefromjpeg($file);
          $info = getimagesize($target);
          if ($info['mime'] == 'image/jpeg'){
            $image = imagecreatefromjpeg($file);
          }elseif ($info['mime'] == 'image/gif'){
            $image = imagecreatefromgif($file);
          }elseif ($info['mime'] == 'image/png'){
            $image = imagecreatefrompng($file);
          }
/*		  $newwudth= $width*0.25;
		  $newheight= $height*0.25;*/
          imagecopyresampled($tn, $image, 0, 0, 0, 0, 400, $newheight, $width, $height);
          
          imagejpeg($tn, $save, 60);
           if ($height>2000) {
          	# code...
   			$tn = imagerotate($tn, 270, 0);
          	imagejpeg($tn, $save, 60);
          }






	$query = "INSERT INTO dogs (dog_name, dog_info, dog_type, dog_color, dog_age, cu_id, dog_address, dog_image) VALUES ('$dogname', '$doginfo', '$dogtype', '$color', '$age', '$cu_id', '$adress', '$imagepath')";
	

	 if ($connect->query($query) === TRUE) {

	        header("Location: ../dog_add_location.php?");
	    } else
	        echo "Error: " . $query . "<br>" . $connect->error;

	

	
}

