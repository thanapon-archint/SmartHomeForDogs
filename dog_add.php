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
  <form action="/action_page.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Dog Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Dog name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Dog information</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Dog information..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Dog Type</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">

          <option value="Labrador Retriever">Labrador Retriever</option>
          <option value="German Shepherd">German Shepherd</option>
          <option value="Golden Retriever">Golden Retriever</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Dogs Detail + Adress</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Add location</label>
      </div>
      <div class="col-75">
       

      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Select image :</label>
      </div>
      <div class="col-75">

          <input type="file" name="file" accept="image/*" onchange="picChange(event)"/>
      </div>
    </div>
    <div class="row">
      <br>
      <input type="submit" value="ADD">
    </div>
  </form>
</div>
<br>
</div>

 <button onclick="getLocation()">Current Location</button>
        <p id="demo"></p>


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
}
</script>

</body>
</html>

</body>
</html>
