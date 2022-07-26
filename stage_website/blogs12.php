
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="blog12.css">
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

</head>
<style>
  .swiper {
        width: 100%;
        height: 100%;
        background: #000;
      }

      .swiper-slide {
        font-size: 18px;
        color: #fff;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding: 40px 60px;
      }

      .parallax-bg {
        position: absolute;
        left: 0;
        top: 0;
        width: 130%;
        height: 100%;
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center;
      }

      .swiper-slide .title {
        font-size: 41px;
        font-weight: 300;
      }

      .swiper-slide .subtitle {
        font-size: 21px;
      }

      .swiper-slide .text {
        font-size: 14px;
        max-width: 400px;
        line-height: 1.3;
      }
      h1{
        font-size:3.5rem;text-align:center;
      }
      #blog_content{
        width:100%;height:35vw;
      }
      #p{
        color:black;font-size:1.8vw;font-weight:600;line-height:2vw;word-spacing:1vw;
      }
      #read_more{
        border:2px solid green;color:white;background:green;padding:15px;font-size:1.3vw;border-radius:15px;
      }
      #title{
        font-size:3vw;font-weight:800;color:green;
      }
      #subtitle{
        font-size:2vw;font-weight:800;color:white;
      }

      @media screen and (max-width:1000px)
      {
        h1{
          font-size:3rem;
        }
      #p{
        font-size:3vh;font-weight:600;word-spacing:1vh;line-height:3vh;
      }
      #read_more{
       font-size:2vh;
      }
      #title{
        font-size:3.8vh;color:green;
      }
      #subtitle{
        font-size:2.8vh;font-style:bold;
      }
      }
</style>
<body>
<?php include "navbar.php" ?>

<div id="blog_content">
<br><br>
<h1 ><b>Our Blogs</b></h1>
<!-- Swiper -->
<div >
<div
      style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
      class="swiper mySwiper"
    >
      <div
        class="parallax-bg"
        style="background-image: url(img/b6.jpeg); background-size:cover; background-repeat:no-repeat;opacity:0.7;"
        data-swiper-parallax="-23%"
      ></div>
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="title"  data-swiper-parallax="-300" ><div id="title" ><b>Career in </b></div></div>
          <div class="subtitle" id="subtitle" data-swiper-parallax="-200">GIS</div>
          <div class="text" data-swiper-parallax="-100">
            <p id="p">
            In the rapidly advancing world, GIS emerges as one of the technology that has a broad application in nature,..
            </p><br><br>
            <a href="blog-career-in-gis.php" id="read_more">Read More</a>
          </div>
        </div>
        <div class="swiper-slide">
        <div class="title" id="title" data-swiper-parallax="-300" ><b>How to write Fresher's resume</b></div>
          <div class="subtitle"  id="subtitle"  data-swiper-parallax="-200" style="color:white;">Tips and Tricks</div>
          <div class="text" data-swiper-parallax="-100">
            <p id="p">
            A Fresher is someone who has just graduated from a college or university and is looking to enter into the workforce. For....
            </p>

            <a href="blog_How_to_write_a_Freshers_Resume.php" id="read_more">Read More</a>
          </div>
        </div>
        <div class="swiper-slide">
        <div class="title" id="title" data-swiper-parallax="-300" ><b>How Vulnerable are SBCs <span style="color:white">to servises Theft-</span></b></div>
          <div class="subtitle" data-swiper-parallax="-200"  id="subtitle"  >The reality Check</div>
          <div class="text" data-swiper-parallax="-100">
            <p id="p">
            In the rapidly advancing world, the organization not only relies on voice calls, now they use other modes of,.........
            </p>
            <a href="blog-how Vulnerable are SBCs to Service Theft - The Reality Check.php" id="read_more">Read More</a>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
</div>
 

  

<section id="blog">

          
  
      </section>

      <?php include "footer.php"?>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    speed: 600,
    parallax: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
</body>
</html>