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
             <!--page title start -->
            <section class="page_title_area" data-overlay="6" data-background="asset/img/bg/page_title_bg.jpg">
                <div class="containe">
                    <div class="row">
                        <div class="col-l2">
                            <div class="page_title text-center">
                                <h2>University Collaboration Form</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page title end -->

            <!-- form start -->
            <section class="checkout_area pt-120 pb-120" >
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="checkout_wrap">
                                <div class="radio_wrap">
                                    <h3></h3>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <form class="form_wrap" method="POST" action="form_univ.php" enctype="multipart/form-data">
                                            
                                            <div class="col-xl-12 col-lg-12">
                                                    <label for="university_name">University's Name<span style="color:red;"><b>*</b></span></label>
                                                    <input type="text" id="university_name" name="university_name" placeholder="University's Name" value="" required>
                                                </div>
                                                <br>
                                                
                                                
                                                <div class="col-xl-12 col-lg-12">
                                                    <label for="fileToUpload">University's Logo<span style="color:red;"><b>*</b></span></label>
                                                    <input type="file" id="fileToUpload" name="fileToUpload" placeholder="University's Logo" class="ct" accept="image/png, image/gif, image/jpeg" required>
                                                </div>
                                                <br>
                                               
                                                
                                                  
                                            <div class="col-xl-12 col-lg-12">
                                                    <p><label for="university_location">University's Location<span style="color:red;"><b>*</b></span></label></p>
                                                            <textarea id="university_location" name="university_location" rows="3" required></textarea>
                                                </div>
                                                <br>
                                                
                                                <label for="Minimum Qualification">Preferred Qualification<span style="color:red;"><b>*</b></span></label>
      <input type="text" placeholder="B.E/ B.Tech/ M.E/ M.Tech..." name="qualification"  id="qualification" required>
                                                
                                                
                                                <div class="">
                                                                                                
                                                    <label for="stream">Stream<span style="color:red"><b>*</b></span></label><br>
                                                                 <!--<div class=' border border-success rounded p-2' required>                                      -->
                                                                  <input  style="height:20px; width:20px;" type="checkbox" name="chkl[]" value="Computer Engineering" id="myCheck"  >
                                                                  <label for="Computer Engineerin">Computer Engineering</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                  <input  style="height:20px; width:20px;" type="checkbox" name="chkl[]" value="Information Technology" id="myCheck" >
                                                                  <label for="Information Technology">Information Technology</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                  <input  style="height:20px; width:20px;" type="checkbox"name="chkl[]" value="Mechanical Engineering" id="myCheck" >
                                                                  <label for="Mechanical Engineering">Mechanical Engineering</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                  <input  style="height:20px; width:20px;" type="checkbox" name="chkl[]" value="Civil Engineering" id="myCheck" >
                                                                  <label for="Civil Engineering">Civil Engineering</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                  <input  style="height:20px; width:20px;" type="checkbox" name="chkl[]" value="Electrical Engineering" id="myCheck" >
                                                                  <label for="Electrical Engineering">Electrical Engineering</label><br>
                                                                  <input style=' height:20px; width:20px; 'type="checkbox" name="answer" value="other">
                                                                   <label for="other">Other</label><br>
                                                                 </div>  
                                                                 
                                                                 <div class="col-xl-12 col-lg-12">
                                                                       <input class='form-control form-control-lg border border-success' name="other" style="display:none;" type="text"  id="otherAnswer" placeholder="Other Stream" >
                                                                       <br>
                                                                      
                                                                        </div>
                                                
                                                
                                                
                                                <div class="col-xl-12 col-lg-12">
                                                    <label for="placement_season">Placement Season<span style="color:red;"><b>*</b></span></label>
                                                    <input type="text" id="placement_season" name="placement_season" placeholder="Placement Season" required>
                                                </div>
                                                <br>
                                                
                                                
                                                
                                                 <div class="col-xl-12 col-lg-12">
                                                    <label for="tponame">TPO's Name<span style="color:red;"><b>*</b></span></label>
                                                    <input type="text" id="tponame" name="tponame" placeholder="TPO's Name" title="Alphabets only" pattern="[A-Za-z- -]+" value="" required>
                                                </div>
                                                <br>
                                                
                                                
                                                
                                                 <div class="col-xl-12 col-lg-12">
                                                    <label for="tpoemail">TPO's Email<span style="color:red;"><b>*</b></span></label>
                                                    <input type="email" id="tpoemail" name="tpoemail" placeholder="TPO's Email" required>
                                                </div>
                                                <br>
                                                
                                                
                                                <div class="col-xl-12 col-lg-12">
                                                    <label for="tponumber">TPO's Contact Number<span style="color:red;"><b>*</b></span></label>
                                                    <input type="tel" id="tponumber" name="tponumber" placeholder="TPO's Contact Number" pattern="[0-9]{10}" value="" title="10 Numerical values only" required>
                                                </div>
                                                </div>
                                                
                                                <div class="text-right">
                                                 
													<button class="thm_btn thm_btn-black" value="submit" >Submit the application<i class="fal fa-long-arrow-right"></i></button>
												    
                                                </div>
                                                
                                                </div>
                                                </form>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                </section>
                                                </main>
                                                
                                                
                                               
                                                    
                                                    </body>
                                                    
                                                <?php include "footer.php" ?>
                                                
                                                
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
                                                
                                                
                                                
                                                
                                                                                                                
                                                
                                                
                                                
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            