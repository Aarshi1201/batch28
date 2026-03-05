<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOD HAVEN RESTAURANT</title>
    <link href="styles.css" rel="stylesheet">
    <link rel="icon" type="/image" href="logo2.jpg">
</head>
<body>
<div><?php include("header.php");?></div>
<main class="main-content">
        <div class="container">
            <h2>Table Booking</h2>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="time">Time</label>
                    <input type="time" id="time" name="time" required>
                </div>
                <div class="form-group">
                    <label for="guests">Number of Guests</label>
                    <input type="number" id="guests" name="guestcount" required min="1">
                </div><br><br>
                <div class="form-group">
                    <button name="submit" type="submit">Book Table</button>
                </div>
            </form></div></main><div><br></div>
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
  $date=$_POST['date'];
  $time=$_POST['time'];
  $guestcount=$_POST['guestcount'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $query="INSERT INTO `project`(`date`, `time`, `guestcount`, `name`, `email`, `phone`) 
    VALUES ('$date','$time','$guestcount','$name','$email','$phone')";
  $execute=mysqli_query($conn,$query);
}?>
</body>
</html>