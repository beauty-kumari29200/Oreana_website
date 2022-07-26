<?php
 $name=$_GET["name"];
$id=$_GET["id"];
 
    include 'connection_moodle.php';

 if($mysqli)
    {
        $sql201 = "Select * from mdl_course WHERE format='topics' AND visible='1' AND category !='3' AND category !='5'";
         $sql = "Select * from mdl_course WHERE fullname='$name'";
    $sql0 = "Select * from mdl_course WHERE fullname=$name";

    $sql1 = "Select * from mdl_customfield_data WHERE instanceid=$id AND fieldid='1'"; 
    $sql2 = "Select * from mdl_customfield_data WHERE instanceid=$id AND fieldid='2'"; 
    $sql3 = "Select * from mdl_customfield_data WHERE instanceid=$id AND fieldid='3'";
         $sql4 = "Select * from mdl_customfield_data WHERE instanceid=$id AND fieldid='4'";
         $sql5 = "Select * from mdl_customfield_data WHERE instanceid=$id AND fieldid='5'";
    $sql6 = "Select * from mdl_customfield_data WHERE instanceid=$id AND fieldid='6'";
        $sql7 = "Select * from mdl_customfield_data WHERE instanceid=$id AND fieldid='7'";
    $sql8 = "Select * from mdl_customfield_data WHERE instanceid=$id AND fieldid='8'";
        $sql9 = "Select * from mdl_customfield_data WHERE instanceid=$id AND fieldid='9'";
    $sql10 = "Select * from mdl_customfield_data WHERE instanceid=$id AND fieldid='10'";
    $sql11 = "Select * from mdl_customfield_data WHERE instanceid=$id AND fieldid='11'";
    $sql12 = "Select * from mdl_customfield_data WHERE instanceid=$id AND fieldid='12'"; 
    $sql13 = "Select * from mdl_customfield_data WHERE instanceid=$id AND fieldid='13'";
    $sql14 = "Select * from mdl_customfield_data WHERE instanceid=$id AND fieldid='14'";
    } 

    $result = mysqli_query($mysqli, $sql);
     $result201 = mysqli_query($mysqli, $sql201);
    $result0 = mysqli_query($mysqli, $sql0);
    $result1 = mysqli_query($mysqli, $sql1);
    $result2 = mysqli_query($mysqli, $sql2);
    $result3 = mysqli_query($mysqli, $sql3);
    $result4 = mysqli_query($mysqli, $sql4);
    $result5 = mysqli_query($mysqli, $sql5);
    $result6 = mysqli_query($mysqli, $sql6);
    $result7 = mysqli_query($mysqli, $sql7);
    $result8 = mysqli_query($mysqli, $sql8);
    $result9 = mysqli_query($mysqli, $sql9);
    $result10 = mysqli_query($mysqli, $sql10);
    $result11 = mysqli_query($mysqli, $sql11);
    $result12 = mysqli_query($mysqli, $sql12);
    $result13 = mysqli_query($mysqli, $sql13);
    $result14 = mysqli_query($mysqli, $sql14);




?>
<?php include "navbar.php" ?>
<!--<script type="text/javascript">-->
<!--function SwapDivsWithClick(div1,div2)-->
<!--{-->
<!--   d1 = document.getElementById(div1);-->
<!--   d2 = document.getElementById(div2);-->
<!--   if( d2.style.display == "none" )-->
<!--   {-->
<!--      d1.style.display = "none";-->
<!--      d2.style.display = "block";-->
<!--   }-->
<!--   else-->
<!--   {-->
<!--      d1.style.display = "block";-->
<!--      d2.style.display = "none";-->
<!--   }-->
<!--}-->
<!--</script>-->


    <!-- body wrap start -->
    
        <main>
            <!-- page title start -->
          
                                <?php 
                               
                                while($row=mysqli_fetch_assoc($result))
                                {
                                         $fullname=$row['fullname'];
                                        //  $img=$row['img'];
                                         $video=$row['video'];
                                         $id=$row['id'];
                                         
                                         
                                         
                                        //  course img
                                         
                                      $sql22="SELECT * FROM `mdl_customfield_data` WHERE instanceid=$id";
                                      $result22 = mysqli_query($mysqli, $sql22);
                                      $row001=mysqli_fetch_assoc($result22);
                                      $contextid=$row001['contextid'];
                                      
								
								
				                     $sql33="SELECT * FROM `mdl_files` WHERE contextid=$contextid  AND filename!='.'";

                                     $result33 = mysqli_query($mysqli, $sql33);
                                    
                                    
                                    $row001=mysqli_fetch_assoc($result33);
                                    
                                    $file=$row001['filename'];
                                    $img="https://stage.moodle.orena.solutions/pluginfile.php/$contextid/course/overviewfiles/$file'width='200' height='300'";
                                    
                                    //  if($contextid && $file)
                                    // {
                                    //      $img="https://stage.moodle.orena.solutions/pluginfile.php/$contextid/course/overviewfiles/$file'width='200' height='300'";
                                    // }
                                    // else
                                    // {
                                    //     $img="https://png.pngtree.com/png-vector/20190120/ourlarge/pngtree-gallery-vector-icon-png-image_470660.jpg 'width='200' height='300' ";
                                    // }
                                    
                                    
                                   
						
								
                                }
                                 ?>
                                 
                                <!--                                 
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item">
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li class="">Course</li>
                                        <li class="breadcrumb-item active">Details</li>
                                    </ol>
                                </nav> -->
                           
            <!-- page title end -->

            <!-- course details start -->
            <section class="course_details_area pt-120 pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="course_dtls_left mb-30">
                                <div class="cdl_top mb-30">
                                    <div class="cd_thumb">
                                       <?php print "<img src='$img'>" ;?>
                                    </div>
                                    <div class="cd_content">
                                        <div class="meta">
                                            <div class="left ul_li">
                                                <ul class="rating_star ul_li">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div class="review">
                                                    <span> Reviews</span>
                                                </div>
                                            </div>
                                            <div class="right ul_li">
                                                <span class="ptice">
                                                    
                                                    <!--Training program:-->
                                                    
                                                    ₹ :
                                                    
                                                <?php       
                                                      while($row=mysqli_fetch_assoc($result6))
                                                            {                       
                                                             echo $row['value']; 
                                                            }

                                                     ?>
                                                </span>
                                                <a class="cd_btn" href="https://orena.solutions/new/course_enrol.php">Enroll Course</a>
                                            </div>
                                        </div>
                                        <h3 class="title"> 
                                        <?php
                                            echo $fullname;
                                            ?>⁣⁣</h3>
                                        <div class="bottom">
                                            <div class="left ul_li">
                                                <!--<div class="author">-->
                                                <!--    <img src="" alt="">-->
                                                <!--</div>-->
                                                <h4><span>
                                                <!--By :-->
                                                    </span>
                                                    
                                                <!--Stream    -->
                                                    <?php       
                                                       while($row=mysqli_fetch_assoc($result9))
                                                            {                       
                                                             echo $row['value']; 
                                                            }

                                                     ?>
                                                 <!--Stream    -->
                                                 
                                               </h4>
                                            </div>
                                            <div class="right ul_li">
                                                <span>Share :</span>
                                                <div class="cd_social">
                                                    
                                                    <!--<a href="#"><i class="fab fa-twitter"></i></a>-->
                                                    <!--<a href="#"><i class="fab fa-behance"></i></a>-->

                                                    
                                                    <a href="https://www.facebook.com/orena.solutions/"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="https://www.instagram.com/orena_solutions/"><i class="fab fa-instagram"></i></a>
                                                    <a href="https://www.linkedin.com/in/orena-solutions-7561521b4/"><i class="fab fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cdl_bottom">
                                    <ul class="nav nav-pills mb-15" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-home" type="button" role="tab"
                                                aria-controls="pills-home" aria-selected="true">Overview</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-profile" type="button" role="tab"
                                                aria-controls="pills-profile" aria-selected="false">Curriculum</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-contact" type="button" role="tab"
                                                aria-controls="pills-contact" aria-selected="false">Instructor</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-reviews-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-reviews" type="button" role="tab"
                                                aria-controls="pills-reviews" aria-selected="false">Reviews</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                            aria-labelledby="pills-home-tab">
                                            <div class="ov_text_wrap">
                                                
                                                <div class="container">
                                                <!--Overview-->
                                                <?php       
                                                   while($row=mysqli_fetch_assoc($result3))
                                                        {
                                                                                
                                                         echo $row['value']; 
                                                        }       
                                                        ?>
                                                
                                                </div>   
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                            aria-labelledby="pills-profile-tab">
                                            <div class="cc_wrap mt-20">
                                                <ul class="accordion_box clearfix">
                                                    <li class="accordion block active-block">
                                                        
                                                        <div class="container">
                                                        <!--Curriculum-->
                                                        <?php       
                                                           while($row=mysqli_fetch_assoc($result4))
                                                                {
                                                                                        
                                                                 echo $row['value']; 
                                                                }       
                                                                ?>
                                                        
                                                        </div>


                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                            aria-labelledby="pills-contact-tab">
                                            <div class="instructor_wrap">
                                                <div class="instructor_info ul_li">
                                                    <div class="instructor_img">
                                                        <!--<img src="asset/img/course/details/instructor.jpg" alt="">-->
                                                    </div>
                                                    <!--<div class="info">-->
                                                    <!--    <h3 class="title">Dr. Ekata Mehul</h3>-->
                                                    <!--    <div class="instructor_rating ul_li">-->
                                                    <!--        <ul class="rating_star ul_li">-->
                                                    <!--            <li><i class="fas fa-star"></i></li>-->
                                                    <!--            <li><i class="fas fa-star"></i></li>-->
                                                    <!--            <li><i class="fas fa-star"></i></li>-->
                                                    <!--            <li><i class="fal fa-star"></i></li>-->
                                                    <!--            <li><i class="fal fa-star"></i></li>-->
                                                    <!--        </ul>-->
                                                    <!--        <div class="review">-->
                                                    <!--            <span>4.9 Rating</span>-->
                                                    <!--        </div>-->
                                                    <!--    </div>-->
                                                    <!--    <div class="instructor_student ul_li">-->
                                                    <!--        <span>4 Course</span>-->
                                                    <!--        <span>223 Student</span>-->
                                                    <!--    </div>-->
                                                    <!--    <div class="instructor_btn mt-20">-->
                                                    <!--        <a href="#">view All Course<i-->
                                                    <!--                class="fal fa-long-arrow-right"></i></a>-->
                                                    <!--    </div>-->
                                                    <!--</div>-->
                                                </div>
                                                <div class="instructor_dtls mt-30">
                                                    <!--<p>Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do-->
                                                    <!--    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut-->
                                                    <!--    enim ad minim veniam, quis nostrud exercitation eyee. ullamco-->
                                                    <!--    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure-->
                                                    <!--    dolorrepr ehenderit in voluptate velit esse cillum dolore eu-->
                                                    <!--    fugiat nulla pariatur. Excepteur sint occaecat yeef cupidatat-->
                                                    <!--    non proident, sunt in culpa qui officia deserunt mollit anim id-->
                                                    <!--    est laborum. Sed ut perspiciatis unde omnis iste natus error sit-->
                                                    <!--    voluptatem</p>-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-reviews" role="tabpanel"
                                            aria-labelledby="pills-reviews-tab">
                                            <!--<div class="review_wrap">-->
                                            <!--    <div class="post_comment">-->
                                            <!--        <h3 class="comment_title">3 Reviews</h3>-->
                                            <!--        <ul class="comment_list mb-40">-->
                                            <!--            <li>-->
                                            <!--                <div class="comment_author">-->
                                            <!--                    <img src="asset/img/course/details/comment_01.png"-->
                                            <!--                        alt="">-->
                                            <!--                </div>-->
                                            <!--                <div class="comment_content">-->
                                            <!--                    <h6>Wasim Mia</h6>-->
                                            <!--                    <span class="date"><i class="fal fa-calendar-alt"></i>-->
                                            <!--                        20th Fabrury 2021</span>-->
                                            <!--                    <div class="cd_review_wrap ul_li">-->
                                            <!--                        <div class="cd_review">-->
                                            <!--                            <span><i class="fas fa-star"></i></span>-->
                                            <!--                            <span><i class="fas fa-star"></i></span>-->
                                            <!--                            <span><i class="fas fa-star"></i></span>-->
                                            <!--                            <span><i class="fas fa-star"></i></span>-->
                                            <!--                            <span><i class="fal fa-star"></i></span>-->
                                            <!--                        </div>-->
                                            <!--                        <span class="cd_review_rate">4.9</span>-->
                                            <!--                    </div>-->
                                            <!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing-->
                                            <!--                        elit, sed do eiusmod tempor incididunt ut labore et-->
                                            <!--                        dolore magna aliqua. Ut enim ad minim veniam, quis-->
                                            <!--                        nostrud exercitation ullamco</p>-->
                                            <!--                    <a class="reply" href="#"><i class="fas fa-reply"></i>-->
                                            <!--                        Reply</a>-->
                                            <!--                </div>-->
                                            <!--                <ul class="children">-->
                                            <!--                    <li>-->
                                            <!--                        <div class="comment_author">-->
                                            <!--                            <img src="asset/img/course/details/comment_02.png"-->
                                            <!--                                alt="">-->
                                            <!--                        </div>-->
                                            <!--                        <div class="comment_content">-->
                                            <!--                            <h6>Yalina De</h6>-->
                                            <!--                            <span class="date"><i-->
                                            <!--                                    class="fal fa-calendar-alt"></i> 20th-->
                                            <!--                                Fabrury 2021</span>-->
                                            <!--                            <p>Lorem ipsum dolor sit amet, consectetur-->
                                            <!--                                adipisicing elit, sed do eiusmod tempor-->
                                            <!--                                incididunt ut labore et dolore magna aliqua.-->
                                            <!--                                Ut enim ad minim veniam, quis nostrud-->
                                            <!--                                exercitation ullamco</p>-->
                                            <!--                            <a class="reply" href="#"><i-->
                                            <!--                                    class="fas fa-reply"></i> Reply</a>-->
                                            <!--                        </div>-->
                                            <!--                    </li>-->
                                            <!--                </ul>-->
                                            <!--            </li>-->
                                            <!--            <li>-->
                                            <!--                <div class="comment_author">-->
                                            <!--                    <img src="asset/img/course/details/comment_03.png"-->
                                            <!--                        alt="">-->
                                            <!--                </div>-->
                                            <!--                <div class="comment_content">-->
                                            <!--                    <h6>Rakibul Hasan</h6>-->
                                            <!--                    <span class="date"><i class="fal fa-calendar-alt"></i>-->
                                            <!--                        20th Fabrury 2021</span>-->
                                            <!--                    <div class="cd_review_wrap ul_li">-->
                                            <!--                        <div class="cd_review">-->
                                            <!--                            <span><i class="fas fa-star"></i></span>-->
                                            <!--                            <span><i class="fas fa-star"></i></span>-->
                                            <!--                            <span><i class="fas fa-star"></i></span>-->
                                            <!--                            <span><i class="fas fa-star"></i></span>-->
                                            <!--                            <span><i class="fal fa-star"></i></span>-->
                                            <!--                        </div>-->
                                            <!--                        <span class="cd_review_rate">4.9</span>-->
                                            <!--                    </div>-->
                                            <!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing-->
                                            <!--                        elit, sed do eiusmod tempor incididunt ut labore et-->
                                            <!--                        dolore magna aliqua. Ut enim ad minim veniam, quis-->
                                            <!--                        nostrud exercitation ullamco</p>-->
                                            <!--                    <a class="reply" href="#"><i class="fas fa-reply"></i>-->
                                            <!--                        Reply</a>-->
                                            <!--                </div>-->
                                            <!--            </li>-->
                                            <!--        </ul>-->
                                            <!--        <div class="from_wrapper comment_form">-->
                                            <!--            <h3 class="comment_title">Add a review</h3>-->
                                            <!--            <form action="#">-->
                                            <!--                <div class="row">-->
                                            <!--                    <div class="col-lg-6">-->
                                            <!--                        <input type="text" name="fname"-->
                                            <!--                            placeholder="Type your name...">-->
                                            <!--                    </div>-->
                                            <!--                    <div class="col-lg-6">-->
                                            <!--                        <input type="email" name="email"-->
                                            <!--                            placeholder="Type your mail...">-->
                                            <!--                    </div>-->
                                            <!--                    <div class="col-12">-->
                                            <!--                        <textarea name="message" id="message" cols="30"-->
                                            <!--                            rows="10"-->
                                            <!--                            placeholder="Type your comments..."></textarea>-->
                                            <!--                    </div>-->
                                            <!--                    <div class="col-12">-->
                                            <!--                        <div class="contact_btn text-center">-->
                                            <!--                            <a class="thm_btn" href="#">Submit<i class="fal fa-long-arrow-right"></i></a>-->
                                            <!--                        </div>-->
                                            <!--                    </div>-->
                                            <!--                </div>-->
                                            <!--            </form>-->
                                            <!--        </div>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="course_dtls_right">
                                <div class="course_widget mb-30">
                                    <div class="thumb_wrap pos-rel">
                                        <div class="thumb">
                                            <!--<img src="asset/img/course/details/course_thumb.jpg" alt="">-->
                                        </div>
                                         <!-- <a class="popup-video video_icon" href="https://www.youtube.com/watch?v=cRXm1p-CNyk"><i class="fal fa-play"></i></a> -->
                                        <!--<a class="popup-video video_icon" href="<?php echo $video ?>"><i class="fal fa-play"></i></a>-->
                                    </div>

                                    <div class="course_content" id="details" style="display: block;">
                                        <ul>
                                            <li>
                                                
                                                <!--Duration-->
                                                
                                                <span class="left">Duration :</span>
                                                <span>
                                                <?php       
                                                       while($row=mysqli_fetch_assoc($result1))
                                                            {
                                                                                    
                                                             echo $row['value']; 
                                                            }       
                                                        ?>
                                                   <!-- Duration      --></span>
                                            </li>
                                            <li>
                                                <span class="left">Lectures :</span>
                                                <!--<span>148</span>-->
                                            </li>
                                            <li>
                                                <span class="left">Eligibility :</span>
                                               
                                                <?php       
                                                       while($row=mysqli_fetch_assoc($result2))
                                                            {
                                                                                    
                                                             echo $row['value']; 
                                                            }       
                                                        ?>
                                               
                                               
                                            </li>
                                            <!--<li>-->
                                            <!--    <span class="left">Quizzers :</span>-->
                                                <!--<span>09</span>-->
                                            <!--</li>-->
                                            <li>
                                                <span class="left">Pass Pareentages :</span>
                                                <!--<span>80</span>-->
                                            </li>
                                            <li>
                                                <span class="left">Certificate :</span>
                                                <span>Yes</span>
                                            </li>
                                        </ul>
                                        <div class="course_btn text-center mt-35">
                                            <!-- <a class="thm_btn" href="javascript:SwapDivsWithClick('details','enroll')">Enroll Course <i class="fal fa-long-arrow-right"></i></a> -->
                                            <a class="thm_btn" href="https://orena.solutions/new/course_enrol.php">Enroll Course <i class="fal fa-long-arrow-right"> </i></a>
                                        </div>
                                    </div>
                                        <!--
                                     <div class="course_content" id="enroll" style="display:none"> 
                                        <div class="account_wrap"> 
                                            <form action="mail.php" method="post"> 
                                                <input type="hidden" name="course_name" value="" placeholder=""> 
                                               <input type="text" name="name"  placeholder="Your Name"> 
                                                <input type="email" name="email" id="email" placeholder="Your Email"> 
                                                <input type="text" name="mobail" placeholder="Your Mobile number"> 
                                                
                                                <button class="thm_btn text-center" value="submit">Start Learning<i class="fal fa-long-arrow-right"></i></button> 
                                            </form> 
                                        </div> 
                                  </div>
                                  -->
                                </div>
                                <div class="course_widget_wrap related_course mb-30">
                                    <h3>More Course :</h3>
                                                          <?php
                                                 while($row=mysqli_fetch_assoc($result201))
                                              
                                                  
                                                
                                {
                                                  $name_c=$row['fullname'];
                                                  $id_c=$row['id'];
                                                  $sql22="SELECT * FROM `mdl_customfield_data` WHERE instanceid=$id_c";
                                                  $result22 = mysqli_query($mysqli, $sql22);
                                                  $row001=mysqli_fetch_assoc($result22);
                                                  $contextid=$row001['contextid'];
                                                  
            								
            								
            				                     $sql33="SELECT * FROM `mdl_files` WHERE contextid=$contextid  AND filename!='.'";
            
                                                 $result33 = mysqli_query($mysqli, $sql33);
                                                
                                                
                                                $row001=mysqli_fetch_assoc($result33);
                                                
                                                $file=$row001['filename'];  
                                    
                                    
                                    
                                    
                                    
                                     if($contextid && $file)
                                    {
                                        $img201="https://stage.moodle.orena.solutions/pluginfile.php/$contextid/course/overviewfiles/$file";
                                    }
                                    else
                                    {
                                        $img201="https://png.pngtree.com/png-vector/20190120/ourlarge/pngtree-gallery-vector-icon-png-image_470660.jpg ";
                                    }
                                    
                                  ?>
                                    <ul class="course_widget">
                                        <li>
                                            <div class="thumb">
                                                <img src="<?php echo $img201;?>" alt="">
                                                
                                            </div>
                                            <div class="content">
                          
                                                <h6><a href="course_details.php?name=<?php echo $name_c; ?>&id=<?php echo $id_c; ?>"><?php echo $name_c;?></a></h6>
                                                <!--<span class="new">$65.00</span>-->
                                                <!--<span class="old">$85.00</span>-->
                                            </div>
                                        </li>
                                        <div></div>
                                    </ul>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- course details end -->

            <!-- bai start -->
<!--             <section class="bai_area bai_bootom_space">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="bai_wrap bai_left theme_bg">
                                <span># Become A Instructor</span>
                                <h3>Become a Instructor</h3>
                                <a class="thm_btn thm_btn-border" href="contact.html">apply now<i class="fal fa-long-arrow-right"></i></a>
                                <div class="bai_shape">
                                    <img src="asset/img/icon/bai_shape_01.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bai_wrap bai_right white_bg">
                                <span># Become A Partner</span>
                                <h3>Become a Partner</h3>
                                <a class="thm_btn thm_btn-2" href="contact.html">Contact us<i class="fal fa-long-arrow-right"></i></a>
                                <div class="bai_shape">
                                    <img src="asset/img/icon/bai_shape_02.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- bai end -->

        </main>
  <?php include "footer.php" ?>