<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOD HAVEN RESTAURANT</title>
    <link href="style.css" rel="stylesheet">
    <link rel="icon" type="/image" href="logo2.jpg">
</head>
<body>
<div><?php include("header.php");?></div>
<div ><h3 align="center" style="font-size: 25px;font-weight:lighter;  font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" >Our restaurant is open daily from 7:00 AM to 12:00 AM.<br>We welcome you to join us for breakfast, lunch, and dinner.<br>Our team is dedicated to providing you with exceptional service throughout the day.<br>We look forward to serving you during these hours.<br>Thank you for choosing our restaurant!</h3>
<div align="center" style="font-size: 19px; line-height: 33px;"><b>Contact no. :</b> 8743562098<br><b>Email ID :</b> foodhaven@info.in<br>
      <b>Instagram Handle : </b><a href="https://www.instagram.com/food_heaven._?igsh=MXB6N255Mmpsa3BwaQ==">food_heaven._</a>
      <p style="font-weight: 600;">We value your feedback, please share your thoughts to help us improve.</p> 
  <form method="POST" action="">
  <textarea name="feedback" style="font-size: 20px;" rows="3" cols="130" required></textarea><br>
  <input name="submit" type="submit" class="custom-button" value="Submit">
</form><br>
</div></div>
<?php
if(isset($_POST['submit'])){
  $servername='localhost';
  $username='root';
  $password='';
  $conn= new mysqli($servername,$username,$password,'internship');
  if($conn->connect_error){
    die('connection failed'.$conn->connect_error);
  }
  echo("Connection Successful");
  $feedback=$_POST['feedback'];
  $query="INSERT INTO `feedback`(`feedback`) VALUES ('$feedback')";
  $execute=mysqli_query($conn,$query);
}
?>
</body>
</html>