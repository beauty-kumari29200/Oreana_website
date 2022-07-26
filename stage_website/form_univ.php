<?php 
$tpoemail=$_POST['tpoemail'];

$target_dir = "Universities/";
$target_file = $target_dir .$tpoemail. basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if ($uploadOk == 0) 
{
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else 
{
  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
}
$university_name=$_POST['university_name'];
$university_location=$_POST['university_location'];
$qualification=$_POST['qualification'];
// $stream=$_POST['stream'];


$stream=$_POST['chkl'];

for ($i=0; $i<sizeof($stream);$i++) {  
$MNTS=$stream[$i].' AND '.$MNTS;


} 

$other=$_POST['other'];

$f_stream=$MNTS.''.$other;
$placement_season=$_POST['placement_season'];
$tponame=$_POST['tponame'];
// $tpoemail=$_POST['tpoemail'];
$tponumber=$_POST['tponumber'];
$date=date("d/m/Y");

// $post_graduation=$_POST['select_post_graduation'];
// $skills=$_POST['skills'];
// $current_location=$_POST['current_location'];
// $preferred_location=$_POST['preferred_location'];
         


$mysqli = new mysqli("mars","orena_moodle_user","ChangeMe@123","orena_demo_moodle");

$sql = "Select * from `university_collaboration` where tpoemail='$tpoemail' AND university_name='$university_name'";
    $result = mysqli_query($mysqli,$sql);
    $num = mysqli_num_rows($result);
    if ($num > 0)	
            { 
                $sql="UPDATE `university_collaboration` SET `date`='$date', `university_name`='$university_name', `university_logo`='$target_file', `university_location`='$university_location', `qualification`=`$qualification`, `stream`='$f_stream', `placement_season`='$placement_season', `tponame`='$tponame', `tpoemail`='$tpoemail', `tponumber`='$tponumber' WHERE `university_name`='$university_name'";
 

               
                $user = mysqli_query($mysqli,$sql); 



                echo "Data updated successfully";
            } 
        else
            {
                
                 $user = mysqli_query($mysqli,"INSERT INTO `university_collaboration`(`date`, `university_name`, `university_logo`, `university_location`, `qualification`, `stream`, `placement_season`, `tponame`, `tpoemail`, `tponumber`) VALUES('$date', '$university_name', '$target_file', '$university_location', '$qualification', '$f_stream', '$placement_season', '$tponame', '$tpoemail', '$tponumber')");
				 
				
			     
			     if($user)   
                 {
                    header("Location:https://orena.solutions/new/thank you1.html");	  
                 }
                    else   
                    {
                          echo "Error";
                    }       
            }
			
		
                     
                                
		  
		  
		
	        	
		
	


?>