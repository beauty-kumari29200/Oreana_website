<!doctype html>
<html lang="zxx">
<?php include "navbar.php" ?>
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

<body>
   
        <main>
             <!--page title start -->
            <section class="page_title_area" data-overlay="6" data-background="asset/img/bg/page_title_bg.jpg">
                <div class="containe">
                    <div class="row">
                        <div class="col-l2">
                            <div class="page_title text-center">
                                <h2>Candidate Registration Form </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page title end -->

            <!-- form start -->
            <section class="checkout_area pt-120 pb-120" >
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="checkout_wrap">
                                <div class="radio_wrap">
                                    <h3></h3>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <form class="form_wrap" method="POST" action="form_new.php" enctype="multipart/form-data">
                                              <div class="row">     
                                                <div>
                                                   <h4>Personal</h4>
                                                    <hr style="height:4px;background: black;">
                                                </div>
                                               <div class="row">
                                                 <div class="col-xl-12 col-lg-12">
                                                    <label for="email">Email <span style="color:red;"><b>*</b></span></label>
                                                    <input type="email" id="email" name="email" placeholder="Email" onkeyup="GetDetail(this.value)" value="" required>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xl-12 col-lg-12">
                                                    <label for="select_graduation">Organization you want to apply for<span>*</span></label>
                                                    <div class="filter">
                                                         <select name="company_name" id="company_name" required>
                                                          <option value="<?php echo $_GET["cname"];?>"><?php echo $_GET["cname"];?></option> 
                                                          
                                                           
                                                           
                                                        </select>
                                                    </div>
                                                    
                                                </div>

                                                
                                               
   

                                                <div class="col-xl-12 col-lg-12" >
                                                    <label for="cname">College/Institute Name<span style="color:red;"><b>*</b></span></label>
                                                    <input type="text" id="collegename" name="collegename" placeholder="College/Institute Name" required>
                                                </div>
                                                
                                                <!--div class="col-xl-12 col-lg-12" name="batch" id="batch">
                                                    
                                                       <label for="batch">Batch<span>*</span></label>
                                                       
                                                       
                                                       <div class="filter">
                                                        <select name="batch" id="batch" required>
                                                               <option value="10AM TO 12:30PM">10AM TO 12:30PM</option>
                                                                <option value="3PM TO 5:30PM">3PM TO 5:30PM</option>
                                                        </select>
                                                        
                                                        
                                                      </div>
                                                  
                                                  
                                                </div>
                                               
                                                
                                                <div class="col-xl-12 col-lg-12" name="Training" id="Training">
                                                    
                                                       <label for="Training">Training<span>*</span></label>
                                                       
                                                       
                                                       <div class="filter">
                                                        <select name="Training" id="Training" required>
                                                        
                                                                <option value="Offline">Offline</option>
                                                        </select>
                                                        
                                                        
                                                      </div>
                                                  
                                                  
                                                </div-->
                                               
                                                <div class="col-xl-12 col-lg-12">
                                                    <label for="fname">Full Name<span style="color:red;"><b>*</b></span></label>
                                                    <input type="text" id="fname" name="fname" placeholder="Full Name" title="Alphabets only" pattern="[A-Za-z- -]+" value="" required>
                                                </div>
                                               
                                                <!--<div class="form-row">-->
                                                 <div class="col-xl-6 col-lg-6">
                                                    <label for="gender">Gender<span style="color:red;"><b>*</b></span></label>
                                                    <div class="filter">
                                                         <select name="gender" id="gender" required>
                                                         <!--<option value="">Select</option>    -->
                                                         
                                                            <option value="Select">Select</option>                            
                                                            <option value="Male">Male</option>
                                                             <option value="Female">Female</option>
                                                             <option value="Others">Others</option>
                                                         </select>
                                                    </div>
                                                </div> 

                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="email">Mobile Number<span style="color:red;"><b>*</b></span></label>
                                                    <input type="tel" id="contactnumber" name="contactnumber" placeholder="Mobile Number" pattern="[0-9]{10}" value="" title="10 Numerical values only"  required>
                                                </div>
                                              
        

                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="cname">Training and Placement Officer Name (TPO) <span></span></label>
                                                    <input type="text" id="tponame" name="tponame" placeholder="TPO's Name">
                                                </div>

                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="email">Training and Placement Officer's Email Address<span></span></label>
                                                    <input type="email" id="tpoemail" name="tpoemail" placeholder="TPO's Email">
                                                </div>
                                                
                                 <!--school-->
                                                 <div>
                                                    <h4>School</h4> 
                                                    <hr style="height:4px;background: black;">
                                                </div>
                                                
                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="10thresult">10th Percentage<span style="color:red;"><b>*</b></span></label>
                                                    <input type="text" id="percent1" name="percent1" placeholder="10th Class Percentage" required>
                                                </div>

                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="diploma_rresult">12th/Diploma Percentage<span style="color:red;"><b>*</b></span></label>
                                                    <input type="text" id="percent2" name="percent2" placeholder="12th/Diploma Percentage" required>
                                                </div>

                                <!--College-->
                                                 <div>
                                                   <h4>College</h4>
                                                    <hr style="height:4px;background: black;">
                                                </div>
                                                
                                                
                                                        <!--div class="col-xl-3 col-lg-4" name="hidden-panel1" id="hidden-panel1">
                                                         
                                                               <label for="Graduation">Graduation Degree Courses<span>*</span></label>
                                                                 
                                                               <div class="filter">
                                                                <select name="select_graduation" id="select_graduation" required>
                                                                       <option value="EC">EC</option>
                                                                        <option value="IT">IT</option>
                                                                         <option value="EE">EE</option>
                                                                          <option value="IC">IC</option>
                                                                        <option value="CE">CE</option>  
                                                                </select>
                                                                
                                                              </div>
                                                          
                                                        </div>
                                                        
                                                        <div class="col-xl-3 col-lg-4" name="hidden-panel3" id="hidden-panel3">
                                                         
                                                               <label for="Graduation">Graduation Degree Courses<span>*</span></label>
                                                                 
                                                               <div class="filter">
                                                                <select name="select_graduation" id="select_graduation" required>
                                                                       <option value="Electrical">Electrical</option>
                                                                        <option value="Electronics">Electronics</option>
                                                                         <option value="IC">IC</option>
                                                                </select>
                                                                
                                                              </div>
                                                          
                                                        </div-->
                                                        
                                                        
                                                        
                                                  
                                                    
                                                        <div class="col-xl-6 col-lg-6">
                                                            <label for="select_graduation">Graduation Degree(e.g. B.Tech,B.E,...)<span style="color:red;"><b>*</b></span></label>
                                                            <input type="text" id="g_degree" name="g_degree" placeholder="Graduation Degree">
                                                        </div>   

                                                        <div class="col-xl-6 col-lg-6">
                                                    <label for="graduation_branch">Graduation Branch(e.g. IT, CE, EC, MECH,...)<span style="color:red;"><b>*</b></span></label>
                                                    <input type="text" id="g_branch" name="g_branch" placeholder="Graduation Branch" required>
                                                         </div>
                                                    

                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="Graduation_CGPA">Graduation CGPA/Percentage<span style="color:red;"><b>*</b></span></label>
                                                    <input type="text" id="g_cgpa" name="g_cgpa" placeholder="Graduation CGPA/Percentage" required>
                                                </div>
                                                
                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="year_of_graduation">Graduation Passout Year<span style="color:red;"><b>*</b></span></label>
                                                    <input type="text" id="g_year" name="g_year" placeholder="Graduation Passout Year" required>
                                                </div>
                                                
                                 
                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="select_post_graduation">Master Degree(e.g. M.Tech,M.E,...)<span></span></label>
                                                    <input type="text" id="m_degree" name="m_degree" placeholder="Master Degree">
                                                </div>
                                                
                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="post_graduation_branch">Master Degree Branch(e.g. IT, CE, EC, MECH,...)<span></span></label>
                                                    <input type="text" id="m_branch" name="m_branch" placeholder="Master Degree Branch">
                                                </div>
                                   
                                                
                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="Post_CGPA">Post Graduation CGPA/ Percentage<span></span></label>
                                                    <input type="text" id="m_cgpa" name="m_cgpa" placeholder="Post Graduation CGPA/ Percentage">
                                                </div>
                                                
                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="year_of_post_graduation">Master Passout Year</label>
                                                    <input type="text" id="m_year" name="m_year" placeholder="Master Passout Year">
                                                </div>
                                                
                             <!--project     -->
                                                <div>
                                                    <h4>Project</h4> 
                                                    <hr style="height:4px;background: black;">
                                                </div>
                                              
                                                 
                                                 
                                                 <div class="col-xl-6 col-lg-6">
                                                    <label for="F_project">Final Year project Title<span style="color:red;"><b>*</b></span></label>
                                                    <input type="text" id="project_title" name="project_title" placeholder="Final Year project title" required>
                                                </div>
                                                
                                                 <div class="col-xl-6 col-lg-6">
                                                    <label for="F_technology">Final Year project Technology<span style="color:red;"><b>*</b></span></label>
                                                    <input type="text" id="project_technology" name="project_technology" placeholder="Final Year project technology" required>
                                                </div>
                                                
                                                <div>
                                                <h4>Other details</h4> 
                                                    <hr style="height:4px;background: black;">
                                                </div>
                                                

                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="country">Domain (1st preference)<span></span></label>
                                                     <input type="text" id="domain" name="domain" placeholder="Domain">
                                                </div>
                                                
                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="Skills">Skills<span style="color:red;"><b>*</b></span></label>
                                                     <input type="text" id="skills" name="skills" placeholder="Skills" required>
                                                </div>
                                                
                                                
                                                
                                                
                                                <!--div class="col-xl-6 col-lg-6">
                                                    <label for="current_location">Current Location<span style="color:red;"><b>*</b></span></label>
                                                    <input type="text" id="current_location" name="current_location" placeholder="Current location" required>
                                                </div-->
                                                
                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="preferred_location">Preferred Location<span style="color:red;"><b>*</b></span></label>
                                                    <input type="text" id="p_location" name="p_location" placeholder="Preferred Location" required>
                                                </div>
                                           
                                            
                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="city">Current Town/City<span style="color:red;"><b>*</b></span></label>
                                                    <input type="text" id="city" name="city" placeholder="Town/City" required>
                                                </div>
                                           
                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="State">State<span style="color:red;"><b>*</b></span></label>
                                                    <input type="text" id="st_ate" name="st_ate" placeholder="State" required>
                                                </div>
                                                    
                                                    
                                                 
                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="fileToUpload">Upload Resume(Name of the document should be of your name)<span style="color:red;"><b>*</b></span></label>   
                                                    <input type="file" id="fileToUpload" class="ct" name="fileToUpload" accept="application/pdf,application/vnd.ms-excel" required>
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





        <!-- footer start -->
<!--        <footer class="footer_area footer_bg footer_space">-->
<!--            <div class="container">-->
<!--                <div class="subscribe_wrap">-->
<!--                    <div class="row">-->
<!--                        <div class="col-lg-7 col-md-6">-->
<!--                            <div class="sub_text">-->
<!--                                <h3>Sign up Newsletter</h3>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-5 col-md-6">-->
<!--                            <form class="sub_from" action="#">-->
<!--                                <input type="text" placeholder="Enter Your Mail">-->
<!--                                <button class="thm_btn">Subscribe</button>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="footer_main">-->
<!--                    <div class="row">-->
<!--                        <div class="col-lg-4 col-md-6">-->
<!--                            <div class="footer_widget">-->
<!--                                <h3>About Us</h3>-->
<!--                                <div class="about_text">-->
<!--                                    <p>We the team of Orena Solution are passionate about trying to bridge the gap between the academics and the industry. We are a visionary ICT company, looking to rejuvenate the employability levels of the Indian workforce. Orena Solution comprises of members from fortune 500 companies having vast experience in ICT training, online and offline campuses and executive training through various company as well as Academic campuses</p>-->
<!--                                </div>-->
<!--                                <div class="social_icon mt-45">-->
<!--                                    <a href="https://www.facebook.com/orena.solutions/"><i class="fab fa-facebook-f"></i></a>-->
<!--                                    <a href="https://www.instagram.com/orena_solutions/"><i class="fab fa-instagram"></i></a>-->
<!--                                    <a href="https://www.linkedin.com/in/orena-solutions-7561521b4/"><i class="fab fa-linkedin"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-2 col-md-6">-->
<!--                            <div class="footer_widget footer_link-left">-->
<!--                                <h3>Categories</h3>-->
<!--                                <ul class="footer_link">-->
<!--                                    <li><a href="#">All Courses</a></li>-->
<!--                                    <li><a href="#">Design Courses</a></li>-->
<!--                                    <li><a href="#">Branding Design</a></li>-->
<!--                                    <li><a href="#">Business</a></li>-->
<!--                                    <li><a href="#">Architecture</a></li>-->
<!--                                    <li><a href="#">Digital Branding</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-3 col-md-6">-->
<!--                            <div class="footer_widget footer_link-right">-->
<!--                                <h3>Support</h3>-->
<!--                                <ul class="footer_link">-->
<!--                                    <li><a href="#">Contact Support</a></li>-->
<!--                                    <li><a href="#">System Requermnet</a></li>-->
<!--                                    <li><a href="#">Site Feedback</a></li>-->
<!--                                    <li><a href="#">Register Activation Key</a></li>-->
<!--                                    <li><a href="#">24/7 Service</a></li>-->
<!--                                    <li><a href="#">System Requerment</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-3 col-md-6">-->
<!--                            <div class="footer_widget footer_right_text">-->
<!--                                <h3>Get In Touch</h3>-->
<!--                                <ul>-->
<!--                                    <li>-->
<!--                                        <p>401, 4th Floor, Urban One Complex, Near Panch-Mukhi Hanuman Temple, Vasna-Bhayli Road, Vadodara, Gujarat, India - 391410.</p>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <p>+91 98243 47721</p>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <p>contactus@orena.solutions</p>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                 <div class="footer_bottom">
<!--                    <div class="left f-left ul_li">-->
<!--                        <div class="logo">-->
<!--                            <a href="index.html"><img src="asset/img/logo/logo_white.png" alt=""></a>-->
<!--                        </div>-->
<!--                        <ul class="info ul_li">-->
<!--                            <li>info@webmail.com</li>-->
<!--                            <li> 24/7</li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="right f-right">-->
<!--                        <a class="thm_btn thm_btn-border" href="account.html">Login<i class="fal fa-key"></i></a>-->
<!--                        <a class="thm_btn" href="account.html">Sign Up<i class="fal fa-long-arrow-right"></i></a>-->
<!--                    </div>-->
<!--                </div> -->
<!--            </div>-->
<!--        </footer>-->
        <!-- footer end -->

<!--    </div>-->
    <!-- body wrap end -->
    

   
   
    <!-- jquery include -->
<!--    <script src="asset/js/jquery-3.5.1.min.js"></script>-->
<!--    <script src="asset/js/bootstrap.bundle.min.js"></script>-->
<!--    <script src="asset/js/owl.carousel.min.js"></script>-->
<!--    <script src="asset/js/metisMenu.min.js"></script>-->
<!--    <script src="asset/js/wow.min.js"></script>-->
<!--    <script src="asset/js/jquery.nice-select.min.js"></script>-->
<!--    <script src="asset/js/jquery-ui.js"></script>-->
<!--    <script src="asset/js/isotope.pkgd.min.js"></script>-->
<!--    <script src="asset/js/imagesloaded.pkgd.min.js"></script>-->
<!--    <script src="asset/js/jquery.magnific-popup.min.js"></script>-->
<!--    <script src="asset/js/main.js"></script>-->


    
    <script>

              // onkeyup event will occur when the user
              // release the key and calls the function
              // assigned to this event
              function GetDetail(str) {
                if (str.length == 0) {
                  //document.getElementById("workemail").value = "";
                  //document.getElementById("expertname").value = "";
                  document.getElementById("email").value = "";
                  return;
                }
                else {
          
                  // Creates a new XMLHttpRequest object
                  var xmlhttp = new XMLHttpRequest();
                  xmlhttp.onreadystatechange = function () {
          
                    // Defines a function to be called when
                    // the readyState property changes
                    if (this.readyState == 4 &&
                        this.status == 200) {
                      
                      // Typical action to be performed
                      // when the document is ready
                      var myObj = JSON.parse(this.responseText);
          
                      // Returns the response data as a
                      // string and store this array in
                      // a variable assign the value
                      // received to workemail input field
                      
                      document.getElementById("collegename").value = myObj[0];
                      
                      // Assign the value received to
                      // expertname input field
                        document.getElementById("fname").value = myObj[1];
                        document.getElementById("gender").value = myObj[2];
                        document.getElementById("contactnumber").value = myObj[3];
                        document.getElementById("tponame").value = myObj[4];
                        document.getElementById("tpoemail").value = myObj[5];
                       // document.getElementById("country").value = myObj[5];
                        //document.getElementById("st_ate").value = myObj[6];
                        //document.getElementById("city").value = myObj[7];
                        document.getElementById("percent1").value = myObj[6];
                        document.getElementById("percent2").value = myObj[7];
                        document.getElementById("g_degree").value = myObj[8];
                        document.getElementById("g_branch").value = myObj[9];
                        document.getElementById("g_cgpa").value = myObj[10];
                        document.getElementById("g_year").value = myObj[11];
                        document.getElementById("m_degree").value = myObj[12];
                        document.getElementById("m_branch").value = myObj[13];
                        document.getElementById("m_cgpa").value = myObj[14];
                        document.getElementById("m_year").value = myObj[15];
                        document.getElementById("project_title").value = myObj[16];
                        document.getElementById("project_technology").value = myObj[17];
                        document.getElementById("domain").value = myObj[18];
                        document.getElementById("skills").value = myObj[19];
                        document.getElementById("p_location").value = myObj[20];
                        document.getElementById("city").value = myObj[21];
                        document.getElementById("st_ate").value = myObj[22]; 
                        document.getElementById("fileToUpload").value = myObj[23];   
                            


                    }
                  };
          
                  // xhttp.open("GET", "filename", true);
                  xmlhttp.open("GET", "regis.php?email=" + str, true);
                  
                  // Sends the request to the server
                  xmlhttp.send();
                }
              }
              
              
            </script>
            
           
</body>
<?php include "footer.php" ?>
</html>