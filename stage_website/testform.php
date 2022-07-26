<?php
include('test.php');
?>
<html>
<head>
</head>
<body>
    <form method="post" action="">
    <label for="Tpo_name"><b>Tpo's Name</b></label>
        <input type="text" placeholder="text" name="Tpo_name"  id="Tpo_name" required>
        <label for=" Tpos_email"><b>Tpo's Email</b></label>
        <input type="email" placeholder="Enter Email" name= "Tpos_email" id= "Tpos_email" required>
        <button type="submit" class="btn" id="btn" name="create">Submit</button>
</form>
</body>

</html>