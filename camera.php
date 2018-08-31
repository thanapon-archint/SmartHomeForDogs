<!DOCTYPE html>
<html>

<head>

</head>
<body>

<?php
require_once('Navbar.php');
?>
<br>
<br>

<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">Let's help the dogs</h1>
  <p class="w3-xlarge">Take a picture of a dog and help them</p>
  <div class="row">
    <div class="col-75">
      <form action="php-action/add-camera.php" method="POST" enctype="multipart/form-data">
        
        <label>Take a picture: </label><input class="w3-black w3-small" type="file" name="new_image" />

          <div class="row">
        <div class="col-25">
          <label for="lname">Dog information:</label>

        </div>
        <div class="col-75">
          <input type="text" id="lname" name="doginfo" placeholder="Dog information.." required>
        </div>
      </div>
                <input class="w3-button w3-black w3-padding-large w3-large w3-margin-top" type="submit" value="Submit" name="submit">
      </form>
    </div>
      
  </div>
   
  
</header>
<?php 
require_once('footer.php');

 ?>

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
