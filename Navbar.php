<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>


    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">HOME</a>
    
    <a href="dog_list.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">DOG LIST</a>

    <a href="request-form.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">REQUEST</a>
    <a href="help.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">HELP</a>


    <a href="howto.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Application Guide</a>


<?php
session_start();
if(isset($_SESSION["username"])){
?>
<a href="php-action/logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right-align w3-right"><?=$_SESSION["username"]?></a>   
  </div>
<?php
}
else{

?>
    <a href="login-form.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right-align w3-right">LOGIN</a>   
  </div>

  <?php
}
?>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">

    <a href="camera.php" class="w3-bar-item w3-button w3-padding-large">CAMERA</a>
    <a href="dog_list.php" class="w3-bar-item w3-button w3-padding-large">DOG LIST</a>
    <a href="request-form.php" class="w3-bar-item w3-button w3-padding-large">REQUEST</a>
    <a href="help.php" class="w3-bar-item w3-button w3-padding-large">HELP</a>
    <a href="howto.php" class="w3-bar-item w3-button w3-padding-large">Application Guide</a>

<?php
if(isset($_SESSION["username"])){
?>
 <a href="php-action/logout.php" class="w3-bar-item w3-button w3-padding-large"><?=$_SESSION["username"]?></a>   <?php
}
else{
?>
     <a href="login-form.php" class="w3-bar-item w3-button w3-padding-large">LOGIN</a>
  <?php
}
?>
   
  </div>
</div>