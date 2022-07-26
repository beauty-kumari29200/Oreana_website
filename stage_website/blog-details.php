<?php
$title='Blog Details';
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
                                           <h1 style="margin-bottom: 10px;">Artificial intelligence (AI)</h1><br>
                                           
                                            <span class="catetemp-author">
                                            <span><img src="asset/img/course/c_author.png" alt="">  </span>  by Author Name </span><br><br>

                                        <div class="article">
                                           <p>
                                            An interdisciplinary branch of science, artificial intelligence is focused on the development of machines with the capability of performing tasks through Human intelligence. It refers to the process of simulation of human intelligence in machines. The systems are specially trained to mimic human behaviour and action and programmed accordingly. Learning, reasoning, and perception are the goals of artificial intelligence. AI is used in several industries like; healthcare, finance, etc. have been efficiently applying AI.

                                            Exploring the different types of AI will provide a clear view of the existing types and the challenges associated with the AI in the future types.
                                          </p>
                                          <h3>How is AI classified?</h3> 
                                           <p>
                                               The main purpose of artificial intelligence is to mimic the human intelligence process. Therefore the criteria used for the classification of AI are the degree to which an AI system can replicate human capabilities. Therefore, the models are considered to be the more evolved types of AI if they can perform more human-like functions with similar efficiency. On the other hand, those types of AI which have limited performance and functionality, are considered a less evolved type of AI.

                                               Mostly artificial intelligence can be broadly divided into two categories: based on capabilities and based on functions.
                                          </p>
                                          <h3>Conclusion</h3> 
                                           <p>
                                            The main assumption behind the development of different types of AI is that human intelligence can be represented in the form of symbolic operations which could be programmed by a digital computer. AI examples have shown to what extent the models of AI can perceive the real world. With the further development of hypothetical concepts of AI models, there might be a need for more developed machines to support the complexity of human thought.
                                          </p>
                                          <div class="post_comment">
                                            <h3 class="comment_title">Comments</h3>
                                            <ul class="comment_list mb-40">
                                                <li>
                                                    <div class="comment_author">
                                                        <img src="asset/img/course/details/comment_01.png"
                                                            alt="">
                                                    </div>
                                                    <div class="comment_content">
                                                        <h6>Wasim Mia</h6>
                                                        <span class="date"><i class="fal fa-calendar-alt"></i>
                                                            20th Fabrury 2021</span>
                                                        <div class="cd_review_wrap ul_li">
                                                            <div class="cd_review">
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fal fa-star"></i></span>
                                                            </div>
                                                            <span class="cd_review_rate">4.9</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                            elit, sed do eiusmod tempor incididunt ut labore et
                                                            dolore magna aliqua. Ut enim ad minim veniam, quis
                                                            nostrud exercitation ullamco</p>
                                                        <a class="reply" href="#"><i class="fas fa-reply"></i>
                                                            Reply</a>
                                                    </div>
                                                    <ul class="children">
                                                        <li>
                                                            <div class="comment_author">
                                                                <img src="asset/img/course/details/comment_02.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="comment_content">
                                                                <h6>Yalina De</h6>
                                                                <span class="date"><i
                                                                        class="fal fa-calendar-alt"></i> 20th
                                                                    Fabrury 2021</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur
                                                                    adipisicing elit, sed do eiusmod tempor
                                                                    incididunt ut labore et dolore magna aliqua.
                                                                    Ut enim ad minim veniam, quis nostrud
                                                                    exercitation ullamco</p>
                                                                <a class="reply" href="#"><i
                                                                        class="fas fa-reply"></i> Reply</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="comment_author">
                                                        <img src="asset/img/course/details/comment_03.png"
                                                            alt="">
                                                    </div>
                                                    <div class="comment_content">
                                                        <h6>Rakibul Hasan</h6>
                                                        <span class="date"><i class="fal fa-calendar-alt"></i>
                                                            20th Fabrury 2021</span>
                                                        <div class="cd_review_wrap ul_li">
                                                            <div class="cd_review">
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fal fa-star"></i></span>
                                                            </div>
                                                            <span class="cd_review_rate">4.9</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                            elit, sed do eiusmod tempor incididunt ut labore et
                                                            dolore magna aliqua. Ut enim ad minim veniam, quis
                                                            nostrud exercitation ullamco</p>
                                                        <a class="reply" href="#"><i class="fas fa-reply"></i>
                                                            Reply</a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="from_wrapper comment_form">
                                                <h3 class="comment_title">Add a Comment</h3>
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <input type="text" name="fname"
                                                                placeholder="Type your name...">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="email" name="email"
                                                                placeholder="Type your mail...">
                                                        </div>
                                                        <div class="col-12">
                                                            <textarea name="message" id="message" cols="30"
                                                                rows="10"
                                                                placeholder="Type your comments..."></textarea>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="contact_btn text-center">
                                                                <a class="thm_btn" href="#">Submit<i class="fal fa-long-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                                
                            
                        <div class="col-lg-4">
                            <div class="course_dtls_right">
                                <div class="course_widget_wrap related_course mb-30">
                                    <h3>More Related Blogs :</h3>
                                    <ul class="course_widget">
                                        <li>
                                            <div class="thumb">
                                                <img src="asset/img/course/details/c_01.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <h6><a href="blog-details.html">Artificial intelligence (AI)</a></h6>
                                                <span class="">by Author Name</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <img src="asset/img/course/details/c_02.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <h6><a href="blog-details.html">Artificial intelligence (AI)</a></h6>
                                                <span class="">by Author Name</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <img src="asset/img/course/details/c_03.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <h6><a href="blog-details.html">Artificial intelligence (AI)</a></h6>
                                                <span class="">by Author Name</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <img src="asset/img/course/details/c_04.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <h6><a href="blog-details.html">Artificial intelligence (AI)</a></h6>
                                                <span class="">by Author Name</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                
                        
                                </div>
                            </div>
                        </div>
                        </div>        
            </section>
            <!-- webinar details end -->

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
            <!-- bai end -->'
?>

<?php include 'template.php' ?>