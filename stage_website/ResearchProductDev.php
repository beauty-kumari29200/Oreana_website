<!doctype html>
<html lang="en">
    <?php include "navbar.php" ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Link Swiper's CSS -->
     <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <title>Research Product Development</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
    @import url('https://fonts.googleapis.com/css?family=Allura|Josefin+Sans');
*{
    /* font-family: 'Poppins', sans-serif; */
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
    scroll-padding-top:3rem ;
    list-style: none;
    text-decoration: none;
    font-family: 'Josefin Sans', sans-serif;
}

     

 .features-section {
    display: flex;
    justify-content: space-around;
    align-items: center;
    /* background-color: hsl(240, 75%, 98%); */
    background-color:#CFFACF;
    height: 90vh;
  }
  .features-text-container {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: flex-start;
  }
  .features-text-container > h1 {
    font-size: 40px;
    font-weight: 800;
    color: hsl(243, 87%, 12%);
    margin-bottom: 20px;
  }
  .features-text-container > p {
    font-weight: 500;
    letter-spacing: 2px;
    color: hsl(238, 22%, 44%);
    margin-bottom: 20px;
    font-size:1.3vw;
  }
  .features-text-container > button {
    outline-width: 0;
    border: none;
    background: none;
    color: hsl(170, 45%, 43%);
    border-bottom: 2px solid hsl(170, 45%, 43%);
    font-size: 16px;
    font-weight: 500;
    padding-bottom: 5px;
    cursor: pointer;
  }
  .features-img-container > img {
    width: 550px;
  }
  .personal-info-container > img {
    width: 40px;
    border-radius: 24px;
    margin-right: 10px;
  }
  .testimonial-container {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: flex-start;
    margin-top: 20px;
    background-color: #fff;
    padding: 30px 20px;
    box-shadow: 5px 5px 8px #888888;
  }
  .testimonial-container > p {
    margin-bottom: 15px;
    color: hsl(243, 87%, 12%);
  }
  .personal-info-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .personal-info .name {
    font-weight: 800;
    color: hsl(243, 87%, 12%);
  }
  .personal-info .work {
    color: hsl(243, 87%, 12%);
  }
 

  *,
  *::before,
  *::after {
    box-sizing: border-box;
  }
       :root {
      --primary-color: rgb(11, 78, 179);
    }
  
 .custom-shape-divider-top-1656828864 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
}

.custom-shape-divider-top-1656828864 svg {
    position: relative;
    display: block;
    width: calc(185% + 1.3px);
    height: 30vw;
    z-index:1;
}

.custom-shape-divider-top-1656828864 .shape-fill {
    fill: #CDFFC3;
}

.custom-shape-divider-top-1656828939 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
}

.custom-shape-divider-top-1656828939 svg {
    position: relative;
    display: block;
    width: calc(185% + 1.3px);
    height: 25vw;
    z-index:2;
}

.custom-shape-divider-top-1656828939 .shape-fill {
    fill: #8DBE85;
}
.custom-shape-divider-top-1656829010 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    z-index:3;
}

.custom-shape-divider-top-1656829010 svg {
    position: relative;
    display: block;
    width: calc(185% + 1.3px);
    /* height:257px; */
    height: 20vw;
}

.custom-shape-divider-top-1656829010 .shape-fill {
    fill: #628F5A;
}
#main{
    width:100;height:36vw;background: url(img/bg-curve-desktop.svg); background-repeat: no-repeat; background-position: center; background-size: cover;width:100%;position:relative;margin-top:-4rem;

}
#h2{
    text-align:center;font-family:'Josefin Sans', sans-serif;font-size:3rem;font-weight:600;color:black;margin-top:3rem;position:relative;z-index:10;top:4rem;
}
#upper_main{
    width:65%;height:36vw;position:relative;
}
#upper_img{
    width:50%;height:36vw;margin-left:100%;margin-top:-4rem;z-index:10; background-image:url('img/industry.webp'); background-repeat: no-repeat; background-position: center; background-size: contain;z-index:-1;
}
#text{
    text-align:center;margin-left:5rem;margin-right:5rem;margin-top:8rem;position:absolute;z-index:10;
}
#p{
    color:#505050;line-height: 2.8rem; font-size:1.6rem;  word-spacing: 20px;
}
@media screen and (min-width:100px) and (max-width:290px)
{
    #main{
    height:120vh;
 }
 #h2{
    font-size:1.8rem;
 }
 #upper_img{
    display:none;
 }

 #upper_main{
    height:120vh;
    width:100%;
 }
 #text{
    margin-left:0.8rem;margin-right:0.8rem;margin-top:3.3rem;position:absolute;z-index:10;
}
#p{
    line-height: 2.4rem; font-size:1.4rem;  word-spacing: 18px; font-weight:500;
 }
 .features-section{
    height: 100vh;
 }
 .features-text-container > h1 {
    font-size: 3.5vh;
    font-weight: 800;
    margin-bottom: 0px;
    z-index: 2;
  }
  .features-text-container > p {
    font-weight: 600;
    margin-bottom: 0px;
    font-size:2vh;
  }
  .features-img-container{
    display:none;
  }

}
@media screen and (min-width:291px) and (max-width:550px)
{
 #main{
    height:96vh;
 }
 #h2{
    font-size:4.5vh;
 }
 #upper_img{
    display:none;
 }

 #upper_main{
    height:96vh;
    width:100%;
 }
 #text{
    margin-left:2rem;margin-right:2rem;margin-top:3.3rem;position:absolute;z-index:10;
}
#p{
    line-height: 2.4rem; font-size:3.5vh;  word-spacing: 18px; font-weight:500;
}
.features-text-container > h1 {
    font-size: 3.5vh;
    font-weight: 800;
    margin-bottom: 0px;
    z-index: 2;
  }
  .features-text-container > p {
    font-weight: 600;
    margin-bottom: 0px;
    font-size:2vh;
  }
  .features-img-container{
    display:none;
  }
}
@media screen and (min-width:551px) and (max-width:1200px)
{
 #main{
    height:60vh;
 }
 #h2{
    font-size:4.3vh;
 }
  #upper_img{
    width:55%;height:60vh;margin-left:100%;margin-top:-4rem;
 }

 #upper_main{
    height:60vh;
    width:60%;
 }
  #text{
    margin-left:1rem;margin-right:1rem;margin-top:3.3rem;
}
#p{
    line-height: 2.4rem; font-size:3.2vh;  word-spacing: 18px; font-weight:500;
}
.features-text-container > p {
    font-weight: 600;
    margin-bottom: 0px;
    font-size:2vh;
  } 

}
</style>
<body >
<div id="main" >
<div class="custom-shape-divider-top-1656828864">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
</div>

<div class="custom-shape-divider-top-1656828939">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
</div>
<div class="custom-shape-divider-top-1656829010">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
</div>

       <div id="upper_main">

            <h2 id="h2"><b>  Industry Project </b></h2>




            <div id="text" >
                <p id="p">
                The creation of
                    products with new or different characteristics that offer new or additional benefits to the
                    customer. Product development may involve modification of an existing product or its presentation,
                    or formulation of an entirely new product that satisfies a newly defined customer want or market
                    niche.</p>

            </div>

            <div id="upper_img" ></div>
    
    </div>
    </div><br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
 
    <section class="features-section" style="background:rgb(227, 227, 250);background-color:#DCF8DC;">
        <div class="features-text-container" >
            <h1>Stay productive, wherever you are</h1>
            <p>Never let location be an issue when accessing your files. Fylo has
                you<br />covered for all of your file storage needs</p>
            <p>Securely, Share files and folders with friends,family and colleagues
                for<br />live collaboration. No email attachments required.</p>
            <button href="index.php">See how Orena Solutions works</button>
            <div class="testimonial-container">
                <p  >Orena soultions has increased our team productivity by<br />
                    an order of magnitude.Since making the<br />
                    switch our team has become a well-oiled <br />collaboration
                    machine.</p>
                <div class="personal-info-container">
                    <img src="img/client2.jpg" alt="" />
                    <div class="personal-info">
                        <p class="name">Kyle Burton</p>
                        <p class="work">Founder&CEO, Huddle</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="features-img-container">
            <img src="img/hii.svg" alt="" />
        </div>
    </section>



   
</body>
<?php include "footer.php" ?>
</html>