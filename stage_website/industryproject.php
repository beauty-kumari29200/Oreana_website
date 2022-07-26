<!doctype html>
<html lang="en">
<?php include "navbar.php" ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <title>Industry Project</title>
</head>

<style>
*{
    margin: 0;
    padding: 0;
}
body{
    position:relative;
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
background-image:url("img/project.webp");
background-repeat:no-repeat;
background-size:100% 32vw;
background-position: bottom left;
position:absolute;
right:0%;


}
.left_side{
width:40%;
height:35vw;
background-image:url("img/project.webp");
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
    font-size :1.8vw;
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
.custom-shape-divider-top-1656779494 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg);
}

.custom-shape-divider-top-1656779494 svg {
    position: relative;
    display: block;
    width: calc(110% + 1.3px);
    height: 35vw;
    transform: rotateY(180deg);
}

.custom-shape-divider-top-1656779494 .shape-fill {
    fill: #DCFFD4;
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

</style>
<body>
    <div class="project">
      <div class="custom-shape-divider-top-1656779494">
       <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
       </svg>
    </div>
    <div  class="project_upper" >
        <div class="heading">Industry Project</div>
        <p class="lead">Students, faculties,
                    and Industries can benefit from Industry projects. Once Orena Solutions receives the desired
                    objectives and outcome of projects, a client meeting shall be held to understand the requirements
                    and scope of the project. After meeting, a proposal will be shared 
                    with the client and once there is
                    a sign-off from both parties, the project will commence.</p>
         <p class="lead" style="margin-top:-2rem;">
                    The project execution can happen at the Orena Solutions Centre, an industry location or a mix of
                    both based on the requirements of the industry. We can provide stipends to the candidates if
                    necessary.
         </p>
    </div>
    <div class="upper_side"></div>
    </div>


    <div class="project">
    <div class="left_side" style="background-image:url('img/teamwork.png')"></div>
    <div  class="section" style="background-color:#66ff66;opacity:0.8;border-radius:20px">
          <br><br><br>
        <div class="heading">Find Out More About Us</div>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Quae, facilis ipsum. Ipsum asperiores at eveniet dicta corrupti sunt
              officia maiores laborum, laudantium eligendi voluptas labore fugit cumque,
             dolorum rem earum recusandae enim optio, incidunt voluptatem et sequi laboriosam neque nihil?</p>
        
    </div>
  
    </div>

</body>
<?php include "footer.php" ?>
</html>