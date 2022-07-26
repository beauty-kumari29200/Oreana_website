<?php
 
    $name = $_POST['name1'];
    $logo = $_POST['logo'];
    $locations = $_POST['location'];
    $choose_stream = $_POST['stream'];
    $placement_session = $_POST['placement_session'];
    $tpos_name = $_POST['Tpo_name'];
    $tpos_Email = $_POST['email'];
    $tpos_number = $_POST['no'];


  // include database connection file
  $conn = mysqli_connect("localhost","root","","orena");

//   Insert user data into table
 
  $q="INSERT INTO `registeruni`(`name`, `logo`, `location`,`choose_stream`,`placement_session`, `tpos_name`, `tpos_email`, `tpos_number`) 
   VALUES ('$name','$logo','$locations','$choose_stream','$placement_session','$tpos_name','$tpos_Email','$tpos_number')";

   
  $result = mysqli_query($conn,$q);
  // Show message when user added
  // echo "User added successfully. <a href='index.php'>View Users</a>";


   // echo "thank you";
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
     body
     {
        margin:0;
        padding:0;
     }
  
   .format{
      position:absolute;
      margin-left: 500px;
      margin-top:-600px;
      color:black;
      font-size:40px;
    } 
    .format table
    { 
       height:500px;
    } 
    .image
    {
       position:relative;
    }  
    .image img
    {
       filter:blur(2px);
      height:100vh;
       width: 100vw;
    }

    </style>
</head>

<body>
   <div class="image">
      <img src="images/myriam-zilles-waSCGAuj0IE-unsplash.jpg">
   </div>
  <div class=format>
<table border=1>
  <tr> 
    <th>field</th>
    <th>Information</th>
</tr>
   <td>Name</td>
   <td><?php echo $name; ?></td>
</tr> 
</tr>
   <td>logo</td>
   <td><?php echo $logo; ?></td>
</tr> 

</tr>
   <td>location</td>
   <td><?php echo $locations; ?></td>
</tr> 

</tr>
   <td>choose_stream</td>
   <td><?php echo $choose_stream; ?></td>
</tr> 

</tr>
   <td>placement_session</td>
   <td><?php echo $placement_session; ?></td>
</tr> 
</tr>
   <td>tpos_name</td>
   <td><?php echo $tpos_name; ?></td>
</tr> 

</tr>
   <td>tpos_Email</td>
   <td><?php echo $tpos_Email; ?></td>
</tr> 

</tr>
   <td>tpos_number</td>
   <td><?php echo $tpos_number; ?></td>
</tr> 

</table>
</div>
</body>
</html>

