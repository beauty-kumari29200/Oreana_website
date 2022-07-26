<?php 
$email=$_POST['email'];

$target_dir = "../new/Resume/";
$target_file = $target_dir .$full_name. basename($_FILES["fileToUpload"]["name"]);
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
$full_name=$_POST['fname'];
$Training=$_POST['Training'];
$gender=$_POST['gender'];
$company_name=$_POST['company_name'];
$batch=$_POST['batch'];

$mobile_number=$_POST['mobile'];
$college_institute_name=$_POST['cname'];
$tpo=$_POST['tpo'];
$tpo_email=$_POST['tpoemail'];
$graduation_Courses=$_POST['select_graduation'];

$graduation_branch=$_POST['graduation_branch'];
$post_graduation_branch=$_POST['post_graduation_branch'];

$result10=$_POST['10thresult'];
$diploma_result=$_POST['diploma_rresult'];
$graduation_CGPA=$_POST['Graduation_CGPA'];
$post_graduation_CGPA=$_POST['Post_CGPA'];
$domain=$_POST['domain'];
$final_year_project_title=$_POST['F_project'];
$final_year_project_technology=$_POST['F_technology'];
$city=$_POST['city'];
$state=$_POST['State'];
$year_of_graduation=$_POST['year_of_graduation'];
$year_of_post_graduation=$_POST['year_of_post_graduation'];
//$fileToUpload=$_POST['fileToUpload'];
$date=date("d/m/Y");

$post_graduation=$_POST['select_post_graduation'];
$skills=$_POST['skills'];
$current_location=$_POST['current_location'];
$preferred_location=$_POST['preferred_location'];
         


include 'connection_moodle.php';

$sql = "Select * from campus_drive_users where email='$email' AND company_name='$company_name'";
    $result = mysqli_query($mysqli,$sql);
    $num = mysqli_num_rows($result);
    if ($num > 0)	
            { 
                echo"Email is already registered ";
            } 
        else
            {
                
                 $user=mysqli_query($mysqli," INSERT INTO `campus_drive_users`(`date`,`reference`, `company_name`, `training`,`college_institute_name`, `full_name`, `gender`,`email`, `mobile_number`, `tpo`, `tpo_email`, `10th`,`12th`,`graduation_Courses`,`graduation_branch`,`graduation_CGPA`,`year_of_graduation`,`post_graduation`,`post_graduation_branch`,`post_graduation_CGPA`,`year_of_post_graduation`,`final_year_project_title`,`final_year_project_technology`,`domain`,`skills`,`current_location`,`preferred_location`,`city`,`state`,`resume`) VALUES('$date','campus drive','$company_name','$Training','$college_institute_name','$full_name','$gender','$email','$mobile_number','$tpo','$tpo_email','$result10','$diploma_result','$graduation_Courses','$graduation_branch','$graduation_CGPA','$year_of_graduation','$post_graduation','$post_graduation_branch','$post_graduation_CGPA','$year_of_post_graduation','$final_year_project_title','$final_year_project_technology','$domain','$skills','$current_location','$preferred_location','$city','$state','$target_file')");
				 
				
                            				//  $mail = "SELECT * FROM `presentation_mail` WHERE company_name='$company_name'";
                                //     	     $result_mail = mysqli_query($mysqli, $mail);
                                //     	     $num2 = mysqli_num_rows($result_mail);
                        	       //          $row=mysqli_fetch_assoc($result_mail);
                                //              $company=$row['company_name'];
                             
                 if($company_name=='Embedded system (Free Course)'||$company_name=='PLC & SCADA (Free Course)')             
                                    
							{
							   $to = $email;
                            $subject = "Registration confirmation -Training in $company_name ";
                            $date=date("d-m-y",strtotime($date)); 
                            $time = date('h:i A', strtotime($time));
                            
                            
                             $message="
                            <p>Hi &nbsp;$full_name,&nbsp;</p>
                            <p>Thank you for registering with Orena Solutions for $company_name.</p>
                           
                            <p>Thanks & Regards,</p>
                           
							<p><strong>Orena Team</strong></p>
							<p>Mob:&nbsp;9313807734/9313807737</p>
							
							<p><p><img src='https://orena.solutions/new/images/logo.png'></p></p>
							<p><strong>Orena Solutions</strong>&nbsp;401, 4th Floor, Urban OneComplex, Near Panch-Mukhi Hanuman, Vasna-Bhayli Road, Vadodara, 391410</p>
							
                            
                            <a href='https://www.facebook.com/pages/category/Industrial-Company/Orena-Solutions-112514393912321/'><img src='https://image.flaticon.com/icons/png/512/179/179319.png' width='35' height='35'></a>
                            <a href='https://www.instagram.com/orena_solutions/'><img src='https://image.flaticon.com/icons/png/512/174/174855.png' width='35' height='35'></a>
                            <a href='https://www.linkedin.com/in/orena-solutions-7561521b4/'><img src='https://image.flaticon.com/icons/png/512/145/145807.png'width='35' height='35'></a>
            				
            				<p><a href='https://www.orena.solutions/' target='_blank'>www.orena.solutions</a></p>
                                         
                            </body>
                            </html>
                            ";
                            
                            
                            // Always set content-type when sending HTML email
                            $headers = "MIME-Version: 1.0" . "\r\n";
                            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                            
                            // More headers
                            $headers .= 'From: <admin@orena.solutions>' . "\r\n";
                            
                            
                            mail($to,$subject,$message,$headers);
                            
                            // header("Location:https://orena.solutions/new/thank you.html");
							    
							}	
				else
				            {                    
									   
							$to = $email;
                            $subject = "Congratulations for Unlocking Job Opportunities";
                            $date=date("d-m-y",strtotime($date)); 
                            $time = date('h:i A', strtotime($time));
                            
                            
                             $message="
                             <p>Congratulations!</p>
                           
                            <p>Hello&nbsp;$full_name,&nbsp;</p>
                            <div>
                            <p>&nbsp; &nbsp; Thank you for registering at Orena Solutions. Now, we will get you placed for &#34; Dream Job &#34; you are looking for!</p>
                            </div>
                            <div>
                            
                            </div>
                            <div>
                            <p>Any questions ? Join with us.</p>
                            </div>
                            <div>
                            
                            </div>
                        
                            <div>
                            <p>Cheers!!!!</p>
                            </div>
                            
							
							<p><p><img src='https://orena.solutions/new/images/logo.png'></p></p>
							
							<p><strong>Ankita Dholakia</strong></p>
							<p>Sr. Technical Recruiter<br/>Email&nbsp;<a href='mailto:ankita.orenasolutions@gmail.com%0b' target='_blank'>ankita.orenasolutions@gmail.com<br /></a></p>
							<p><strong>Orena Solutions</strong>&nbsp;401, 4th Floor, Urban OneComplex, Near Panch-Mukhi Hanuman, Vasna-Bhayli Road, Vadodara, 391410</p>
							
                            
                            <a href='https://www.facebook.com/pages/category/Industrial-Company/Orena-Solutions-112514393912321/'><img src='https://image.flaticon.com/icons/png/512/179/179319.png' width='35' height='35'></a>
                            <a href='https://www.instagram.com/orena_solutions/'><img src='https://image.flaticon.com/icons/png/512/174/174855.png' width='35' height='35'></a>
                            <a href='https://www.linkedin.com/in/orena-solutions-7561521b4/'><img src='https://image.flaticon.com/icons/png/512/145/145807.png'width='35' height='35'></a>
            				
            				<p><a href='https://www.orena.solutions/' target='_blank'>www.orena.solutions</a></p>
                                         
                            </body>
                            </html>
                            
                            
                            ";
                            
                            
                            // Always set content-type when sending HTML email
                            $headers = "MIME-Version: 1.0" . "\r\n";
                            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                            
                            // More headers
                            $headers .= 'From: <admin@orena.solutions>' . "\r\n";
                            
                            
                            mail($to,$subject,$message,$headers);
                            
                            // header("Location:https://orena.solutions/new/thank you.html");
				
				            }
            
                
                
                
               
				$cp=$_POST['company_name'];
				$user = explode(" ", $full_name);
				
				 
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



				// $sql=mysqli_query($mysqli,"INSERT INTO `campus_users`(`username`, `password`, `email`, `firstname`, `lastname`) 
				// VALUES('$email','$password_hash','$email','$first_name','$lastname')");
				
                if($cp=='Avin Systems_java'|| $cp=='Avin Systems_C')
                                                   {$cp=='Avin Systems';}
                  
                    
				$row1 = mysqli_query($mysqli,"Select * from mdl_course WHERE fullname='$cp'");
				$row = mysqli_fetch_assoc($row1);
				$c_name=$row['shortname'];

				$sql01=mysqli_query($mysqli,"INSERT INTO `enrol`(`shortname`,`email`,`rol`, `other`) 
				VALUES ('$c_name','$email','','')");
				
			            
			     if($sql01)
			     {
			                    
			                        
			                   
                                	$row11 = mysqli_query($mysqli,"Select * from mdl_course WHERE fullname='$cp'");
                                	$row20=mysqli_fetch_assoc($row11);
    							
							       
							       $cid=$row20['id'];
							    
							       $sql2="SELECT distinct m.visible, q.course ,m.module, q.timeopen,q.timeclose,q.timelimit, name FROM  mdl_quiz q INNER JOIN mdl_course_modules m INNER JOIN 
							      mdl_course c WHERE m.course=$cid AND m.instance=q.id AND m.visible=1 AND m.module=17";
							     
						
							     
                             $to = $email;
                             $subject = "Orena Solutions";
                            
                            
                             $message="
                                <p  >Dear Scholar $full_name</p>
                                
                                <p  >Greetings&nbsp; from Orena Solutions !</p>
                               
                                <p  >We hope you are prepared for your next test with reference to $cp &nbsp;</p>
                                <b>
                               
                                
                                
                                
                                <p>Username: $email <p>
                                <p>Password:  $password</p>
                                
                                <p>Link to test:&nbsp;  https://stage.moodle.orena.solutions/login/index.php</p>
                                </b>
                                <p  >&nbsp;</p>
                                <p  >&nbsp;After clicking the link you will have to follow 3 simple steps as mentioned below:</p>
                                <p  >1.Login with username and password</p>
                                <p  >2.Find out  &nbsp;$cp &nbsp; click on that</p>
                                <p  >3.Click on test name is &nbsp;$cp &nbsp;  and start your test</p>
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
                            
                            
			         
			     }
			            	
                            
			
				
	           header("Location:https://orena.solutions/new/thank you1.html");
                
            }
			
		
                     
                                
		  
		  
		
	        	
		
	


?>