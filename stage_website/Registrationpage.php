
<html>
<?php include "navbar.php" ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
   <style>
     body
     {
       background-image:url(images/pexels-alexandr-podvalny-2781814.jpg);
       background-size:cover;
       background-repeat:no-repeat;
       background-position:center;

     }
     
    .form-popup  {
     
     margin-left:13px;
      border: 3px solid #f1f1f1;
      z-index: 9;
      background color:white;
      height:50px;
    }
    
    /* Add styles to the form container */
    .form-container {
      width: 483px;
      padding: 10px;
      background-color:#cccrgb(13 110 253 / 6%);

      height:852px;
      border-style:double;
      margin-left: 500px;
    
    }
    
    /* Full-width input fields */
    .form-container input[type=text], .form-container input[type=password] {
      width: 100%;
      padding: 22px;
      margin: 2px 0 15px 0;
      border-style: double;
      background:#f7f7f7;
    }
    
    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus, .form-container input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }
    
    /* Set a style for the submit/login button */
    .form-container .btn {
      background-color: #04AA6D;
      color: white;
      padding: 8px 105px;
      border: none;
      cursor: pointer;
      width: 25%;
      margin-bottom:10px;
      opacity: 0.8;
      margin-left:127px;
    }
    /* Add a red background color to the cancel button */
    .form-container .Reset {
      background-color: red;
      
    }
    
    /* Add some hover effects to buttons */
    .form-container .btn:hover, .open-button:hover {
      opacity: 1;
    } 
    .stream
    {
    display:flex;
    flex-direction:row;
    }
    .streamhead
    {
      margin-top:-1px;
    }
    label
    {
      color:#212;
    }
    
  </style>
      
  </head>
  <body>




    <form action="1.php" method="post" class="form-container">
      <h1> University Login</h1>
  
      <label for="Name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name1" id="name1"  autocomplete="off" required>

      <label for="Logo"><b>Logo</b></label>
      <input type="file" placeholder="choose logo" name="logo" id="logo" autocomplete="off" required>
      <br><br>
      
      <label for="Location"><b>Location</b></label>
      <input type="text" placeholder="Enter location" name="location" id="location" autocomplete="off" required>
      
  <div class="stream">
<label for="streams" class="streamhead"><b>Choose  Stream:</b></label>
  <div class="stream1">
<select name="stream" id="stream">
  <option value="computer">computer</option>
  <option value="Eletrical">Eletrical</option>
  <option value="Civil">Civil</option>
  <option value="Mechanical">mechinical</option>
</select>
</div>
</div>
<br>

      <label for="Placement Season"><b>placement session</b></label>
      <input type="text" placeholder="text" name="placement_session"  id="placement_session" autocomplete="off" required>

      <label for="Tpo's Name"><b>Tpo's Name</b></label>
      <input type="text" placeholder="text" name="Tpo_name"  id="Tpo_name" autocomplete="off"  required>
             
       <label for=" Tpo's email"><b>Tpo's Email</b></label>
      <input type="email" placeholder="Enter Email" name= "email" id= "email" autocomplete="off" required>
      <br><br>
  
      <label for="contact Number"><b>Tpo's Contact Number</b></label>
      <input type="text" placeholder="text" name="no" id="no" autocomplete="off"required>
      

      <button type="submit" class="btn" id="btn" name="create">Submit</button>
    </form>
    <?php include "footer.php" ?>
  

  </body>
</html>