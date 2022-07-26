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
     <!-- icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <style>
        


        .main_menu ul li a {
    padding: 37px 0;
    color: #000;
    font-weight: 600;
    font-size: 15px;
    display: inline-block;
    text-transform: uppercase;
    position: relative;
}
        .apply-btn:hover {
            background-color: #198754;
            color: white;
            animation: animate3 0s linear infinite;
        }

        .apply-btn {
            border: 0px;
            background-color: darkgreen;
            animation: animate 2s linear infinite;
        }

        @keyframes animate {
            0% {
                background-color: #efefef;
                color: black;
            }

            50% {
                background-color: #198754;
                color: white;
            }

            100% {
                background-color: #efefef;
                color: black;
            }
        }

        @keyframes animate3 {
            0% {
                background-color: #198754;
                color: white;
            }

            50% {
                background-color: #198754;
                color: white;
            }

            100% {
                background-color: #198754;
                color: white;
            }
        }
 @media screen and (min-width:100px) and (max-width:1050px){
    .backtotop{
        display:none;
    }
}


        /* style for detail page  */

        .grid-container{
        display: grid;
        grid-template-columns: 30% 40% 30%;
        height:4.5vw;
        justify-content: center;
        border-bottom: 1.8px solid black;
   }
   .grid-item{
        text-align: center;
    
    }
    .grid-item .two{
        display: grid;
        grid-template-columns: auto auto;
        background-color: greenyellow;
        grid-column-gap: 0.8rem;
    
    }
    .address{
        padding: 10px;
        font-size: 16px;
        text-align: center;
        cursor: pointer;
    }
    #flex{
       display:flex;
       flex-wrap: nowrap;
       align-items: center;
       justify-content: flex-end;
       transition: 0.5s ease;
    }
    #flex_address{
        display:flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        transition: 0.5s ease;
     
    }
    #flex_address .address{
        color: black;
    }
    #flex_address a{
        text-decoration: none;
        color: black;
    }
    .flex_icon,
    .address{
         margin:10px;
         padding:10px;
         text-align:center;
         cursor: pointer;
         transition: 0.5s ease;
    }
    .flex_icon{
        border-radius: 50%;
        background: #5e976c;
        min-width: 2vw;
        transition: 0.5s ease;
    }
    .flex_icon a{
        color: #fff;
       font-size: 1.1em;
       transition: 0.3s ease;
   
    }
    .flex_icon a:hover{
       transform: scale(1.3);
       background: #2f4d37;
    }
   .flex_icon:hover
   {
    background: #2f4d37;
    transform: scale(1.3);
   }
   @media screen and (min-width:200px) and (max-width:290px)
   {
    .grid-container{
        grid-template-columns: auto;
        grid-column-gap: 0.4rem;
        height:38vh;
        font-size: 0.7rem;
        }
        #flex{
         justify-content:center;
       }
       #flex_address a,
        #flex_address .address{
        font-size: 0.8rem;
       }
   }
   @media screen and (min-width:290px) and (max-width:350px)
   {
    .grid-container{
        grid-template-columns: auto;
        grid-column-gap: 0.8rem;
        height:35vh;
        }
        #flex{
         justify-content:center;
       }
       #flex_address a,
        #flex_address .address{
        font-size: 1.4rem;
       }

   }

    @media screen and (min-width:360px) and (max-width:530px){
        #flex{
         justify-content:center;
        }
        .grid-container{
        grid-template-columns: auto;
        grid-column-gap: 0.8rem;
        height:37vh;
        }
        #flex_address a,
        #flex_address .address{
        font-size: 4vw;
       }
    }
    @media screen and (min-width:531px) and (max-width:730px)
    {
        .grid-container{
        grid-template-columns: auto;
        grid-column-gap: 0.8rem;
        height:26vh;
        font-size:0.8rem;
        }
        #flex{
         justify-content:center;
       }
       #flex_address a,
        #flex_address .address{
        font-size: 1rem;
       }

    }

    @media screen and (min-width:730px) and (max-width:1000px){
        .grid-container{
        display: grid;
        grid-template-columns: auto;
        grid-column-gap: 0.8rem;
        height:28vh;
        font-size: 2rem;
        }
        #flex{
         justify-content:center;
        }
        #flex_address a,
        #flex_address .address{
        font-size: 1.4rem;
       }
    }
       @media screen and (min-width:1009px) and (max-width:1200px){
        .grid-container{
        height:22vh;
        font-size: 1.3rem;
        }
        #flex{
         justify-content:center;
        }
        #flex_address a,
        #flex_address .address{
        font-size: 1.1rem;
       }
    
    }
    @media screen and (min-width:1209px) and (max-width:1400px){
        .grid-container{
        height:12vh;
        font-size: 1.3rem;
        }
        #flex{
         justify-content:center;
        }
        #flex_address a,
        #flex_address .address{
        font-size: 1.1rem;
       }
    
    }

    </style>
</head>

<!-- -------------------detail page ------------------------- -->

<div class="grid-container" style="background:white;">
        <div class="grid-item">
            <div id="flex_address">
                <div class="address">
                    <i class="fa fa-map-marker" aria-hidden="true"></i><b> Vasns-Bhayli Road, 391410, Vadodara,India </b>
               </div>
            </div>
        </div>
        <div class="grid-item two">
            <div id="flex_address">
                <div class="address"><a href="#" ><i class="fa fa-phone " aria-hidden="true"></i><b> +919824347721</b></a></div>
                <div class="address"><a href="#" ><i class="bi bi-envelope-fill"></i><b> contactus@orena.solutions</b></a> </div>
            </div>
       
        </div>
        <div class="grid-item">
            <div id="flex">
                <div class="flex_icon" ><a href="#" ><i class="fa-brands fa-facebook-f "></i></a></div>
                <div class="flex_icon" ><a href="#"><i class="fa-brands fa-twitter"></i></a></div>
                <div class="flex_icon" ><a href="#"><i class="fa-brands fa-instagram"></i></a></div>
                <div class="flex_icon" ><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></div>
                <div class="flex_icon" ><a href="#"><i class="fa-brands fa-youtube"></i></a></div>
            </div>
           
        </div>
     </div> 
   </div>



<!---------------------------------- detail page end ------------------------- -->
<!-- backtotop - start -->
<!-- <div id="thetop"></div>
<div id="backtotop">
    <a href="#" id="scroll">
        <i class="fal fa-arrow-up"></i>
        <i class="fal fa-arrow-up"></i>
    </a>
</div> -->
<!-- backtotop - end -->
<!-- start Preloader  -->
<!-- <div class="preloder_part">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div> -->
<!-- End Preloader  -->
<!-- header start -->
<header class="header_area">
    <div id="sticky-header" class="header_bottom white_bg pl-80 pr-80">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-6">
                    <div class="logo">
                        <a href="index.php"><img src="asset/img/logo/logo.png" alt="logo" style="width: 90px;"></a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8 d-none d-lg-block">
                    <nav class="main_menu">
                        <ul class="dropdown" style="margin-left: -60px">
                            <li class="has_dropdown">
                                <a href="#">Recruitment Services</a>
                                <ul class="submenu">
                                    <li><a href="campus_drive.php">Campus Drive</a></li>
                                    <li><a href="coming_soon.html">Career@orena</a></li>
                                    <li><a href="coming_soon.html">Expert Collaboration</a></li>
                                    <li><a href="coming_soon.html">Mock Interviews</a></li>
                                    <li><a href="coming_soon.html">Group Discussion</a></li>
                                </ul>
                            </li>
                            <li class="has_dropdown">
                                <a href="#">Courses</a>
                                <ul class="submenu">
                                    <li><a href="coming_soon.html">Free Courses</a></li>
                                    <li><a href="coming_soon.html">Certified Courses</a></li>
                                    <li><a href="coming_soon.html">Data Analysis</a></li>
                                    <li><a href="coming_soon.html">GIS-Geographical Information System</a></li>
                                    <li><a href="courses.php">Explore all</a></li>
                    
                                </ul>
                            </li>
                            <li class="has_dropdown">
                                <a href="#">Business</a>
                                <ul class="submenu">
                                    <li class="has_dropdown"><a href="#">University</a>
                                        <ul class="submenu">
                                            <li><a href="campus_drive.php">Campus Drives</a></li>
                                            <li><a href="designlab.php">Setting up Labs</a></li>
                                        </ul>
                                    </li>
                                    <li class="has_dropdown"><a href="#">Enterprises</a>
                                        <ul class="submenu">
                                            <li><a href="industryproject.php">Industry Project</a></li>
                                            <li><a href="campushiring.php">Campus Hiring</a></li>
                                            <li><a href="CorporateWorkshop.php">Corporate Workshop</a></li>
                                            <li><a href="TalentA.php">Talent Acquisition</a></li>
                                            <li><a href="ExpertExchange.php">Expert Exchange</a></li>
                                            <li><a href="settingupbusiness.php">Setting up Business Processes</a></li>
                                        </ul>
                                    </li>
                                    <li class="has_dropdown"><a href="#">Industry 4.0</a>
                                        <ul class="submenu">
                                            <li><a href="coming_soon.html">ERP Development</a></li>
                                            <li><a href="coming_soon.html">Business Intelligence Services</a></li>
                                            <li><a href="coming_soon.html">IOT and Machine Automation</a></li>
                                            <li><a href="coming_soon.html">Design of Market Strategy</a></li>
                                        </ul>
                                    </li>
                                    <li class="has_dropdown"><a href="#">Products</a>
                                        <ul class="submenu">
                                            <li><a href="coming_soon.html">ERP</a></li>
                                            <li><a href="coming_soon.html">EzGeoCapture</a></li>
                                            <li><a href="coming_soon.html">HRMS</a></li>
                                            <li><a href="coming_soon.html">LMS</a></li>
                                            <li><a href="coming_soon.html">Smart Badge</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="coming_soon.html">Branding & <br> Digital Marketing</a></li>
                                    <li><a href="IPpatentAndDevelopment.php">Making Funding & <br> IP Proposals</a></li>
                                    <li><a href="ResearchProductDev.php">Research product development</a></li>

                                </ul>
                            </li>
                            <li class="has_dropdown">
                                <a href="#">More</a>
                                <ul class="submenu">
                                    <li><a href="portfolio.html">About Us</a>
                                        <!--<ul class="submenu">
                                        <li><a href="coming_soon.html">Our Team</a></li>
                                        <li><a href="our partners.php">Our Partners</a></li>
                                        <li><a href="services.php">Our Services</a></li>
                                        <li><a href="contact us.php">Contact Us</a></li>
                                    </ul>-->
                                    </li>
                                    <li><a href="coming_soon.html">Resources</a></li>
                                    <li><a href="blogs12.php">Blogs</a></li>
                                    <li><a href="coming_soon.html">Webinars</a></li>
                                    <li><a href="coming_soon.html">News</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-3 col-lg-2 col-6">
                    <div class="header_right">
                        <!--<div id="apply-button" class="container-fluid">-->
                        <!--    <a href="form1.php">-->
                        <!--        <button type="button" style="border-radius:60px; text-align:center; width:109px;" class="apply-btn btn btn-success">-->
                        <!--            Apply Now-->
                        <!--        </button>-->
                        <!--    </a>-->
                        <!--</div>-->
                        <div class="header_search_wrap">
                            <div class="search_main">
                                <i class="fal fa-search"></i>
                                <span><i class="fal fa-times"></i></span>
                            </div>
                            <div class="search_form_main">
                                <form role="search" method="get" action="#">
                                    <input type="text" placeholder="Search Keywords">
                                    <button type="submit"><i class="fal fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="hamburger_menu">
                            <a href="#" class="">
                            <!-- javascript:void(0); -->
                                <i class="fal fa-bars"></i>
                            </a>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>

    </div>

</header>
<!-- header end -->
<!-- slide-bar start -->
<aside class="slide-bar">
    <div class="close-mobile-menu">
        <a href="javascript:void(0);"><i class="ti-close"></i></a>
    </div>
    <!-- sidebar-info start -->
    <div class="sidebar-info">
        <div class="sidebar-logo mb-30">
            <a href="index.php">
                <img src="asset/img/logo/logo.png" alt="logo">
            </a>
        </div>
        <div class="sidebar-content mb-45">
            <h4 class="s-title">About us</h4>
            <p>We, the team of Orena Solutions are passionate about bridging the gap between the Academics and the Industry. We are a visionary ICT company, looking to rejuvenate the employability levels of the Indian workforce. Orena Solutions comprises of members from fortune 500 companies having a vast experience in ICT training, online and offline campus training and executive training through various companies.</p>
            <a class="thm_btn btn_side" href="contact us.php">Contact us<i class="fal fa-long-arrow-right"></i></a>
        </div>
        <div class="s_contact-list mb-30">
            <h4 class="s-title">Get in Touch</h4>
            <div class="footer_widget pt-20">
                <ul>
                    <li>
                        <p>401, 4th Floor, Urban One complex, Near Panch-Mukhi Hanuman Temple, Vasna-Bhayli Road, Vadodara, Gujarat, India - 391410.</p>
                    </li>
                    <li>
                        <p>+91 98243 47721</p>
                    </li>
                    <li>
                        <p>contactus@orena.solutions</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="social_icon mt-20">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
    <!-- sidebar-info end -->
    <!-- side-mobile-menu start -->
    <nav class="side-mobile-menu">
        <div class="header-mobile-search">
            <form role="search" method="get" action="#">
                <input type="text" placeholder="Search Keywords">
                <button type="submit"><i class="ti-search"></i></button>
            </form>
        </div>
        <ul id="mobile-menu-active">
            <li class="dropdown"><a href="blog-right-sidebar">Recruitment Services</a>
                <ul class="submenu">
                    <li><a href="campus_drive.php">Campus Drive</a></li>
                    <li><a href="coming_soon.html">Career@orena</a></li>
                    <li><a href="coming_soon.html">Registration</a></li>
                    <li><a href="coming_soon.html">Mock Interviews</a></li>
                    <li><a href="coming_soon.html">Group Discussion</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="blog-right-sidebar">Courses</a>
                <ul class="submenu">
                    <li><a href="coming_soon.html">Free Courses</a></li>
                    <li><a href="coming_soon.html">Certified Courses</a></li>
                    <li><a href="coming_soon.html">Data Analysis</a></li>
                    <li><a href="coming_soon.html">GIS-Geographical Information System</a></li>
                    <li><a href="courses.php">Explore all</a></li>

                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Business</a>
                <ul class="submenu">
                    <li class="dropdown"><a href="#">University</a>
                        <ul class="submenu">
                            <li><a href="campus_drive.php">Campus Drives</a></li>
                            <li><a href="coming_soon.html">Setting up Labs</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Enterprises</a>
                        <ul class="submenu">
                            <li><a href="coming_soon.html">Industry Project</a></li>
                            <li><a href="coming_soon.html">Campus Hiring</a></li>
                            <li><a href="coming_soon.html">Corporate Workshop</a></li>
                            <li><a href="coming_soon.html">Talent Acquisition</a></li>
                            <li><a href="coming_soon.html">Expert Exchange</a></li>
                            <li><a href="coming_soon.html">Setting up Business Processes</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Industry 4.0</a>
                        <ul class="submenu">
                            <li><a href="coming_soon.html">ERP Development</a></li>
                            <li><a href="coming_soon.html">Business Intelligence Services</a></li>
                            <li><a href="coming_soon.html">IOT and Machine Automation</a></li>
                            <li><a href="coming_soon.html">Design of Market Strategy</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Products</a>
                        <ul class="submenu">
                            <li><a href="coming_soon.html">ERP</a></li>
                            <li><a href="coming_soon.html">EzGeoCapture</a></li>
                            <li><a href="coming_soon.html">HRMS</a></li>
                            <li><a href="coming_soon.html">LMS</a></li>
                            <li><a href="coming_soon.html">Smart Badge</a></li>
                        </ul>
                    </li>
                    <li><a href="coming_soon.html">Branding & <br> Digital Marketing</a></li>
                    <li><a href="coming_soon.html">Making Funding & <br> IP Proposals</a></li>
                    <li><a href="coming_soon.html">Research product development</a></li>

                </ul>
            </li>
            <li class="dropdown">
                <a href="#">More</a>
                <ul class="submenu">
                    <li><a href="portfolio.html">About Us</a>
                        <!--<ul class="submenu">
                                        <li><a href="coming_soon.html">Our Team</a></li>
                                        <li><a href="our partners.php">Our Partners</a></li>
                                        <li><a href="services.php">Our Services</a></li>
                                        <li><a href="contact us.php">Contact Us</a></li>
                                    </ul>-->
                    </li>
                    <li><a href="coming_soon.html">Resources</a></li>
                    <li><a href="blog-right-sidebar.php">Blogs</a></li>
                    <li><a href="coming_soon.html">Webinars</a></li>
                    <li><a href="coming_soon.html">News</a></li>
                </ul>
    </nav>
    <!-- side-mobile-menu end -->
</aside>
<!-- body wrap end -->