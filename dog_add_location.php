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
        <label for="lname">Add location
          <h6 ><font color="red">*required</font></h6>
        </label>
      </div>
      <div class="col-75">
       
         <button onclick="getLocation()" name="locations">Current Location</button>
        <p id="demo"></p>

      </div>
    </div>

 <form action="dog_list.php" method="POST" >  
<?php
if(isset($_GET['lo1'])){
  echo "Your locations are <br>";
  $lo1=$_GET['lo1'];
  $lo2=$_GET['lo2'];

  echo "Latitude: $lo1<br>";
  echo "Longitude: $lo2";

?>
    <input type="hidden" name="lo1" value="<?php echo $lo1;?>" required/>
    <input type="hidden" name="lo2" value="<?php echo $lo2;?>" required/>
<?php
}
?>

    <div class="row">
      <br>
      <input type="submit" name="submit" value="ADD">
    </div>
  </form> 
</div>
<br>





<!-- Footer -->
<?php
require_once('footer.php');
?>

<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    

    var variableToSend1 = position.coords.latitude;
    var variableToSend2 = position.coords.longitude;
     window.location.href = "dog_add_location.php?lo1=" + variableToSend1+"&lo2="+variableToSend2;
   // $.post('dog_list.php', {variable1: variableToSend1,variable2: variableToSend2});

}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
</script> 

</body>
</html>


