<!doctype html>
<html lang="zxx">
<?php include "navbar.php" ?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--link rel="stylesheet" href="asset/css/fontawesome.css"-->

    </head>
    <body>
      <br><br>
      <center><br><br> <h1>Expert Collaboration Form</h1>

        <p>We are honored to collaborate with you and sharing a vision of "Crafting Preferred Engineers" to have the correct team for the Industry growth.<br> The detailed information we receive through this form will help us understand your expertise. So, we can connect as we receive training requests.</small></p>
      <br>
      </center>


<div class="container border border-secondary">
        
        
  <div class="row p-5">
      <div class="col-12">
          <div class="checkout_wrap ">
              <div class="radio_wrap">
                  <h3></h3>
              </div>
                  <div class="row">
                  <div class="col-xl-12 col-lg-12">

                  
              <form onsubmit = "handleData()" class="form_wrap" method="POST" id='sectionForm' action="expertdemo_data_submit.php" enctype="multipart/form-data" autocomplete="on">
                
                  <div>
                     <h4>Personal Details</h4>
                      <hr style="height:1px;background: black;">
                   </div> 
                   <div class="form-row">  
                    <div class="form-group col-md-6">
                       <label for="email">Personal Email<span style="color:red;"><b>*</b></span></label>
                      <input type="email" class="form-control form-control-lg border border-success" id="personalemail" name="personalemail" placeholder=" Personal Email" onkeyup="GetDetail(this.value)" value="" required>
                    </div>
                    
                     <div class="form-group col-md-6">
                       <label for="email">Work Email<span style="color:red;"><b>*</b></span></label>
                      <input type="email" class="form-control form-control-lg border border-success" id="workemail" name="workemail" placeholder="Work Email" value="" required>
                    </div>
                    
                  </div>
                  <div class="form-group">
                    <label for="expert_name">Expert Name<span style="color:red;"><b>*</b></span></label>
                    <input type="text" class="form-control form-control-lg border border-success" id="expertname" name="expertname" placeholder="Expert Name" title="Alphabets only" pattern="[A-Za-z- -]+" value="" required>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Contact">Contact Number<span style="color:red;"><b>*</b></span></label>
                      <input type="tel" type="tel" class="form-control form-control-lg border border-success" id="contactnumber" name="contactnumber" placeholder="Contact Number" pattern="[0-9]{10}" value="" title="10 Numerical values only" required>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="mobile">Whatsapp Number<span style="color:red;"><b>*</b></span></label>
                    <input type="tel" class="form-control form-control-lg border border-success" id="whatsappnumber" name="whatsappnumber" placeholder="Whatsapp Number" pattern="[0-9]{10}" value="" title="10 Numerical values only" required>
                  </div>
                </div>  

                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Address<span style="color:red;"><b>*</b></span></label>
                 
                  <textarea class="form-control form-control-lg border border-success" name="add_ress" placeholder="Address" id="add_ress" rows="3" required></textarea>
              </div>

              <div class="container">
                <div class="row">
                  <div class="col-sm-4">
                   
                    <label for="Country">Country<span style="color:red;"><b>*</b></span></label>
                    <select name="country" class="countries form-control border border-success" id="country" required>
                  <option value="">Select Country</option>
              </select>

              
            </div>
            <div class="col-sm-4">
              <label for="State">State<span style="color:red;"><b>*</b></span></label>
              <select name="st_ate" class="states form-control border border-success" id="st_ate" required>
            <option value="">Select State</option>
        </select>
            </div>
            <div class="col-sm-4">
             <label for="City">City<span style="color:red;"><b>*</b></span></label>  
              <select name="city" class="cities form-control border border-success" id="city"  required>
            <option value="">Select City</option>
        </select>
            </div>
          </div>
          <br>
          <br>
        </div>
        <div>
          <h4>Professional Details</h4>
          <hr style="height:1px;background: black;">
      </div>  
      <div class="form-group ">
           
        <label for="Company_Institute">Company/Institute Name<span></span></label>
        <input type="text" class="form-control form-control-lg border border-success" id="companyname" name="companyname" placeholder="Company/Institute Name">
 </div>
 <div id="order-details-booking1" class="autocomplete form-group">
                               
  <div class="row">
    
          <div class="  autocomplete  col s1">
              
          <label for="Domain_of_Expertise ">Domain of Expertise<span style="color:red;"><b>* </b></span><B class="material-icons1"> Add one More </B></label>
              <input  class="form-control form-control-lg border border-success"  type="text" id="domainofexpertise"  name="domainofexpertise" placeholder="Domain of Expertise" required>
          </div>
       
  </div>
</div>

<div class="form-row">  
                                
  <div id="order-details-booking2" class="autocomplete form-group col-md-6">
     
      <div class="row">
        
              <div class="  autocomplete  col s1">
                  
               <label for="Technical_skills_(Technology)">Technical Skills (Technology) (e.g. java, PHP, C++ etc.)<span style="color:red;"><b>* </b></span><B class="material-icons2"> Add one More </B></span></label>
                  <input  class="form-control form-control-lg border border-success"  type="text" id="technology"  name="technology" placeholder="Technical Skills (Technology)" required>
              </div>
           
      </div>
  </div>  

  
  <div id="order-details-booking3" class=" autocomplete form-group col-md-6">
                                   
    <div class="row">
      
            <div class="  autocomplete  col s1">
                
             
             <label for="Technical Skills Operating System">Technical Skills (OS) (e.g.windows,Linux.)<span style="color:red"><b>* </b></span><B class="material-icons3"> Add one More</B></label>
             <input class="form-control form-control-lg border border-success" id="operatingsystem" type="text" name="operatingsystem" placeholder="Technical Skills (Operating System)" required>    
            </div>
         
    </div>
</div>


<div id="order-details-booking4" class="autocomplete form-group col-md-6">
   
    <div class="row">
      
            <div class=" autocomplete  col s1">
                
             
           <label for="Technical_Skills_(Tools)">Technical Skills (Tools) (e.g. CodeIgniter,Laravel,etc.)<span style="color:red"><b> * </b></span><B class="material-icons4"> Add one More </B></label>
           <input  class="form-control form-control-lg border border-success" type="text" id="tools" name="tools" placeholder="Technical Skills (Tools)" required>
            </div>
         
    </div>
</div>

<div id="order-details-booking5" class=" autocomplete form-group col-md-6">
   
    <div class="row">
      
            <div class="  autocomplete  col s1">
                
             
          <label for="Technical skills (Hardware)">Technical Skills (Hardware) (e.g Connecting networks)<span style="color:red"><b>* </b></span><B class="material-icons5"> Add one More</B></label>
           <input class="form-control form-control-lg border border-success" id="hardware" type="text" name="hardware" placeholder="Technical Skills (Hardware)" required>
            </div>
         
    </div>
</div>
</div> 


<div class="">
                                                                                                
  <label for="Non-Technical skills *">Non-Technical Skills<span style="color:red"><b>*</b></span></label>
<div style="visibility:hidden; color:red; " id="chk_option_error">
Please select at least one option.
</div>                                   
  <div class=' border border-success rounded p-2' required>                                      
  <input  style="height:20px; width:20px;" type="checkbox" name="myCheck" value="Content Writing" id="myCheck"  >
  <label for="Content Writing">Content Writing</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input  style="height:20px; width:20px;" type="checkbox" name="myCheck" value="Customer Handling" id="myCheck" >
  <label for="Customer Handling">Customer Handling</label>&nbsp;&nbsp;
  <input  style="height:20px; width:20px;" type="checkbox"name="myCheck" value="Community Building" id="myCheck" >
  <label for="Community Building">Community Building</label>&nbsp;&nbsp;
  <input  style="height:20px; width:20px;" type="checkbox" name="myCheck"value="Digital Marketing" id="myCheck" >
  <label for="Digital Marketing">Digital Marketing</label><br>
  <input  style="height:20px; width:20px;" type="checkbox"name="myCheck" value="Learning Capacity" id="myCheck" >
  <label for="Learning Capacity">Learning Capacity</label>&nbsp;&nbsp;
  <input  style="height:20px; width:20px;" type="checkbox"name="myCheck" value="Presentation Skills" id="myCheck" >
  <label for="Presentation Skills">Presentation Skills</label>&nbsp;&nbsp;&nbsp;&nbsp;
  
  <input style=' height:20px; width:20px; 'type="checkbox" name="answer" value="other"> Other
 
  
 </div>                              

</div> 
<div class="form-group">
   <input class='form-control form-control-lg border border-success' style="display:none;" type="text"  id="otherAnswer" placeholder="Mention other Non-Technical Skills" >
   <br>
  
</div>

<div>
  <h4>Your Association With Orena Solutions</h4>
  <hr style="height:1px;background: black;">
</div>  
<div class="">
                                                                                                
  <label for="Non-Technical skills *">Expert Association As</label><span style="color:red"><b>*</b></span></label>
<div style="visibility:hidden; color:red; " id="chk_option_error">
Please select at least one option.
</div>
<div class="form-group com-md-6">
  <div class=' border border-success rounded p-2' required>                                      
    <input  style="height:20px; width:20px;" type="checkbox" name="myCheck" value="Content Writing" id="myCheck"  >
    <label for="Content Writing">Freelancer Projects</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input  style="height:20px; width:20px;" type="checkbox" name="myCheck" value="Customer Handling" id="myCheck" >
    <label for="Customer Handling">Interviewer</label>&nbsp;&nbsp;
    <input  style="height:20px; width:20px;" type="checkbox"name="myCheck" value="Community Building" id="myCheck" >
    <label for="Community Building">Trainer</label>&nbsp;&nbsp;
  </div>
</div>    
<div class="form-row">
  <div class="form-group col-md-6">
  <label for="work_type">Mode<span style="color:red"><b>*</b></span></label>
    <div class="filter">
         <select class='form-control form-control-lg border border-success' name="mode" id="mode" required>
          <option value="">Select</option>
          <option id="mode" value="Online">Online</option> 
          <option value="Offline">Offline</option>
          <option value="Both">Both</option>
        </select>
    </div> 
  </div>
    <div class="form-group col-md-6">
      <label for="email">Expected Fees Per Hour<span style="color:red"><b>*</b></span></label>
     <input type="text" class="form-control form-control-lg border border-success" id="expectedfeesperhour" name="expectedfeesperhour" placeholder="Expected Fees Per Hour" title="Numerical values only" required>
   </div>
</div>  

<div class="form-row">
                                      
  <div class="form-group col-md-6">
      <label for="fileToUpload">Upload Consent Letter<span style="color:red"><b>* </b></span><a style="text-decoration:none" href='https://orena.solutions/temp/Consent%20Letter/Consent.doc' target="_blank"> Reference</a></label>    
      <input  class="form-control form-control-lg border border-success" type="file" id="consentletter" name="consentletter" accept="application/pdf,application/vnd.ms-excel" required>
   </div> 
    <div class="form-group col-md-6">
      <label for="fileToUpload">Upload Photo<span style="color:red"><b>*</b></span></label>  
      <input  class="form-control form-control-lg border border-success" type="file" id="uploadphoto" name="uploadphoto" accept="image/png, image/gif, image/jpeg" required>
    </div>
</div>    
   
<div class="form-row">   
    <div class="form-group col-md-6">
      <label for="fileToUpload">Upload Short Profile Summary<span style="color:red"><b>* </b></span><a style="text-decoration:none"  href='https://orena.solutions/temp/Profile%20Summary/profile.pdf' target="_blank" > Reference</a></label>   
      <input  class="form-control form-control-lg border border-success" type="file" id="profilesummary" name="profilesummary" accept="application/pdf,application/vnd.ms-excel" required><br>
   </div>
   <div class="form-group col-md-6">
    <label for="fileToUpload">Upload Detailed Profile Summary<span style="color:red"><b>* </b></span><a style="text-decoration:none"  href='https://orena.solutions/temp/Profile%20Summary/profile.pdf' target="_blank" > Reference</a></label>   
    <input  class="form-control form-control-lg border border-success" type="file" id="profilesummary" name="profilesummary" accept="application/pdf,application/vnd.ms-excel" required><br>
 </div>
   <br>
   <br>
</div>


<br>
<div>
     <h4>Bank Details</h4>
     <hr style="height:1px;background: black;">
</div> 

<div class="form-row">
    <div class="form-group col-md-6">
      <label for="fileToUpload">Name/Account Holder Name <span>(To be Printed on Cheque)</span></label>   
      <input  class="form-control form-control-lg border border-success" type="text" id="accountholdername" name="accountholdername"  placeholder="Name/Account Holder Name" >
    </div>
    <div class="form-group col-md-6">
     <label for="fileToUpload">Bank Name<span></span></label>   
      <input  class="form-control form-control-lg border border-success" type="text" id="bankname" name="bankname"  placeholder="Bank Name">
    </div>
</div>


  <div class="form-row">    
     <div class="form-group col-md-6">
     <label for="fileToUpload">Account Number<span></span></label>   
      <input  class="form-control form-control-lg border border-success" type="text" id="accountnumber" name="accountnumber" placeholder="Numerical values only">
    </div>
    
     <div class="form-group col-md-6">
     <label for="fileToUpload">IFSC Code<span></span></label>   
      <input  class="form-control form-control-lg border border-success" type="text" id="IFSCcode" name="IFSCcOde" placeholder="IFSC Code">
    </div>
   
   
</div>
 
 
 <label for="">
     <br>
   Would you like to Display your Collaboration With Orena Solutions on website ?</label>
 <div class="form-check">
    
   <input class="form-check-input" type="radio" name="displayyourcollaboration" value="Yes" id="displayyourcollaboration" required>
   <label class="form-check-label" for="flexRadioDefault1">
     Yes
   </label>
 </div>
 <div class="form-check">
   <input class="form-check-input" type="radio" name="flexRadioDefault" value="No" id="flexRadioDefault" >
   <label class="form-check-label" for="flexRadioDefault2">
     No
   </label>
</div>
 

                  <div class="">
                    <br>
                     
 <button class="btn btn-success btn-lg"  type="submit" value="submit" > &nbsp;SUBMIT&nbsp; <i class="fal fa-long-arrow-right"></i></button>
            </div>
           
            <div class="form-group">
                    
             </div>
             </div>

             <script>

              // onkeyup event will occur when the user
              // release the key and calls the function
              // assigned to this event
              function GetDetail(str) {
                if (str.length == 0) {
                  //document.getElementById("workemail").value = "";
                  //document.getElementById("expertname").value = "";
                  document.getElementById("personalemail").value = "";
                  return;
                }
                else {
          
                  // Creates a new XMLHttpRequest object
                  var xmlhttp = new XMLHttpRequest();
                  xmlhttp.onreadystatechange = function () {
          
                    // Defines a function to be called when
                    // the readyState property changes
                    if (this.readyState == 4 &&
                        this.status == 200) {
                      
                      // Typical action to be performed
                      // when the document is ready
                      var myObj = JSON.parse(this.responseText);
          
                      // Returns the response data as a
                      // string and store this array in
                      // a variable assign the value
                      // received to workemail input field
                      
                      document.getElementById
                        ("workemail").value = myObj[0];
                      
                      // Assign the value received to
                      // expertname input field
                        document.getElementById("expertname").value = myObj[1];
                        document.getElementById("contactnumber").value = myObj[2];
                        document.getElementById("whatsappnumber").value = myObj[3];
                        document.getElementById("add_ress").value = myObj[4];
                       // document.getElementById("country").value = myObj[5];
                        //document.getElementById("st_ate").value = myObj[6];
                        //document.getElementById("city").value = myObj[7];
                        document.getElementById("companyname").value = myObj[8];
                        document.getElementById("domainofexpertise").value = myObj[9];
                        document.getElementById("technology").value = myObj[10];
                        document.getElementById("operatingsystem").value = myObj[11];
                        document.getElementById("tools").value = myObj[12];
                        document.getElementById("hardware").value = myObj[13];
                        document.getElementById("mode").value = myObj[14];
                        document.getElementById("expectedfeesperhour").value = myObj[15];
                        document.getElementById("accountholdername").value = myObj[16];
                        document.getElementById("bankname").value = myObj[17];
                        document.getElementById("accountnumber").value = myObj[18];
                        document.getElementById("IFSCcode").value = myObj[19];
                        document.getElementById("displayyourcollaboration").value = myObj[20];


                        


                    }
                  };
          
                  // xhttp.open("GET", "filename", true);
                  xmlhttp.open("GET", "demo.php?personalemail=" + str, true);
                  
                  // Sends the request to the server
                  xmlhttp.send();
                }
              }
            </script>
           

        </body>
       
        </html>
         <?php include "footer.php" ?>



        