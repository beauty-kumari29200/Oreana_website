<!doctype html>
<html lang="zxx">

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

</head>
<body>
    
    <!-- body wrap start -->
    <div class=" ">

        <main>
          
            <!-- form start -->
            <section class="">
                <div class="container border border-secondary">
                    <div class="row">
                        <div class="col-12 ">
                            <div class="checkout_wrap ">
                                <div class="radio_wrap">
                                    <h3></h3>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <form class="form_wrap" method="Post"id='sectionForm' action="expert_data_submit.php" enctype="multipart/form-data" >
                                            <div class="row">
                                              
                                               
                                               <div class="col-xl-12 col-lg-12">
                                                    <label for="expert_name">Expert Name<span>*</span></label>
                                                    <input  class='border border-success form-control' type="text" id="expert_name" name="expert_name" placeholder="Full Name" >
                                                </div>
                                                
                                                 <div class="col-xl-12 col-lg-12">
                                                    <label for="Company_Institute">Company/Institute<span>*</span></label>
                                                    <input class='border border-success  form-control'  type="text" id="Company_Institute" name="Company_Institute" placeholder="Company/Institute" >
                                                </div>
                                                
                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="email">Email<span>*</span></label>
                                                    <input  class='border border-success form-control' type="email" id="validationCustom01" name="email" placeholder="Email" required>
                                                </div>

                                                
                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="mobile">Mobile Number<span>*</span></label>
                                                    <input  class='border border-success form-control  form-control' type="tel" id="mobile" name="mobile" placeholder="Mobile Number" required>
                                                </div>
                                                
                                                 
                                                <!--<div class="col-xl-6 col-lg-6">-->
                                                <!--     <select>-->
                                                          
                                                <!--          <option value="">Select</option> -->
                                                <!--          <option value="orena solutions">Orena Solutions</option> -->
                                                <!--          <option value="PLC & SCADA (Free Course)">PLC & SCADA (Free Course)</option>-->
                                                <!--          <option value="Embedded system (Free Course)">Embedded system (Free Course)</option>-->
                                                          
                                                <!--      </select>-->
                                                <!--</div>-->
                                                
                                                 <div class="col-xl-6 col-lg-6" name="hidden-panel2" id="hidden-panel2">
                                                    <label for="Domain_of_Expertise ">Domain of Expertise <span>*</span></label>
                                                    <input  class='border border-success  form-control' type="text" id="Domain_of_Expertise" name="Domain_of_Expertise" placeholder="Domain_of_Expertise"required >
                                                </div>
                                                
                                                
                                                
                                                <div class=" autocomplete col-xl-6 col-lg-6">
                                                <label for="Technical_skills_(Technology)">Technical Skills (Technology)*<span>(e.g. java, PHP, C++ etc.)</span></label>
                                                    <input  class='border border-success  form-control'  type="text" id="Technical_skills_Technology"  name="Technical_skills_Technology" placeholder="Technical Skills (Technology)" required>
                                                </div>
                                                
                                                
                                                 <div class="autocomplete col-xl-6 col-lg-6">
                                                     <br>
                                                    <label for="Technical_Skills_Operating_System">Technical Skills (Operating System)<span>(e.g., ,Linux,IOS,Android etc.)*</span></label>
                                                   <input class='border border-success  form-control' id="Technical_Skills_Operating_System" type="text" name="Technical_Skills_Operating_System" placeholder="Technical Skills Operating System" required>
                                                </div>      
                                                
                                                
                                                <div class=" autocomplete col-xl-6 col-lg-6">
                                                    <label for="Technical_Skills_(Tools)">Technical Skills (Tools) *<span>(e.g.CodeIgniter ,Laravel ,Symphony,Entity Framework etc.)</span></label>
                                                    <input  class='border border-success  form-control' type="text" id="Technical_Skills_Tools" name="Technical_Skills_Tools" placeholder="Technical Skills (Tools)" required>
                                                </div>
                                                
                                                
                                                
                                                               
                                                                                 
                                                <div class="autocomplete col-xl-6 col-lg-6">
                                                     <br>
                                                    <label for="Technical skills (Hardware)">Technical Skills (Hardware)<span>*</span></label>
                                                   <input class='border border-success  form-control' id="Technical_skills_Hardware" type="text" name="Technical_skills_Hardware" placeholder="Technical Skills (Hardware)" required>
                                                </div>
                                                
                                                 
                                                  
                                                
                                                <div class="col-xl-6 col-lg-6">
                                                     <br>
                                                    <label for="Non_Technical_Skills">Mention other Non-Technical Skills<span>*</span></label>
                                                    <input  class='border border-success  form-control' type="text" id="Non_Technical_Skills" name="Mention_Non_Technical_skills" placeholder="Mention other Non-Technical Skills" required>
                                                </div>
                                   
                                                 
                                                     <div class="col-xl-10 col-lg-10 form-control ">
                                                       <label for="Non-Technical skills *">Non-Technical Skills *<span></span></label>
                                                       <br>
                                                       <input  style=' height:20px; width:20px; 'type="checkbox" name='chkl[]' value="Content Writing" id="myCheck"  >
                                                       <label for="Content Writing">Content Writing</label>&nbsp;&nbsp;
                                                       <input  style=' height:20px; width:20px; 'type="checkbox" name='chkl[]' value="Customer Handling" id="myCheck" >
                                                       <label for="Customer Handling">Customer Handling</label>&nbsp;&nbsp;
                                                       <input  style=' height:20px; width:20px; 'type="checkbox"name='chkl[]' value="Community Building" id="myCheck" >
                                                       <label for="Community Building">Community Building</label>&nbsp;&nbsp;
                                                       <input  style=' height:20px; width:20px; 'type="checkbox" name='chkl[]'value="Digital Marketing" id="myCheck" >
                                                       <label for="Digital Marketing">Digital Marketing</label><br>
                                                       <input  style=' height:20px; width:20px; 'type="checkbox"name='chkl[]' value="Learning Capacity" id="myCheck" >
                                                       <label for="Learning Capacity">Learning Capacity</label>&nbsp;&nbsp;
                                                       <input  style=' height:20px; width:20px; 'type="checkbox"name='chkl[]' value="Presentation Skills" id="myCheck" >
                                                       <label for="Presentation Skills">Presentation Skills</label>&nbsp;&nbsp;
                                                       <input  style=' height:20px; width:20px; 'type="checkbox"name='chkl[]' value="Others" id="myCheck" >
                                                       <label for="Others">Others</label><br>
                                                                                      
                                                     </div> 
                                                     
                                                
                                                
                                                <div class="col-xl-6 col-lg-6">
                                                    <br>
                                                    <label for="fileToUpload">Upload Consent Letter <span>*</span></label>    
                                                    <input  class='border border-success  form-control' type="file" id="fileToUpload1" name="fileToUpload1" required>
                                                </div>
                                                
                                                <div class="col-xl-6 col-lg-6">
                                                    <br>
                                                    <label for="fileToUpload">Upload Profile Summary <span>*</span></label>    
                                                    <input  class='border border-success  form-control' type="file" id="fileToUpload"  name="fileToUpload" required>
                                                </div>

                                                   
                                                <div class="text-right ">
                                                 
													<button class="thm_btn thm_btn-black "  type="submit" value="submit" > Submit<i class="fal fa-long-arrow-right"></i></button>
                                                </div>

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
        

    </div>
    <!-- body wrap end -->
   
    <!-- jquery include -->
   
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/owl.carousel.min.js"></script>
    <script src="asset/js/metisMenu.min.js"></script>
    <script src="asset/js/wow.min.js"></script>
    <script src="asset/js/jquery.nice-select.min.js"></script>
    <script src="asset/js/jquery-ui.js"></script>
    <script src="asset/js/isotope.pkgd.min.js"></script>
    <script src="asset/js/imagesloaded.pkgd.min.js"></script>
    <script src="asset/js/jquery.magnific-popup.min.js"></script>
    <script src="asset/js/main.js"></script>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>
</head>     
<body>


<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
// var countries = ["C++","java",".NET"];
// var OS = ["Windows","Linux","Android"];

var Technical_skills_Hardware = ["Network Configuration","WAN/LAN","Network Security","Cloud Management"];
var Technical_Skills_Tools= ["codeIgniter", "Laravel", "Symphony", "Entity Framework"];
var Technical_Skills_Operating_System = ["Windows","Linux","Android"];
 var Technical_skills_Technology = ["c", "c++", "java", "php", ".Net framework" , "shift" , "Ruby" ,"pyhton", "sql", "perl", "javascript", "html", "css"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("Technical_skills_Technology"), Technical_skills_Technology);
autocomplete(document.getElementById("Technical_Skills_Operating_System"), Technical_Skills_Operating_System);
autocomplete(document.getElementById("Technical_Skills_Tools"), Technical_Skills_Tools);
autocomplete(document.getElementById("Technical_skills_Hardware"),Technical_skills_Hardware);
autocomplete(document.getElementById("Non_Technical_Skills"), Non_Technical_Skills);
</script>

</body>
</html>















