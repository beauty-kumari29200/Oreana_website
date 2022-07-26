<!doctype html>
<html lang="en">
    <?php include "navbar.php" ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,500&display=swap');
        body,
        html {
            height: 100%;
        }

        .hero-image {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img/bgp.jpg");
            height: 65%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            opacity:0.8;
         
             }

        .hero-text {
            border: 3px solid #d4cece41;
            padding:20px ;
            border-radius: 25px;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 30%;
            transform: translate(-50%, -50%);
            color: rgba(241, 237, 237, 0.842);
            width:65%;
            height:26vw;
            box-shadow: 10px 10px 5px 5px black;
            background:rgb(60, 179, 113,0.4);
            text-align:center;
            margin-left:20%;
            margin-right:20%;
            font-family: 'Ubuntu', sans-serif;
        }

        ::-moz-selection {
            /* Code for Firefox */
            color: rgb(255, 255, 255);
            background:#137449;
        }

        ::selection {
            color: rgb(255, 255, 255);
            background: #137449;
        }
 .clt-section {
    background: url(img/bg-pattern-how-we-work-desktop.svg);
    background-repeat: no-repeat;
    background-position:right ;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    background-color: hsl(256, 26%, 20%);
    height: 30vh;
    margin-bottom: 15vh;
    color: white;
    display: flex;
    justify-content: space-around;
    align-items: center;
  }
  .clt-section > h1 {
    font-size: 40px;
    font-weight: 700;
  }
  .clt-section > button {
    padding: 8px 20px;
    border: 2px solid white;
    color: white;
    background: none;
    cursor: pointer;
    outline: none;
    font-weight: 500;
  }
  .statistics-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-bottom: 10vh;
  }
  .statistics-container > h1 {
    margin-bottom: 15px;
    font-size: 40px;
    font-weight: 800;
    color: hsl(255, 11%, 22%);
  }
  .statistics-container > p {
    text-align: center;
    color: hsl(257, 7%, 63%);
    font-weight: 700;
    margin-bottom: 1.5rem;
    font-size: 1.5rem;
  }
  .features-section {
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 5rem;
    flex-wrap: wrap;
  
  }
  .feature-item {
    background-color: #fff;
    height: max-content;
    width: max-content;
    padding: 25px 40px;
    margin-right: 1rem;
   font-size:2vw;
   font-weight:400;
   box-shadow: 5px 10px #888888;
   margin:12px;
  }
  .feature-item > h1 {
    margin-bottom: 10px;
    margin-top: 10px;
    font-size: 26px;
    font-weight: 800;
    color: hsl(255, 11%, 22%);
  }
  .feature-item > p {
    color: hsl(257, 7%, 63%);
  }

  .hero-image{
    width:100%;height:35vw;
  }
   #h4{
    font-family: 'Ubuntu', sans-serif;color:white;font-size:3.5vw;line-height:4.5vw;margin-left:10%;margin-right:10%;margin-top:3%;
  }
  #featurette-heading{
    font-family:'Josefin Sans', sans-serif;text-align:center;font-size:3vw;font-weight:800;margin-top:-2vw;
  }
  #lead_p{
    font-family:'Josefin Sans', sans-serif;color:black;font-weight:600;font-size:2vw;text-align:center;line-height:3vw;
  }
  @media screen and (min-width:100px) and (max-width:779px){
    .hero-image{
    height:45vh;
  }
  #h4{
  font-size:3.5vh;line-height:3.8vh;margin-left:5%;margin-right:5%;margin-top:2%;
  }
  
  .hero-text {
            width:85%;
            height:30vh;
        }
  #featurette-heading{
    font-size:4vh;
  }
  #lead_p{
  font-size:3vh;line-height:3.5vh;
  }
  #process_img{
    display:none;
  }
  }
    </style>
    <title>IP Patent</title>
</head>

<body>
    <div class="hero-image">
        <div class="hero-text" >
            <h4 id="h4"><b>Develop your product for efficient service and own your innovative product by patent filing.</b></h1>
        </div>
     
    </div>
    <div class="container" style="margin-top: 40px; margin-bottom: 40px;">
        <div class="row featurette d-flex justify-content-center align-items-center mt-6">
            <div class="col-md-7">
                <h2 class="featurette-heading" id="featurette-heading" ><b> Process </b><span class="text-muted"></span></h2>
                <br><br>
                <p class="lead" id="lead_p">Development of product,
                    process and service requires innovation, research, making of prototype, business plan, testing its
                    patentability, marketing of the idea, and ownership of IP Portfolio through the process of
                    preparation and examination of patent application, maintenance fees and patent issuance.</p>
            </div>
            <div class="col-md-5" id="process_img">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600"
                    height="600" src="img/dhong.png" alt="corporate photo" style="width:100%;height:35vw;" >
            </div>
        </div>
    </div>

    <section class="clt-section">
      <h1 style="color:white;">Find out more<br />
        about how we work.</h1>
      <button>How we work</button>
    </section>

    <div class="statistics-container" style="position: relative; top:-2rem;">
      <h1>Advanced Statistics</h1>
      <p>Track how your links are performing across with<br />our
        advanced statistics dashboard.</p>
    </div><br><br>
    <section class="features-section" style="position: relative; top:-8rem;">
      <div class="feature-item">
        <img src="img/icon-brand-recognition.svg" alt="" />
        <h1> Projects </h1>
        <p>Boost your recognition with<br />each click.Generic links
          don't mean a<br />
          thing.Branded links helps instil<br />
          confidence in your content.</p>
      </div>
      <div class="feature-item">
        <img src="img/icon-detailed-records.svg" alt="" />
        <h1> Details Records</h1>
        <p>Gain insights into who is clicking your<br />
          links.Knowing when and where<br />
          people engage with their content <br />helps inform better
          descisions.</p>
      </div>
      <div class="feature-item">
        <img src="img/icon-fully-customizable.svg" alt="" />
        <h1> Fully Customizeable </h1>
        <p>Improve awareness and <br />content discoverability
          through<br />
          customizeable links supercharging.</p>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
<?php include "footer.php" ?>
</html>