<!doctype html>
<html lang="en">
    <?php include "navbar.php" ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
     <!-- Link Swiper's CSS -->
     <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <title>Expert Exchange</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
    scroll-padding-top:3rem ;
    list-style: none;
    text-decoration: none;
}
.swiper {
      margin-top:4rem;
        width: 340px;
        height: 520px;
      }

      .swiper-slide {
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 18px;
        font-size: 22px;
        font-weight: bold;
        color: #fff;
      }

      .swiper-slide:nth-child(1n) {
        /* background-color: rgb(206, 17, 17); */
       background: url(img/client1.jpg); 
       background-repeat: no-repeat;
        background-position: center;
         background-size: cover;
      }

      .swiper-slide:nth-child(2n) {
        /* background-color: rgb(0, 140, 255); */
        background: url(img/client4.jpg); 
       background-repeat: no-repeat;
        background-position: center;
         background-size: cover;
      }

      .swiper-slide:nth-child(3n) {
        /* background-color: rgb(10, 184, 111); */
        background: url(img/client6.jpg); 
       background-repeat: no-repeat;
        background-position: center;
         background-size: cover;
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


.grid-container_intro{
        display: grid;
        grid-template-columns: 60% 40%;
        background:#E2FDD6;
        height:35vw;
        justify-content: center;
        border-bottom: 1.8px solid black;
        position:relative;
   }
   .grid-item_intro{
        /* background-color:pink; */
        /* border:1px solid black; */
        text-align: center;
        width:100%;
    
    
    }
    .grid-item_intro img{
        margin-top:35%;
        position: relative;
        z-index: 20;
        width:50%;height:40%;
    }
    #pp{
    font-family:'Josefin Sans', sans-serif; font-size: 2rem;color:black;text-align:center;
    position: relative;z-index: 20;color:#505050;line-height: 2.8rem;word-spacing: 20px;font-weight:600;
    }
  
    .custom-shape-divider-top-1656400995 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg);
    z-index:1;

}

.custom-shape-divider-top-1656400995 svg {
    position: relative;
    display: block;
    width: calc(154% + 1.3px);
    height: 30rem;
}

.custom-shape-divider-top-1656400995 .shape-fill {
    fill: #C5F6C4;
}

.custom-shape-divider-top-1656401110 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg);
   z-index:3;
}

.custom-shape-divider-top-1656401110 svg {
    position: relative;
    display: block;
    width: calc(154% + 1.3px);
    height: 18rem;
}
.custom-shape-divider-top-1656401110 .shape-fill {
    fill: #9DC59C;
}
#h2{
  text-align:center;font-family:'Josefin Sans', sans-serif;font-size:2.5rem;font-weight:600;color:black;position:relative;z-index:10;margin-top:4rem;
}
@media screen and (min-width:100px) and (max-width:299px){
    .grid-container_intro{
          height:205vh;
          grid-template-columns: auto ;
     
        }
        #pp{

        font-size: 1.6rem;
        line-height: 2rem;word-spacing:8px;margin-left:0.5rem;margin-right:0.5rem;
      }
      .swiper {
      margin-top:1rem;
        width: 240px;
        height: 320px;
      }
    }
    @media screen and (min-width:300px) and (max-width:729px){
        .grid-container_intro{
          height:185vh;
          grid-template-columns: auto;
         
        }
        #pp{

            font-size: 1.6rem;
             line-height: 2rem;word-spacing:8px;margin-left:0.5rem;margin-right:0.5rem;
                  }
               .swiper {
                 margin-top:1rem;
                 width: 240px;
                height: 320px;
                    }
    }
    @media screen and (min-width:730px) and (max-width:1000px){
        .grid-container_intro{
          height:115vh;
          grid-template-columns: auto;
        
        }
        #h2{
      font-size:4rem;
     }
        #pp{

         font-size: 2.5rem;
           line-height: 3.2rem;word-spacing:8px;margin-left:0.5rem;margin-right:0.5rem;
      }
   .swiper {
     margin-top:1rem;
     width: 340px;
    height: 420px;
        }

    }
   @media screen and (min-width:1009px) and (max-width:1400px){
        .grid-container_intro{
          height:95vh;
          grid-template-columns: 60% 40%;
        
        }
        #h2{
      font-size:2.8rem;
     }
        #pp{

         font-size: 2rem;
           line-height: 2.5rem;word-spacing:8px;margin-left:0.5rem;margin-right:0.5rem;
      }
   .swiper {
     margin-top:6rem;
     width: 240px;
    height: 320px;
        }
    }

</style>

<body style="background:white;">

<div class="grid-container_intro">
    
    <div class="custom-shape-divider-top-1656400995">
       <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
           <path d="M741,116.23C291,117.43,0,27.57,0,6V120H1200V6C1200,27.93,1186.4,119.83,741,116.23Z" class="shape-fill"></path>
       </svg>
   </div>
   
   <div class="custom-shape-divider-top-1656401110">
       <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
           <path d="M741,116.23C291,117.43,0,27.57,0,6V120H1200V6C1200,27.93,1186.4,119.83,741,116.23Z" class="shape-fill"></path>
       </svg>
   </div>
    <div class="grid-item_intro">
     
      <h2 id="h2" ><b> Setting up design lab </b></h2>
        <p id="pp" >
            Since we will be tying up with different industries and have an access to the technology required,
            we can help to set up labs in universities. Not only we will help in setting up labs, but we can
            also provide with a workshop to the faculty members to understand the workings of the technology.
            Some of the technologies that we can help the university in setting up are –
        </p>
    </div>
    <div class="grid-item_intro">
                   <!-- Swiper -->
                   <div class="swiper mySwiper" style="z-index:10;">
      <div class="swiper-wrapper" style="z-index:10;">
        <div class="swiper-slide"></div>
        <div class="swiper-slide"></div>
        <div class="swiper-slide"></div>
      </div>
    </div>
   
    </div>



</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
 <br>
 
     <!-- Swiper JS -->
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    effect: "cards",
    grabCursor: true,
   
  });
</script>
</body>
<?php include "footer.php" ?>
</html>