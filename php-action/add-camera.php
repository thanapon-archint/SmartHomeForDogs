<?php
include_once '../dbconfig.php';



if(isset($_POST['submit'])) {
		$q = "SELECT MAX(dc_id) as a  FROM dogs_vag";
		$result1 = mysqli_query($connect, $q);
		$rows = mysqli_fetch_array($result1);
		$dog_id=$rows['a'];
		$dog_id=$dog_id+1;

		$doginfo = $_POST['doginfo'];
	    $imagename = $_FILES['new_image']['name'];
          $source = $_FILES['new_image']['tmp_name'];
          $target = "../uploads2/".$dog_id.$imagename;
          move_uploaded_file($source, $target);

          $imagepath = $dog_id.$imagename;

          $save = "../uploads2/" . $imagepath; //This is the new file you saving
          $file = "../uploads2/" . $imagepath; //This is the original file

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



    
    $query = "INSERT INTO dogs_vag (dc_detail, dc_image) VALUES ('$doginfo', '$imagepath')";
    if ($connect->query($query) === TRUE) {

	        header("Location: ../camera_add_location.php?");
	        
	    } else
	        echo "Error: " . $query . "<br>" . $connect->error;
}




if(isset($_POST['submit2'])){
  $lo1 = $_POST['lo1'];

  $lo2 = $_POST['lo2'];

  $qr = "SELECT MAX(dc_id) as a FROM dogs_vag";
  $result2 = mysqli_query($connect, $qr);
  $rows2 = mysqli_fetch_array($result2);
  $dogs_id=$rows2['a'];
  
  $qrs = "UPDATE dogs_vag set dc_x = '$lo1', dc_y = '$lo2' WHERE dc_id = '$dogs_id'" ;
if ($connect->query($qrs) === TRUE) {

	        header("Location: ../index.php?");
	    } else
	        echo "Error: " . $query . "<br>" . $connect->error;


}

