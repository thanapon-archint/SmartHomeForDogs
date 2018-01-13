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
$d_id=$_GET['dog_id'];/*get dog id*/

$query = "SELECT * FROM dogs WHERE dog_id='$d_id'";
 $result = mysqli_query($connect, $query);
 $row = mysqli_fetch_array($result);

?>

<br>
<br>
<h1 class="w3-margin w3-center"><?=$row['dog_name']?></h1>
<h2 class="w3-margin w3-center"><?=$row['dog_type']?></h2>

<div class="w3-row-padding w3-padding-64 w3-center">
  <div class="w3-center">
     <img src="<?= $row['dog_image'] ?>" width="200" height="200">
    
  </div>
</div>
<div class="specification">
            <h4>Dogdetail</h4>
            <ul class="list-group">
                <?php
                $ing = $row['dog_info'];
                $pieces = explode("|", $ing);
                for ($i = 0; $i < count($pieces); $i++) { ?>
                    <li class="list-group-item"><?= $pieces[$i] ?></li>
                <?php } ?>

            </ul>
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
