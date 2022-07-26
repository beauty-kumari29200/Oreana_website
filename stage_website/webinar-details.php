<?php

$title='Webinar details';
$content='
<script type="text/javascript">
    function SwapDivsWithClick(div1,div2)
    {
       d1 = document.getElementById(div1);
       d2 = document.getElementById(div2);
       if( d2.style.display == "none" )
       {
          d1.style.display = "none";
          d2.style.display = "block";
       }
       else
       {
          d1.style.display = "block";
          d2.style.display = "none";
       }
    }
</script>

            <!-- webinar details start -->
            <section class="course_details_area pt-120 pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="course_dtls_left mb-30">
                                <div class="cdl_top mb-30">
                                    <div class="cd_thumb">
                                       <div>
                                           <h2>Overview</h2>
                                           <p>
                                               <strong name="titleLabel">Title:</strong> 
                                               <span name="title">Artificial intelligence (AI) Webinar</span>
                                          </p>
                                           <p>
                                               <strong name="dateLabel">Date:</strong> 
                                               <span name="date">Tuesday, July 06, 2021</span>
                                          </p>
                                          <p>
                                              <strong name="timeLabel">Time:</strong> 
                                              <span name="time">04:30 PM</span>
                                          </p>
                                          <p>
                                            <strong name="durationLabel">Duration:</strong> 
                                            <span name="duration">1 hour, 30 minutes</span>
                                        </p>
                                       </div>
                                       <div>
                                           <h2>Description</h2>
                                           <span class="summary" name="summary">
                                           
                                           <p>There are many different definitions as to what constitutes a system as artificially intelligent, but simply put AI is the science of training systems to emulate human tasks through learning and automation.</p>

                                           <p>For organisations wishing to implement AI, what tangible use cases should you focus on to deliver business value? This webinar provides real world examples of AI in action, dispelling the myths and focusing on the value it can drive.</p>
                                           <h2>Topics to be Covered</h2>
                                           <p>
                                           <ul>
                                               <li><i class="fal fa-check-circle"></i> Real world AI applications generating business value</li>
                                               <li><i class="fal fa-check-circle"></i> Cross sector practical applications of AI</li>
                                               <li><i class="fal fa-check-circle"></i> Example of an end-to-end automated AI decision capability</li>
                                           </ul>
                                        </p>
                                        </span>
                                       </div>
                                       <div>
                                           <h2>Presenters</h2>
                                           <div class="instructor_wrap">
                                            <div class="instructor_info ul_li">
                                                <div class="instructor_img">
                                                    <img src="asset/img/course/details/instructor.jpg" alt="">
                                                </div>
                                                <div class="info">
                                                    <h3 class="title">Dr. Ekata Mehul</h3>
                                                    <div class="instructor_rating ul_li">
                                                        <ul class="rating_star ul_li">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fal fa-star"></i></li>
                                                            <li><i class="fal fa-star"></i></li>
                                                        </ul>
                                                        <div class="review">
                                                            <span>4.9 Rating</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="instructor_dtls mt-30">
                                                <p>Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                    enim ad minim veniam, quis nostrud exercitation eyee. ullamco
                                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                    dolorrepr ehenderit in voluptate velit esse cillum dolore eu
                                                    fugiat nulla pariatur. Excepteur sint occaecat yeef cupidatat
                                                    non proident, sunt in culpa qui officia deserunt mollit anim id
                                                    est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                                                    voluptatem</p>
                                            </div>
                                        </div>
                                       </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                            
                        <div class="col-lg-4">
                            <div class="course_dtls_right">
                                <div class="course_widget mb-30">
                                    <div class="thumb_wrap pos-rel">
                                        <div class="registration-section section">
                                            <div class="header-container">
                                                <div><h2>Register Now</h2></div>
                                                <div class="login-link-container">
                                                    <a class="already-registered" href="#" tabindex="-1">
                                                        <div tabindex="0">
                                                            Already Registered?
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="account_wrap" >
                                                    <form action="#">
                                                        <br>
                                                        <input type="text" placeholder="Your First Name">
                                                        <input type="text" placeholder="Your Last Name">
                                                        <input type="email" placeholder="Your Email">
                                                        <input type="text" placeholder="Your Mobile number">
                                                    </form>
                                                    <a class="thm_btn text-center" href="#">Register Now<i class="fal fa-long-arrow-right"></i></a>
                                                </div>
                                            </div>
                                                
                                            </div>
                                        </div>


                                </div>
                                
                        
                                </div>
                            </div>
                        </div>
                        </div>        
            </section>
            <!-- webinar details end -->'
?>

<?php include 'template.php' ?>