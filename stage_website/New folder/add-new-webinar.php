<?php
$title='Add new Webinar';
$content='
<link rel="stylesheet" href="asset/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

                        <!--slideshow start-->
                        <section class="carousel">
                            <div class="container">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                          
                                  <!-- Wrapper for slides -->
                                  <div class="carousel-inner">
                                    <div class="item active">
                                      <div class="info">
                                          <p>Computer Science</p>
                                          <h5>Artificial intelligence (AI) is an emerging component of computer science, which tries to make computers more intelligent.</h5>
                                      </div>
                                      <div class="image">
                                          <img src="asset/img/webinar/1.jpg" alt="" style="width:100%; height: 300px;">
                                      </div>
                                      <div class="link">
                                          <p>Join us, the webinar series celebrating AI’s transformation to make computers more intelligent. View original art and hear from leading Orena clients. Watch webinar live or on demand.</p>
                                          <a href="webinar-details.html">Register now for the webinar <i class="fal fa-long-arrow-right" class="arrow"></i></a>
                                      </div>
                                      </div>
                                
                                    <div class="item">
                                      <div class="info">
                                        <p>Computer Science</p>
                                        <h5>Artificial intelligence (AI) is an emerging component of computer science, which tries to make computers more intelligent.</h5>
                                    </div>
                                    <div class="image">
                                        <img src="asset/img/webinar/1.jpg" alt="" style="width:100%; height: 300px;">
                                    </div>
                                    <div class="link">
                                        <p>Join us, the webinar series celebrating AI’s transformation to make computers more intelligent. View original art and hear from leading Orena clients. Watch webinar live or on demand.</p>
                                        <a href="webinar-details.html">Register now for the webinar <i class="fal fa-long-arrow-right" class="arrow"></i></a>
                                    </div>
                                </div>
            
                                    <div class="item">
                                    <div class="info">
                                        <p>Computer Science</p>
                                        <h5>Artificial intelligence (AI) is an emerging component of computer science, which tries to make computers more intelligent.</h5>
                                    </div>
                                    <div class="image">
                                        <img src="asset/img/webinar/1.jpg" alt="" style="width:100%; height: 300px;">
                                    </div>
                                    <div class="link">
                                        <p>Join us, the webinar series celebrating AI’s transformation to make computers more intelligent. View original art and hear from leading Orena clients. Watch webinar live or on demand.</p>
                                        <a href="webinar-details.html">Register now for the webinar <i class="fal fa-long-arrow-right" class="arrow"></i></a>
                                    </div>
                                </div>
                                  </div>
                              
                                  <!-- Left and right controls -->
                                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
            
                                  
                                <!-- Indicators -->
                                <ol class="carousel-indicators" style="text-align: center;">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active" class="dot"></li>
                                    <li data-target="#myCarousel" data-slide-to="1" class="dot"></li>
                                    <li data-target="#myCarousel" data-slide-to="2" class="dot"></li>
                                </ol>
                                  
                                </div>
                                </div>
                        </section>
                        <!--slideshow end-->

            <!-- webinars start -->
            <section class="courses_area pt-50 pb-120">
                <div class="sec">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="masonry_active mb-40">
                                <div class="row">
                                <div class="l1"><h3 style="padding-top: 20px;">Webinars</h3></div>
                                <div class="seaa">
                                    <form>
                                    <input type="text" placeholder="Search.." name="search2" class="search">
                                    <button type="submit" style="margin: 0;" class="bn"><i class="fa fa-search"></i></button>
                                    <button type="reset">Reset</button>
                                    <button onclick="window.location.href=`add-new-webinar-details.php`"><i class="fa fa-plus"></i> Add New Webinar</button>
                            </form></div>
                        </div>
                        <div class="row">
                         <div class="l1"><label for="category">Category </label></div>
                         <div class="l2"><label for="sort by">Sort by </label></div>
                        </div>
                        <div class="l1">
                            <select name="category" id="category">
                                <option value="all" class="active" data-filter="*">All</option>
                                <option value="Computer Science" data-filter=".cat1">Computer Science</option>
                                <option value="GIS" data-filter=".cat2">GIS</option>
                                <option value="Data Analysis & Statistics" data-filter=".cat3">Data Analysis & Statistics</option>
                                <option value="Business Study" data-filter=".cat4">Business Study</option>
                                <option value="intellectual property rights" data-filter=".cat5">Intellectual Property Rights</option>
                            </select>
                        </div>
                        <div class="l2">
                            <select name="sort by" id="sort by">
                                <option value="all" class="active" data-filter="*">All</option>
                                <option value="Popular">Popular</option>
                                <option value="Most Recent">Most Recent</option>
                                <option value="Oldest">Oldest</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row grid">

                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat1 cat4 cat5" class="card">
                    <div class="course_single mb-10">
                    <div class="c_thumb">
                        <img src="asset/img/webinar/1.jpg" alt="" style="width: 100%;">
                    </div>
                        <div class="course_content">
                        <div class="c_head">
                            <span class="cat">Computer Science</span><br>
                        </div>
                        <h3 class="title">Artificial intelligence (AI) Webinar</h3>
                        <p>AI is an emerging component of computer science, which tries to make computers more intelligent.</p>
                        <a href="webinar-details.html">Register now for the webinar <i class="fal fa-long-arrow-right" class="arrow"></i></a><br><br><br>
                        <span class="icon calendar fas fa-calendar-alt" aria-hidden="true"></span>
                        <time datetime="2021-07-06T09:30:00Z">Jul 6 2021, 4:30pm </time>
                    </div>
                    </div>
                </div>
                

                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat1 cat4 cat5" class="card">
                    <div class="course_single mb-10">
                    <div class="c_thumb">
                        <img src="asset/img/webinar/1.jpg" alt="" style="width: 100%;">
                    </div>
                        <div class="course_content">
                        <div class="c_head">
                            <span class="cat">Computer Science</span><br>
                        </div>
                        <h3 class="title">Artificial intelligence (AI) Webinar</h3>
                        <p>AI is an emerging component of computer science, which tries to make computers more intelligent.</p>
                        <a href="webinar-details.html">Register now for the webinar <i class="fal fa-long-arrow-right" class="arrow"></i></a><br><br><br>
                        <span class="icon calendar fas fa-calendar-alt" aria-hidden="true"></span>
                        <time datetime="2021-07-06T09:30:00Z">Jul 6 2021, 4:30pm </time>
                    </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat1 cat4 cat5" class="card">
                    <div class="course_single mb-10">
                    <div class="c_thumb">
                        <img src="asset/img/webinar/1.jpg" alt="" style="width: 100%;">
                    </div>
                        <div class="course_content">
                        <div class="c_head">
                            <span class="cat">Computer Science</span><br>
                        </div>
                        <h3 class="title">Artificial intelligence (AI) Webinar</h3>
                        <p>AI is an emerging component of computer science, which tries to make computers more intelligent.</p>
                        <a href="webinar-details.html">Register now for the webinar <i class="fal fa-long-arrow-right" class="arrow"></i></a><br><br><br>
                        <span class="icon calendar fas fa-calendar-alt" aria-hidden="true"></span>
                        <time datetime="2021-07-06T09:30:00Z">Jul 6 2021, 4:30pm </time>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat1 cat4 cat5" class="card">
                    <div class="course_single mb-10">
                    <div class="c_thumb">
                        <img src="asset/img/webinar/1.jpg" alt="" style="width: 100%;">
                    </div>
                        <div class="course_content">
                        <div class="c_head">
                            <span class="cat">Computer Science</span><br>
                        </div>
                        <h3 class="title">Artificial intelligence (AI) Webinar</h3>
                        <p>AI is an emerging component of computer science, which tries to make computers more intelligent.</p>
                        <a href="webinar-details.html">Register now for the webinar <i class="fal fa-long-arrow-right" class="arrow"></i></a><br><br><br>
                        <span class="icon calendar fas fa-calendar-alt" aria-hidden="true"></span>
                        <time datetime="2021-07-06T09:30:00Z">Jul 6 2021, 4:30pm </time>
                    </div>
                    </div>
                </div>
            </div>
        </section>
            <!-- webinars end -->'
?>

<?php include 'template.php'; ?>