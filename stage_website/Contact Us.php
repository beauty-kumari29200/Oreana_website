<?php
$title='CONTACT US';
$content='
<style>
.c1
{
    background-color: #f7f7f7;
}
.c1:focus .c1
{
    border: #000000;
}
#a1:hover #div1, #a2:hover #div2, #a3:hover #div3
{
    background-color: #ffffff!important;
    transition: all 0.5s ease;
}
#a1:hover #p1, #a1:hover #p2, #a2:hover #p3, #a2:hover #p4, #a3:hover #p5, #a3:hover #p6
{
    color: #ffffff!important;
    transition: all 0.5s ease;
}
#a1:hover #i1, #a2:hover #i2, #a3:hover #i3
{
    color: #ffc107!important;
    transition: all 0.5s ease;
}
#a1:hover, #a2:hover, #a3:hover
{
    background-color: #51be78!important;
    transition: all 0.5s ease;
}
#a1, #a2, #a3
{
    position: relative;
    overflow: hidden;
}
.overlay1, .overlay2, .overlay3
{
    position: absolute;
    margin-bottom: -70px;
    margin-left: -70px;
    bottom: 0;
    width: 130%;
    height: 0%;
    background-color: #ffffff;
    transform: rotateZ(10deg);
}
.overlay1
{
    transition: .5s ease;
}
.overlay2
{
    transition: .7s ease;
}
.overlay3
{
    transition: 1.2s ease;
}
#a1:hover .overlay1, #a2:hover .overlay1, #a3:hover .overlay1
{
    z-index: 3;
    opacity: 0.3;
    height: 50%;
}
#a1:hover .overlay2, #a2:hover .overlay2, #a3:hover .overlay2
{
    z-index: 2;
    opacity: 0.25;
    height: 70%;
}
#a1:hover .overlay3, #a2:hover .overlay3, #a3:hover .overlay3
{
    z-index: 1;
    opacity: 0.2;
    height: 90%;
}
</style>

<section class="checkout_area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-12"  style="width: 800px; margin: auto;">
                <div class="checkout_wrap">
                    <div class="radio_wrap">
                        <h3></h3>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <form class="form_wrap" style="margin-top: -80px; margin-bottom: -30px;" method="Post" action="form.php">
                                <div class="row" style="margin-top: -50px;">
                                    <div class="col-xl-12 col-lg-12" style="width: 50%;">
                                        <label for="name">Your Name <span>*</span></label>
                                        <input class="c1" type="text" id="name" name="name" placeholder="Your Name">
                                    </div>
                                    <div class="col-xl-6 col-lg-6" style="width: 50%;">
                                        <label for="email">Your Email <span>*</span></label>
                                        <input class="c1" type="email" id="email" name="email" placeholder="Your Email">
                                    </div>
                                    <div class="col-xl-6 col-lg-6" style="width: 50%; padding-top: 20px;">
                                        <label for="mno">Mobile Number <span>*</span></label>
                                        <input class="c1" type="tel" id="mno" name="mno" placeholder="Mobile Number">
                                    </div>
                                    <div class="col-xl-12 col-lg-12" style="width: 50%; padding-top: 20px;">
                                        <label for="subject">Subject <span>*</span></label>
                                        <input class="c1" type="text" id="subject" name="subject" placeholder="Reason for contact">
                                    </div>
                                    <div class="col-xl-6 col-lg-6" style="width: 100%; padding-top: 20px;">
                                        <label for="message">Message <span>*</span></label>
                                        <textarea class="c1" id="message" name="message" placeholder="Write message"></textarea>
                                    </div>
                                    <div style="text-align: center;">
                                        <button class="thm_btn thm_btn-black" value="submit"> SEND MESSAGE <i class="fal fa-long-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-left: 35px; padding-top: 100px;">
                <a id="a1" style="width: 33.33%; background-color: #ffffff; border-radius: 5px; text-align: center; padding-top: 50px; border-right: 2px solid #ffffff; box-shadow: 0 0 30px #dadada;">
                    <div id="div1" style="border-radius: 50%; margin: auto; background-color: #7e3cf91a; height: 90px; width: 90px;">
                        <i id="i1" style="padding-top: 25px; color: #51be78;" class="fas fa-map-marker-alt fa-3x"></i>
                    </div>
                    <p id="p1" style="padding-top: 20px; color: #233d63; font-size: 25px;"><strong>Our Location</strong></p>
                    <p id="p2" style="color: #000000;">Orena Solutions 401, 4th Floor, Urban One complex, Near Panch-Mukhi Hanuman, Vasna-Bhayli Road, Vadodara, Gujarat, India - 391410.</p>
                    <div class="overlay1"></div>
                    <div class="overlay2"></div>
                    <div class="overlay3"></div>
                </a>
                <a id="a2" style="width: 33.33%; background-color: #ffffff; border-radius: 5px; text-align: center; padding-top: 50px; border-left: 2px solid #ffffff; box-shadow: 0 0 30px #dadada; border-right: 2px solid #ffffff; box-shadow: 0 0 30px #dadada;" href="mailto:contactus@orena.solutions">
                    <div id="div2" style="border-radius: 50%; margin: auto; background-color: #f68a031a; height: 90px; width: 90px;">
                        <i id="i2" style="padding-top: 25px; color: #f68a03;" class="far fa-envelope fa-3x"></i>
                    </div>
                    <p id="p3" style="padding-top: 20px; color: #233d63; font-size: 25px;"><strong>Email Us</strong></p>
                    <p id="p4" style="color: #000000">contactus@orena.solutions</p>
                    <div class="overlay1"></div>
                    <div class="overlay2"></div>
                    <div class="overlay3"></div>
                </a>
                <a id="a3" style="width: 33.33%; background-color: #ffffff; border-radius: 5px; text-align: center; padding-top: 50px; border-left: 2px solid #ffffff; box-shadow: 0 0 30px #dadada;"  href="tel: +91 98243 47721">
                    <div id="div3" style="border-radius: 50%; margin: auto; background-color: #358ff71a; height: 90px; width: 90px;">
                        <i id="i3" style="padding-top: 25px; color: #358ff7;" class="fas fa-mobile-alt fa-3x"></i>
                    </div>
                    <p id="p5" style="padding-top: 20px; color: #233d63; font-size: 25px;"><strong>Call Us</strong></p>
                    <p id="p6" style="color: #000000;">+91 98243 47721</p>
                    <div class="overlay1"></div>
                    <div class="overlay2"></div>
                    <div class="overlay3"></div>
                </a>
            </div>
        </div>
    </div>
</section>';
?>

<?php include 'template.php'; ?>