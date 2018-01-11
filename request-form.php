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
    <h3>Request Form</h3>
  </div>
  <form action="showdogs.php" method="POST">
   
    <div class="row">
      <div class="col-25">
        <label for="country">Dog Type</label>
      </div>
      <div class="col-75">
        <select id="country" name="dogtype">
          <option value="Retriever">Retriever</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="">Dog color</label>
      </div>
      <div class="col-75">
        <select id="country" name="dogcolor">
          <option value="White">White</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">Dog age</label>
      </div>
      <div class="col-75">
        <select id="country" name="dogage">
          <option value="Puppy">Puppy</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>
    <br>
    <div class="row">
      <input type="submit" value="Submit" name="submit">

    </div>
  </form>
</div>


<?php
include("footer.php");
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

</body>
</html>
