<!doctype html>
<html lang="en">
    <?php include "navbar.php" ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Corporate Workshop</title>
        <!-- icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
     <!-- icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<style>


.grid-container_intro{
        display: grid;
        grid-template-columns: 25% 25% 25% 25%;
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
    font-family:'Josefin Sans', sans-serif; font-size: 1.4vw;color:black;text-align:center;
    position: relative;z-index: 20;font-weight: 400;
    }

   .custom-shape-divider-top-1656784400 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg);
}

.custom-shape-divider-top-1656784400 svg {
    position:relative ;
    display: block;
    width: calc(153% + 1.3px);
    height: 30vw;
    z-index: 1;
}

.custom-shape-divider-top-1656784400 .shape-fill {
    fill: #C9E6BD;
}
.custom-shape-divider-top-1656783637 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg);
}

.custom-shape-divider-top-1656783637 svg {
    position: relative;
    display: block;
    width: calc(133% + 1.3px);
    height: 15vw;
    z-index: 2;
}

.custom-shape-divider-top-1656783637 .shape-fill {
    fill: #738F67;
}
#intro_h3{
    position:relative;z-index:20;font-size:3rem;color:black;text-align:center;background:#E2FDD6;
}
.project{
    position:relative;
    width:100%;
    height:35vw;
    background:white;
}
.project_upper{
    width:60%;
    height:35vw;
    position:absolute;
    overflow:hidden;

}
.section{
    width:60%;
    height:35vw;
    position:absolute;
    overflow:hidden;
    right:0%;

}
.upper_side{
width:40%;
height:35vw;
background-image:url("img/hatt.webp");
background-repeat:no-repeat;
background-size:100% 32vw;
background-position: bottom left;
position:absolute;
right:0%;
border-radius:15px;

}
.left_side{
width:40%;
height:35vw;
background-image:url("img/ad.png");
background-repeat:no-repeat;
background-size:100% 32vw;
background-position: bottom left;
position:absolute;

}
.heading{
    text-align:center;
    font-size:3vw;
    font-weight:800;
    width:100%;
    color:black;
    padding:1vw;
}
.lead{
    box-sizing:border-box;
    font-size :2rem;
    font-family:'Josefin Sans', sans-serif;
    text-align:center;
    line-height:2vw;
    word-spacing:0.5vw;
    padding:2vw;
    font-weight:400;
    color:black;
    margin-left:2rem;
    margin-right:2rem;

}
.lead_last{
    box-sizing:border-box;
    font-size :1.5rem;
    font-family:'Josefin Sans', sans-serif;
    text-align:center;
    line-height:2vw;
    word-spacing:0.5vw;
    padding:2vw;
    font-weight:400;
    color:black;
    margin-left:1rem;
    margin-right:1rem;
}
@media screen and (min-width:100px) and (max-width:700px){
    .project{
    height:90vh;
   
   }
   .upper_side,
   .left_side{
    display:none;
   }
   .project_upper,
   .section{
    width:100%;
    height:90vh;
    overflow:hidden;

 }
 .heading{
    font-size:4vh;
    padding:1vw;
}
.lead{
    font-size :3vh;
    line-height:3.5vh;
    word-spacing:0.5vh;
    padding:2vw;
    margin-left:1rem;
    margin-right:1rem;
}

}
@media screen and (min-width:701px)and (max-width:1000px){
    .project{
    height:60vh;
   
   }
   .upper_side,
   .left_side{
    width:30%;
    height:35vh;
   }
   .project_upper,
   .section{
    width:70%;
    height:60vh;
    overflow:hidden;

 }
 .heading{
    font-size:3vh;
    padding:1vw;
}
.lead{
    font-size :2.5vh;
    line-height:3vh;
    word-spacing:0.5vh;
    padding:1vw;
    margin-left:0.5rem;
    margin-right:0.5rem;
    font-weight:600;
}
}
@media screen and (min-width:100px) and (max-width:299px){
    .grid-container_intro{
          height:185vh;
          grid-template-columns: auto ;
        }
        #pp{
        font-size: 2vh;font-weight: 600;
      }
      .lead{
    font-size :2.8vh;
    line-height:3.3vh;
    font-weight:800;
   }
   .lead_last{
    box-sizing:border-box;
    font-size :2.2vh;
    line-height:3vh;
    word-spacing:0.5vw;
    padding:2vw;
    font-weight:400;
    margin-left:0.5rem;
    margin-right:0.5rem;
    }
    }
    @media screen and (min-width:300px) and (max-width:729px){
        .grid-container_intro{
          height:80vh;
          grid-template-columns: auto auto;
        }
        #pp{
        font-size: 2vh;font-weight: 600;
      }
      .grid-item_intro img{
        margin-top:15%;
        width:50%;height:40%;
    }
    .lead{
    font-size :2.8vh;
    line-height:3.3vh;
    font-weight:800;
   }
   .lead_last{
    box-sizing:border-box;
    font-size :2.5vh;
    line-height:3vh;
    word-spacing:0.5vw;
    padding:2vw;
    font-weight:400;
    margin-left:0.5rem;
    margin-right:0.5rem;
    }
    }
    @media screen and (min-width:730px) and (max-width:1000px){
        .grid-container_intro{
          height:75vh;
          grid-template-columns: auto auto;
        }
        #pp{
        font-size: 2vh;font-weight: 600;
      }
      .lead_last{
    box-sizing:border-box;
    font-size :2vh;
    line-height:3vh;
    word-spacing:0.5vw;
    padding:0vw;
    font-weight:400;
    margin-left:0rem;
    margin-right:0rem;
    }
    }
       @media screen and (min-width:1009px) and (max-width:1200px){
        .grid-container_intro{
          height:75vh;
          grid-template-columns: auto auto;
          
        }
        #pp{
        font-size: 2vw;font-weight: 600;
      }
      .lead_last{
    box-sizing:border-box;
    font-size :1.8vh;
    line-height:3vh;
    word-spacing:0.5vw;
    padding:0vw;
    font-weight:400;
    margin-left:0rem;
    margin-right:0rem;
    }
    }

</style>
<body style="background:white;">
<div><h3 id="intro_h3" style="">Process - Corporate Training</h3></div>
  <div class="grid-container_intro">
            <div class="custom-shape-divider-top-1656784400">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
                </svg>
            </div>
            <div class="custom-shape-divider-top-1656783637">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M741,116.23C291,117.43,0,27.57,0,6V120H1200V6C1200,27.93,1186.4,119.83,741,116.23Z" class="shape-fill"></path>
                </svg>
            </div>
          
            <div class="grid-item_intro">
                <img class="bd-placeholder-img rounded-circle p-2" src="images/quiz.png" alt="">
                <p id="pp" >Know skill matrix of employees through pre assessment test.</p>
            
            </div>
            <div class="grid-item_intro">
                <img class="bd-placeholder-img rounded-circle p-2"src="images/result.jpg" alt="">
                <p id="pp" >Based on test results and project requirement customize training module is prepare by experts.</p>
               
            </div>
            <div class="grid-item_intro">
                <img class="bd-placeholder-img rounded-circle p-2" src="images/training.jpg" alt="">
                <p id="pp" >Experts conduct hands on training.</p>
               
            </div>
        <div class="grid-item_intro">
            <img class="bd-placeholder-img rounded-circle p-2" src="images/feedback.jpg"  alt="">
                <p id="pp" >Post assessment test and feedback report shared with HR.</p>
        </div>
     </div> 
   </div>
 
    <hr style="border:5px solid black;">
    <hr class="featurette-divider">
    <!--  -->
  <div class="project">
    <div  class="project_upper" >
        <div class="heading">Workshop </div>
        <p class="lead">hands-on trainings are customized based on requirements of the industrial projects.
                    Corporate trainers are Experts from various domain connected on our platform through one of our
                    services of “expert collaboration. Subject to training requirements, trainers of the relevant
                    expertise conduct the training</p>
    </div>
    <div class="upper_side"></div>
    </div>
    <hr class="featurette-divider" style="height:2px">
    <div class="project">
    <div class="left_side"></div>
    <div  class="section" style="background-color:#E2FDD6;border-radius:20px">
          <br><br><br>
        <div class="heading">Stakeholder Advantage</div>
        <p class="lead_last">Scope of improvements after the training: technical skills/behavioural skills / project management skills.<br>
                   &#9679;&nbsp;Knowledge about the technological update and its application, helps add values in
                        delivering the project requirements of the clients.
                        <br>&#9679;&nbsp;Knowledge about the technological update and its application, helps add values in
                        delivering the project requirements of the clients
                    <br>&#9679;&nbsp;Training on behavioural and project management skills provide employees
                        support by improving their consistency, task management skills, and productivity
                    <br>&#9679;&nbsp;<b>Transparency:</b> know the outcome of the training by post-assessment test at the
                        completi0n of training
       </p>

        
    </div>
  
    </div>
    <!-- <div class="container" style="margin-top: 40px; margin-bottom: 40px;">

        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading" style="font-weight:600;font-size:3vw;word-spacing:1vw;position:relative;left:30%;z-index:2;">Stakeholder Advantage <span class="text-muted"></span>
                </h2>
                <p style ="box-sizing:border-box;font-size :1.6vw; font-family:'Josefin Sans', sans-serif; text-align:center; line-height:2vw;word-spacing:0.5vw;padding:2vw; font-weight:400;color:black; margin-left:2rem; margin-right:2rem;position:relative;left:30%;">Scope of improvements after the training: technical skills/behavioural skills / project
                    management skills
                     
                    <br>&#9679;&nbsp;<b>Efficiency:</b> outcome because of pre-assessment test and customized training
                    <br>&#9679;&nbsp;Knowledge about the technological update and its application, helps add values in
                        delivering the project requirements of the clients
                    <br>&#9679;&nbsp;Training on behavioural and project management skills provide employees
                        support by improving their consistency, task management skills, and productivity
                    <br>&#9679;&nbsp;<b>Transparency:</b> know the outcome of the training by post-assessment test at the
                        completi0n of training
                
                </p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" style="border-radius: 60px;" width="1200"
                    height="1200" src="img/ad.png" alt="stakeholder">
            </div>
        </div>
    </div> -->
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