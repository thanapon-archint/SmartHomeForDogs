<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
h5{
  font-family: 'Designil Font', 'Helvetica', sans-serif;
}
</style>
<body>

<?php
require_once('Navbar.php');
?>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">SMART HOME FOR DOGS</h1>
  <p class="w3-xlarge">Template by w3.css</p>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</button>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>บ้านสุนัขอัจฉริยะแสนสุข</h1>
      <h5 class="w3-padding-32" >ปัจจุบันนี้ มีสุนัขที่ถูกทอดทิ้งเพิ่มขึ้นเป็นจำนวนมาก ทำให้มีสุนัขจรจัดเพิ่มขึ้นอย่างต่อเนื่อง ส่งผลให้มีจำนวนสุนัขภายในมูลนิธิช่วยเหลือสัตว์เลี้ยงมีจำนวนเพิ่มขึ้น ซึ่งจัดเป็นปัญหาเรื้อรังที่ส่งผลต่อการจัดสรรงบประมาณ การวางแนวทางการดูแลสุนัข และการเร่งทำหมันสุนัขภายในมูลนิธิ ประกอบกับหลายครัวเรือนประสบปัญหาการเลี้ยงดูสุนัข เช่น การไม่พร้อมดูแล การเคลื่อนย้ายสัตว์เลี้ยงในขณะที่กำลังย้ายที่อยู่อาศัย หรือการขาดความรับผิดชอบต่อสุนัขที่เลี้ยง 
จึงได้มีการจัดทำเว็บไซต์เพื่อประชาสัมพันธ์ให้มีการป้องกันและแก้ไขปัญหาดังกล่าวโดยการเปิดช่องทางออนไลน์ในการหาที่อยู่อาศัยให้สุนัขและส่งเสริมให้มีการเลี้ยงสุนัขโดยไม่มีความจำเป็นต้องเกิดการซื้อขาย</h5>

      <!-- <img src="Images/groupofdoggy.JPEG" width="700" height="200"> -->
    </div>

    <div class="w3-third w3-center">
      <i class="w3-padding-64 w3-text-red w3-margin-left">
        <br>
        <br>
        <br>
        <br>
        <img src="Images/doggy.jpg" width= "320" height="220" >

      </i>

    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class=" w3-padding-64 w3-text-red w3-margin-right">
       
      </i>
    </div>

    <div class="w3-twothird">
      <h1>Lorem Ipsum</h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

      <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>

<?php
require_once('map.php');
?>

  


<?php
include("footer.php"); 
?>
</body>
</html>
