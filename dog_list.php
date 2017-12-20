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
        <img src="images/dog.png" width="200" height="200">

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
          <div id="googleMap" class="w3-grayscale" style="width:100%;height:450px;"></div>

          <!-- Footer -->
          <footer class="w3-center w3-black w3-padding-16">
            <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
          </footer>

          <!-- Add Google Maps -->
          <script>
          function myMap()
          {
            myCenter=new google.maps.LatLng(41.878114, -87.629798);
            var mapOptions= {
              center:myCenter,
              zoom:12, scrollwheel: true, draggable: true,
              mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

            var marker = new google.maps.Marker({
              position: myCenter,
            });
            marker.setMap(map);
          }
          </script>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgVlJ_NecM0OUGWlenJcQRmYJpyb4i5vU&callback=myMap"></script>
          <!--
          To use this code on your website, get a free API key from Google.
          Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
          -->


      
    </h1>
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
