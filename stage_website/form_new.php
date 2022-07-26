<?php 
$email=$_POST['email'];

$target_dir = "Resume/";
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
$collegename=$_POST['collegename'];
$fname=$_POST['fname'];
$gender=$_POST['gender'];
$contactnumber=$_POST['contactnumber'];
$tponame=$_POST['tponame'];
$tpoemail=$_POST['tpoemail'];
$percent1=$_POST['percent1'];
$percent2=$_POST['percent2'];
$g_degree=$_POST['g_degree'];
$g_branch=$_POST['g_branch'];
$g_cgpa=$_POST['g_cgpa'];
$g_year=$_POST['g_year'];
$m_degree=$_POST['m_degree'];
$m_branch=$_POST['m_branch'];
$m_cgpa=$_POST['m_cgpa'];
$m_year=$_POST['m_year'];
$project_title=$_POST['project_title'];
$project_technology=$_POST['project_technology'];
$domain=$_POST['domain'];
$skills=$_POST['skills'];
$p_location=$_POST['p_location'];
$city=$_POST['city'];
$st_ate=$_POST['st_ate'];
//$fileToUpload=$_POST['fileToUpload'];
$date=date("d/m/Y");


  $cn=$_POST['company_name'];

// $post_graduation=$_POST['select_post_graduation'];
// $skills=$_POST['skills'];
// $current_location=$_POST['current_location'];
// $preferred_location=$_POST['preferred_location'];
         


include 'connection_moodle.php';


$sql = "Select * from registrationform where email='$email' AND company_name='$cn'";
    $result = mysqli_query($mysqli,$sql);
    $num = mysqli_num_rows($result);
    if ($num > 0)	
            { 
                $sql="UPDATE `registrationform` SET `date`='$date',`company_name`='$company_name',`email`='$email',`collegename`='$collegename',`fname`='$fname',`gender`='$gender',`contactnumber`='$contactnumber',`tponame`='$tponame',`tpoemail`='$tpoemail',`percent1`='$percent1',`percent2`='$percent2',`g_degree`='$g_degree',`g_branch`='$g_branch',`g_cgpa`='$g_cgpa',`g_year`='$g_year',`m_degree`='$m_degree',`m_branch`='$m_branch',`m_cgpa`='$m_cgpa',`m_year`='$m_year',`project_title`='$project_title',`project_technology`='$project_technology',`domain`='$domain',`skills`='$skills',`p_location`='$p_location',`city`='$city',`st_ate`='$st_ate',`re_sume`='$target_file' WHERE `email`='$email' ";


               // echo $sql;

                $user = mysqli_query($mysqli,$sql); 



                echo "Data updated successfully";
            } 
        else
            {
                
                 $user = mysqli_query($mysqli," INSERT INTO `registrationform`(`date`,`company_name`,`email`, `collegename`,`fname`, `gender`, `contactnumber`,`tponame`, `tpoemail`, `percent1`, `percent2`, `g_degree`,`g_branch`,`g_cgpa`,`g_year`,`m_degree`,`m_branch`,`m_cgpa`,`m_year`,`project_title`,`project_technology`,`domain`,`skills`,`p_location`,`city`,`st_ate`,`re_sume`) VALUES('$date','$company_name','$email', '$collegename', '$fname', '$gender', '$contactnumber', '$tponame', '$tpoemail', '$percent1', '$percent2', '$g_degree', '$g_branch', '$g_cgpa', '$g_year', '$m_degree', '$m_branch', '$m_cgpa', '$m_year', '$project_title', '$project_technology', '$domain', '$skills', '$p_location', '$city', '$st_ate', '$target_file')");
				 
				
			     
			     if($user)   
                 {
                     
                     
                     
               
				$user = explode(" ", $fname);
				
				 
				$first_name=$user[0]; 
				
				$lastname=$user[1];
				include ('password.php');

				$password_hash = md5($password);

                $sql = "Select * from `campus_users` WHERE email='$email'";
                $result = mysqli_query($mysqli,$sql);
                $num = mysqli_num_rows($result);
                if ($num > 0)	
                        { 
                           $sql=mysqli_query($mysqli," UPDATE `campus_users` SET `username`='$email',`password`='$password_hash',`email`='$email',`firstname`='$first_name',`lastname`='$lastname' WHERE email='$email'");
                        } 
                    else
                     {
				
                
            				$sql=mysqli_query($mysqli,"INSERT INTO `campus_users`(`username`, `password`, `email`, `firstname`, `lastname`) 
            				VALUES('$email','$password_hash','$email','$first_name','$lastname')");
                     }



				$row1 = mysqli_query($mysqli,"Select * from mdl_course WHERE fullname='$cn'");
				$row = mysqli_fetch_assoc($row1);
				$c_name=$row['shortname'];

				$sql01=mysqli_query($mysqli,"INSERT INTO `enrol`(`shortname`,`email`,`rol`, `other`) 
				VALUES ('$c_name','$email','','')");
				
			            
			     if($sql01)
			     {
			                        
							     
                             $to = $email;
                             $subject = "Orena Solutions";
                            
                            
                             $message="
                                <p  >Dear Scholar $full_name</p>
                                
                                <p  >Greetings&nbsp; from Orena Solutions !</p>
                               
                                <p  >We hope you are prepared for your next test with reference to $cn &nbsp;</p>
                                <b>
                               
                                <p>Username: $email <p>
                                <p>Password:  $password</p>
                                
                                <p>Link to test:&nbsp;  https://stage.moodle.orena.solutions/login/index.php</p>
                                </b>
                                <p  >&nbsp;</p>
                                <p  >&nbsp;After clicking the link you will have to follow 3 simple steps as mentioned below:</p>
                                <p  >1.Login with username and password</p>
                                <p  >2.Find out  &nbsp;$cn &nbsp; click on that</p>
                                <p  >3.Click on test name is &nbsp;$cn' &nbsp;  and start your test</p>
                                <p  >&nbsp;</p>
                                <p  ><span style= 'color: #ff0000; '>Note : you can only write the test for once so be careful and prepare accordingly.</span></p>
                                
                                <p  ><span style= 'color: #9900ff; '>We are confident you will perform well.&nbsp;<strong>All The Best !</strong></span></p>
                                <p><span style= 'color: #9900ff; '><strong>&nbsp;</strong></span></p>
                                
                              
                                
                            <p><p><img src='https://orena.solutions/new/images/logo.png'></p></p>
							
							<p><strong>Orena Team</strong></p>
							<p>Contact Number:9313807737</p>
							<p><strong>Orena Solutions</strong>&nbsp;401, 4th Floor, Urban OneComplex, Near Panch-Mukhi Hanuman, Vasna-Bhayli Road, Vadodara, 391410</p>
							
                            
                            <a href='https://www.facebook.com/pages/category/Industrial-Company/Orena-Solutions-112514393912321/'><img src='https://image.flaticon.com/icons/png/512/179/179319.png' width='35' height='35'></a>
                            <a href='https://www.instagram.com/orena_solutions/'><img src='https://image.flaticon.com/icons/png/512/174/174855.png' width='35' height='35'></a>
                            <a href='https://www.linkedin.com/in/orena-solutions-7561521b4/'><img src='https://image.flaticon.com/icons/png/512/145/145807.png'width='35' height='35'></a>
            				
            				<p><a href='https://www.orena.solutions/' target='_blank'>www.orena.solutions</a></p>
            				
            				
                            
                                 ";                
                                             
                                                                        
                            // Always set content-type when sending HTML email
                            $headers = "MIME-Version: 1.0" . "\r\n";
                            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                            
                            // More headers
                            $headers .= 'From: <admin@orena.solutions>' . "\r\n";
                            
                            
                            mail($to,$subject,$message,$headers);
                            
                           header("Location:https://orena.solutions/stage_website/thank_you.html");
			         
			     }
			            	
                      
			
				
	          
                     
                  	  
                 }
                    else   
                    {
                       header("Location:https://orena.solutions/stage_website/error.html");
                    }       
            }
			
		
                     
                                
		  
		  
		
	        	
		
	


?>