<?php
error_reporting(0);
include ('connection_moodle.php');
		
 
				$sq=mysqli_query($mysqli,"select * from `campus_drive_users` where id='$id'");
				$srow=mysqli_fetch_array($sq);
                
				$email=$srow['email'];
				$fname=$srow['full_name'];
				$cp=$srow['company_name'];
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
                            echo $subject = "Orena Solutions";
                            
                            
                             $message="
                                <p  >Dear Scholar $fname</p>
                                
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
			            	
                            
			
				 header("Location:https://orena.solutions/new/view.php?c_n=$cp"); 
	
