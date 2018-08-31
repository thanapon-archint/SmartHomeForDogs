<?php
require_once('Navbar.php');
require_once('dbconfig.php');
?>
<br>
<br>
<?php
if(isset($_POST['submit'])) {
  $dogtype =  $_POST["dogtype"];
  $dogcolor = $_POST["dogcolor"];
  $dogage =   $_POST["dogage"];
  $q = "SELECT * from dogs WHERE dog_type = '$dogtype' AND dog_color = '$dogcolor' AND dog_age = '$dogage'";
  $result = mysqli_query($connect, $q);
if (mysqli_num_rows($result) > 0){
  
?>
    <div class="w3-content" style="max-width:1532px;">
      <div class="w3-row-padding w3-padding-16">
<?php
while ($row = mysqli_fetch_array($result)){
  ?>

          <div class="w3-third w3-margin-bottom">
                    <img src='uploads/<?=$row["dog_image"]?>'>

            <div class="w3-container w3-white">
              <h3><b><?php echo $row['dog_name']?></h3></b>
              <h6><?php echo "Address: ".$row['dog_address']?></h6>
              <h6><?php echo "Dog Type: ".$row['dog_type']?></h6>
              <h6><?php echo "Dog Age: ".$row['dog_age']?></h6>
              <p><?php echo "Details: ".$row['dog_info']?></p>
              
              <p class="w3-large"><i class="fa fa-phone"></i> </p>
              <button class="w3-button w3-block w3-black w3-margin-bottom" onclick="javascript:location.href='dog_detail.php?id=<?=$row['dog_id']?>'">Choose dog</button>
            </div>
        
          
          </div>
<?php
}

?>          
        </div>
    </div>

<?php
}
else{
  ?>
  <br>
  <br>
  <h1 class="w3-center">No dog found!!</h1>
  <?php
}
}  

include("footer.php"); 
?>
