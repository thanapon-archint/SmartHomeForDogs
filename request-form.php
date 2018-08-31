<!DOCTYPE html>
<html>
<title>Smart home for dogs</title>
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
        <label for="">Dog color</label>
      </div>
      <div class="col-75">
        <select id="country" name="dogcolor">
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
        <select id="country" name="dogage">
          <option value="Puppy">Puppyhood ends between six and 18 months of age.</option>
          <option value="Small">Adolescence starts between six and 18 months of age.</option>
          <option value="Medium">Adulthood starts between 12 months and three years of age.</option>
          <option value="Large">The senior years begin between six and 10 years of age</option>
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



</body>
</html>

</body>
</html>
