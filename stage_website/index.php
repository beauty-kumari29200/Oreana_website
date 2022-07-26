<?php include "navbar.php" ?>

<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    
    <!-- links for swiper -->
    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

  <!-- icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<style>
      @import url('https://fonts.googleapis.com/css?family=Allura|Josefin+Sans');
    .slide
    {
        margin:0px 10px 0px 10px;
    }
    .slick-prev
    {
        visibility: hidden;
    }
    .slick-prev:after
    {
        content: url("asset1/arrow-next.png");
        visibility: visible;
        position: absolute;
        transform: scale(0.15) rotate(180deg);
        left: -20rem;
        top: -10%;
    }
    .slick-next
    {
        visibility: hidden;
    }
    .slick-next:after
    {
        content: url("asset1/arrow-next.png");
        transform: scale(0.15);
        visibility: visible;
        position: absolute;
        right: -20rem;
        top: -10%;
    }
    .head
    {
        margin-top: 5%;
        text-align: center;
        font-size: 50px;
        color: #000000;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
    }
    .services
    {
        color: #000000;
        font-size: 20px;
        font-weight: bold;
    }
    .services a
    {
        color: #000000;
    }
    .services a:hover
    {
        color: #137449;
    }
    .sub-services
    {
        color: #000000;
        font-size: 15px;
        margin-left: 20px;;
    }
    .sub-services a
    {
        color: #000000;
    }
    .sub-services a:hover
    {
        color: #137449;
    }
        #tag{
        font-size:7vh;
        font-family: 'Josefin Sans', sans-serif;
 
    }
    /****************** * intro section********************* */
    .content-grid{
        display: grid;
        grid-template-columns: 40% 60%;
        background:#F1FAED; 
        position:relative; 
        height:37vw;
        justify-content: center;
        border-bottom: 2px solid black;
   }
   .content-item{
        /* background-color: beige; */
        /* border:1px solid black; */
        text-align: center;
        position: relative;
        height:35vw;
    
    }
 .custom-shape-divider-bottom-1655019977 {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg);
    z-index: 2;
    bottom: 0%;
}

.custom-shape-divider-bottom-1655019977 svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 20vw;
    transform: rotateY(180deg);
}

.custom-shape-divider-bottom-1655019977 .shape-fill {
    fill:#C7E2BA;
}


  .content-img-flex{
        display:flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        transition: 0.5s ease;
        z-index: 2;
     
    }
    .img-flex{
        /* background-color: red; 
        border:1px solid black; */
        padding: 10% 5%;
        align-items: center;
        cursor: pointer;
        position: relative;
     
      
    }
        #heading{
        color: #000000; 
        font-size:3vw;
        z-index:1;
        overflow:hidden;
        justify-content: space-between;
        position:relative;
        top:2vw;

    }
    #heading span{
        color:green;
    }
    .content-item p {
         color: #000000;
         z-index:2;
         position:relative ;
         margin-left:2rem;
         margin-right:2rem;
         text-align:center;
         top:3vw;
         line-height:2vw;
         font-size:1.1vw;
    }
    .content-item button{
        background: #5e976c;
        color:white;
        padding: 0.8vw 0.8vw;
        font-size:1vw;
        position:relative;
        top:4vw;
        z-index:2;
    }

    .counters
    {
        border-left: 1px solid #000000;
        text-align: center;
        height:9rem;
        position:relative;
        z-index:2;
        top:7vw;
        left:20%;
        width:10vw;
    }
    .counter
    {
        font-size: 2.3vw;
    }
    #counter_p{
        font-size:20px;
    }
    #counter_icon{
        font-size: 50px; 
    }
    @media screen and (max-width:360px){
       .counters
       {
        display:none;
       }
    }
   @media screen and (max-width:500px){
    #content-image{
        display:none;
    }
    .content-grid{
        grid-template-columns:auto;
        height:38vh;
   }
   .content-item{
        height:38vh;
    }
    #heading{
        font-size:3vh;
        top:1vh;

    }
    .content-item p {
         top:1.5vh;
         line-height:1.8vh;
         font-size:1.8vh;
    }
    .content-item button{
        padding: 0.8vh 0.8vh;
        font-size:1vh;
        position:relative;
        top:2vw;
        z-index:2;
    }
    .counters
    {
        position:relative;
        margin-top:-5.8vh;
        height:5vh;
        left:2%;
        width:11vh;
    }
    .counter
    {
        font-size: 1.5vh;
    }
    #counter_p{
        font-size:1.4vh;  
      }
    #counter_icon{
        font-size: 1.5vh; 
    }
   
    #tag{
        font-size:4vh;
        font-family: 'Josefin Sans', sans-serif;
    }
   }

   @media screen and (min-width:520px) and (max-width:850px){
    .counters
       {
        display:none;
       }
       .content-grid{
        grid-template-columns: 35% 64%;
        height:37vh;

   }
   .content-item{
        height:37vh;
    
    }
    #heading{
        font-size:4.2vh;
        top:2vh;

    }
    .content-item p {
         top:1.6vh;
         line-height:1.9vh;
         font-size:1.7vh;
    }
    .content-item button{
        padding: 0.8vh 0.8vh;
        font-size:1.8vh;
        position:relative;
        top:2vh;
        z-index:2;
    }
    #tag{
        font-size:5vh;
        font-family: 'Josefin Sans', sans-serif;
    }

   }
   @media screen and (min-width:870px) and (max-width:1000px)
   {
    .counters
       {
        display:none;
       }
       .content-grid{
        height:45vh;

   }
   .content-item{
        height:45vh;
    
    }
    .img-flex{
        height:32vh;
    }
    #heading{
        font-size:4.4vh;
        top:2vh;

    }
    .content-item p {
         top:1.6vh;
         line-height:1.9vh;
         font-size:1.7vh;
    }
    .content-item button{
        padding: 0.8vh 0.8vh;
        font-size:1.8vh;
        position:relative;
        top:2vh;
        z-index:2;
    }
    #tag{
        font-size:6vh;
        font-family: 'Josefin Sans', sans-serif;
    }
   }
   @media screen and (min-width:1010px) and (max-width:1400px)
   {
    .content-grid{
        height:55vh;

   }
   .content-item{
        height:55vh;
    
    }
    .img-flex{
        height:55vh;
    }
    #heading{
        font-size:4.8vh;
        top:2vh;

    }
    .content-item p {
         top:1.8vh;
         line-height:2.8vh;
         font-size:2vh;
    }
    .content-item button{
        padding: 0.8vh 0.8vh;
        font-size:1.8vh;
        position:relative;
        top:2vh;
        z-index:2;
    }
    .counters
    {
        position:relative;
        margin-top:-8.5vh;
        height:5vh;
        left:5%;
        width:11vw;
    }
    .counter
    {
        font-size: 3vh;
    }
    #counter_p{
        font-size:2vh;  
      }
    #counter_icon{
        font-size: 2vh; 
    }
    #tag{
        font-size:7vh;
        font-family: 'Josefin Sans', sans-serif;
    }

   }

   

 /**********intro section end *************************** */
 /**************client section************************** */
 /************ * swiper ************/
.swiper {
        width: 100%;
        padding-top: 20px;
        padding-bottom: 50px;
      }
 .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 320px;
        /* height: 320px; */
        background:#D5ECCD;
        box-shadow: 0 15px 50px rgba(0,0,0,0.4);
        filter:blur(4px);
        border-radius:10px;
      }
.swiper-slide-active{
  filter:blur(0px);
  background:white;
}
.testimonialBox{
  position:relative;
  width:100%;
  padding:40px;
  padding-top:60px;
}
.testimonialBox .quote{
  position:absolute;
  left:30px;
  top:20px;
  opacity: 0.2;
}
.testimonialBox .details{
  font-family: Arial, Helvetica, sans-serif;
  display:flex;
  align-items:center;
  margin-top:20px;
}
.testimonialBox .details .imgBx{
  position:relative;
  width:80px;
  height:80px;
  border-radius:50%;
  overflow:hidden;
  margin-right:10px;
  border:3px solid green;
}
.testimonialBox .details .imgBx img{
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:100%;
  object-fit:cover;
}
.testimonialBox .details h3{
  font-family: Arial, Helvetica, sans-serif;
 font-size:20px;
 font-weight:600;
 letter-spacing:1px;
 color:#2196f3;
 line-height:1.1em;
}
.testimonialBox .details h3 span{
  font-family: Arial, Helvetica, sans-serif;
  font-size:14px;
  color:#666;
}
 /********************clent section end ************************ */
  /************************our team******************************* */
  @import url('https://fonts.googleapis.com/css?family=Allura|Josefin+Sans');
.Our_Team{
  background:  #D5ECCD;
  font-family: 'Josefin Sans', sans-serif;
  cursor: pointer;

}
.Our_Team .wrapper{
  margin-top: 10%;
}

.Our_Team .wrapper h1{
  font-size: 58px;
  margin-bottom: 60px;
  text-align: center;
  font-weight:600;
}

.Our_Team .team{
  display: flex;
  justify-content: center;
  width: auto;
  text-align: center;
  flex-wrap: wrap;
  border-radius:2rem;
}

.Our_Team .team .team_member{
  background: #fff;
  margin: 5px;
  margin-bottom: 50px;
  width: 300px;
  padding: 20px;
  line-height: 20px;
  color: #8e8b8b;  
  position: relative;
}

.Our_Team .team .team_member h3{
  color: #81c644;
  font-size: 26px;
  margin-top: 50px;
}

.Our_Team .team .team_member p.role{
  color: black;
  margin: 12px 0;
  font-size: 1.5rem;
  font-weight:600;
}

.Our_Team .team .team_member .team_img{
  position: absolute;
  top: -50px;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background: #fff;
  overflow:hidden;
}

.Our_Team .team .team_member .team_img img{
  width: 100px;
  height: 100px;
  padding: 5px;
  border-radius:5rem;
  object-fit:cover;

}
#team_read_more{
  padding:0.6rem;color:white;background:green;border-radius:15px;transition:0.4s ease;position:absolute;bottom:0rem; width:80%;
}
/* **************************************our team end *************************************/
/*************************************brand partners*************************************** */
#partern_icon{
  width: 15vh;
  height: 15vh;
  border-radius: 30%;
  background: #fff;
  overflow:hidden;
  box-shadow: 5px 10px #888888;
}
@media screen and (min-width:1000px)  and (max-width:500px){
    #partern_icon{
 margin-top:2vw;
 width: 12vh;
  height: 12vh;

}
}
@media screen and (min-width:1000px) {
    #partern_icon{
        margin-top:2vw;
    width: 25vh;
  height: 25vh;

}
}
/********************brand partner end******************************* */

/**************************newsletter******************************/

.newsletter{

    margin: 0;
    padding: 0;
    width:100%;
    height:20vw;
    box-sizing: border-box;
    scroll-behavior: smooth;
    scroll-padding-top:3rem ;
    list-style: none;
    text-decoration: none;
    padding:4.5rem 0 3rem;
}
.newslatter_container {
  position:relative;
 display: flex;
 flex-direction: column;
 align-items: center;
 row-gap: 2rem;
 justify-content: center;
 text-align: center;
}
.newslatter_container h2{
    font-size: 2.3rem;
    font-weight:600;
}
.newslatter_container form{
    background: #fff;
    box-shadow: 2px 2px 18px rgb(14 52 54 / 15%);
    padding: 6px 10px;
    border-radius: 5rem;
    position:relative;
}
.newslatter_container form input{
border:none;
outline: none;
align-items:center;
}
.newslatter_container #email-box{
    width:550px;
    border-radius:5rem;
    height:80px;
}
.newslatter_container form .btn{
 padding: 12px 34px;
 font-weight: 300;
 background:#D5ECCD;
 font-size:1.5rem;
 border-radius:6rem;
position:absolute;
margin-left:72%;
margin-top:-4.2rem;
}
@media screen and (min-width:900px) and (max-width:1400px)
{
  .newsletter{

      width:100%;
      height:32vw;

   }
  .newslatter_container h2
  {
    font-size: 3vw;
  }
  .newslatter_container form{
    width:50%;
  

}
}
@media screen and (min-width:500px) and (max-width:890px)
{
  .newsletter{

    width:100%;
    height:38vh;

   }
.newslatter_container h2
{
   font-size: 3vh;
}
.newslatter_container form{
   width:70%;
  }
  .newslatter_container form .btn{

      margin-left:62%;

   }
}
@media screen and (min-width:300px) and (max-width:499px)
{
  .newsletter{

    width:100%;
    height:40vh;

   }
.newslatter_container h2
{
   font-size: 3vh;
}
.newslatter_container form{
   width:89%;
  }
  .newslatter_container form .btn{

      margin-left:62%;

   }
}
@media screen and (max-width:299px){
  .newsletter{

width:100%;
height:49vh;

}
.newslatter_container h2
{
font-size: 3vh;
}
.newslatter_container form{
width:89%;
}
.newslatter_container form .btn{

  margin-left:62%;

}
.newslatter_container #email-box{
    width:350px;
    border-radius:5rem;
    height:10vh;
}
.newslatter_container form .btn{
  background:#D5ECCD;
 padding: 10px 28px;
 font-size:1.2rem;
 border-radius:6rem;
margin-left:25%;
margin-top:1rem;
}

}
/*****************************newsletter end************************ */

/************************************about section******************* */
.about-container{
        display: grid;
        grid-template-columns: 40% 60%;
        /* background-color: blue; */
        height:45vw;
        justify-content: center;
        /* border-bottom: 1.8px solid black; */
        position:relative;
   }
   .about-item{
        /* background-color: beige;
        border:1px solid black; */
        text-align: center;
        height:40vw;
    
    }
    .custom-shape-divider-top-1655277483 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg);
}

.custom-shape-divider-top-1655277483 svg {
    position: relative;
    display: block;
    width: calc(138% + 1.3px);
    height: 40vw;
}

.custom-shape-divider-top-1655277483 .shape-fill {
    fill: #C2E2BB;
}
     .about-img-flex{
        background-color: teal;
        display:flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        transition: 0.5s ease;
     
    }
    .image-about{
        /* background-color: red;
        border:1px solid black; */
        padding: 10% 5%;
        align-items: center;
        cursor: pointer;
        height: 30vw;;
      
    }
    .about-item h1{
          margin-top: 2rem;
          font-size:3vw;
         font-weight:600;
         position: relative;
         z-index: 2;
    }
    .about-item h3{
      margin-top:2vw;
        font-size: 2.2rem;position: relative;z-index: 2;
    }
    .about-item p{
        position:relative;text-align: center;  margin-left: 2rem;margin-right: 4rem;top:2vw;
        line-height: 1.8vw;word-spacing: 0.5rem;color:#000;
        z-index: 2;
        font-size:1.7vw;
    }
    .about-item button{
        margin-top: 2.5rem;
        background: #2f4d37;
        color: white;
        outline: none;
        padding: 8px 10px;
        font-size: 1.2rem;
        cursor: pointer;
        border-radius: 5rem;
        letter-spacing: 1px;
        border: 1px solid transparent;
        transition: all .5s ease-in-out;
        position: relative; 
        z-index: 2;
    }

    
  @media screen and (min-width:100px) and (max-width:299px)
  {
       #about-image{
        display:none;
       }
       .about-container{

        grid-template-columns: auto;
        height:116vh;
    }
    .about-item{
        height:115vh;
    }
    .custom-shape-divider-top-1655277483 svg {
    height: 85vh;
   }
   .about-item h1{
          margin-top: 2vh;
         font-size: 5vh;
    }
    .about-item h3{
        font-size: 3.5vh;
    }
    .about-item p{
        margin-left: 2vh;
        margin-right: 2vh;
        line-height: 3vh;
        font-size: 2.5vh;
     
    }
    .about-item button{
        margin-top: 2.5vh;
        font-size: 2.8vh;
        letter-spacing: 1px;
    }

  }

  @media screen and (min-width:300px) and (max-width:500px)
  {
       #about-image{
        display:none;
       }
       .about-container{

        grid-template-columns: auto;

        height:106vh;
    }
    .about-item{
        height:105vh;
    }
    .custom-shape-divider-top-1655277483 svg {
    height: 85vh;
   }
   .about-item h1{
          margin-top: 2vh;
         font-size: 5vh;
    }
    .about-item h3{
        font-size: 3.5vh;
    }
    .about-item p{
        margin-left: 2vh;
        margin-right: 2vh;
        line-height: 3vh;
        font-size: 2.5vh;
     
    }
    .about-item button{
        margin-top: 2.5vh;
        font-size: 2.8vh;
        letter-spacing: 1px;
    }

  }
  
  @media screen and (min-width:501px) and (max-width:1000px)
  {
       #about-image{
        display:none;
       }
       .about-container{

        grid-template-columns: auto;
        height:76vh;
    }
    .about-item{
        height:75vh;
    }
    .custom-shape-divider-top-1655277483 svg {
    height: 85vh;
   }
   .about-item h1{
          margin-top: 2vh;
         font-size: 5vh;
    }
    .about-item h3{
        font-size: 3.5vh;
    }
    .about-item p{
        margin-left: 2vh;
        margin-right: 2vh;
        line-height: 3vh;
        font-size: 2.5vh;
     
    }
    .about-item button{
        margin-top: 2.5vh;
        font-size: 2.8vh;
        letter-spacing: 1px;
    }

  }

    @media screen and (min-width:1010px) and (max-width:1400px){

       .about-container{
        grid-template-columns: 40% 60%;
        height:85vh;
    }
    .about-item{
        height:84vh;
    }
    .custom-shape-divider-top-1655277483 svg {
    height: 85vh;
   }
   .about-item h1{
          margin-top: 1.5vw;
         font-size: 4vw;
    }
    .about-item h3{
        font-size: 3vw;
    }
    .about-item p{
        margin-left: 2vh;
        margin-right: 2vh;
        line-height: 2.1vw;
        font-size: 2vw;
     
    }
    .about-item button{
        margin-top: 2.5vh;
        font-size: 2.8vh;
        letter-spacing: 1px;
    }
  }  
/*********************************about section end****************** */
/*****************popular couses******************************************* */

.popular-container{
     background:  #D5ECCD;
     font-family: 'Josefin Sans', sans-serif;
    
        display: grid;
        grid-template-columns: 70% 30%;
        /* background-color: blue; */
        height:48vw;
        justify-content: center;
        /* border-bottom: 1.8px solid black; */
   }
   .popular-item{
        background-color: white;
        /* border:1px solid black; */
        text-align: center;
        height:45vw;
    
    }

    #card_section {
    height: 43vw;
    /* background-color: red; */
    width:100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: center;
  
    }

    .container_card {
    perspective: 1000px;
    height: 15vw;
    width: 19vw;
    margin: 1rem 0rem;
    cursor: pointer;
    color:white;
  }
  .card {
    transform-style: preserve-3d;
    height: 100%;
    width: 100%;
    transition: 0.5s ease;
    color:white;
  }
  #front{
    height: 100%;
    width: 100%;
    transform-style: preserve-3d;
    color: #ffffff;
    color:white;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    border-radius: 0.4em;
    position: absolute;
    top: 0;
    bottom: 0;
    backface-visibility: hidden;
  }
  #back {
    height: 100%;
    width: 100%;
    transform-style: preserve-3d;
    color: #ffffff;
    color:white;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    border-radius: 0.4em;
    position: absolute;
    top: 0;
    bottom: 0;
    backface-visibility: hidden;
  }
  .front {
    background: linear-gradient(to right, #59b151, #477745);
  }
  .front img {
    width: 5em;
  }
  .content_card {
    transform: translateZ(100px);
  }
  .content_card h3 {
    font-size: 1.5vw;
    margin-top: 1em;
    font-weight: 600;
    letter-spacing: 0.04em;
  }
   #pp {
    font-size: 1vw;
    line-height: 2em;
    letter-spacing: 0.02em;
    padding: 0 3em;
  }
  #back {
    background-color: #28253a;
    transform: rotateX(180deg);

  }
  .container_card:hover .card {
    transform: rotateX(180deg);

  }
  @media screen and (min-width:100px) and (max-width:399px)
  {
    #popular-image
    {
      display: none;
    }
    .popular-container{
        grid-template-columns: auto;
        height:139vh;
   }
   .popular-item{
        height:138vh;
    
    }
    #card_section {
    height: 137vh;
    }
    .container_card {

      height: 19vh;
      width: 31.5vh;
      margin: 0.6rem 0rem;
     }
     #pp {
    font-size: 2vh;
    line-height: 1.8em;
    letter-spacing: 0.02em;
    padding: 0 3em;
  }
  #front img {
    width: 8vh;
    height: 8vh;
  }
  .content_card h3 {
    font-size: 2.8vh;
    font-family: 'Josefin Sans', sans-serif;
 
  }
  }
  @media screen and (min-width:400px) and (max-width:700px)
  {
    #popular-image
    {
      display: none;
    }
    .popular-container{
        grid-template-columns: auto;
        height:69vh;
   }
   .popular-item{
        height:68vh;
    
    }
    #card_section {
    height: 67vh;
    }
    .container_card {

    height: 18vh;
    width: 19vh;

  }
  #pp {
    font-size: 1.4vh;
    line-height: 1.8em;
    letter-spacing: 0.02em;
    padding: 0 3em;
  }
  #front img {
    width: 5vh;
    height: 5vh;
  }
  .content_card h3 {
    font-size: 1.59vh;
 
  }
  }
@media screen and (min-width:701px) and (max-width:950px)
{
  .popular-container{
        grid-template-columns: 65% 35%;
        height:59vh;
   }
   .popular-item{
        height:58vh;
    
    }
    #card_section {
    height: 57vh;
    }
    .container_card {

    height: 15vh;
    width: 19vh;

  }

  .img-popular{
    align-items: center;
    justify-content: center;
    justify-items: center;
    height:50vh;
  }
  #pp {
    font-size: 1.4vh;
    line-height: 1.8em;
    letter-spacing: 0.02em;
    padding: 0 3em;
  }
  #front img {
    width: 5vh;
    height: 5vh;
  }
  .content_card h3 {
    font-size: 1.59vh;
 
  }
}
/* **************************************services section *********************************/
.services-container{
        display: grid;
        grid-template-columns: 35% 65%;
        /* background-color: #C6FFB8; */
        background-color:#D4FFCA;
        height:45vw;
        justify-content: center;
        /* border-bottom: 1.8px solid black; */
        position:relative;
   }
   .services-item{
        /* background-color: beige;
        border:1px solid black; */
        text-align: center;
        height:44vw;
        align-items: center;
    
    }
  .custom-shape-divider-top-1655104116 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
  
}

.custom-shape-divider-top-1655104116 svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    /* height: 180px; */
    height:20vh;
}

.custom-shape-divider-top-1655104116 .shape-fill {
    fill: #D5ECCD;
}
.img-services{
    align-items: center;
    justify-content: center;
    justify-items: center;
    /* height:50vh; */
    /* background: yellow; */
  }
#services-img{
     width:100%;height:35vw;margin-top:18%; position: relative; z-index: 2;
}
.services-text{
     position:relative;
     text-align:center;  color: #000000;
     z-index:10;
     text-align:center;
     font-size: 1.6vw;
     line-height: 2.2vw;
     word-spacing: 1vw;
     font-weight: 600;
}

.container_service_card{
 display: flex;
 justify-content: center;
 align-items: center;
 max-width: 100%;
 flex-wrap: wrap;
 padding: 0px 40px;
 overflow: hidden;
 /* background: #4ce25b; */
 height:43vw ;
}

.container_service_card .card{
  position: relative;
  width:15vw;
  height:12vw;
  box-shadow: inset 5px 5px 5px rgb(0,0,0,0.03);       
  border-radius:15px ;
  margin:25px;
}

.container_service_card .card .box{
  position: absolute;
  top:10px;
  left:10px;
  right:10px;
  background: #ebf5fc;
  box-shadow: 0 10px 20px rgba(0,0,0,0.1);
  border-radius: 15px;
  display: flex;
  justify-content: center;
  align-items:center;
  transition: 0.5%;
  height:10.5vw;
  width:13vw;
}
.container_service_card .card:hover .box {
  transform:translateY(-50px);
  box-shadow: 0 10px 40px rgba(0,0,0,0.8);
  background: linear-gradient(45deg,#576e59 ,#4ce25b);
  z-index:15;
}
.container_service_card .card .box .content{
  padding:15px;
  text-align: center;
}
.container_service_card .card .box .content h1{
  position:absolute;
  /* top:-8vw; */
  left:20%;
  align-items:center;
  font-size: 8em;
  color:rgba(0,0,0,0.02);
  transition: 0.5s;
  pointer-events: none;

}
.container_service_card .card .box .content h1{
  color:rgba(0,0,0,0.05);
}
.container_service_card .card .box .content h3{
  font-size:1.1em;
  /* color:#777; */
  color:black;
  z-index: 1;
  transition: 0.5s;
}
.container_service_card .card .box .content p{
  font-size: 1em;
  font-weight: 300;
  color:#777;
  Z-index:1;
  transition: 0.5s;
}
.container_service_card .card:hover .box .content h3,
.container_service_card .card:hover .box .content p{
  color:#fff;

}
.container_service_card .card .box .content a{
  position: relative;
  display: inline-block;
  padding:2px 10px;
  background: #49584b;
  margin-top: 15px;
  border-radius: 20px;
  color:#fff;
  text-decoration: none;
  font-weight: 400;
  box-shadow: 0 10px 20px rgba(0,0,0,0.8);
}
.container_service_card .card:hover .box .content #a
{
  background: #405742;
} 
@media screen and (min-width:100px) and (max-width:700px)
{
  #services-img
  {
    display:none;
  }
  .services-container{
        grid-template-columns:auto;
        height:225vh;
   }
   .services-item{

        height:224vh;
    
    }
    .container_service_card{
     height:223vh ;
    }
    .services-text{
     font-size: 2.4vh;
     line-height: 2.3vh;
     word-spacing: 1vh;
   }
   
   .container_service_card .card{
     width:33vh;
     height:28vh;
     margin:24px;
     top:3vh;
  }
.container_service_card .card .box{
  top:10px;
  left:10px;
  right:10px;
  transition: 0.5%;
  height:26vh;
  width:30vh;
}
}


@media screen and (min-width:701px) and (max-width:1000px)
{
  #services-img
  {
    display:none;
  }
  .services-container{
        grid-template-columns:auto;
        height:95vh;
   }
   .services-item{

    height:94vh;

   }
   .services-text{
     font-size: 2.4vh;
     line-height: 2.3vh;
     word-spacing: 1vh;
   }
   .container_service_card{
     height:93vh ;
    }
    .container_service_card .card{
     width:23vh;
     height:18vh;
     margin:24px;
     top:2vh;
  }
  .container_service_card .card .box{
  top:10px;
  left:10px;
  right:10px;
  transition: 0.5%;
  height:16vh;
  width:20vh;
}
 
} 

@media screen and (min-width:1001px) and (max-width:1200px)
{
  .services-container{
        grid-template-columns:25%% 75%;
        height:115vh;
   }
   .services-item{

height:114vh;

}
.services-text{
 font-size: 2.4vw;
 line-height: 2.3vw;
 word-spacing: 1vw;
}
.container_service_card{
     margin-top:1.5vw;
     height:113vh ;
     justify-content:space-around;
    }

.container_service_card .card{
  width:20vw;
  height:16vw;
  margin:16px;
  z-index: 20;
}

.container_service_card .card .box{
  height:14vw;
  width:18vw;
}
}

@media screen and (min-width:1250px) and (max-width:1450px){
  .container_service_card .card{
  width:15vw;
  height:15vw;
  z-index: 20;
}
  .container_service_card .card .box{
  height:13vw;
  width:13vw;
}
}

/**************************services section end ********************************************* */
</style>

<body style="overflow-x: hidden;">

 <!------------------------ intro section----------------- ---------------->
 <div class="content-grid">
      
        <div class="custom-shape-divider-bottom-1655019977">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>
          <!-- attached img -->
    <div class="content-item" id="content-image">
        <div id="content-img-flex">
            <div class="img-flex">
                <img src="asset/intro.png"style="width:100%;height:100%;margin-top:4%;position:relative;z-index:2;">
           </div>
        </div>
    </div>   
    <div class="content-item" >
             <h1 id="heading"><span>B</span>ridge <span>for your</span> future</h1>
             <p ><strong>We the team of Orena Solution are passionate about trying to bridge the gap between the academics and the industry. We are a visionary ICT company, looking to rejuvenate the employability levels of the Indian workforce. Orena Solution comprises of members from fortune 500 companies having vast experience in ICT training, online and offline campuses and executive training through various company as well as Academic campuses.<strong></p>
             <button id="content-button"><strong>Explore More<strong></button>
    
                <div class="row" id="content-data"  style="z-index:3; position:absolute;margin-top: 2rem; ">
                    <div class="counters" style="border: none;">
                        <a class="counter" style="color: #ffa500;">1</a>
                        <a id ="counter_p" >IP Patents</a>
                    </div>
                    <div class="counters" style="">
                        <a class="counter" style="color: #ff4500;">1500</a><span id="counter_icon" style="color: #ff4500;">+</span>
                        <a id ="counter_p" >Engineers Trained</a>
                    </div>
                    <div class="counters" >
                        <a class="counter" style="color: #87ceeb;">98</a><span id="counter_icon"style="color: #87ceeb;">%</span>
                        <a id ="counter_p">Placement</a>
                    </div>
                    <div class="counters">
                        <a class="counter" style="color: #008000;">20</a>
                        <a id ="counter_p" >Intellectual Properties</a>
                    </div>
                    <div class="counters" >
                        <a class="counter" style="color: #808080;">3</a>
                        <a id ="counter_p">Entrepreneurs</a>
                    </div>
                </div>
            </div>
     </div>
 
</div>

 <!------------------------- intro section end-------------------- ------------ -->
  <!-- -----------------------------about section------------------------------- -->
  <div class="about-container">
        <div class="custom-shape-divider-top-1655277483">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M741,116.23C291,117.43,0,27.57,0,6V120H1200V6C1200,27.93,1186.4,119.83,741,116.23Z" class="shape-fill"></path>
            </svg>
             </div>
        <div class="about-item" id="about-image">
            <div id="about-img-flex">
                <div class="image-about">
                    <img src="img/second_about.png"style="width:100%;height:100%;margin-top:6%; position: relative; z-index: 2;">
               </div>
            </div>
        </div>
        <div class="about-item">
            <h1 >About Us</h1>
              <h3 >Be On The Top & Grow With Us</h3>
              <p ><strong>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est vel, accusantium praesentium molestias, doloremque magni nobis dicta excepturi ex ipsa voluptate nisi maiores quos quis fugiat deleniti culpa iusto ullam!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vero deserunt voluptatem! Nulla, doloremque enim ipsum fugit error mollitia .
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam natus perspiciatis quo non, totam voluptatem voluptate molestiae quasi corporis labore!
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam culpa iste dolor provident explicabo reprehenderit error omnis asperiores et doloremque!
              </strong>
             
             </p>
                 <button><b>Read More</b></button>
        </div>
   </div>
  <!-- -----------------------------about section end---------------------------- -->
  <!-------------------------------------- popular courses -------------------------->
  <div id="tag" style="text-align: center;color: #000000;font-weight: bold;padding: 20px 0px 10px 0px;  background:  #D5ECCD;">Popular Courses</div>
  <section class="popular-container">
     
     <div class="popular-item" >
         <div class="cource_card">
             <section id="card_section" >
                 <div class="container_card">
                   <div class="card" >
                     <div class="front" id="front">
                       <div class="content_card">
                         <img src="img/img1.png" />
                         <h3 style=" font-family: 'Josefin Sans', sans-serif;">Introduction To GIS</h3>
                       </div>
                     </div>
                     <div class="back" id="back">
                       <div class="content">
                         <p id ="pp">
                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure
                           nam expedita exercitationem?
                         </p>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="container_card">
                   <div class="card">
                     <div class="front" id="front">
                       <div class="content_card">
                         <img src="img/img2.png" />
                         <h3 style=" font-family: 'Josefin Sans', sans-serif;">Embedded System</h3>
                       </div>
                     </div>
                     <div class="back" id="back">
                       <div class="content">
                         <p id ="pp">
                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure
                           nam expedita exercitationem?
                         </p>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="container_card">
                   <div class="card">
                     <div class="front" id="front">
                       <div class="content_card">
                         <img src="img/img3.png" />
                         <h3 style=" font-family: 'Josefin Sans', sans-serif;">LinkedIn for Business</h3>
                       </div>
                     </div>
                     <div class="back" id="back">
                       <div class="content">
                         <p id ="pp">
                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure
                           nam expedita exercitationem?
                         </p>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="container_card">
                     <div class="card">
                       <div class="front" id="front">
                         <div class="content_card">
                           <img src="img/img4.png" />
                           <h3 style=" font-family: 'Josefin Sans', sans-serif;">Data Analysis</h3>
                         </div>
                       </div>
                       <div class="back" id="back">
                         <div class="content">
                           <p id ="pp">
                             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure
                             nam expedita exercitationem?
                           </p>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="container_card">
                     <div class="card">
                       <div class="front" id="front">
                         <div class="content_card">
                           <img src="img/img5.png" />
                           <h3 style=" font-family: 'Josefin Sans', sans-serif;">DEVELOP</h3>
                         </div>
                       </div>
                       <div class="back" id="back">
                         <div class="content">
                           <p id ="pp">
                             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure
                             nam expedita exercitationem?
                           </p>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="container_card">
                     <div class="card">
                       <div class="front" id="front">
                         <div class="content_card">
                           <img src="img/img3.png" />
                           <h3 style=" font-family: 'Josefin Sans', sans-serif;">Coding Cources</h3>
                         </div>
                       </div>
                       <div class="back" id="back">
                         <div class="content">
                           <p id ="pp">
                             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure
                             nam expedita exercitationem?
                           </p>
                         </div>
                       </div>
                     </div>
                   </div>
               </section>
 
         </div>
     </div>
     <div class="popular-item" id="popular-image">
         <div id="popular-img-flex">
             <div class="img-popular" >
                 <img src="img/courses.png"style="width:100%;height:90%;margin-top:12%; position: relative; z-index: 2;">
            </div>
         </div>
     </div>
  </section>
  <div><a class="btn btn-success" href="Courses.php" style="margin-left: 44.5%;">View all Courses</a></div>
  <!------------------------------------- popular courses end --------------------------------------------------->
  <!-------------------------------------- services section--------------------------------------------------- -->
  <br>
  <div id="tag" style="text-align: center;color: #000000;font-weight: bold;padding: 20px 0px 10px 0px;  background:  #D5ECCD;">Our Services</div>
   <section class="services-container">
          <div class="custom-shape-divider-top-1655104116">
               <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                   <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                   <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                   <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
               </svg>
           </div>
     
        <div class="services-item" id="services-img">
          <div id="services-img-flex">
               <div class="img-services" >
                   <img id="services-img" src="img/services.png">
              </div>
           </div>
        </div>
        <div class="services-item">
 
          <div class="container_service_card" id="container_service_card">
               <div class="services-text">We provide full-tech solutions to retain the attention of the target audience and leave a long-term impression on the business.</div>
               <div class="card">
                 <div class="box">
                   <div class="content">
                     <h1>01</h1>
                     <h3>Industry</h3>
                     <p>Lorem ipsum dolor sit amet consectetur
          
                       </p>
                       <a href="#" id="a">Explore</a>
                   </div>
                 </div>
               </div>
               <div class="card">
                 <div class="box">
                   <div class="content">
                     <h1>02</h1>
                     <h3>ProductS</h3>
                     <p>Lorem ipsum dolor sit amet consectetur
                       
                      </p>
                       <a href="#">Explore</a>
                   </div>
                 </div>
               </div>
               <div class="card">
                 <div class="box">
                   <div class="content">
                     <h1>03</h1>
                     <h3>Business Support</h3>
                     <p>Lorem ipsum dolor sit amet consectetur
                       
                      </p>
                       <a href="#">Explore</a>
                   </div>
                 </div>
               </div>
               <div class="card">
                 <div class="box">
                   <div class="content">
                     <h1>04</h1>
                     <h3>Expert Exchange </h3>
                     <p>Lorem ipsum dolor sit amet consectetur
                       
                      </p>
                       <a href="#">Read More</a>
                   </div>
                 </div>
               </div>
               <div class="card">
                 <div class="box">
                   <div class="content">
                     <h1>05</h1>
                     <h3>Ip Patent & Development</h3>
                     <p>Lorem ipsum dolor sit amet consectetur
                         
                     </p>
                       <a href="#">Read More</a>
                   </div>
                 </div>
               </div>
               <div class="card">
                 <div class="box">
                   <div class="content">
                     <h1>06</h1>
                     <h3>Talent Acquisition</h3>
                     <p>Lorem ipsum dolor sit amet consectetur
                      
                      </p>
                       <a href="#">Read More</a>
                   </div>
                 </div>
               </div>
     
     </div>
     <div style="color:#fff;width:9rem;height:2.5rem;z-index:20;position:relative;bottom:0rem;background:#49584b;padding:0.4rem 1rem;cursor:pointer;border-radius:15px;"> All services</a></div>
     </section>
   <br><br>
     <!-- --------------------------------------------------------client section ------------------------------------>
  <div class="row" style=" background-color: #D5ECCD; margin-top: 10px; padding-bottom: 50px;position:realtive;min-height:20vw;justify-content:center;align-items:center;overflow:hidden;">
          <div id="tag" style="text-align: center;color: #000000;font-weight: bold;padding: 20px 0px 10px 0px;">Our Clients</div>

              
     <!-- Swiper -->
     <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="testimonialBox">
              <img src="img/quote.png" class="quote" style="width:3.5rem;height:3.5rem;">
              <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur 
                  adipisicing elit. Expedita adipisci, 
                  voluptatibus ut nam.</p>
               </div>
               <div class="details">
                <div class="imgBx">
                  <img src="img/client1.jpg" >
                </div>
                <h3>someone tittle<br><span><b>Creative Designer</b></span></h3>
                </div>
                <div class="icon">
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;"> <i class="fa-brands fa-facebook-f "></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-instagram"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-twitter"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem;font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-linkedin-in"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="testimonialBox">
              <img src="img/quote.png" class="quote" style="width:3.5rem;height:3.5rem;">
              <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur 
                  adipisicing elit. Expedita adipisci, 
                  voluptatibus ut nam.</p>
               </div>
               <div class="details">
                <div class="imgBx">
                  <img src="img/client2.jpg" >
                </div>
                <h3>someone tittle<br><span><b>Creative Designer</b></span></h3>
                </div>
                <div class="icon">
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;"> <i class="fa-brands fa-facebook-f "></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-instagram"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-twitter"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem;font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-linkedin-in"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="testimonialBox">
              <img src="img/quote.png" class="quote" style="width:3.5rem;height:3.5rem;">
              <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur 
                  adipisicing elit. Expedita adipisci, 
                  voluptatibus ut nam.</p>
               </div>
               <div class="details">
                <div class="imgBx">
                  <img src="img/client3.jpg" >
                </div>
                <h3>someone tittle<br><span><b>Creative Designer</b></span></h3>
                </div>
                <div class="icon">
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;"> <i class="fa-brands fa-facebook-f "></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-instagram"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-twitter"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem;font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-linkedin-in"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="testimonialBox">
              <img src="img/quote.png" class="quote" style="width:3.5rem;height:3.5rem;">
              <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur 
                  adipisicing elit. Expedita adipisci, 
                  voluptatibus ut nam.</p>
               </div>
               <div class="details">
                <div class="imgBx">
                  <img src="img/client4.jpg" >
                </div>
                <h3>someone tittle<br><span><b>Creative Designer</b></span></h3>
                </div>
                <div class="icon">
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;"> <i class="fa-brands fa-facebook-f "></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-instagram"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-twitter"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem;font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-linkedin-in"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="testimonialBox">
              <img src="img/quote.png" class="quote" style="width:3.5rem;height:3.5rem;">
              <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur 
                  adipisicing elit. Expedita adipisci, 
                  voluptatibus ut nam.</p>
               </div>
               <div class="details">
                <div class="imgBx">
                  <img src="img/client5.jpg" >
                </div>
                <h3>someone tittle<br><span><b>Creative Designer</b></span></h3>
                </div>
                <div class="icon">
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;"> <i class="fa-brands fa-facebook-f "></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-instagram"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-twitter"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem;font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-linkedin-in"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="testimonialBox">
              <img src="img/quote.png" class="quote" style="width:3.5rem;height:3.5rem;">
              <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur 
                  adipisicing elit. Expedita adipisci, 
                  voluptatibus ut nam.</p>
               </div>
               <div class="details">
                <div class="imgBx">
                  <img src="img/client6.jpg" >
                </div>
                <h3>someone tittle<br><span><b>Creative Designer</b></span></h3>
                </div>
                <div class="icon">
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;"> <i class="fa-brands fa-facebook-f "></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-instagram"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-twitter"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem;font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-linkedin-in"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="testimonialBox">
              <img src="img/quote.png" class="quote" style="width:3.5rem;height:3.5rem;">
              <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur 
                  adipisicing elit. Expedita adipisci, 
                  voluptatibus ut nam.</p>
               </div>
               <div class="details">
                <div class="imgBx">
                  <img src="img/client7.jpg" >
                </div>
                <h3>someone tittle<br><span><b>Creative Designer</b></span></h3>
                </div>
                <div class="icon">
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;"> <i class="fa-brands fa-facebook-f "></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-instagram"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-twitter"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem;font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-linkedin-in"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="testimonialBox">
              <img src="img/quote.png" class="quote" style="width:3.5rem;height:3.5rem;">
              <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur 
                  adipisicing elit. Expedita adipisci, 
                  voluptatibus ut nam.</p>
               </div>
               <div class="details">
                <div class="imgBx">
                  <img src="img/client1.jpg" >
                </div>
                <h3>someone tittle<br><span><b>Creative Designer</b></span></h3>
                </div>
                <div class="icon">
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;"> <i class="fa-brands fa-facebook-f "></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-instagram"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-twitter"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem;font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-linkedin-in"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="testimonialBox">
              <img src="img/quote.png" class="quote" style="width:3.5rem;height:3.5rem;">
              <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur 
                  adipisicing elit. Expedita adipisci, 
                  voluptatibus ut nam.</p>
               </div>
               <div class="details">
                <div class="imgBx">
                  <img src="img/client2.jpg" >
                </div>
                <h3>someone tittle<br><span><b>Creative Designer</b></span></h3>
                </div>
                <div class="icon">
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;"> <i class="fa-brands fa-facebook-f "></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-instagram"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-twitter"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem;font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-linkedin-in"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="testimonialBox">
              <img src="img/quote.png" class="quote" style="width:3.5rem;height:3.5rem;">
              <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur 
                  adipisicing elit. Expedita adipisci, 
                  voluptatibus ut nam.</p>
               </div>
               <div class="details">
                <div class="imgBx">
                  <img src="img/client3.jpg" >
                </div>
                <h3>someone tittle<br><span><b>Creative Designer</b></span></h3>
                </div>
                <div class="icon">
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;"> <i class="fa-brands fa-facebook-f "></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-instagram"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-twitter"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem;font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-linkedin-in"></i></a>
               <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
</div>
          <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
           <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        loop:true,
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>

  <!------------------------------------------------- clinet section end  ---------------------------------------->
    <!-- --------------------------------------------brand partner-------------------------------------------- -->
    <div class="head" id="tag" style="padding: 50px 0px 20px 0px; background-color: white;">Brand Partners</div>
    <section class="clientlogo-area overflow-hidden" style="background-color:white; padding-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <section class="customer-logos slider">
                        <div class="slide"><a href="coming_soon.html"><img loading="lazy" src="img/arastu.png" id="partern_icon"></a></div>
                        <div class="slide"><a href="coming_soon.html"><img loading="lazy" src="img/arcedior.png" id="partern_icon"></a></div>
                        <div class="slide"><a href="coming_soon.html"><img loading="lazy" src="img/baroda-polyform.png" id="partern_icon" ></a></div>
                        <div class="slide"><a href="coming_soon.html"><img loading="lazy" src="img/brenolabs.png"  id="partern_icon"></a></div>
                        <div class="slide"><a href="coming_soon.html"><img loading="lazy" src="img/cognixia.png"  id="partern_icon"></a></div>
                        <div class="slide"><a href="coming_soon.html"><img loading="lazy" src="img/credence.png"  id="partern_icon"></a></div>
                        <div class="slide"><a href="coming_soon.html"><img loading="lazy" src="img/crescent.png"  id="partern_icon"></a></div>
                        <div class="slide"><a href="coming_soon.html"><img loading="lazy" src="img/eliteware.png" id="partern_icon" ></a></div>
                        <div class="slide"><a href="coming_soon.html"><img loading="lazy" src="img/evosys.png" id="partern_icon" ></a></div>
                        <div class="slide"><a href="coming_soon.html"><img loading="lazy" src="img/fineline.png" id="partern_icon" ></a></div>
                        <div class="slide"><a href="coming_soon.html"><img loading="lazy" src="img/jenex.png" id="partern_icon" ></a></div>
                        <div class="slide"><a href="coming_soon.html"><img loading="lazy" src="img/jhp.jfif" id="partern_icon" ></a></div>
                        <div class="slide"><a href="coming_soon.html"><img loading="lazy" src="img/maneko.png" id="partern_icon" ></a></div>
                        <div class="slide"><a href="coming_soon.html"><img loading="lazy" src="img/modular-tank.png" id="partern_icon" ></a></div>
                        <div class="slide"><a href="coming_soon.html"><img loading="lazy" src="img/relcon.png" id="partern_icon" ></a></div>
                        <div class="slide"><a href="coming_soon.html"><img loading="lazy" src="img/Remax.png" id="partern_icon" ></a></div>
                        <div class="slide"><a href="coming_soon.html"><img loading="lazy" src="img/trinity-energy.png" id="partern_icon" ></a></div>
                    </section>
                </div>
            </div>
        </div>
    </section>
<!------------------------------------------------------ brand partner end------------------------------------------------------------->
     <!----------------------------------------------------------- Our Team ------------------------------------------------------>   
<div class="Our_Team" >
<div class="wrapper">
  <h1 id="tag">Our Team</h1>
  <div class="team">
    <div class="team_member">
      <div class="team_img">
        <img src="img/ek.jpg" alt="Team_image">
      </div>
      <h3>Mrs Ekata Mehul</h3>
      <p class="role">Principal Director</p>
        <div class="icon">
         <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;"> <i class="fa fa-envelope" aria-hidden="true"></i></a>
         <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa fa-phone" aria-hidden="true"></i></a>
       </div>
       <p>Ekata Mehul, Principal Director and CEO –Orena Solutions and Blazing Arrows Pvt.Ltd,and part of various Academic Institutions and Board of Studies for 14yrs and experience of Industry of 12yrs.</p>
       <p id="team_read_more">Read more</p>
     
      </div>
    <div class="team_member" >
      <div class="team_img">
        <img src="img/k.png" alt="Team_image">
      </div>
      <h3>Mr Ketan.Manvar</h3>
      <p class="role">Director</p>
      <div class="icon">
         <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;"> <i class="fa fa-envelope" aria-hidden="true"></i></a>
         <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa fa-phone" aria-hidden="true"></i></a>
       </div>
      <p>Mr Ketan Manvar is  the CEO of Relcon  Systems. He is a young, dynamic and a true technopreneur.  He has studied Instrumentation engineering at DDIT, Nadiad in 2000.</p>
      <p id="team_read_more">Read more</p>
     
    </div>
    <div class="team_member">
      <div class="team_img">
        <img src="img/b.jpg" alt="Team_image">
      </div>
      <h3>Dr. Bhuvan Unhelkar</h3>
      <p class="role">Prof. of Information Technology</p>
      <div class="icon">
         <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;"> <i class="fa fa-envelope" aria-hidden="true"></i></a>
         <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa fa-phone" aria-hidden="true"></i></a>
       </div>
      <p>Professor of Information Technology; Consultant Sarasota, Florida</p>
      <p id="team_read_more">Read more</p>
    </div>
    <div class="team_member">
      <div class="team_img">
        <img src="img/x.jpg" alt="Team_image">
      </div>
      <h3>Dr Prabhat Ranjan</h3>
      <p class="role">Vice Chancellor </p>
      <div class="icon">
         <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;"> <i class="fa fa-envelope" aria-hidden="true"></i></a>
         <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa fa-phone" aria-hidden="true"></i></a>
       </div>
      <p>Vice Chancellor at D Y Patil International University, Akurdi, Pune Former – Director, TIFAC</p>
      <p id="team_read_more">Read more</p>
    </div>
    <div class="team_member">
      <div class="team_img">
        <img src="img/j.jpg" alt="Team_image">
      </div>
      <h3>Mr J. C. Shukla</h3>
      <p class="role">CEO / Managing Director </p>
        <div class="icon">
         <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;"> <i class="fa fa-envelope" aria-hidden="true"></i></a>
         <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa fa-phone" aria-hidden="true"></i></a>
       </div>
      <p>CEO / Managing Director at Nahak Overseas Limited MBA – IIM, Ahmedabad</p>
      <p id="team_read_more">Read more</p>
    </div>
    <div class="team_member">
      <div class="team_img">
        <img src="img/p.jpg" alt="Team_image">
      </div>
      <h3>Mr Pratul Shroff</h3>
      <p class="role">Philanthropist </p>
        <div class="icon">
         <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;"> <i class="fa fa-envelope" aria-hidden="true"></i></a>
         <a href="#" style="padding:0.5rem 0.7rem; font-size: 1.4em; transition: 0.3s ease;">  <i class="fa fa-phone" aria-hidden="true"></i></a>
       </div>
      <p>Former – Founder of eInfochips Current – Founder for Dr K. R. Shroff Foundation</p> <br>
      <p id="team_read_more">Read more</p>
    </div>
  </div>
</div>	
</div>

<!----------------------------------------------------------- newslatter ------------------------------------------------------>
<div class="newsletter">

<section class="newslatter_container" >
<h2>Have Questions in Mind ?<br>Let us help you</h2>
<form actiom="" method="post">
<input type="email" name="" id="email-box" placeholder="Yourmail@gmail.com" required>
<button class="btn"> Send</button>
</form>
</section>
</div>

<!-- ------------------------------------------------newsletter_end -------------------------------------------------------------------->

   

</body>

<?php include "footer.php" ?>

<script type="text/javascript" src="asset/js/slick.js"></script>
<script>
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        dots: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
