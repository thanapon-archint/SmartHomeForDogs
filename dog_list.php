<!DOCTYPE html>
<html>
<title>SmartHomeForDogs</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
img {
    max-width: 100%;
    height: auto;
}
.button {
    background-color: #f44336;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

</style>
<body>

<?php
require_once('Navbar.php');
require_once('dbconfig.php');

$query = "SELECT * FROM dogs";
$result = mysqli_query($connect, $query);

if(isset($_POST['submit']))
{
  $lo1 = $_POST['lo1'];

  $lo2 = $_POST['lo2'];


  $q = "SELECT MAX(dog_id) as a FROM dogs";
  $result1 = mysqli_query($connect, $q);
  $rows = mysqli_fetch_array($result1);
  $dog_id=$rows['a'];
  
  $qr = "UPDATE dogs set location_x = '$lo1', location_y = '$lo2' WHERE dog_id = '$dog_id'" ;
  $connect->query($qr);
}
?>

<br>
<br>
<h1 class="w3-center w3-margin w3-jumbo">SMART HOME FOR DOGS</h1>
<h1 class="w3-margin w3-center">Dogs List</h1>

<div class="w3-row-padding w3-padding-64 w3-center">
  <div class="w3-center">
    
    <button class="w3-button w3-red w3-round-xlarge w3-padding-large" onclick="javascript:location.href='dog_add.php'">Add a new Dog</button>
  </div>
</div>
<?php
$i=0;
 while ($row = mysqli_fetch_array($result)){
 if ($i%2==0) {?>
  <div class="w3-row-padding w3-padding-64 w3-container">
<?php
}
else {?>
   <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
<!-- First Grid -->
<?php
}
?>
  <div class="w3-content">
    <div class="w3-twothird">
      <h1><?php echo $row["dog_name"]; ?></h1>
      <h5 class="w3-padding-32"><?php echo $row["dog_info"]; ?></h5>

      <p class="w3-text-grey"><?php echo $row["dog_name"]; ?></p>
      <button class="button" onclick="javascript:location.href='dog_edit.php'" >Edit!</button>
      <button class="button" onclick="javascript:location.href='dog_edit.php'" >Delete!</button>
      
    </div>

    <div class="w3-third w3-center">
      <i class="w3-padding-64 w3-text-red">

        <!-- <img src="images/dog.png" width="200" height="200"> -->
        <?php
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['dog_image'] ).'"/>';
        ?>
      </i>
    </div>
  </div>
</div>
<?php
$i++;
}
?>


<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">
      <!-- Google Map -->
          <?php
          require_once('map.php');
          ?>

      
    </h1>
</div>

<?php
require_once('footer.php');
?>

</body>
</html>
