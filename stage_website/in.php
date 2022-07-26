<?php
include ('connection_moodle.php');
 
  	
  
        echo $email=$_POST['email'];
        
        $target_dir = "Resume/";
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
        
 $sql=mysqli_query($mysqli,"INSERT INTO `interested`(`company_name`, `email`,`resume`) VALUES('Avin system','$email','$target_file')");
 
 
 
 if($sql)
	             {
                            $to = $email;
                            $subject = "Registered Successfully-Java-Avin Systems";
                            
                            
                            $message="
                            
                           
                            <p>Thank you for Registration</p>
                            <p>&nbsp;</p>
                            <p>Please&nbsp; find below details</p>
                            <p>&nbsp;</p>
                            <p><strong>Presentation Details</strong></p>
                            <p>&nbsp;</p>
                           
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Presentation Details: Will be shared to you a day before.</p>
                            <p>&nbsp;</p>
                            <p><strong>Written Test Details</strong></p>
                            <p>&nbsp;</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Test Details: Will be shared to you a day before</p>
                            
                            
                            
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p><img src='https://orena.solutions/new/images/logo.png'></p>
                            <p>&nbsp;</p>
                            <p><strong>Chelsie Kalasva</strong></p>
                            <p>Campus Drive Executive<br />
                            
                           
                            <p>+91 9313807736<br />
                            
                            
                            Email&nbsp;<a href='mailto:chelsie.orenasolutions@gmail.com%0b' target='_blank'>chelsie.orenasolutions@gmail.com<br /></a></p>
                            <p><strong>Orena Solutions</strong>&nbsp;401, 4th Floor, Urban OneComplex, Near Panch-Mukhi Hanuman, Vasna-Bhayli Road, Vadodara, 391410</p>
                            
                            <a href='https://www.facebook.com/pages/category/Industrial-Company/Orena-Solutions-112514393912321/'><img src='https://image.flaticon.com/icons/png/512/179/179319.png' width='35' height='35'></a>
                                                        <a href='https://www.instagram.com/orena_solutions/'><img src='https://image.flaticon.com/icons/png/512/174/174855.png' width='35' height='35'></a>
                             
                             <a href='https://www.linkedin.com/in/orena-solutions-7561521b4/'><img src='https://image.flaticon.com/icons/png/512/145/145807.png' width='35' height='35' ></a>
                             
            				
            				<p><a href='https://www.orena.solutions/' target='_blank'>www.orena.solutions</a></p>


            				
            				
                            
                                 ";                
                                             
                                                                        
                            // Always set content-type when sending HTML email
                            $headers = "MIME-Version: 1.0" . "\r\n";
                            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                            
                            // More headers
                            $headers .= 'From: <admin@orena.solutions>' . "\r\n";
                            
                            
                            mail($to,$subject,$message,$headers);
                            
                            header("Location:https://orena.solutions/new/thank you.html");
			         
			     }
 
 
 
        
 header("Location:https://orena.solutions/new/thank you.html");
       

?>