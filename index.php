<!DOCTYPE html>
<html>
<title>Smart home for dogs</title>
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
<header class="w3-container w3-red w3-center" style="padding:105px 16px">
  <h1 class="w3-margin w3-jumbo">SMART HOME FOR DOGS</h1>
  <p class="w3-xlarge">NSC 2018</p>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top" onclick="javascript:location.href='dog_list.php'">Get Started</button>
</header>


<?php
require_once('map.php');
?>
<!-- First Grid -->
<div class="w3-row-padding w3-padding-8 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <br>
      <h5>Symbol</h5>
     
      <h6 class="w3-padding-8" > <img src="images/DogIcon.png" width="45" height="45"> สุนัขที่ต้องการเจ้าของใหม่</h6>
       <h6 class="w3-padding-8" > <img src="images/DogIcon2.png" width="45" height="45"> สุนัขจรจัด</h6>
        <h6 class="w3-padding-8" > <img src="images/Home.png" width="45" height="45"> ศูนย์รับเลี้ยงสุนัข</h6>
    </div>
  </div>
</div>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>บ้านสุนัขอัจฉริยะแสนสุข</h1>
      <h5 class="w3-padding-32" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปัจจุบันนี้ มีสุนัขที่ถูกทอดทิ้งเพิ่มขึ้นเป็นจำนวนมาก ทำให้มีสุนัขจรจัดเพิ่มขึ้นอย่างต่อเนื่อง ส่งผลให้มีจำนวนสุนัขภายในมูลนิธิช่วยเหลือสัตว์เลี้ยงมีจำนวนเพิ่มขึ้น ซึ่งจัดเป็นปัญหาเรื้อรังที่ส่งผลต่อการจัดสรรงบประมาณ การวางแนวทางการดูแลสุนัข และการเร่งทำหมันสุนัขภายในมูลนิธิ ประกอบกับหลายครัวเรือนประสบปัญหาการเลี้ยงดูสุนัข เช่น การไม่พร้อมดูแล การเคลื่อนย้ายสัตว์เลี้ยงในขณะที่กำลังย้ายที่อยู่อาศัย หรือการขาดความรับผิดชอบต่อสุนัขที่เลี้ยง 
จึงได้มีการจัดทำเว็บไซต์เพื่อประชาสัมพันธ์ให้มีการป้องกันและแก้ไขปัญหาดังกล่าวโดยการเปิดช่องทางออนไลน์ในการหาที่อยู่อาศัยให้สุนัขและส่งเสริมให้มีการเลี้ยงสุนัขโดยไม่มีความจำเป็นต้องเกิดการซื้อขาย</h5>

      <!-- <img src="Images/groupofdoggy.JPEG" width="700" height="200"> -->
    </div>

    <div class="w3-third w3-center">
      <i class="w3-padding-64 w3-text-red w3-margin-left">
        <br>
        <br>
        <br>
        <br>
        <img src="images/doggy.jpg" width= "320" height="220" >

      </i>

    </div>
  </div>
</div>




  


<?php
include("footer.php"); 
?>
</body>
</html>
