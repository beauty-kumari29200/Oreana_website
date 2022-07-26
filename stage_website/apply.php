<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Orena</title>
    <link rel="shortcut icon" type="image/x-icon" href="asset/img/favicon.ico">

    <!-- css include -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/fontawesome.css">
    <link rel="stylesheet" href="asset/css/themify-icons.css">
    <link rel="stylesheet" href="asset/css/animate.min.css">
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/css/magnific-popup.css">
    <link rel="stylesheet" href="asset/css/metisMenu.css">
    <link rel="stylesheet" href="asset/css/nice-select.css">
    <link rel="stylesheet" href="asset/css/jquery-ui.css">
    <link rel="stylesheet" href="asset/css/common.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/responsive.css">
    
   
</head>
<?php include "navbar.php" ?>
<body>
           <main>
            <!-- page title start -->
            <section class="page_title_area" data-overlay="6" data-background="asset/img/bg/page_title_bg.jpg">
                <div class="containe">
                    <div class="row">
                        <div class="col-l2">
                            <div class="page_title text-center">
                                <h2>Registration Form </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page title end -->

            <!-- form start -->
            <section class="checkout_area pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="checkout_wrap">
                                
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <form class="form_wrap" method="Post" action="form.php" enctype="multipart/form-data">
                                            <div class="row">
                                                
                                                <div class="col-xl-12 col-lg-12" >
                                                    
                                                    <center><h3>Apply For  <?php echo $cn=$_GET['name'];?></h3></center>
                                                    
                                                    <input TYPE="hidden" id="company_name" name="company_name"  value='<?php echo $cn;?>'>
                                                    
                                                    
                                                    
                                                    
                                                </div>
                                                
                                                <br>
                                                <br>
                                                <br>

                                                <div class="col-xl-12 col-lg-12" >
                                                    <label for="cname">College / Institute Name in full form<span>*</span></label>
                                                    <input type="text" id="cname" name="cname" placeholder="College / Institute Name" required>
                                                </div>
                                                
                                                
                                               
                                                <div class="col-xl-12 col-lg-12">
                                                    <label for="fname">Full Name (as per AADHAR)<span>*</span></label>
                                                    <input type="text" id="fname" name="fname" placeholder="Full Name" required>
                                                </div>
                                                
                                                
                                                 <div class="col-xl-12 col-lg-12">
                                                    <label for="gender">Gender<span>*</span></label>
                                                    <div class="filter">
                                                         <select name="gender" id="gender" required>

                                                       
                                                            <option value="male">Male</option>
                                                             <option value="Female">Female</option>
                                                             
                                                            
                                                        </select>
                                                    </div>
                                                </div>               
                                                               
                                                               
                                                                           
                                                
                                                
                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="email">Email<span>*</span></label>
                                                    <input type="email" id="email" name="email" placeholder="Email" required>
                                                </div>

                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="email">Mobile Number<span>*</span></label>
                                                    <input type="tel" id="mobile" name="mobile" placeholder="Mobile Number" required>
                                                </div>

        

                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="cname">Training and Placement Officer Name (TPO) <span></span></label>
                                                    <input type="text" id="tpo" name="tpo" placeholder="Training and Placement Officer Name">
                                                </div>

                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="email">Training and Placement Officer's Email Address<span></span></label>
                                                    <input type="text" id="tpoemail" name="tpoemail" placeholder="TPO's Email">
                                                </div>
                                                
                                 <!--school-->
                                                 <div>
                                                    <h4>School</h4> 
                                                    <hr style="height:4px;background: black;">
                                                </div>
                                                
                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="10thresult">10th Class Percentage<span>*</span></label>
                                                    <input type="text" id="10thresult" name="10thresult" placeholder="10th Class Percentage" required>
                                                </div>

                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="diploma_rresult">12th/Diploma Percentage<span>*</span></label>
                                                    <input type="text" id="diploma_rresult" name="diploma_rresult" placeholder="12th/Diploma Percentage" required>
                                                </div>

                                <!--Collage-->
                                                 <div>
                                                   <h4>College</h4>
                                                    <hr style="height:4px;background: black;">
                                                </div>
                                                
                                                
                                                     
                                                        <div class="col-xl-3 col-lg-4" name="hidden-panel2" id="hidden-panel2">
                                                            <label for="select_graduation">Graduation Degree Courses<span></span></label>
                                                            <input type="text" id="select_graduation" name="select_graduation" placeholder="Graduation Degree Courses">
                                                        </div>   
                                                        
                                                    
                                                
                                                <div class="col-xl-3 col-lg-4">
                                                    <label for="graduation_branch">Graduation Branch<span></span></label>
                                                    <input type="text" id="graduation_branch" name="graduation_branch" placeholder="Graduation Degree Courses"required>
                                                </div>

                                                <div class="col-xl-3 col-lg-4">
                                                    <label for="Graduation_CGPA">Graduation CGPA/ Percentage</label>
                                                    <input type="text" id="Graduation_CGPA" name="Graduation_CGPA" placeholder="Graduation CGPA/ Percentage">
                                                </div>
                                                
                                                <div class="col-xl-3 col-lg-4">
                                                    <label for="year_of_graduation">Graduation Passout Year</label>
                                                    <input type="text" id="year_of_graduation" name="year_of_graduation" placeholder="Graduation Passout Year">
                                                </div>
                                                
                                 
                                                <div class="col-xl-3 col-lg-4">
                                                    <label for="select_post_graduation">Master Degree Courses<span></span></label>
                                                    <input type="text" id="select_post_graduation" name="select_post_graduation" placeholder="Master Degree Courses">
                                                </div>
                                                
                                                <div class="col-xl-3 col-lg-4">
                                                    <label for="post_graduation_branch">Master Degree Branch<span></span></label>
                                                    <input type="text" id="post_graduation_branch" name="post_graduation_branch" placeholder="Master Degree Courses">
                                                </div>
                                   
                                                
                                                <div class="col-xl-3 col-lg-4">
                                                    <label for="Post_CGPA">Post Graduation CGPA/ Percentage<span></span></label>
                                                    <input type="text" id="Post_CGPA" name="Post_CGPA" placeholder="Post Graduation CGPA/ Percentage">
                                                </div>
                                                
                                                <div class="col-xl-3 col-lg-4">
                                                    <label for="year_of_post_graduation">Master Passout Year</label>
                                                    <input type="text" id="year_of_post_graduation" name="year_of_post_graduation" placeholder="Master Passout Year">
                                                </div>
                                                
                             <!--project     -->
                                                <div>
                                                    <h4>Project</h4> 
                                                    <hr style="height:4px;background: black;">
                                                </div>
                                              
                                                 
                                                 
                                                 <div class="col-xl-6 col-lg-6">
                                                    <label for="F_project">Final Year project Title<span>*</span></label>
                                                    <input type="text" id="F_project" name="F_project" placeholder="Final Year project title" required>
                                                </div>
                                                
                                                 <div class="col-xl-6 col-lg-6">
                                                    <label for="F_technology">Final Year project Technology<span>*</span></label>
                                                    <input type="text" id="F_technology" name="F_technology" placeholder="Final Year project technology" required>
                                                </div>
                                                
                                                <div>
                                                    
                                                    <hr style="height:4px;background: black;">
                                                </div>
                                                

                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="country">Domain (1st preference)<span></span></label>
                                                     <input type="text" id="Post_CGPA" name="domain" placeholder="Domain">
                                                </div>
                                                
                                                <?php 
                                                if($cn==Redspark)
                                                {
                                                    ?>
                                                    
                                                     <div class="col-xl-3 col-lg-4">
                                                         
                                                               <label for="Skills">Skills<span>*</span></label>
                                                                 
                                                               <div class="filter">
                                                                <select name="skills" id="Skills">
                                                                       <option value="Php">PHP</option>
                                                                        <option value="Angular, ionic, Nodejs">Angular, ionic, Nodejs</option>
                                                                         <option value="ReactNative, Flutter">ReactNative, Flutter</option>
                                                                         <option value="Native iOS">Native iOS</option>
                                                                         <option value="Android">Android</option>
                                                                </select>
                                                                
                                                              </div>
                                                          
                                                        </div>
                                                        
                                                
                                                    
                                                 <?php   
                                                   
                                                }
                                                else
                                                {
                                                    ?>
                                                    
                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="Skills">Skills<span>*</span></label>
                                                     <input type="text" id="Skills" name="skills" placeholder="Skills" required>
                                                </div>
                                                    
                                                    <?php
                                                }
                                                
                                                
                                                ?>
                                                
                                               
                                                
                                                
                                                
                                                
                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="current_location">Current Location<span>*</span></label>
                                                    <input type="text" id="current_location" name="current_location" placeholder="Current location" required>
                                                </div>
                                                
                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="preferred_location">Preferred Location<span>*</span></label>
                                                    <input type="text" id="preferred_location" name="preferred_location" placeholder="preferred location" required>
                                                </div>
                                           
                                            
                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="city">Town / City<span>*</span></label>
                                                    <input type="text" id="city" name="city" placeholder="Town / City" required>
                                                </div>
                                           
                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="State">State<span>*</span></label>
                                                    <input type="text" id="State" name="State" placeholder="State" required>
                                                </div>
                                                    
                                                    
                                                 
                                                <div class="col-xl-12 col-lg-12">
                                                    <label for="fileToUpload">Upload Resume<span>*</span></label>    
                                                    <input type="file" id="fileToUpload" class="ct" name="fileToUpload" required>
                                                </div>


                                                <div class="text-right">
                                                 
													<button class="thm_btn thm_btn-black" value="submit" >Submit the application<i class="fal fa-long-arrow-right"></i></button>
												    
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- form end -->

        </main>



<?php include "footer.php" ?>
    </div>
    <!-- body wrap end -->
    

   
   
    <!-- jquery include -->
    
</body>
</html>