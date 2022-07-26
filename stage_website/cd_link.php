

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
  </head>
  <body>
<br>     
<h1 class="text-center" >Campus Drive Admission Form Link</h1> 
<br>
<br>
 <table class="table table-hover" style='margin-left:50px ; width: 95%;'>
  <thead class="border border-success">
    <tr >
      <th scope="col">No</th>
      <th scope="col">Company Name</th>
      <th scope="col">Link</th>
      <th scope="col">Copy</th>
    </tr>
  </thead>
  <tbody class="border border-success">
    
    <tr>
      <th scope="row"> <?php echo $no;?> </th>
      <td>For All </td>
      <td><a href='http://orena.solutions/new/form1.php'><p id='clipboardExample'>http://orena.solutions/new/form1.php</p></a></td>
      <td><button type="button" class="btn btn-info btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardExample">Copy</button></td>
    </tr>
    
     <?php

        include ('connection_moodle.php');
        $sql = "Select * from mdl_course WHERE category='3' AND visible='1' AND id !='85'";
        $row1 = mysqli_query($mysqli,$sql);
        
        $no='1';
        while($row=mysqli_fetch_assoc($row1)) 
                       
                                { 
                                 $URL = str_replace(' ', '%20', $row['fullname']);
                                
                                ?>
                                
                               

    <tr>
      <th scope="row"> <?php echo $no;?> </th>
      <td><?php echo $row['fullname'];?></td>
      <td><a href='https://orena.solutions/temp/apply.php?name=<?php echo $URL; ?>'><p id='clipboardExample<?php echo $no;?>'>https://orena.solutions/temp/apply.php?name=<?php  echo $URL; ?></p></a></td>
      <td><button type="button" class="btn btn-info btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardExample<?php echo $no; $no++; ?>">Copy</button></td>
    </tr>
    
    <?php }?>  
    
  </tbody>
</table>

</body>

<script>
    $( document ).ready(function() {

new ClipboardJS('.btn');

});
</script>

</html>