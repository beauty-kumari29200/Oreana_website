<?php
 
    $name = $_POST['name'];
    $name1= $_POST['name1'];
    $mobileno = $_POST['mobileno'];
    $roll = $_POST['roll'];
    $address = $_POST['address'];
    $cityname = $_POST['cityname'];
    $area = $_POST['area'];
    $state = $_POST['state'];
    $position = $_POST['position'];
    $Speclization1 = $_POST['Speclization1'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $bonus = $_POST['bonus'];
    $myeligibility = $_POST['myeligibility'];
    $mygender = $_POST['mygender'];
    $password = $_POST['password'];


  // include database connection file
  $conn = mysqli_connect("localhost","root","","assignment4");

//   Insert user data into table
 
  $q="INSERT INTO `regi4`(`firstname`, `lastname`, `mobile_no`,`roll_no`,`address`, `city`, `area`, `state`, `qualification`, `specilization`, `email`, `date`, `bonus`, `eligible`, `gender`, `password`) 
   VALUES ('$name','$name1','$mobileno','$roll','$address','$cityname','$area','$state','$position','$Speclization1','$email','$date','$bonus','$myeligibility','$mygender','$password')";

   
$result = mysqli_query($conn,$q);
  // Show message when user added
  // echo "User added successfully. <a href='index.php'>View Users</a>";


   // echo "thank you";
   
?>
