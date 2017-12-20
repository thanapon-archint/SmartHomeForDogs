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
  <p class="w3-xlarge">อะไรก็ได้..</p>
  <div class="row">
    <div class="col-75">
      <form action="/action_page.php" method="POST" enctype="multipart/form-data">
        <input class="w3-black w3-small"  type="file" name="file" width="50"  accept="image/*" onchange="picChange(event)"  />
        <input class="w3-button w3-black w3-padding-large w3-large w3-margin-top" type="submit" value="Submit">
      </form>
    </div>
      
  </div>
   
  
</header>
<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>How to use this function</h1>
      <h5 class="w3-padding-32">ประโยชน์ของโปรแกรมนี้....</h5>

      <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
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