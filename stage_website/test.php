<?php
include('cruddb.php');
if(isset($_POST['create'])){
   
      $msg=insert_data($connection);
      
}
// insert query
function insert_data($connection){
   
    #$name1 = $_POST['name1'];
    #$logo = $_POST['logo'];
    #$location = $_POST['location'];
    #$stream= $_POST['stream'];
    #$placement_session = $_POST['placement_session'];
    #$Tpo_name = $_POST['Tpo_name'];
    //$Tpos_email = $_POST['Tpos_email'];
    //$no = $_POST['no'];
    //$result = mysqli_query($mysqli, "INSERT INTO Register(name1,logo,locations,choose_stream,placement_session,tpos_name,tpos_email,tpos_number)
    //VALUES('$name1','$logo','$location','$stream','$placement_session','$Tpo_name','$Tpos_email','$no')");
      //$exec= mysqli_query($connection,$query);
      //if($exec){
        //$msg="Data was created sucessfully";
        //return $msg;
      
     // }else{
       // $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
      //}
      $name = $_POST['name'];
      $email = $_POST['email'];

      $query =  "INSERT INTO test(namme,email)VALUES($name,$email)";

      $exec= mysqli_query($connection,$query);
      if($exec){
        $msg="Data was created sucessfully";
        return $msg;
    }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
    }
}
// convert illegal input to legal input

?>