<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="asset/css/fontawesome.css">

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
    
                                    
                                <form class="form_wrap" method="Post"id='sectionForm' action="expert_data_submit.php" enctype="multipart/form-data">
                                  
                                    <div>
                                       <h4>Personal Details</h4>
                                        <hr style="height:1px;background: black;">
                                     </div>  
                                     
                                     
                                    <div class="form-group">
                                      <label for="expert_name">Expert Name<span>*</span></label>
                                      <input type="text" class="form-control form-control-lg border border-success" id="inputEmail4" name="expert_name" placeholder="Expert Name" required>
                                    </div>
                                   
                                   
                                
                                    
                                  
                                <div class="form-row">  
                                  <div class="form-group col-md-6">
                                     <label for="email">Personal Email<span>*</span></label>
                                    <input type="email" class="form-control form-control-lg border border-success" id="inputAddress" name="Personal_Email" placeholder=" Personal Email" required>
                                  </div>
                                  
                                   <div class="form-group col-md-6">
                                     <label for="email">Work Email<span>*</span></label>
                                    <input type="email" class="form-control form-control-lg border border-success" id="inputAddress" name="Work_Email" placeholder="Work Email" required>
                                  </div>
                                  
                                </div>
                                
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="Contect">Contact Number<span>*</span></label>
                                    <input type="tel" class="form-control form-control-lg border border-success" id="inputAddress2" name="Contect_Number" placeholder="Contect Number" required>
                                  </div>
                                  
                                  <div class="form-group col-md-6">
                                      <label for="mobile">Whatsapp Number<span>*</span></label>
                                    <input type="tel" class="form-control form-control-lg border border-success" id="inputAddress2" name="Whatsapp_Number" placeholder="Whatsapp Number" required>
                                  </div>
                                </div>  
                                 
                                  <div class="form-group">
                                      <label for="exampleFormControlTextarea1">Address<span></span></label>
                                     
                                      <textarea class="form-control form-control-lg border border-success" name='Address' placeholder="Address" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>
                                  
                                   <div class="container">
                                    <div class="row">
                                      <div class="col-sm-4">
                                       
                                        <label for="Country">Country<span>*</span></label>
                                        <select name="country" class="countries form-control border border-success" id="countryId">
                                      <option value="">Select Country</option>
                                  </select>
                                
                                      </div>
                                      <div class="col-sm-4">
                                        <label for="State">State<span>*</span></label>
                                        <select name="state" class="states form-control border border-success" id="stateId">
                                      <option value="">Select State</option>
                                  </select>
                                      </div>
                                      <div class="col-sm-4">
                                       <label for="City">City<span>*</span></label>    
                                        <select name="city" class="cities form-control border border-success" id="cityId">
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
                                      <br>
                                      <label for="Company_Institute">Company/Institute Name<span>*</span></label>
                                      <input type="text" class="form-control form-control-lg border border-success" id="inputPassword4" name="Company_Institute" placeholder="Company/Institute Name">
                               </div>
                                  
                               <div id="order-details-booking1" class=" autocomplete form-group ">
                                   
                                    <div class="row">
                                      
                                            <div class="  autocomplete  col s1">
                                                
                                            <label for="Domain_of_Expertise ">Domain of Expertise<span> <B class="material-icons1">Add one More </B></span></label>
                                                <input  class='form-control form-control-lg border border-success'  type="text" id="Domain_of_Expertise"  name="Domain_of_Expertise[]" placeholder="Domain of Expertise"  required>
                                            </div>
                                         
                                    </div>
                                </div>  
                 
                              <div class="form-row">  
                                
                                <div id="order-details-booking2" class=" autocomplete form-group col-md-6">
                                   
                                    <div class="row">
                                      
                                            <div class="  autocomplete  col s1">
                                                
                                             <label for="Technical_skills_(Technology)">Technical Skills (Technology)<span>(e.g. java, PHP, C++ etc.)*</span><B class="material-icons2">Add one More </B></span></label>
                                                <input  class='form-control form-control-lg border border-success'  type="text" id="Technical_skills_Technology"  name="Technical_skills_Technology[]" placeholder="Technical Skills (Technology)"  required>
                                            </div>
                                         
                                    </div>
                                </div>  
                                
                                <div id="order-details-booking3" class=" autocomplete form-group col-md-6">
                                   
                                    <div class="row">
                                      
                                            <div class="  autocomplete  col s1">
                                                
                                             
                                             <label for="Technical Skills Operating System">Technical Skills (Operating System)<span>(e.g.windows,Linux.)*<B class="material-icons3">Add one More </B></span></label>
                                             <input class='form-control form-control-lg border border-success' id="Operating_System" type="text" name="Operating_System[]" placeholder="Technical Skills (Operating System)" required>    
                                            </div>
                                         
                                    </div>
                                </div>
                                
                                
                                <div id="order-details-booking4" class=" autocomplete form-group col-md-6">
                                   
                                    <div class="row">
                                      
                                            <div class="  autocomplete  col s1">
                                                
                                             
                                           <label for="Technical_Skills_(Tools)">Technical Skills (Tools)<span>(e.g. CodeIgniter,Laravel,etc.)* <B class="material-icons4">Add one More </B></span></label>
                                           <input  class='form-control form-control-lg border border-success' type="text" id="Technical_Skills_Tools" name="Technical_Skills_Tools[]" placeholder="Technical Skills (Tools)" required>
                                            </div>
                                         
                                    </div>
                                </div>
                                
                                <div id="order-details-booking5" class=" autocomplete form-group col-md-6">
                                   
                                    <div class="row">
                                      
                                            <div class="  autocomplete  col s1">
                                                
                                             
                                          <label for="Technical skills (Hardware)">Technical Skills (Hardware)<span>(e.g Connecting networks)<B class="material-icons5">Add one More</B></span></label>
                                           <input class='form-control form-control-lg border border-success' id="Technical_skills_Hardware" type="text" name="Technical_skills_Hardware[]" placeholder="Technical Skills (Hardware)" required>
                                            </div>
                                         
                                    </div>
                                </div>
                               </div> 
                             
                             <div class="">
                                 
                               
                                   
                                   <label for="Non-Technical skills *">Non-Technical Skills *<span></span></label>
                                   <br>
                                   <div class=' border border-success rounded p-2'>
                                       
                                   <input  style=' height:20px; width:20px; 'type="checkbox" name='chkl[]' value="Content Writing" id="myCheck"  >
                                   <label for="Content Writing">Content Writing</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   <input  style=' height:20px; width:20px; 'type="checkbox" name='chkl[]' value="Customer Handling" id="myCheck" >
                                   <label for="Customer Handling">Customer Handling</label>&nbsp;&nbsp;
                                   <input  style=' height:20px; width:20px; 'type="checkbox"name='chkl[]' value="Community Building" id="myCheck" >
                                   <label for="Community Building">Community Building</label>&nbsp;&nbsp;
                                   <input  style=' height:20px; width:20px; 'type="checkbox" name='chkl[]'value="Digital Marketing" id="myCheck" >
                                   <label for="Digital Marketing">Digital Marketing</label><br>
                                   <input  style=' height:20px; width:20px; 'type="checkbox"name='chkl[]' value="Learning Capacity" id="myCheck" >
                                   <label for="Learning Capacity">Learning Capacity</label>&nbsp;&nbsp;
                                   <input  style=' height:20px; width:20px; 'type="checkbox"name='chkl[]' value="Presentation Skills" id="myCheck" >
                                   <label for="Presentation Skills">Presentation Skills</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                   
                                   <input style=' height:20px; width:20px; 'type="checkbox" name="answer" value="other"> Other
                                   <br>
                                   
                                  </div>                              
                                 
                              </div> 
                              
                              
                                <div class="form-group">
                                    <br>
                                    <input class='form-control form-control-lg border border-success' style="display:none;" type="text"  id="otherAnswer" placeholder="Mention other Non-Technical Skills" >
                                    <br>
                                   
                                </div>
                                                
                              
                                  
                                <div>
                                    <h4>Your Association With Orena Solutions</h4>
                                    <hr style="height:1px;background: black;">
                                </div>        
                                  
                               <div class="form-group ">
                                      <br>
                                     <label for="work_type">Expert Association As <span>*</span></label>
                                        <div class="filter">
                                             <select class='form-control form-control-lg border border-success' name="Expert_Association_As" id="work_type" required>
                                              <option value="">Select</option>    
                                              <option value="Interviewer">Interviewer</option> 
                                              <option value="Trainer">Trainer</option>
                                              <option value="Freelancers Projects">Freelancers Projects</option>
                                             
                                            </select>
                                        </div> 
                               </div>  
                                  
                               <div class="form-group ">
                                      <br>
                                     <label for="work_type">Mode<span>*</span></label>
                                        <div class="filter">
                                             <select class='form-control form-control-lg border border-success' name="mode_of" id="work_type" required>
                                              <option value="">Select</option>
                                              <option value="Online">Online</option> 
                                              <option value="Offline">Offline</option>
                                              <option value="Both">Both</option>
                                             
                                            </select>
                                        </div> 
                               </div>  
                               
                               <!--<div class="form-group ">-->
                               <!--         <label for="Mode1">Mode<span>*</span></label>-->
                               <!--         <div class="filter">-->
                               <!--              <select class='form-control form-control-lg border border-success' name="mod_of" id="mod_of" required>-->
                               <!--               <option value="">Select</option> -->
                               <!--               <option value="Online">Online</option> -->
                               <!--               <option value="Offline">Offline</option>-->
                               <!--               <option value="Both">Both</option>-->
                               <!--             </select>-->
                               <!--         </div>-->
                               <!--</div>  -->
                                  
                               
                                
                               <div class="form-group ">
                               <div id="order-details-booking">
                                                   
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3">
                                    <label for="work_type">Days<span>*</span></label>
                                    <div class="filter">
                                         <select class='form-control form-control-lg border border-success' name="Days[]" id="mode" required>
                                          <option value="Monday">Monday</option>
                                                <option value="Tuesday">Tuesday</option>
                                                <option value="Wednesday">Wednesday</option>
                                                <option value="Thursday">Thursday</option>
                                                <option value="Friday">Friday</option>
                                                <option value="Saturday">Saturday</option>
                                                <option value="Sunday">Sunday</option>
                                        </select>
                                    </div>
                                </div> 
                                
                                
                                <div class="form-group col-md-3">
                                    <label for="work_type">Time Slot<span>*</span></label>
                                    <input class='form-control form-control-lg border border-success'  type="time" id="appt" name="Time1[]" >
                                </div> 
                                
                                
                                 <div class="form-group col-md-1">
                                    <label for="work_type"><span></span></label>
                                    <h5>TO</h5>    
                                </div> 
                                
                                
                                <div class="form-group col-md-3">
                                    <label for="work_type">Time Slot<span>*</span></label>
                                    <input class='form-control form-control-lg border border-success' type="time" id="appt" name="Time2[]" >
                                </div> 
                                
                                        <div class="col s1">
                                            <B class="material-icons">Add one More Day</B>
                                        </div>
                                    </div>
                            </div> 
                            </div>
                            
                             <div class="form-row">
                                 
                                 <div class="form-group col-md-6">
                                     <label for="email">Expected Fees Per Hour<span>*</span></label>
                                    <input type="text" class="form-control form-control-lg border border-success" id="inputAddress" name="Expected_Fees_Per_Hour" placeholder="Expected Fees Per Hour" required>
                                  </div>
                                  
                                   <div class="form-group col-md-6">
                                     <label for="fileToUpload">Upload Consent Letter <span><a style="text-decoration:none"   href='https://orena.solutions/temp/Consent%20Letter/Consent.doc' target="_blank">Reference</a></span></label>    
                                     <input  class="form-control form-control-lg border border-success" type="file" id="fileToUpload1" name="fileToUpload1" required>
                                  </div>
                              </div>
                                
                                <div class="form-row">  
                                   <div class="form-group col-md-6">
                                     <label for="fileToUpload">Upload Photo <span>*</span></label>   
                                     <input  class="form-control form-control-lg border border-success" type="file" id="fileToUpload2" name="fileToUpload_2" required>
                                  </div>
                                  
                                   <div class="form-group col-md-6">
                                     <label for="fileToUpload">Upload Profile Summary <span><a style="text-decoration:none"  href='https://orena.solutions/temp/Profile%20Summary/profile.pdf' target="_blank" >Reference</a></span></label>   
                                     <input  class="form-control form-control-lg border border-success" type="file" id="fileToUpload" name="fileToUpload" required>
                                  </div>
                                  <br>
                                  <br>
                              </div>
                            
                               
                               <div>
                                   <br>
                                   <br>
                                    <h4>Bank Details</h4>
                                    <hr style="height:1px;background: black;">
                                </div> 
                                
                              
                                   <div class="form-group">
                                     <label for="fileToUpload">Name/Account Holder Name<span>(To be Printed on Cheque)</span></label>   
                                     <input  class="form-control form-control-lg border border-success" type="text" id="name1" name="Account_Name"  placeholder="Name/Account Holder Name">
                                  </div>
                                  
                                   <div class="form-row">   
                                   
                                   <div class="form-group col-md-4">
                                    <label for="fileToUpload">Bank Name<span></span></label>   
                                     <input  class="form-control form-control-lg border border-success" type="text" id="Bank_Name" name="Bank_Name"  placeholder="Bank Name">
                                   </div>
                                   
                                    <div class="form-group col-md-4">
                                    <label for="fileToUpload">Account Number<span></span></label>   
                                     <input  class="form-control form-control-lg border border-success" type="text" id="Account_Number" name="Account_Number"  placeholder="Account Number">
                                   </div>
                                   
                                    <div class="form-group col-md-4">
                                    <label for="fileToUpload">IFSC Code<span></span></label>   
                                     <input  class="form-control form-control-lg border border-success" type="text" id="IFSC_COde" name="IFSC_COde" placeholder="IFSC Code">
                                   </div>
                                  
                                  
                              </div>
                                
                                
                                <label for="">
                                    <br>
                                  Would you like to Display your Collaboration With Orena Solutions on website ?</label>
                                <div class="form-check">
                                   
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" >
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Yes
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
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
                            
                           </form>
                                    
 
 
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
    </div>                   
</body>
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




<script>
    function ajaxCall() {
    this.send = function(data, url, method, success, type) {
        type = type||'json';
        var successRes = function(data) {
            success(data);
        }

        var errorRes = function(e) {
            console.log(e);
        }
        jQuery.ajax({
            url: url,
            type: method,
            data: data,
            success: successRes,
            error: errorRes,
            dataType: type,
            timeout: 60000
        });

    }

}

function locationInfo() {
    var rootUrl = "https://geodata.solutions/api/api.php";
    //now check for set values
    var addParams = '';
    if(jQuery("#gds_appid").length > 0) {
        addParams += '&appid=' + jQuery("#gds_appid").val();
    }
    if(jQuery("#gds_hash").length > 0) {
        addParams += '&hash=' + jQuery("#gds_hash").val();
    }

    var call = new ajaxCall();

    this.confCity = function(id) {
        var url = rootUrl+'?type=confCity&countryId='+ jQuery('#countryId option:selected').attr('countryid') +'&stateId=' + jQuery('#stateId option:selected').attr('stateid') + '&cityId=' + id;
        var method = "post";
        var data = {};
        call.send(data, url, method, function(data) {
        });
    };


    this.getCities = function(id) {
        jQuery(".cities option:gt(0)").remove();
        var stateClasses = jQuery('#cityId').attr('class');

        var cC = stateClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }
        var url = rootUrl+'?type=getCities&countryId='+ jQuery('#countryId option:selected').attr('countryid') +'&stateId=' + id + addParams + addClasses;
        var method = "post";
        var data = {};
        jQuery('.cities').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.cities').find("option:eq(0)").html("Select City");
            if(data.tp == 1){
                var listlen = Object.keys(data['result']).length;

                if(listlen > 0)
                {
                    jQuery.each(data['result'], function(key, val) {

                        var option = jQuery('<option />');
                        option.attr('value', val).text(val);
                        jQuery('.cities').append(option);
                    });
                }
                else
                {
                    var usestate = jQuery('#stateId option:selected').val();
                    var option = jQuery('<option />');
                    option.attr('value', usestate).text(usestate);
                    option.attr('selected', 'selected');
                    jQuery('.cities').append(option);
                }

                jQuery(".cities").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };

    this.getStates = function(id) {
        jQuery(".states option:gt(0)").remove();
        jQuery(".cities option:gt(0)").remove();
        //get additional fields
        var stateClasses = jQuery('#stateId').attr('class');

        var cC = stateClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }
        var url = rootUrl+'?type=getStates&countryId=' + id + addParams  + addClasses;
        var method = "post";
        var data = {};
        jQuery('.states').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.states').find("option:eq(0)").html("Select State");
            if(data.tp == 1){
                jQuery.each(data['result'], function(key, val) {
                    var option = jQuery('<option />');
                    option.attr('value', val).text(val);
                    option.attr('stateid', key);
                    jQuery('.states').append(option);
                });
                jQuery(".states").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };

    this.getCountries = function() {
        //get additional fields
        var countryClasses = jQuery('#countryId').attr('class');

        var cC = countryClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }

        var presel = false;
        var iip = 'N';
        jQuery.each(cC, function( index, value ) {
            if (value.match("^presel-")) {
                presel = value.substring(7);

            }
            if(value.match("^presel-byi"))
            {
                var iip = 'Y';
            }
        });


        var url = rootUrl+'?type=getCountries' + addParams + addClasses;
        var method = "post";
        var data = {};
        jQuery('.countries').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.countries').find("option:eq(0)").html("Select Country");

            if(data.tp == 1){
                if(presel == 'byip')
                {
                    presel = data['presel'];
                    console.log('2 presel is set as ' + presel);
                }


                if(jQuery.inArray("group-continents",cC) > -1)
                {
                    var $select = jQuery('.countries');
                    console.log(data['result']);
                    jQuery.each(data['result'], function(i, optgroups) {
                        var $optgroup = jQuery("<optgroup>", {label: i});
                        if(optgroups.length > 0)
                        {
                            $optgroup.appendTo($select);
                        }

                        jQuery.each(optgroups, function(groupName, options) {
                            var coption = jQuery('<option />');
                            coption.attr('value', options.name).text(options.name);
                            coption.attr('countryid', options.id);
                            if(presel) {
                                if (presel.toUpperCase() == options.id) {
                                    coption.attr('selected', 'selected');
                                }
                            }
                            coption.appendTo($optgroup);
                        });
                    });
                }
                else
                {
                    jQuery.each(data['result'], function(key, val) {
                        var option = jQuery('<option />');
                        option.attr('value', val).text(val);
                        option.attr('countryid', key);
                        if(presel)
                        {
                            if(presel.toUpperCase() ==  key)
                            {
                                option.attr('selected', 'selected');
                            }
                        }
                        jQuery('.countries').append(option);
                    });
                }
                if(presel)
                {
                    jQuery('.countries').trigger('change');
                }
                jQuery(".countries").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };

}

jQuery(function() {
    var loc = new locationInfo();
    loc.getCountries();
    jQuery(".countries").on("change", function(ev) {
        var countryId = jQuery("option:selected", this).attr('countryid');
        if(countryId != ''){
            loc.getStates(countryId);
        }
        else{
            jQuery(".states option:gt(0)").remove();
        }
    });
    jQuery(".states").on("change", function(ev) {
        var stateId = jQuery("option:selected", this).attr('stateid');
        if(stateId != ''){
            loc.getCities(stateId);
        }
        else{
            jQuery(".cities option:gt(0)").remove();
        }
    });

    jQuery(".cities").on("change", function(ev) {
        var cityId = jQuery("option:selected", this).val();
        if(cityId != ''){
            loc.confCity(cityId);
        }
    });
});

</script>
<html>
  