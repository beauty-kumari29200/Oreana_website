<?php 
$email=$_POST['email'];

$target_dir = "Companies/";
$target_file = $target_dir .$email. basename($_FILES["fileToUpload"]["name"]);
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
$company_name=$_POST['company_name'];
$location=$_POST['location'];
$hr_name=$_POST['hr_name'];
$hr_number=$_POST['hr_number'];
$qualification=$_POST['qualification'];
$branch=$_POST['branch'];

for ($i=0; $i<sizeof($branch);$i++) {  
$MNTS=$branch[$i].' AND '.$MNTS;


} 
$other=$_POST['other'];
$branch=$MNTS.''.$other;
$skill=$_POST['skill'];
$number_of_vacancy=$_POST['number_of_vacancy'];
$date=date("d/m/Y");

// $post_graduation=$_POST['select_post_graduation'];
// $skills=$_POST['skills'];
// $current_location=$_POST['current_location'];
// $preferred_location=$_POST['preferred_location'];
         


$mysqli = new mysqli("mars","orena_moodle_user","ChangeMe@123","orena_demo_moodle");

$sql = "Select * from `company_collaboration` WHERE email='$email' AND company_name='$company_name'";
    $result = mysqli_query($mysqli,$sql);
    $num = mysqli_num_rows($result);
    if ($num > 0)	
            { 
                $sql="UPDATE `company_collaboration` SET `date`='$date', `company_name`='$company_name', `location`='$location' ,`company_logo`='$target_file', `hr_name`='$hr_name', `email`='$email', `hr_number`='$hr_number', `qualification`='$qualification', `branch`='$branch', `skill`='$skill', `number_of_vacancy`='$number_of_vacancy' WHERE `university_name`='$university_name'";
 

                echo $sql;

                $user = mysqli_query($mysqli,$sql); 



                echo "Data updated successfully";
            } 
        else
            {
                
                 $user = mysqli_query($mysqli," INSERT INTO `company_collaboration`(`date`, `company_name`, `location`, `company_logo`, `hr_name`, `email`, `hr_number`, `qualification`, `branch`, `skill`, `number_of_vacancy`) VALUES('$date', '$company_name', '$location', '$target_file', '$hr_name', '$email', '$hr_number', '$qualification', '$branch', '$skill', '$number_of_vacancy')");
				 
				
			     
			     if($user)   
                 {
                    header("Location:https://orena.solutions/new/thank you1.html");	  
                 }
                    else   
                    {
                        $test=("INSERT INTO `company_collaboration`(`date`, `company_name`, `location`, `company_logo`, `hr_name`, `email`, `hr_number`, `qualification`, `branch`, `skill`, `number_of_vacancy`) VALUES('$date', '$company_name', '$location', '$target_file', '$hr_name', '$email', '$hr_number', '$qualification', '$branch', '$skill', '$number_of_vacancy')");
                        echo $test;
                        // echo "Error !!!";
                    }       
            }
			
		
                     
                                
		  
		  
		
	        	
		
	


?>