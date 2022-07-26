<!doctype html>
<html lang="zxx">
<?php include "navbar_1.php" ?>
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

    <script>
         document.getElementById('apply-button').style.display ='none'
    function showHide()
    {
    let travelhistory = document.getElementById('company_name')
    if (travelhistory.value =='Embedded system (Free Course)')
    {
        
         document.getElementById('hidden-panel1').style.display ='block'
         document.getElementById('hidden-panel3').style.display ='none'
         document.getElementById('batch').style.display ='block'
         document.getElementById('Training').style.display ='block'
         document.getElementById('hidden-panel2').style.display ='none'
         
        
    } else if (travelhistory.value =='PLC & SCADA (Free Course)')
    {
         
         document.getElementById('hidden-panel2').style.display ='none'
         document.getElementById('hidden-panel3').style.display ='block'
         document.getElementById('hidden-panel1').style.display ='none'
         document.getElementById('batch').style.display ='none'
          document.getElementById('Training').style.display ='block'
         
        
        
    }
    else
    {
        
        document.getElementById('hidden-panel2').style.display ='block'
         document.getElementById('hidden-panel1').style.display = 'none'
         document.getElementById('hidden-panel3').style.display = 'none'
         document.getElementById('batch').style.display = 'none'
         document.getElementById('Training').style.display = 'none'
    }
}
</script>  
</head>

<body>

        <main>
            <!-- page title start -->
            <section class="page_title_area" data-overlay="6" data-background="asset/img/bg/page_title_bg.jpg">
                <div class="containe">
                    <div class="row">
                        <div class="col-l2">
                            <div class="page_title text-center">
                                <h2>Company Collaboration Form </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page title end -->

            <!-- form start -->
            <section class="checkout_area pt-6 pb-6">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="checkout_wrap">
                                <div class="radio_wrap">
                                    <h3></h3>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12
                                     col-lg-12">
                                        <form class="form_wrap" method="Post" action="form_company.php" enctype="multipart/form-data">
                                            <div class="row">
                                                
                                            <style>
     /* body
     {
      background-image: radial-gradient(white,darkgreen); 
       background-color:white;
      background-size:cover;
       background-repeat:no-repeat;
       background-position:center;

     }
     
    /* .form-popup  {
     
     margin-left:13px;
      border: 3px solid #f1f1f1;
      z-index: 9;
      background color:white;
      height:50px;
    } */
    
    /* Add styles to the form container */
    .form-container {
      background-color:white;
      width: 483px;
      padding: 10px;
      height:852px;
      border-style:groove;
      margin-left: 500px;
    
    }
    
    /* Full-width input fields */
    .form-container input[type=text], .form-container input[type=password] {
      width: 100%;
      padding: 22px;
      margin: 2px 0 15px 0;
      border-style: double;
      
      
    }
    
    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus, .form-container input[type=password]:focus {
      background-color:white;
      outline:solid black;
    }
    
    /* Set a style for the submit/login button */
    .form-container .btn {
      background-color: #04AA6D;
      color: white;
      padding: 8px 33px;
      border: none;
      cursor: pointer;
      width: 25%;
      margin-bottom:10px;
      opacity: 0.8;
      margin-left:191px;
    }
    /* Add a red background color to the cancel button
    .form-container .Reset {
      background-color: red;
       */
    }
    
    /* Add some hover effects to buttons */
    .form-container .btn:hover, .open-button:hover {
      opacity: 1;
    
    } 
    .stream
    {

    
    }
    /* .streamhead
    {
      margin-top:-1px;
    } */
    label
    {
      color:#212;
    }
    
  </style> 
      
  </head>
  <body>

     <label for="Name">Company's Name<span style="color:red;"><b>*</b></span></label>
      <input type="text" placeholder="Enter Name" name="company_name" id="company_name" required>

     
      
      <label for="Location">Company's Location<span style="color:red;"><b>*</b></span></label>
      <input type="text" placeholder="Enter Address" name="location" id="location" required>
      
      <div class="col-xl-12 col-lg-12">
                                                    <label for="university_logo">Company's Logo<span style="color:red;"><b>*</b></span></label>
                                                    <input type="file" id="fileToUpload" name="fileToUpload" placeholder="University's Logo" accept="image/png, image/gif, image/jpeg" required>
                                                </div>
                                                <br>
      
      <div class="col-xl-12 col-lg-12">
                                                    <label for="fname">HR Name<span style="color:red;"><b>*</b></span></label>
                                                    <input type="text" id="hr_name" name="hr_name" placeholder="Full Name" title="Alphabets only" pattern="[A-Za-z- -]+" value="" required>
                                                </div>
                                                
                                                <div class="col-xl-12 col-lg-12">
                                                    <label for="email">HR's Email<span style="color:red;"><b>*</b></span></label>
                                                    <input type="email" id="email" name="email" placeholder="Email" value="" required>
                                                    </div>
                                                    
                                                    <div class="col-xl-6 col-lg-6">
                                                    <label for="email">HR's Mobile Number<span style="color:red;"><b>*</b></span></label>
                                                    <input type="tel" id="hr_number" name="hr_number" placeholder="HR' Mobile Number" pattern="[0-9]{10}" value="" title="10 Numerical values only"  required>
                                                </div>

      <label for="Minimum Qualification">Preferred Qualification<span style="color:red;"><b>*</b></span></label>
      <input type="text" placeholder="B.E/ B.Tech/ M.E/ M.Tech..." name="qualification"  id="qualification" required>
      
        
                                                <div class="">
                                                                                                
                                                    <label for="stream">Preferred Branch<span style="color:red"><b>*</b></span></label><br>
                                                                 <!--<div class=' border border-success rounded p-2' required>                                      -->
                                                                  <input  style="height:20px; width:20px;" type="checkbox" name="branch[]" value="Computer Engineering" id="branch"  >
                                                                  <label for="Computer Engineerin">Computer Engineering</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                  <input  style="height:20px; width:20px;" type="checkbox" name="branch[]" value="Information Technology" id="branch" >
                                                                  <label for="Information Technology">Information Technology</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                  <input  style="height:20px; width:20px;" type="checkbox"name="branch[]" value="Mechanical Engineering" id="branch" >
                                                                  <label for="Mechanical Engineering">Mechanical Engineering</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                  <input  style="height:20px; width:20px;" type="checkbox" name="branch[]" value="Civil Engineering" id="branch" >
                                                                  <label for="Civil Engineering">Civil Engineering</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                  <input  style="height:20px; width:20px;" type="checkbox" name="branch[]" value="Electrical Engineering" id="branch" >
                                                                  <label for="Electrical Engineering">Electrical Engineering</label><br>
                                                                  <input style=' height:20px; width:20px; 'type="checkbox" name="answer" value="other">
                                                                   <label for="other">Other</label><br>
                                                                 </div>  
                                                                 
                                                                 <div class="col-xl-12 col-lg-12">
                                                                       <input class='form-control form-control-lg border border-success' style="display:none;" type="text"  id="otherAnswer" placeholder="Other Stream" >
                                                                       <br>
                                                                      
                                                                        </div>

      

      <div class="form-group ">
          <div id="order-details-booking">
             <div class="row">  
             <div class="col-xl-6 col-lg-6">
                    <label for="Skill Required">Preferred Skill<span style="color:red;"><b>*</b></span></label>
                    <input type="text" id="skill" name="skill" placeholder="Position you are asking for" required>
                </div>
                <div class="col-xl-6 col-lg-6">
                     <label for="Number_of_vacancy">Number of Vacancies<span style="color:red;"><b>*</b></span></label>
                     <input type="varchar" id="number_of_vacancy" name="number_of_vacancy" placeholder="Number of Vacancies" required>
               </div>

                <div class="col s1">
                <B class="material-icons"> Add one more skills and its vacancies</B>
                </div>
                <br>
                <br>
            </div>
            </div>
            
    </div>
  
     
      

      <!-- <button type="submit" class="btn" id="btn" name="create">Submit</button> -->
      <div class="text-center">
                                                 
	<button class="thm_btn thm_btn-black" value="submit" >Submit the application<i class="fal fa-long-arrow-right"></i></button>
   
   
  <!-- jquery include  -->
     
        
        
        </form>

  </body>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- form end -->

        </main>






  
    <!-- body wrap end -->
    

   
   
    <!-- jquery include -->
    <!-- <script>
            $('#order-details-booking').on('click','.material-icons',function(){
           $(this).closest('.row').clone().appendTo('#order-details-booking').find("input[type='text']").val("");//use closest to avoid multiple selection and clear input text elements
        });
        
        
        $('#order-details-booking1').on('click','.material-icons1',function(){
           $(this).closest('.row').clone().appendTo('#order-details-booking1').find("input[type='text']").val("");//use closest to avoid multiple selection and clear input text elements
        });
        
        $('#order-details-booking2').on('click','.material-icons2',function(){
           $(this).closest('.row').clone().appendTo('#order-details-booking2').find("input[type='text']").val("");//use closest to avoid multiple selection and clear input text elements
        });
        
        $('#order-details-booking3').on('click','.material-icons3',function(){
           $(this).closest('.row').clone().appendTo('#order-details-booking3').find("input[type='text']").val("");//use closest to avoid multiple selection and clear input text elements
        });
        
        $('#order-details-booking4').on('click','.material-icons4',function(){
           $(this).closest('.row').clone().appendTo('#order-details-booking4').find("input[type='text']").val("");//use closest to avoid multiple selection and clear input text elements
        });
        
        $('#order-details-booking5').on('click','.material-icons5',function(){
           $(this).closest('.row').clone().appendTo('#order-details-booking5').find("input[type='text']").val("");//use closest to avoid multiple selection and clear input text elements
        });
        </script> -->
        
        <!-- <script>
            
            $(document).ready(function(){
        $("input[type='checkbox']").change(function(){
        if($(this).val()=="other")
        {
        $("#otherAnswer").show();
        }
        else
        {
        $("#otherAnswer").hide(); 
        }
        });
        });
        </script> -->
        
         
        
        
</body>
<?php include "footer.php" ?>

 <script>
            $('#order-details-booking').on('click','.material-icons',function(){
           $(this).closest('.row').clone().appendTo('#order-details-booking').find("input[type='text']").val("");//use closest to avoid multiple selection and clear input text elements
        });
        
        
        $('#order-details-booking1').on('click','.material-icons1',function(){
           $(this).closest('.row').clone().appendTo('#order-details-booking1').find("input[type='text']").val("");//use closest to avoid multiple selection and clear input text elements
        });
        
        $('#order-details-booking2').on('click','.material-icons2',function(){
           $(this).closest('.row').clone().appendTo('#order-details-booking2').find("input[type='text']").val("");//use closest to avoid multiple selection and clear input text elements
        });
        
        $('#order-details-booking3').on('click','.material-icons3',function(){
           $(this).closest('.row').clone().appendTo('#order-details-booking3').find("input[type='text']").val("");//use closest to avoid multiple selection and clear input text elements
        });
        
        $('#order-details-booking4').on('click','.material-icons4',function(){
           $(this).closest('.row').clone().appendTo('#order-details-booking4').find("input[type='text']").val("");//use closest to avoid multiple selection and clear input text elements
        });
        
        $('#order-details-booking5').on('click','.material-icons5',function(){
           $(this).closest('.row').clone().appendTo('#order-details-booking5').find("input[type='text']").val("");//use closest to avoid multiple selection and clear input text elements
        });
        </script>


                                                    <script>
                                                        
                                                    $(document).ready(function(){
                                                    $("input[type='checkbox']").change(function(){
                                                    if($(this).val()=="other")
                                                    {
                                                    $("#otherAnswer").show();
                                                    }
                                                    else
                                                    {
                                                    $("#otherAnswer").hide(); 
                                                    }
                                                    });
                                                    });
                                                    </script>
</html>
