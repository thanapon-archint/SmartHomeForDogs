<!DOCTYPE html>
<html>
<title>Signup</title>
<link rel="stylesheet" href="vendor/login.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>


<body>
<?php
require_once('dbconfig.php');
require_once('Navbar.php');

if (isset($_POST['Register'])) {
    $username = $_POST['username'];
    $password1 = $_POST['psw'];
    $password2 = $_POST['psw-repeat'];
    if ($password1==$password2) {
        $query = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($connect, $query);
        $row = mysqli_fetch_array($result);
        if (mysqli_num_rows($result) > 0) {
          echo '<script language="javascript">';
          echo 'alert("This username has been use!!")';
          echo '</script>';
        }
        else {
            echo '<script language="javascript">';
            echo 'alert("Thank you, you have successfully Signed up!!")';
            echo '</script>';
           $querys = "INSERT INTO user (username, password) VALUES('$username', '$password1')";
           $connect->query($querys);
        }
    }
    else{
      echo '<script language="javascript">';
      echo 'alert("Your password and conform password are not match!!")';
      echo '</script>';
    }

    
//    if ($connect->query($query) === TRUE)
//        echo "success";
}
?>
<br>
<br>
<div class="container">
  <h2>Login form</h2>
  <form action="php-action/login.php" method="POST">
    <div class="form-group">
      <label for="email">Username:</label>
      <input  class="form-control" id="email" placeholder="Enter Username" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>

    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
  <br>
  <button  onclick="document.getElementById('id01').style.display='block'" >Sign Up</button>
</div>



<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content animate" action="login-form.php" method="POST">
    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>
    
      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      

      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" name="Register" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

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
