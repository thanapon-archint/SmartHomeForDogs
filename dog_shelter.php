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

?>

<br>
<br>
<h1 class="w3-center w3-margin w3-jumbo">SMART HOME FOR DOGS</h1>
<h1 class="w3-margin w3-center">Shelter Dogs List</h1>

<div class="w3-row-padding w3-padding-64 w3-center">
  <div class="w3-center">
      <h3>Shelter Detail: </h3>
  </div>
</div>
<?php
$i=0;


  $shelter_id = $_GET['id'];
  $query = "SELECT * FROM dog_shelter WHERE shelter_id = '$shelter_id'";
  $result = mysqli_query($connect, $query);  

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
      <h1><?=$row['dogs_name']?></h1>
   
              
              <h6><?php echo "Dog Type: ".$row['dogs_type']?></h6>

              <?php
                if ($row['dogs_age']=='Puppy') {
                  $age = 'Puppyhood ends between six and 18 months of age.';
                }
                elseif ($row['dogs_age']=='Small') {
                  $age = 'Adolescence starts between six and 18 months of age.';
                }
                elseif ($row['dogs_age']=='Medium') {
                  $age = 'Adulthood starts between 12 months and three years of age.';
                }
                else
                {
                  $age = 'The senior years begin between six and 10 years of age.';
                }
              ?>


              <h6><?php echo "Dog Age: ".$age?></h6>

             <h6><?php echo "Dog Type: ".$row['dogs_color']?></h6>

    
      
    </div>

    <div class="w3-third w3-center">
      <i class="w3-padding-64 w3-text-red">

        <!-- <img src="images/dog.png" width="200" height="200"> -->
        
              
        <img src='shelter/<?=$row["dogs_image"]?>' >
        
      </i>
    </div>
  </div>
</div>
<?php
$i++;
}

?>

          <?php
          require_once('map.php');
          ?>



<?php
require_once('footer.php');
?>

</body>
</html>
