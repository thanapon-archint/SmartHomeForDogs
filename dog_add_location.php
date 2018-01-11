<!DOCTYPE html>
<html>
<link rel="stylesheet" href="vendor/dog_edit.css">
<head>

</head>
<body>

<?php
  require_once('Navbar.php');
?>
<br>
<br>
<div class="container">
  <div class="w3-center">
    <h3>Add Location</h3>
  </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Add location</label>
      </div>
      <div class="col-75">
       
         <button onclick="getLocation()" name="locations">Current Location</button>
        <p id="demo"></p>
        your location is <br>
<?php
  $variable1 = $_GET['lo1'];
  $variable2 = $_GET['lo2'];
  echo $variable1;
?>
<br>
<?php
  echo $variable2;
?>
      </div>
    </div>
  <form action="dog_list.php" method="POST" enctype="multipart/form-data">  
    <input type="hidden" name="lo1" value="<?php echo $variable1;?>" />
    <input type="hidden" name="lo2" value="<?php echo $variable2;?>" />
    <div class="row">
      <br>
      <input type="submit" name="submit" value="ADD">
    </div>
  </form>
</div>
<br>





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
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
    var a="Hello";
    window.location.href = window.location.href+'?lo1='+position.coords.latitude+'&lo2='+position.coords.longitude;


}

</script>



</body>
</html>


