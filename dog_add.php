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
    <h3>Add a dog</h3>
  </div>
  <form action="php-action/add-dogs.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Dog Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="dogname" placeholder="Dog name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Dog information</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="doginfo" placeholder="Dog information.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Dog Type</label>
      </div>
      <div class="col-75">
        <select id="country" name="dogtype">

          <option value="Labrador Retriever">Labrador Retriever</option>
          <option value="German Shepherd">German Shepherd</option>
          <option value="Golden Retriever">Golden Retriever</option>
          <option value="Thai">Thai</option>
          <option value="Bulldog">Bulldog</option>
          <option value="Beagle">Beagle</option>
          <option value="Poodle">Poodle</option>
          <option value="Other">Other</option>
        </select>
      </div>
    </div>
        <div class="row">
      <div class="col-25">
        <label for="country">Dog colors</label>
      </div>
      <div class="col-75">
        <select id="country" name="color">

          <option value="White">White</option>
          <option value="Black">Black</option>
          <option value="Red">Red</option>
          <option value="Yellow">Yellow</option>
          <option value="Green">Green</option>
          <option value="Brown">Brown</option>
          <option value="Black-White">Black-White</option>
          <option value="Other">Other</option>

        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Dog age</label>
      </div>
      <div class="col-75">
        <select id="country" name="age">

          <option value="Puppy">Puppyhood ends between six and 18 months of age.</option>
          <option value="Small">Adolescence starts between six and 18 months of age.</option>
          <option value="Medium">Adulthood starts between 12 months and three years of age.</option>
          <option value="Large">The senior years begin between six and 10 years of age.</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Address (how to contact)</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="adress" placeholder="Please input your address phone number and your line ID " style="height:200px" required></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Select image :</label>
      </div>
      <div class="col-75">

         <!--  <input type="file" name="file" accept="image/*" onchange="picChange(event)"/> -->
          <label>File: </label><input type="file" name="new_image" required>
      </div>
    </div>
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
}
</script>

</body>
</html>


